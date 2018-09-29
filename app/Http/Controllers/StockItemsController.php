<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StockItems;
use App\StockCategory;
class StockItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock_items = StockItems::all();
        return view('items.stock_items_index',compact('stock_items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stock_categories = StockCategory::all();
        return view('items.stock_items_new_insertion',compact('stock_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock_items = new StockItems(); 	
      
        $stock_items->stock_category_id = $request['stock_category_id'];
        $stock_items->title = $request['title'];
        $stock_items->description = $request['description'];
        $stock_items->quantity = 0;
        $stock_items->purchase_price = $request['purchase_price'];
        $stock_items->sale_price = $request['sale_price'];
        $stock_items->save();
        return redirect()->route('stockitems.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $item = StockItems::find($id);

    return view('sales.record',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items_edit = StockItems::find($id);
     

        return view('items.stock_items_edit',compact('items_edit'));
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
        $stock_items =  StockItems::find($id); 	
      
        $stock_items->stock_category_id = $request['stock_category_id'];
        $stock_items->title = $request['title'];
        $stock_items->description = $request['description'];
        $stock_items->quantity = 0;
        $stock_items->purchase_price = $request['purchase_price'];
        $stock_items->sale_price = $request['sale_price'];
        $stock_items->save();
        return redirect()->route('stockitems.index'); 
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
