@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Stock category</h2>
             
  <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>  
    </tr>
    </thead>
    <tbody>
  @foreach($stock_categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->title}}</td>
      <td>{{$category->description}}</td>
      <td>{{$category->status}}</td>
     <td><button type="button" class="btn btn-warning"><a href="{{route('stockcategory.edit',['id'=>$category->id])}}">Edit</button></td>
      <td>
      <form action="{{route('stockcategory.destroy',['id' => $category->id])}}" method="POST" class="index-form">
              <input type="hidden" name="_method" value="DELETE">
                    {{csrf_field()}}
              <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      </td>
    </tr>
  @endforeach
  
  </tbody>
  
  </table>
  {{csrf_field()}}
  <input type="hidden" name="_method" value="PATCH">
  <button type="button" class="btn btn-success"><a href="{{route('stockcategory.create')}}">New Insertion</a></button>
  
</div>

@endsection
