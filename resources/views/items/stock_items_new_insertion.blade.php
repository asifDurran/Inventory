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
<h2>Insert New Items</h2>   
<div id="category_form">   						
<form method="post" action="{{route('stockitems.store')}}">
 
  <div class="form-group">
    <label for="formGroupExampleInput2">Stock Category</label>
   
      <select class="form-control" name="stock_category_id">
      @foreach($stock_categories as $category)
          <option value="{{$category->id}}">{{$category->title}}</option>
      @endforeach
      </select>    
                            
     </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Title</label>
    <input type="text" class="form-control" name ="title" id="formGroupExampleInput2" placeholder="Title">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">Descreption</label>
    <input type="text" class="form-control" name ="description" id="formGroupExampleInput2" placeholder="Descreption">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Purchase Price</label>
    <input type="number" class="form-control" name ="purchase_price" id="formGroupExampleInput2" placeholder="Purchase Price">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Sale Price</label>
    <input type="number" class="form-control" name ="sale_price" id="formGroupExampleInput2" placeholder="Sale Price">
  </div>
  
  {{csrf_field()}}
  <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
</body>
</html>

	
	