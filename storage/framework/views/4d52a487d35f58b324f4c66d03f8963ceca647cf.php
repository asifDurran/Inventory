<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock Entries</title>
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
  <h2>Stock Entries</h2>
             
  <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Stock Item Id</th>
      <th scope="col">Supplier ID</th>
      <th scope="col">Quantity</th>
      <th scope="col">Stock Single Price</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Paid Amount</th>
      <th scope="col">Due Amount</th>
      <th scope="col">Status</th> 
      <th>Action</th>     
    </tr>                
    </thead>
    <tbody>
  <?php $__currentLoopData = $stock_entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($entries->id); ?></td>
      <td><?php echo e($entries->item->title); ?></td>
      <td><?php echo e($entries->supplier->name); ?></td>
      <td><?php echo e($entries->quantity); ?></td>
      <td><?php echo e($entries->stock_single_price); ?></td>
      <td><?php echo e($entries->total_amount); ?></td>
      <td><?php echo e($entries->paid_amount); ?></td>
      <td><?php echo e($entries->due_amount); ?></td>
      <td><?php echo e($entries->status); ?></td>
      <td><button type="button" class="btn btn-warning"><a href="">Edit</a></button>
       <button type="button" class="btn btn-danger">Delete</button></td>
      
      </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
  
  </table>
 
  <button type="button" class="btn btn-success"><a href="<?php echo e(route('stockentries.create')); ?>">New Entries</a></button>
  
</div>

</body>
</html>