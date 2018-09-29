<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock Suppliers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script
 
</head>
<body>
<div class="container">
  <h2>Stock Suppliers</h2>
             
  <table class="table table-bordered">
    <thead>
    <tr> 
      <th scope="col">ID</th>
      <th scope="col">Supplier Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Addess</th>
      <th scope="col">Status</th>      
    </tr>            
    </thead>
    <tbody>
  @foreach($suppliers as $supplier)
    <tr>
      <td>{{$supplier->id}}</td>
      <td>{{$supplier->name}}</td>
      <td>{{$supplier->contact_number}}</td>
      <td>{{$supplier->address}}</td>
      <td>{{$supplier->status}}</td>
      <td> <button type="button" class="btn btn-warning"><a href="{{route('suppliers.edit',['id'=>$supplier->id])}}">Edit</a></button></td>
      <td>
       <form method="post" action="{{route('suppliers.destroy',['id'=>$supplier->id])}}" class="index-form">
      
      <input type="hidden" name="_method" value="DELETE"> 
      
      {{csrf_field()}}

      <button type="submit" class="btn btn-danger">Delete</button>
       </form>
      </td>
    </tr>
   
  </tbody>
  @endforeach	
  </table>
  <button type="button" class="btn btn-success"><a href="{{route('suppliers.create')}}">Add new Supplier</a></button>
  
</div>

</body>
</html>