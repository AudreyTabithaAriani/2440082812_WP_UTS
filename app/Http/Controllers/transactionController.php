<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use App\Models\categories;
use App\Models\coffeeModel;
use Illuminate\Http\Request;
use App\Models\transactionModel;

class transactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $user = userModel::find($id);
        $transaction = transactionModel::where('user_id', $id)->orderBy('transaction_id')->get();

        $hour = date('H');
        if ($hour < 12) {
            $greeting = 'Good Morning';
        } elseif ($hour < 18) {
            $greeting = 'Good Afternoon';
        } else {
            $greeting = 'Good Evening';
        }

        return view('transaction', [
            "title" => "Transaction",
            "greeting" => $greeting,
            "user" => $user,
            "transactions" => $transaction,
            "type" => "Non-Coffee"
        ]);
    }

    public function add(Request $request, $id)
    {
        // Store the $coffee_name value in the transaction database here
        // For example:

        $transaction = new transactionModel;
        $transaction->coffee_name = $request->coffee_name;
        $transaction->coffee_price = $request->coffee_price;
        $transaction->user_id = $request->user_id;
        $transaction->save();

        // Redirect the user back to the previous page or to the cart page
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
