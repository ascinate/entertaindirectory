<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;

class AdverController extends Controller
{
    public function ad()
    {
        $ads = Ad::all();
        return view('admin.ad', ['ads' => $ads]);
    }
    
    public function create()
    {
        $user = User::all();
        return view('admin.add-ad', ['user' => $user]);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagePath = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads'), $imagePath);
        }

        Ad::create([
            'ad_title' => $request->ad_title,
            'ad_size' => $request->ad_size,
            'ad_position' => $request->ad_position,
            'ad_page' => $request->ad_page,
            'image' => $imagePath,
            'ad_price' => $request->ad_price,
            'ad_duration' => $request->ad_duration,
            'description' => $request->description,
        ]);

        return redirect('ad');
    }

    public function edit($id)
    {

        $ad = Ad::findOrFail($id);
        $user = User::all();
        return view('admin.editad', ['ad' => $ad, 'user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $ad = Ad::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagePath = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads'), $imagePath);
            if ($ad->image && file_exists(public_path($ad->image))) {
                unlink(($ad->image));
            }
    
            $ad->image = $imagePath;
        }
        $ad->update([
            'ad_title' => $request->ad_title,
            'ad_size' => $request->ad_size,
            'ad_position' => $request->ad_position,
            'ad_page' => $request->ad_page,
            'ad_price' => $request->ad_price,
            'ad_duration' => $request->ad_duration,
            'description' => $request->description,
            'image' => $ad->image, 
        ]);

        return redirect('ad');
    }

    public function destroy($id)
    {
        $ad = Ad::findOrFail($id);
        $ad->delete();

        return redirect()->back()->with('success', 'Ad deleted successfully!');
    }
}
