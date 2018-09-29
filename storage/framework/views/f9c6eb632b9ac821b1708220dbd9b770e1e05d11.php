<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock Items</title>
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
  <h2>Stock Items</h2>
             
  <table class="table table-bordered">
    <thead>
    <tr> 
      <th scope="col">ID</th>
      <th scope="col">Stock Category</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Purchase Price</th>
      <th scope="col">Sale Price</th>
      <th scope="col">Status</th>      
    </tr>                
    </thead>
    <tbody>
  <?php $__currentLoopData = $stock_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($items->id); ?></td>
      <td><?php echo e($items->category->title); ?></td>
      <td><?php echo e($items->title); ?></td>
      <td><?php echo e($items->description); ?></td>
      <td><?php echo e($items->quantity); ?></td>
      <td><?php echo e($items->purchase_price); ?></td>
      <td><?php echo e($items->sale_price); ?></td>
      <td><?php echo e($items->status); ?></td>
      <td> <a href="<?php echo e(route('stockitems.show',['id'=>$items->id])); ?>">  <button type="button" class="btn btn-primary">Show Detail</button></a></td>
      <td><a href="<?php echo e(route('stockitems.edit',['id'=>$items->id])); ?>"><button type="button" class="btn btn-warning">Edit</button></a></td>
 <td> <button type="button" class="btn btn-danger">Delete</button></td>

    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
  </tbody>
  
  </table>
  <button type="button" class="btn btn-success"><a href="<?php echo e(route('stockitems.create')); ?>">Insert New Items</a></button>
  
</div>

</body>
</html>