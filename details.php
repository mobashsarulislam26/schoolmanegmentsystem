<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<?php
$id=$_GET['id'];
$f=fopen('./students.csv','r');
$std=[];
while ($data=fgetcsv($f)) {
	array_push($std,$data);
}
// echo "<pre>";
// print_r($std[$_GET['id']][0]);
?>
<h2>Name: <?php echo $std[$_GET['id']][0] ?>, Roll: <?php echo $std[$_GET['id']][1] ?> , Class: <?php echo $std[$_GET['id']][2] ?> </h2>
<table class="table table-bordered">

		<tr>
			<th>Subject</th>
			<th>Marks</th>
			<th>Grade</th>
		</tr>
<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<th colspan="2" class="text-right">Total=</th>
			<th>A</th>
		</tr>
		</table>