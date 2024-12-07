<?php

namespace App\Http\Controllers;

use App\Models\Adanalytic;
use App\Models\Ad;
use App\Models\Adposition;
use Illuminate\Http\Request;

class AnalyticController extends Controller
{
    /**
     * Display a listing of the analytics.
     */
    public function analytic()
    {
        $analytics = Adanalytic::all();
        return view('admin/analytic', ['analytics' => $analytics]);
    }

    /**
     * Show the form for creating a new analytic.
     */
    public function create()
    {
        $ads = Ad::all();
        $positions = Adposition::all();
        return view('admin.addanalytic', ['ads' => $ads, 'positions' => $positions]);
    }

    /**
     * Store a newly created analytic in the database.
     */
    public function store(Request $request)
    {
        

        Adanalytic::create([
            'ad_id' => $request->ad_id,
            'position_id' => $request->position_id,
            'views' => $request->views ?? 0,
            'clicks' => $request->clicks ?? 0,
            'date' => $request->date,
        ]);

        return redirect()->route('analytic.create')->with('success', 'Analytic created successfully!');
    }

    /**
     * Show the form for editing the specified analytic.
     */
    public function edit($id)
    {
        $analytic = Adanalytic::findOrFail($id);
        $ads = Ad::all();
        $positions = Adposition::all();

        return view('admin.editanalytic', ['analytic' => $analytic, 'ads' => $ads, 'positions' => $positions]);
    }

    public function update(Request $request, $id)
    {
        
        $analytic = Adanalytic::findOrFail($id);
        $analytic->update([
            'ad_id' => $request->ad_id,
            'position_id' => $request->position_id,
            'views' => $request->views ?? 0,
            'clicks' => $request->clicks ?? 0,
            'date' => $request->date,
        ]);

        return redirect()->route('editanalytic', $id)->with('success', 'Analytic updated successfully!');
    }

    /**
     * Remove the specified analytic from the database.
     */
    public function destroy($id)
    {
        $analytic = Adanalytic::findOrFail($id);
        $analytic->delete();

        return redirect()->back()->with('success', 'Analytic deleted successfully!');
    }
}
