<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StockEntries;
use App\StockCategory;
use App\Suppliers;
use App\StockItems;

class StockEntriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $stock_entries = StockEntries::all();
       return view('entries.stock_entry_index',compact('stock_entries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Suppliers::all();
        $stock_items = StockItems::all();
        return view('entries.stock_entries_new_insertion',compact('stock_items','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stockentries = new StockEntries();
        $stockentries->stock_item_id = $request['stock_item_id'];
        $stockentries->supplier_id = $request['supplier_id'];
        $stockentries->quantity = $request['quantity'];
        $stockentries->stock_single_price = $request['stock_single_price'];
        $stockentries->total_amount = $request['total_amount'];
        $stockentries->paid_amount = $request['paid_amount'];
        $stockentries->due_amount = $request['due_amount'];
        $stockentries->status = 1;
        $stockentries->save();

        $stock_item = StockItems::find($request['stock_item_id']);
        $stock_item->quantity += $request['quantity'];
        $stock_item->save();

        return redirect()->route('stockentries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entries_edit = StockEntries::find($id);
        $stock_items = StockItems::find($id);
        $suppliers = Suppliers::find($id);

        return view('entries.stock_entries_edit',compact('entries_edit','stock_items','suppliers'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
