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
    <?php $__currentLoopData = $cust; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <td><?php echo e($customers->id); ?></td>
    <td><?php echo e($customers->name); ?></td>
    <td><?php echo e($customers->contact_number); ?></td>
    <td><?php echo e($customers->address); ?></td>
    <td><?php echo e($customers->Status); ?></td>
    <td><button type="button" class="btn btn-warning"><a href="<?php echo e(route('customers.edit',['id'=>$customers->id])); ?>">Edit</button></td>
      <td>
        <form method="post" action="<?php echo e(route('customers.destroy',['id'=>$customers->id])); ?>" class="index-form">
         <input type="hidden" name="_method" value="DELETE">
         <?php echo e(csrf_field()); ?>

         <button type="submit" class=" btn btn-danger">Danger</button>

        
       </form>
      </td>

   
  </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
  <button type="button" class="btn btn-success"><a href="<?php echo e(URL::route('customers.create')); ?>">Add Customer</a></button>
 
</div>

</body>
</html>