<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Ad;
use App\Models\Adposition;
use Illuminate\Http\Request;

class TransController extends Controller
{
    // Display the list of transactions
    public function trans()
    {
        // Fetch all transactions (you can also paginate or filter them)
        $transactions = Transaction::all();

        return view('admin/trans', ['transactions' => $transactions]); // Passing data as an array
    }

    // Show the form to create a new transaction
    public function create()
    {
        // Fetch all users for the user dropdown (assuming users have a name field)
        $users = User::all();
        $position = Adposition::all();
        $ad = Ad::all();
        return view('admin.addtrans', ['users' => $users, 'position'=>$position, 'ad'=>$ad]); // Passing data as an array
    }

    // Store a newly created transaction in the database
    public function store(Request $request)
    {

        // Create a new transaction
        Transaction::create([
            'user_id' => $request->buyer_id,
            'ad_id' => $request->ad_id,
            'position_id' => $request->position_id,
            'total_amount' => $request->total_amount,
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'payment_status' => $request->payment_status,
        ]);

        // Redirect with a success message
        return redirect()->route('trans.create')->with('success', 'Transaction added successfully!');
    }

    // Show the form to edit an existing transaction
    public function edit($id)
    {
        
        $transaction = Transaction::findOrFail($id);
        $users = User::all(); 
        $position = Adposition::all();
        $ad = Ad::all(); 
        return view('admin.edittrans', ['transaction' => $transaction, 'user' => $users, 'position'=>$position, 'ad'=>$ad]); 
    }

    // Update an existing transaction in the database
    public function update(Request $request, $id)
    {
        
        // Find the transaction by ID
        $transaction = Transaction::findOrFail($id);

        // Update the transaction data
        $transaction->update([
            'user_id' => $request->buyer_id,
            'ad_id' => $request->ad_id,
            'position_id' => $request->position_id,
            'total_amount' => $request->total_amount,
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'payment_status' => $request->payment_status,
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Transaction updated successfully!');
    }

    // Delete an existing transaction
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->back()->with('success', 'Transaction deleted successfully!');
    }
}

