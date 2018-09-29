<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StockCategory;
class StockCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
      $stock_categories = StockCategory::all();
      return view('category.stock_categories_index',compact('stock_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('category.insert_stock_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock_category = new StockCategory();

        
        $stock_category->title =$request['title'];
        $stock_category->description = $request['description'];
        $stock_category->save();
        return redirect()->route('stockcategory.index');
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
        $categories = StockCategory::find($id);

        return view('Category.Edit_stock_category',compact('categories','id'));
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
       
        $stock_category = StockCategory::find($id);
        
        $stock_category->title =$request['title'];
        $stock_category->description = $request['description'];
        $stock_category->save();
        return redirect()->route('stockcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StockCategory::destroy($id);
        return redirect()->route('stockcategory.index');
    }
}
