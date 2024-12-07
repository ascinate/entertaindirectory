<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        echo 'hello'; exit();
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = DB::table('users')
                    ->where('email', $request->email)
                    ->first();

        if ($user && Hash::check($request->password, $user->password)) {

            $request->session()->put('user', $user->email);
            return redirect('dashboard');
        } else {

            return redirect('login')->with('error', 'Invalid email or password');
        }
    }

    public function dashboard(Request $request)
    {
        $email = $request->session()->get('user'); // Get the user's email from the session

        $user = DB::table('users')->where('email', $email)->first(); // Fetch user details

        return view('dashboard', ['user' => $user]); // Pass user data to the view
    }


    public function logout(Request $request)
    {
        $request->session()->forget('id');
        return redirect('/login');
    }
}
