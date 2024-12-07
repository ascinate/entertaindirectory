<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\User;

class UserEventController extends Controller
{
    
    public function create()
    {
        return view('user_event.create'); 
    }

    public function store(Request $request)
    {
            $request->validate([
            'event_title' => 'required|string|max:255',
            'event_type' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|string',
            'media_files' => 'nullable|array', 
            'media_files.*' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        $media_files = '';
        if ($request->hasFile('media_files')) {
            $imagePaths = [];

            foreach ($request->file('media_files') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move('uploads', $imageName);
                $imagePaths[] = $imageName;
            }
            $media_files = implode(',', $imagePaths);
        }

        $event = new Event([
            'artistid' => auth()->user()->id, 
            'event_title' => $request->input('event_title'),
            'event_type' => $request->input('event_type'),
            'media_files' => $media_files,
            'location' =>$request->input('location'),
            'date' => $request->input('date'),
            'description' => $request->input('description'),
        ]);

      
        $event->save();

        return redirect('userevent');
    }

    public function userevent(Request $request)
    {
        $user = Auth::user();  
        $event = Event::with('user')->where('artistid', Auth::id())->get();
        return view('userevent', ['user' => $user, 'event' => $event]); 
    }

    public function edit_event($id)
    {
        $event = Event::findOrFail($id);
        $user = Auth::user();  
        return view('edit-event', [ 'user' => $user, 'event' => $event]); 
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

       

        $event->event_title = $request->input('event_title');
        $event->event_type = $request->input('event_type');
        $event->language = $request->input('language');
        $event->location = $request->input('location');
        $event->date = $request->input('date');
        $event->description = $request->input('description');
        $media_files = '';
        if ($request->hasFile('media_files')) {
            $imagePaths = [];

            foreach ($request->file('media_files') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move('uploads', $imageName);
                $imagePaths[] = $imageName;
            }
            $media_files = implode(',', $imagePaths);
        }
        $event->media_files =$media_files;

        $event->save();

        return redirect('userevent');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if ($event->media_files) {
            \Storage::disk('public')->delete($event->media_files); 
        }

        $event->delete();
        return redirect()->back()->with('success', 'Event deleted successfully!');
    }

    public function eventlist($artistId)
    {
        $events = Event::where('artistid', $artistId)->get(); 
        return view('eventlist', ['events' => $events]); 
    }

    public function show($id)
    {
        $event = Event::findOrFail($id); 
        return view('event-details', ['event' => $event]); 
    }
}
