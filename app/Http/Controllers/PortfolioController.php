<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        $portfolio = Portfolio::with('user')->get();
        return view('admin/portfolio', ['portfolio' => $portfolio]);
    }


    public function create(){
        $portfolio = Portfolio::all(); 
        $user = User::all(); 
        return view('admin.addportfolio', ['portfolio' => $portfolio, 'user' => $user,]);
    }

    public function store(Request $request){

        $filename = null;
    if ($request->hasFile('media_files')) {
        $file = $request->file('media_files');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);
    }

    Portfolio::create([
        'user_id' => $request->user_id,
        'media_type' => $request->media_type,
        'media_files' => $filename,
    ]);

    return redirect()->back();
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $user = User::all(); 
        return view('admin.editportfolio', ['portfolio' => $portfolio, 'user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        
        $portfolio = Portfolio::findOrFail($id);

        $filename = $portfolio->media_files; 
        if ($request->hasFile('media_files')) {
            $file = $request->file('media_files');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $filename);
    
            if ($portfolio->media_files && file_exists(public_path('uploads/images/' . $portfolio->media_files))) {
                unlink(public_path('uploads/images/' . $portfolio->media_files));
            }
        }
    
        $portfolio->update([
            'user_id' => $request->user_id,
            'media_type' => $request->media_type,
            'media_files' => $filename,
        ]);
        
        $portfolio->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect('portfolio');
    }

}
