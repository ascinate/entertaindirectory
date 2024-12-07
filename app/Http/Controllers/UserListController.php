<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserListController extends Controller
{
    public function user()
    {
        $users = User::where('user_type', 'General')->get();
        return view('admin.user', ['user' => $users]);
    }

    public function create()
    {
        $skills = Skill::all();
        return view('admin.adduser', ['skill' => $skills]);
    }

    public function store(Request $request)
    {
        $profilePhoto = null;

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $profilePhoto = time() . '_' . $file->getClientOriginalName();
            $file->move('profile_photo', $profilePhoto);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'gender' =>$request->gender,
            'profile_photo' => $profilePhoto,
            'address' => $request->address,
            'user_type' => $request->user_type,
        ]);

        return redirect('user');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $skills = Skill::all();
        return view('admin.edituser', ['user' => $user, 'skill' => $skills]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $profilePhoto = time() . '_' . $file->getClientOriginalName();
            $file->move('profile_photo', $profilePhoto);
            $user->profile_photo = $profilePhoto;
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' =>$request->gender,
            
        ]);

        return redirect('user');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('user')->with('success', 'User deleted successfully!');
    }
}
