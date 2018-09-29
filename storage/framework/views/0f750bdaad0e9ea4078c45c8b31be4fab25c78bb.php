<?php $__env->startSection('content'); ?>
<div class="container">
  <h2>Stock Sales</h2>
             
  <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Stock Items Title</th>
      <th scope="col">Stock Category Title</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Quantity</th>
      <th scope="col">Stock Single Price</th> 
      <th scope="col">Total Amount</th> 
      <th scope="col">Discount</th>
      <th scope="col">Paid Amount</th>
      <th scope="col">Due Amount</th>
     
      <th scope="col">Status</th>
      <th col="2">Action</th>
    </tr>
    </thead>
    <tbody>    
  <?php $__currentLoopData = $StockSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sales): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>     			
      <td><?php echo e($sales->id); ?></td>
      <td><?php echo e($sales->item->title); ?></td>
      <td><?php echo e($sales->item->category->title); ?></td>
      <td><?php echo e($sales->customer->name); ?></td>
      <td><?php echo e($sales->quantity); ?></td>
      <td><?php echo e($sales->stock_single_price); ?></td>
      <td><?php echo e($sales->total_amount); ?></td>
      <td><?php echo e($sales->discount); ?></td>
      <td><?php echo e($sales->paid_amount); ?></td>
      <td><?php echo e($sales->due_amount); ?></td>
      <td><?php echo e($sales->status); ?></td>
      <td><button type="button" class="btn btn-warning"><a href="<?php echo e(route('stocksales.edit',['id'=>$sales->id])); ?>">Edit</a></button></td>
 <td> <button type="button" class="btn btn-danger">Delete</button></td>
 <td><button type="button" class="btn btn-primary"><a href="<?php echo e(route('stocksales.show',['id'=>$sales->id])); ?>">View Detail!</a></button></td>
      
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
 
  </table>
  <button type="button" class="btn btn-success"><a href="<?php echo e(route('stocksales.create')); ?>">New Insertion</a></button>
  <button type="button" class="btn btn-warning" id="getRequest">getRequest</button></td>
 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>