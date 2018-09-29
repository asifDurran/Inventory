<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StockSales;
use App\StockCategory;
use App\customer;
use App\StockItems;

class StockSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $StockSales = StockSales::all();
        return view('sales.stock_sales_index',compact('StockSales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $cust = customer::all();
      $stock_items = StockItems::all();
      return view('sales.stock_sales_new_insertion',compact('stock_items','cust'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock_sales = new StockSales();

        $stock_sales->stock_item_id = $request['stock_item_id'];
        $stock_sales->customer_id = $request['customer_id'];
        $stock_sales->quantity = $request['quantity'];
        $stock_sales->stock_single_price = $request['stock_single_price'];
        $stock_sales->total_amount = $request['total_amount'];
        $stock_sales->discount = $request['discount'];
        $stock_sales->paid_amount = $request['paid_amount'];
        $stock_sales->due_amount = $request['due_amount'];
        $stock_sales->status =1;

        $stock_sales->save();


        $stock_item = StockItems::find($request['stock_item_id']);
        $stock_item->quantity -= $request['quantity'];
        $stock_item->save();

        return redirect()->route('stocksales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sales_record = Stocksales::find($id);
        return view('sales.record',compact('sales_record'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sales_edit = StockSales::find($id);
    

        return view('sales.stock_sales_edit',compact('sales_edit'));
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
        $stock_sales =  StockSales::find($id);
        $old_quantity = $stock_sales->quantity;
        $stock_sales->quantity = $request['quantity'];
        $stock_sales->stock_single_price = $request['stock_single_price'];
        $stock_sales->total_amount = $request['total_amount'];
        $stock_sales->discount = $request['discount'];
        $stock_sales->paid_amount = $request['paid_amount'];
        $stock_sales->due_amount = $request['due_amount'];
        $stock_sales->save();
        
        $stock_item = StockItems::find($stock_sales->stock_item_id);
        $stock_item->quantity += $old_quantity;
        $stock_item->quantity -= $request['quantity'];
        $stock_item->save();


        return redirect()->route('stocksales.index');
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
