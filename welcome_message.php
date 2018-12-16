<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
  
</nav>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
  <h3>view data</h3><br>
	<?php echo anchor('Welcome/create', 'new Post', array('class' => 'btn btn-primary'));?>
    <?php foreach($post as $row): ?>
	<tr>
      <td><?php echo $row->id; ?></td>
      <td><?php echo $row->title; ?></td>
      <td><?php echo $row->date_created; ?></td>
      <td>
	  <?php echo anchor('Welcome/view', 'view', array('class' => 'label label-primary'));?>
	  <?php echo anchor('Welcome/update', 'update', array('class' => 'label label-success'));?>
	  <?php echo anchor('Welcome/delete', 'delete', array('class' => 'label label-danger'));?>

	  </td>
    </tr>
		<?php endforeach; ?>
  </tbody>
</table> 
</body>
</html>