<?php

namespace App\Http\Controllers;

use App\Models\Adposition;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function position()
    {
        $positions = Adposition::all();
        return view('admin/position', ['positions' => $positions,]);
    }

    public function create()
    {
        return view('admin.addposition');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'dimensions' => 'required|string|max:50',
            'price_per_day' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        Adposition::create($request->all());

        return redirect()->route('position.create')->with('success', 'Position created successfully!');
    }

    public function edit($id)
    {
        $positions = Adposition::findOrFail($id);
        return view('admin.editposition', ['position' => $positions,]);
    }

    /**
     * Update the specified position in the database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'dimensions' => 'required|string|max:50',
            'price_per_day' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        $position = Adposition::findOrFail($id);
        $position->update($request->all());

        return redirect()->route('editposition', $id)->with('success', 'Position updated successfully!');
    }

    /**
     * Remove the specified position from the database.
     */
    public function destroy($id)
    {
        $position = Adposition::findOrFail($id);
        $position->delete();

        return redirect()->back()->with('success', 'Position deleted successfully!');
    }
}

