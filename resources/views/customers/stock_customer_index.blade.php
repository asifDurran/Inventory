<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body>
<div class="container">
  <h2>Customers Index</h2>
             
  <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Contacct Number </th>
      <th scope="col">Address</th>  
      <th scope="col">Status</th>  
    </tr>
    </thead>
    <tbody>
    @foreach($cust as $customers)
    <td>{{$customers->id}}</td>
    <td>{{$customers->name}}</td>
    <td>{{$customers->contact_number}}</td>
    <td>{{$customers->address}}</td>
    <td>{{$customers->Status}}</td>
    <td><button type="button" class="btn btn-warning"><a href="{{route('customers.edit',['id'=>$customers->id])}}">Edit</button></td>
      
      
      <td>
        <form method="post" action="{{route('customers.destroy',['id'=>$customers->id])}}" class="index-form">
         <input type="hidden" name="_method" value="DELETE">
         {{csrf_field()}}
         <button type="submit" class=" btn btn-danger">Danger</button>

       </form>
      </td>

   
  </tbody>
  @endforeach
  </table>
  <button type="button" class="btn btn-success"><a href="{{URL::route('customers.create')}}">Add Customer</a></button>
 
</div>

</body>
</html>