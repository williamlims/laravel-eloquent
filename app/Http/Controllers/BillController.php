<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBillRequest;
use App\Http\Requests\UpdateBillRequest;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('bills.create');
        
    }

    public function between($value1, $value2)
    {
        $bills = Bill::whereBetween('value', [$value1, $value2])->get();
        return response()->json($bills);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillRequest $request)
    {
        $user = auth()->user();
        if(!str_contains($user->name, 'Guest'))
        {
            $bill = Bill::create([
                'invoice' => $request->invoice,
                'installment' => $request->installment,
                'value' => $request->value,
                'client_id' => $request->client_id,
                'due_date' => $request->due_date,
                'payment_day' => $request->payment_day
            ]);

            return response()->json($bill);
        } else {
            return response()->json('Não autorizado!');
        }
    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        //
    }

    //public function bills($client)
    //{
    //    $client = Client::find($client);
    //    $bills = Bill::where('client_id', '=', $client)->get();
    //    return response()->json($bills);
    //}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBillRequest  $request
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillRequest $request, Bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        //
    }
}
