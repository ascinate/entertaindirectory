<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function adminlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = DB::table('admins')
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if ($admin) {
            // Set the session
            $request->session()->put('adminuser', $admin->email);
            return redirect('admin/dashboard');
        }

        return redirect('admin/login')->with('error', 'Invalid email or password.');
    }

    public function dashboard(Request $request)
    {
        if (!$request->session()->has('adminuser')) {
            return redirect('admin/login')->with('error', 'Please log in to access the dashboard.');
        }
        return view('admin.dashboard');
    }


    public function logout()
    {
        Auth::logout();
        session()->flush(); 
        return view('admin/adminlogin'); 
    }


}

