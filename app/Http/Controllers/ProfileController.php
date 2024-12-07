<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = User::all();
        return view('profile', ['user' => $user]);
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|string|max:15',
            'gender' => 'required|string|in:Male,Female',
            'artist_type' => 'required|string',
            'skills' => 'nullable|array',
            'location' => 'required|string',
            'description' => 'nullable|string',
            'address' => 'nullable|string',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'cover_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Find user by ID
        $user = User::findOrFail($id);

        // Update user details
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->artist_type = $request->artist_type;
        $user->skills = implode(',', $request->skills ?? []); 
        $user->location = $request->location;
        $user->description = $request->description;
        $user->address = $request->address;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->linkedin = $request->linkedin;

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures');
            $user->profile_picture = $path;
        }

        if ($request->hasFile('cover_picture')) {
            $path = $request->file('cover_picture')->store('cover_pictures');
            $user->cover_picture = $path;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);
        $user = User::findOrFail($id);

        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'The old password is incorrect.']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully!');
    }
}
