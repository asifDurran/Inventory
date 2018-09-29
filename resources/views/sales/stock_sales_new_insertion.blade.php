<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inser Stcok Sales</title>
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
<h2>New Sales Insertion</h2>   
<div id="category_form">
<form method="post" action="{{route('stocksales.store')}}">
   
  <div class="form-group">
    <label for="formGroupExampleInput">Stock Item ID</label>
    <select class="form-control" name="stock_item_id">
      @foreach($stock_items as $item)
          <option value="{{$item->id}}">{{$item->title}}</option>
      @endforeach
      </select>
  </div>
  <div class="form-group">
   <label for="formGroupExampleInput2">Customer ID </label>
    <select class="form-control" name="customer_id">
       @foreach($cust as $customers)
           <option value="{{$customers->id}}">{{$customers->name}}</option>
    
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Quantity</label>
    <input type="number" class="form-control" name ="quantity" id="formGroupExampleInput2" placeholder="Quantity">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Stock Single Price</label>
    <input type="number" class="form-control" name ="stock_single_price" id="formGroupExampleInput2" placeholder="Stock Single Price">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Total Amount</label>
    <input type="number" class="form-control" name ="total_amount" id="formGroupExampleInput2" placeholder="Total Amount">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Discount</label>
    <input type="number" class="form-control" name ="discount" id="formGroupExampleInput2" placeholder="Discount">
  </div>
 
  <div class="form-group">
    <label for="formGroupExampleInput2">Paid Amount</label>
    <input type="number" class="form-control" name ="paid_amount" id="formGroupExampleInput2" placeholder="Paid Amount">
  </div>
 
  <div class="form-group">
    <label for="formGroupExampleInput2">Due Amount</label>
    <input type="number" class="form-control" name ="due_amount" id="formGroupExampleInput2" placeholder="Due Amount">
  </div>
 
  {{csrf_field()}}
  <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
</body>
</html>

