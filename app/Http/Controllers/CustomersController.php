<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
     $cust = customer::all();
    return view('customers.stock_customer_index',compact('cust'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.new_customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customers = new customer();
        
        $customers->name = $request['name'];
        $customers->contact_number = $request['contact_number'];
        $customers->address = $request['address'];
        $customers->save();

        return redirect()->route('customers.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $custom = customer::find($id);
        
        return view('customers.edit_customer',compact('custom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new_customers = customer::find($id);
        
        $new_customers->name = $request['name'];
        $new_customers->contact_number = $request['contact_number'];
        $new_customers->address = $request['address'];
        $new_customers->save();

        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        customer::destroy($id);
        return redirect()->route('customers.index');
    }
}
