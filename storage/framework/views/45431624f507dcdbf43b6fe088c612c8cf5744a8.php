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
</head>
<body>    
<form method="post" action="<?php echo e(route('stockcategory.store')); ?>">
  <div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" class="form-control"  name="title" id="formGroupExampleInput" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <input type="text" class="form-control" name ="description" id="formGroupExampleInput2" placeholder="Decription">
  </div>
  
  <?php echo e(csrf_field()); ?>

  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
</body>
</html>