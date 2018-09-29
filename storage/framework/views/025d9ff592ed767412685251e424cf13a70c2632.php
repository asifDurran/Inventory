<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customers</title>
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
<h2>Suppliers Update</h2>   
<div id="category_form">
<form method="post" action="<?php echo e(route('suppliers.update',['id'=>$supply->id])); ?>">
  <div class="form-group">
    <label for="formGroupExampleInput"> Customer Name</label>
    <input type="text" class="form-control"  name="name" value="<?php echo e($supply->name); ?>" id="formGroupExampleInput" placeholder="Customer Name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Contact Number </label>
    <input type="number" class="form-control" name ="contact_number" value="<?php echo e($supply->contac_number); ?>" id="formGroupExampleInput2" placeholder="Contact Number ">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"> Customer Address </label>
    <input type="address" class="form-control" name ="address" value="<?php echo e($supply->address); ?>" id="formGroupExampleInput2" placeholder=" Customer Address ">
  </div>
  
  <?php echo e(csrf_field()); ?>

  <input type="hidden" name="_method" value="PATCH">
  <button type="submit" class="btn btn-primary">Update</button> 
</form>
</div>
</body>
</html>

