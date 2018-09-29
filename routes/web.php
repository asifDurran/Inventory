<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/stockcategory','StockCategoryController');
Route::resource('/stockentries','StockEntriesController');
Route::resource('/stockitems','StockitemsController');
Route::resource('/stocksales','StockSalesController');
Route::resource('/suppliers','SupplierController');
Route::resource('/customers','CustomersController');
Route::resource('/expenses','DailyExpensesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getRequest',function(){
    if(Request::ajax()){
        return 'getRequest Has lodded completely';
    }

});
