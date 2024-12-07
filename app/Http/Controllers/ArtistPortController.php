<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistPortController extends Controller
{
    public function create()
    {
        $user = Auth::user(); 
        return view('add-portfolio', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'media_type' => 'required|in:url,mp3,picture',
            'urladdress' => 'nullable|url',
            'media_files' => 'nullable|file|mimes:mp3,jpg,jpeg,png,gif|max:10240',
            'description' => 'required|string|max:500',
        ]);

        
        $mediaFiles = null;

        if ($request->media_type == 'url') {
            $mediaFiles = $request->urladdress;
        } 
        else if($request->media_type == 'picture')
        {
             if ($photo = $request->file('photo_files')) {
                 $destinationPath = 'uploads/images/';
                 $mediaFiles = time() . '_' . $photo->getClientOriginalName();
                 $photo->move($destinationPath, $mediaFiles);
                 
             }
        }
        else if($request->media_type == 'mp3')
        {
                if ($audio = $request->file('media_files')) {
                 $destinationPath = 'uploads/audio/';
                 $mediaFiles = time() . '_' . $audio->getClientOriginalName();
                 $audio->move($destinationPath, $mediaFiles);
                }
        }
        
 
        Portfolio::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'media_type' => $request->media_type,
            'media_files' => $mediaFiles,
            'description' => $request->description,
            'post_date' => now(),
        ]);

        return redirect('portfolio-list');
    }


    public function portfolio()
    {
        $user = Auth::user();
        $portfolios = Portfolio::with('user')->where('user_id', Auth::id())->get();
        return view('portfolio-list', ['portfolios' => $portfolios, 'user' => $user]);
    }

    public function edit($id)
    {
        $user = Auth::user(); 
        $portfolio = Portfolio::findOrFail($id);
        return view('edit-portfolio', ['user' => $user, 'portfolio' => $portfolio]);
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $mediaFiles = $portfolio->media_files;

        if ($request->media_type === 'url') {
            $mediaFiles = $request->urladdress;
        } 

        elseif ($request->hasFile('media_files') || $request->hasFile('photo_files')) {
            if ($portfolio->media_type === 'mp3' && file_exists(public_path('uploads/audio/' . $mediaFiles))) {
                unlink('uploads/audio/' . $mediaFiles);
            } 
            elseif ($portfolio->media_type === 'picture' && file_exists(public_path('uploads/images/' . $mediaFiles))) {
                unlink('uploads/images/' . $mediaFiles);
            }

            $file = $request->file('media_files');
            $photo = $request->file('photo_files');
            $mediaFiles = time() . '_' . $file->getClientOriginalName();

            if ($request->media_type === 'mp3') {
                $file->move('uploads/audio', $mediaFiles);
            } elseif ($request->media_type === 'picture') {
                $photo->move('uploads/images', $mediaFiles);
            }
        }

        $portfolio->update([
            'title' => $request->title,
            'media_type' => $request->media_type,
            'media_files' => $mediaFiles,
            'description' => $request->description,
            'post_date' => now(),
        ]);
         
        $portfolio->save();
        return redirect('portfolio-list');
    }


    public function delete($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        if ($portfolio->media_files && file_exists(public_path('uploads/' . $portfolio->media_type . '/' . $portfolio->media_files))) {
            unlink(public_path('uploads/' . $portfolio->media_type . '/' . $portfolio->media_files));
        }

        $portfolio->delete();

        return redirect()->back()->with('success', 'Portfolio deleted successfully.');
    }


    public function addPortfolio()
    {
        $user = Auth::user(); 
        return view('add-portfolio', [
            'user' => $user,  
        ]);
    }

    public function listing_details()
    {
        $portfolio = portfolio::with('user')->get();
        return view('listing-details', ['portfolio' => $portfolio]);
    }



}
