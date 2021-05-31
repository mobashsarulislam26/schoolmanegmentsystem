<?php
$f=fopen('./students.csv','r');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="container">
<form action="save_std.php" method="post">
<table class="table table-bordered">
	<tr>
		<th>Name</th>
		<td><input type="text" name="name" class="form-control"></td>
		<th>Roll</th>
		<td><input type="text" name="roll" class="form-control"></td>
		<th>Class</th>
		<td><input type="text" name="class" class="form-control"></td>
	</tr>
	<tr>
		<td colspan="6">
			<input type="submit" class="btn btn-block btn-primary" value="Save">
		</td>
	</tr>
</table>
</form>
<hr>
<h3>Student List</h3>
<table class="table table-bordered">

	<tr>
		<th>Name</th>
		<th>ROll</th>
		<th>Class</th>
	</tr>
	<?php while($data=fgetcsv($f)){ ?>
	<tr>
		<td><?php echo $data[0] ?></td>
		<td><?php echo $data[1] ?></td>
		<td><?php echo $data[2] ?></td>
	</tr>
	<?php } ?>
</table>
</div>
