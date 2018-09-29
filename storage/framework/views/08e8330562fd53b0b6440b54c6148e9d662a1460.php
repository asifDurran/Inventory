<?php $__env->startSection('content'); ?>
<h1>Purchase Items</h1>
<table class="table table-striped">
  <thead>

    <tr>
      <th scope="col">Item Id</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
  
      
      <?php $__currentLoopData = $item->entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
      <td><?php echo e($single_sale->id); ?></td>
      <td><?php echo e($single_sale->quantity); ?></td>
     
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
   
  </tbody>
</table>
<h1>Sales Items</h1>
<table class="table table-striped">
  <thead>

    <tr>
      <th scope="col">Sale ID</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
  
      
      <?php $__currentLoopData = $item->sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
      <td><?php echo e($single_sale->id); ?></td>
      <td><?php echo e($single_sale->quantity); ?></td>
     
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
   
  </tbody>
</table>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>