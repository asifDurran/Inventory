<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock Category</title>
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
  <h2>Stock category</h2>
             
  <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th> 
    </tr>
    </thead>
    <tbody>
  @foreach($expenses as $expen)
    <tr>
      <td>{{$expen->id}}</td>
      <td>{{$expen->name}}</td>
      <td>{{$expen->price}}</td>
      
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
  <button type="button" class="btn btn-success"><a href="{{route('stockcategory.create')}}">New Insertion</a></button>
  
</div>

</body>
</html>