<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suppliers;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Suppliers::all();

        return view('suppliers.stock_suppliers_index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.stock_suppliers_new_insertion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Stock_suppliers = new Suppliers();

        $Stock_suppliers->name = $request['name'];
        $Stock_suppliers->contact_number = $request['contact_number'];
        $Stock_suppliers->address = $request['address'];
        $Stock_suppliers->save();

        return redirect()->route('suppliers.index');
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
        $supply = Suppliers::find($id);
        return view('suppliers.stock_suppliers_edit',compact('supply'));
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
        $Stock_supply =  Suppliers::find($id);

        $Stock_supply->name = $request['name'];
        $Stock_supply->contact_number = $request['contact_number'];
        $Stock_supply->address = $request['address'];
        $Stock_supply->save();

        return redirect()->route('suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Suppliers::destroy($id);

        return redirect()->route('suppliers.index');
    }
}
