<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerformerController extends Controller
{
    public function performer()
    {
        $users = User::where('user_type', 'performer')->get();
        return view('admin.performer', ['user' => $users]);
    }

    public function create()
    {
        $skills = Skill::all();
        return view('admin.add-performer', ['skill' => $skills]);
    }

    public function store_performer(Request $request)
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
            'skills' => $request->skills,
            'profile_photo' => $profilePhoto,
            'address' => $request->address,
            'user_type' => $request->user_type,
        ]);

        return redirect('performer');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $skills = Skill::all();
        return view('admin.editperformer', ['user' => $user, 'skill' => $skills]);
    }

    public function update_performer(Request $request, $id)
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
            'gender' =>$request->gender,
            'skills' => $request->skills,
            'address' => $request->address,
            
        ]);

        $user->save();

        return redirect('performer');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('performer');
    }
}
