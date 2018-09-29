@extends('layouts.app')

@section('content')
<h1>Purchase Items</h1>
<table class="table table-striped">
  <thead>

    <tr>
      <th scope="col">Item Id</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
  
      
      @foreach($item->entries as $single_sale)
      <tr>
      <td>{{$single_sale->id}}</td>
      <td>{{$single_sale->quantity}}</td>
     
      </tr>
    @endforeach
    
   
  </tbody>
</table>
<h1>Sales Items</h1>
<table class="table table-striped">
  <thead>

    <tr>
      <th scope="col">Sale ID</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
  
      
      @foreach($item->sales as $single_sale)
      <tr>
      <td>{{$single_sale->id}}</td>
      <td>{{$single_sale->quantity}}</td>
     
      </tr>
    @endforeach
    
   
  </tbody>
</table>

@endsection


