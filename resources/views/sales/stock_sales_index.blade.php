@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Stock Sales</h2>
             
  <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Stock Items Title</th>
      <th scope="col">Stock Category Title</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Quantity</th>
      <th scope="col">Stock Single Price</th> 
      <th scope="col">Total Amount</th> 
      <th scope="col">Discount</th>
      <th scope="col">Paid Amount</th>
      <th scope="col">Due Amount</th>
     
      <th scope="col">Status</th>
      <th col="2">Action</th>
    </tr>
    </thead>
    <tbody>    
  @foreach($StockSales as $sales)
    <tr>     			
      <td>{{$sales->id}}</td>
      <td>{{$sales->item->title}}</td>
      <td>{{$sales->item->category->title}}</td>
      <td>{{$sales->customer->name}}</td>
      <td>{{$sales->quantity}}</td>
      <td>{{$sales->stock_single_price}}</td>
      <td>{{$sales->total_amount}}</td>
      <td>{{$sales->discount}}</td>
      <td>{{$sales->paid_amount}}</td>
      <td>{{$sales->due_amount}}</td>
      <td>{{$sales->status}}</td>
      <td><button type="button" class="btn btn-warning"><a href="{{route('stocksales.edit',['id'=>$sales->id])}}">Edit</a></button></td>
 <td> <button type="button" class="btn btn-danger">Delete</button></td>
 <td><button type="button" class="btn btn-primary"><a href="{{route('stocksales.show',['id'=>$sales->id])}}">View Detail!</a></button></td>
      
    </tr>
  @endforeach

  </tbody>
 
  </table>
  <button type="button" class="btn btn-success"><a href="{{route('stocksales.create')}}">New Insertion</a></button>
  <button type="button" class="btn btn-warning" id="getRequest">getRequest</button></td>
 
</div>

@endsection