<?php

namespace App\Http\Controllers;

use App\Models\Adschedule;
use App\Models\Ad;
use App\Models\Adposition;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function schedule()
{
    $schedule= Adschedule::all(); 
    return view('admin/schedule', ['schedule' => $schedule,]); 
}

    public function create()
{
    $schedule= Adschedule::all();
    $ad = Ad::all();  
    $position = Adposition::all(); 
    return view('admin.addschedule', ['schedule' => $schedule, 'ad' => $ad, 'position'=>$position]); 
}

public function store(Request $request)
{
    

    Adschedule::create([
        'ad_id' => $request->ad_id,
        'position_id' => $request->position_id,
        'start_time' => $request->input('start_time'),
        'end_time' => $request->input('end_time'),
        'status' => $request->input('status'),
    ]);

    return redirect()->route('schedule.create')->with('success', 'Campaign added successfully!');
}

public function edit($id)
    {
        $schedule = Adschedule::findOrFail($id); 
        $ad = Ad::all(); 
        $position = Adposition::all(); 
        return view('admin.editschedule', ['schedule' => $schedule, 'ad' => $ad, 'position'=>$position]);
    }
    
    public function update(Request $request, $id)
    {
        

        $schedule = Adschedule::findOrFail($id); 
        $schedule->update([
        'ad_id' => $request->ad_id,
        'position_id' => $request->position_id,
        'start_time' => $request->input('start_time'),
        'end_time' => $request->input('end_time'),
        'status' => $request->input('status'),
        ]);

        return redirect()->route('editschedule',  ['id' => $schedule->id])->with('success', 'Campaign updated successfully!');
    }

    public function destroy($id)
    {
        $schedule = Adschedule::findOrFail($id); 
        $schedule->delete(); 
        return redirect()->back()->with('success', 'Campaign deleted successfully!');
    }

}
