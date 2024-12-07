<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\AdOrder;

class AdlistingController extends Controller
{
    public function adlist()
    {
        $data = Ad::all();
        return view('adlisting',['results'=>$data]);
    }

    public function details($id)
    {
        $data = Ad::find($id);
        return view('adlisting-details',['results'=>$data]);
    }

    public function adForm($id)
    {
        $ad = Ad::find($id);

        return view('adlistingform', ['ad' => $ad]);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('ad_image')) {
            $file = $request->file('ad_image');
            $imagePath = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads'), $imagePath);
        }


       
        AdOrder::create([
            'ad_id' => $request->ad_id,
            'user_id' => auth()->id(), 
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'amount' => $request->amount,
            'ad_image' => $imagePath,
            'ad_url' => $request->ad_url,
            'payment_status' => 'Pending',
            'status' => 'N',
        ]);

        return redirect()->back()->with('success', 'Ad order submitted successfully.');
    }

}
