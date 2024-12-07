<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GeneralController extends Controller
{
    public function general($id)
    {
        $user = Auth::user();
        $nameParts = explode(' ', $user->name, 2);
        $firstName = $nameParts[0];
        $lastName = $nameParts[1] ?? '';
        $countries = Country::all();
    
        return view('general', [
            'user' => $user,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'countries' => $countries,
        ]);
    }
    public function updateGeneral(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $countryName = $request->input('country_name');
        $stateName = $request->input('state_name');
        $cityName = $request->input('city_name');
        $address = $request->input('address');

        $newPassword = $request->input('password.new_password');
    
        if (empty($firstName) || empty($lastName)) {
            return redirect()->back()->with('error', 'First Name and Last Name are required.');
        }
    
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Please provide a valid email address.');
        }
    
        $user->name = $firstName . ' ' . $lastName;
        $user->email = $email;
        $user->phone = $phone;
        $user->country = $countryName;
        $user->state = $stateName;
        $user->city = $cityName;
        $user->address = $address;
    
        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $profilePath = time() . '_' . $file->getClientOriginalName();
            $file->move('profile_photo', $profilePath);
            $user->profile_photo = $profilePath;
        }
    
        if ($request->filled('password.new_password')) {
            $user->password = \Hash::make($newPassword);
        }
        $user->save();
        return redirect()->back()->with('success', 'Profile updated successfully!');

    }
}
