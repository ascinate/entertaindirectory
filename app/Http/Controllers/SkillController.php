<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skill(){
        $skill = Skill::all();  
        return view('admin/skill', ['skill' => $skill]);
    }

    public function create(){
        $skill = Skill::all(); 
         
        return view('admin.addskill', ['skill' => $skill,]);
    }

    public function store(Request $request){

        Skill::create([
        'skill_name' => $request->skill_name,
        ]);

        return redirect('skill');
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
         
        return view('admin.editskill', ['skill' => $skill,]);
    }

    public function update(Request $request, $id)
    {
        
        $skill = Skill::findOrFail($id);

            $skill->update([
            'skill_name' => $request->skill_name,
        ]);

        $skill->save();

        return redirect('skill');
    }

    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect('skill');
    }
}
