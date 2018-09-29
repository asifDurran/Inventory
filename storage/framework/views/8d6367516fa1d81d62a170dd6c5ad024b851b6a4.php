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
<h2> Edit Sales</h2>   
<div id="category_form">
<form method="post" action="<?php echo e(route('stocksales.update',['id'=>$sales_edit->id])); ?>">
 
  <div class="form-group">
    <label for="formGroupExampleInput">Stock Item ID</label>
    
      <input type="text" class="form-control" name="stock_item_id" value="<?php echo e($sales_edit->item->title); ?>" readonly>
  </div>
  <div class="form-group">
   <label for="formGroupExampleInput2">Customer ID </label>
   <input type="text" class="form-control" name="customer_id" value="<?php echo e($sales_edit->customer->name); ?>" readonly>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Quantity</label>
    <input type="number" class="form-control" name ="quantity" value="<?php echo e($sales_edit->quantity); ?>" id="formGroupExampleInput2" placeholder="Quantity">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Stock Single Price</label>
    <input type="number" class="form-control" name ="stock_single_price"  value="<?php echo e($sales_edit->stock_single_price); ?>" id="formGroupExampleInput2" placeholder="Stock Single Price">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Total Amount</label>
    <input type="number" class="form-control" name ="total_amount" value="<?php echo e($sales_edit->total_amount); ?>" id="formGroupExampleInput2" placeholder="Total Amount">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Discount</label>
    <input type="number" class="form-control" name ="discount" value="<?php echo e($sales_edit->dicount); ?>" id="formGroupExampleInput2" placeholder="Discount">
  </div>
 
  <div class="form-group">
    <label for="formGroupExampleInput2">Paid Amount</label>
    <input type="number" class="form-control" name ="paid_amount" value="<?php echo e($sales_edit->paid_amount); ?>" id="formGroupExampleInput2" placeholder="Paid Amount">
  </div>
 
  <div class="form-group">
    <label for="formGroupExampleInput2">Due Amount</label>
    <input type="number" class="form-control" name ="due_amount" value="<?php echo e($sales_edit->due_amount); ?>" id="formGroupExampleInput2" placeholder="Due Amount">
  </div>
 
  <?php echo e(csrf_field()); ?>

  <input type="hidden" value="PATCH" name="_method">
  
  <button type="submit" class="btn btn-primary">Submit</button> 
</form>
<?php $__currentLoopData = $sales_edit->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($item->title); ?> | Quantity : <?php echo e($item->quantity); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</body>
</html>