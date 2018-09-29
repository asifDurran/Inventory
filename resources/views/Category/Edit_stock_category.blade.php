<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inser Stcok Category</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    h2{
      text-align:center;
      color:steelblue;
    }
    body{
      width:100%;
    }
    #category_form{
      margin:30px;
      padding:10px;
      align:center;
    }
  
    </style>
</head>
<body> 
<h2>Edit</h2>   
<div id="category_form">
<form method="post" action="{{route('stockcategory.update',['id'=>$categories->id])}}">
  <div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" class="form-control" value="{{$categories->title}}" name="title" id="formGroupExampleInput" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <input type="text" class="form-control" name="description" value="{{$categories->description}}" id="formGroupExampleInput2" placeholder="Decription">
  </div>
  {{csrf_field()}}
  <input type="hidden" name="_method" value="PATCH">
  <button type="submit" class="btn btn-primary">Update</button> 
</form>
@foreach($categories->items as $item)
 <p> {{$item->title}} | Quantity:  {{$item->quantity}} </p>
@endforeach
</div>
</body>
</html>

