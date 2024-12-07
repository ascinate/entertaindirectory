<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event(){
        $event = Event::with('user')->get(); 
        return view('admin/event', ['event' => $event]);
    }

    public function create(){
        $event = Event::all(); 
        $user = User::all(); 
        return view('admin.addevent', ['event' => $event, 'user' => $user,]);
    }

    public function store(Request $request){

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

        Event::create([
        'artistid' => $request->artistid,
        'event_title' => $request->input('event_title'),
        'event_type' => $request->input('event_type'),
        'location' => $request->input('location'),
        'date' => $request->input('date'),
        'description' => $request->input('description'),
        'media_files' => $media_files,
        ]);

        return redirect('event');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $user = User::all(); 
        return view('admin.editevent', ['event' => $event, 'user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        
        $event = Event::findOrFail($id);

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

            $event->update([
            'artistid' => $request->artistid,
            'event_title' => $request->event_title,
            'event_type' => $request->event_type,
            'location' => $request->location,
            'date' => $request->date,
            'description' => $request->description,
            'media_files' => $media_files,
        ]);

        $event->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('event');
    }
}
