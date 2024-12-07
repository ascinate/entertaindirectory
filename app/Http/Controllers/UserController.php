<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use App\Models\Review;
use App\Models\Country;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|min:5',
            'user_type' => 'required|string|max:50',
        ]);

        $user = User::create([
            'name' => $request->input('firstname') . ' ' . $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'user_type' => $request->input('user_type'),
        ]);

        if ($user) {
            Session::put('user_id', $user->id);
            Session::put('user_email', $user->email);
            Session::put('user_name', $user->name);

            Auth::loginUsingId($user->id);
            if ($user->user_type === 'Performer') {
                return redirect()->route('profile', ['id' => $user->id]);
            } elseif ($user->user_type === 'General') {
                return redirect()->route('general', ['id' => $user->id]);
            }
        }

        return redirect()->back()->with('error', 'Unable to register user.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials))
        {
            $user = Auth::user(); // Get the authenticated user

            // Store session data
            Session::put('user_id', $user->id);
            Session::put('user_email', $user->email);
            Session::put('user_name', $user->name);

            // Redirect based on user type
            if ($user->user_type === 'Performer') {
                return redirect()->route('profile', ['id' => $user->id]);
            } elseif ($user->user_type === 'General') {
                return redirect()->route('general', ['id' => $user->id]);
            }
        }
        else
        {
            return redirect('login')->with('error', 'Invalid email or password');
        }
    }

    public function dashboard(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('login')->with('error', 'You must be logged in to view the dashboard.');
        }
        return view('dashboard', ['user' => $user]);
    }

    public function create_event(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('login')->with('error', 'You must be logged in to view the dashboard.');
        }
        $countries = Country::all();

        return view('create-event', ['user' => $user, 'countries' => $countries]);
    }
    public function userevent(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('login')->with('error', 'You must be logged in to view the dashboard.');
        }
        return view('userevent', ['user' => $user]);
    }
    public function message(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('login')->with('error', 'You must be logged in to view the dashboard.');
        }
        return view('message', ['user' => $user]);
    }

    public function profile($id)
    {
        $user = Auth::user();
        $skill = Skill::all();
        $nameParts = explode(' ', $user->name, 2);
        $firstName = $nameParts[0];
        $lastName = $nameParts[1] ?? '';
        $countries = Country::all();

        return view('profile', [
            'user' => $user,
            'skill' => $skill,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'countries' => $countries,
        ]);
    }
    public function updateProfile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $email = $request->input('email');
        $about_me = $request->input('about_me');
        $phone = $request->input('phone');
        $currency = $request->input('currency');
        $userType = $request->input('user_type');
        $artistType = $request->input('artist_type');
        $event_cost = $request->input('event_cost');
        $skills = $request->input('skill', []);
        $countryName = $request->input('country_name');
        $stateName = $request->input('state_name');
        $cityName = $request->input('city_name');
        $address = $request->input('address');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $linkedin = $request->input('linkedin');

        $newPassword = $request->input('password.new_password');

        if (empty($firstName) || empty($lastName)) {
            return redirect()->back()->with('error', 'First Name and Last Name are required.');
        }

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Please provide a valid email address.');
        }

        $user->name = $firstName . ' ' . $lastName;
        $user->email = $email;
        $user->about_me = $about_me;
        $user->phone = $phone;
        $user->currency = $currency;
        $user->user_type = $userType;
        $user->artist_type = $artistType;
        $user->event_cost = $event_cost;
        $user->skills = implode(',', $skills);
        $user->country = $countryName;
        $user->state = $stateName;
        $user->city = $cityName;
        $user->address = $address;
        $user->facebook = $facebook;
        $user->twitter = $twitter;
        $user->linkedin = $linkedin;

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $profilePath = time() . '_' . $file->getClientOriginalName();
            $file->move('profile_photo', $profilePath);
            $user->profile_photo = $profilePath;
        }

        if ($request->hasFile('cover_photo')) {
            $file = $request->file('cover_photo');
            $coverPath = time() . '_' . $file->getClientOriginalName();
            $file->move('cover_photo', $coverPath);
            $user->cover_photo = $coverPath;
        }

        if ($request->filled('password.new_password')) {
            $user->password = \Hash::make($newPassword);
        }
        $user->save();
        return redirect()->back()->with('success', 'Profile updated successfully!');

    }


    public function index()
    {
        $performers = User::where('user_type', 'performer')->get();
        return view('index', ['performers' => $performers]);
    }


    public function listing(Request $request)
    {
        $query = User::where('user_type', 'performer');

        if ($request->has('min_price') && $request->has('max_price')) {
            $query->whereBetween('event_cost', [$request->min_price, $request->max_price]);
        }

        if ($request->has('skills')) {
            $query->whereIn('skills', $request->skills);
        }

        if ($request->has('artist_type')) {
            $query->whereIn('artist_type', $request->artist_type);
        }

        if ($request->has('location')) {
            $location = $request->location;


            if (is_array($location)) {
                $query->whereIn('country', $location);
            } else {
                $query->where('country', $location);
            }
        }

        $performers = $query->get();

        $skills = Skill::all();
        $countries = Country::all();

        return view('listing', [
            'performers' => $performers,
            'skills' => $skills,
            'countries' => $countries,
        ]);
    }


    public function show($id)
    {
        $user = User::find($id);
      $portfolio = Portfolio::where('user_id', $id)->get();

      $recommendedArtists = User::where('id', '!=', $id)
        ->where(function ($query) use ($user) {
            $query->where('country', $user->country)
                  ->orWhere('skills', 'LIKE', '%' . $user->skills . '%');
        })
        ->get();

        $reviews = Review::where('performer_id', $id)
                     ->where('status', 'Y')
                     ->orderBy('id', 'desc')
                     ->get();

        $isGeneralUser = auth()->check() && auth()->user()->user_type === 'General';

    return view('listing-details', [
        'user' => $user,
        'portfolio' => $portfolio,
        'recommendedArtists' => $recommendedArtists,
        'reviews' => $reviews,
        'isGeneralUser' => $isGeneralUser,
    ]);
    }

    public function submitReview(Request $request)
    {
        $request->validate([
            'performer_id' => 'required|exists:users,id',
            'name' => 'required|string|max:200',
            'email' => 'required|email|max:200',
            'rating' => 'required|integer|between:1,5',
            'review' => 'required|string',
        ]);

        Review::create([
            'user_id' => auth()->id(),
            'performer_id' => $request->performer_id,
            'name' => $request->name,
            'email' => $request->email,
            'rating' => $request->rating,
            'review' => $request->review,
            'status' => 'Y',
        ]);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }

    public function search(Request $request)
    {
       $query = $request->input('query');
       $performers = User::where('user_type', 'Performer')
            ->where(function ($innerQuery) use ($query) {
                $innerQuery->where('name', 'LIKE', '%' . $query . '%')
                    ->orWhere('skills', 'LIKE', '%' . $query . '%')
                    ->orWhere('address', 'LIKE', '%' . $query . '%');

            })
                    ->get();

       if ($performers->isEmpty()) {
           $message = "The Performer was not found.";
       } else {
           $message = null;
       }
       $skills = Skill::all();
       return view('search', ['performers' => $performers,'message' => $message,'skills' => $skills]);
    }




    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }


}
