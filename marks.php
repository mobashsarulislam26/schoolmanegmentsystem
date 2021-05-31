<?php
$f=fopen('./students.csv','r');
$s=fopen('./subjects.csv','r');
$m=fopen('./marks.csv','r');
$std=[];

while($d=fgetcsv($f)){
	array_push($std,$d);
}
$subject=[];
while($dd=fgetcsv($s)){
	array_push($subject,$dd);
}
// echo "<pre>";
// print_r($sub[0]);
fclose($f);
fclose($s);
$s=fopen('./subjects.csv','r');
$f=fopen('./students.csv','r');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="container">
	<form action="save_mark.php" method="post">
		<table class="table table-bordered">
			<tr>
				<th>Student</th>
				<td>
					<select class="form-control" name="stdID">
						<option value="">Select Student</option>
						<?php $i=0; while($data=fgetcsv($f)){ ?>
						<option value="<?php echo $i++ ?>"><?php echo $data[0] ?></option>
						<?php } ?>
					</select>
				</td>
				<td>
					<select class="form-control" name="subID">
						<option value="">Select Subject</option>
						<?php $ii=0; while($sub=fgetcsv($s)){ ?>
						<option value="<?php echo $ii++ ?>"><?php echo $sub[0] ?></option>
						<?php } ?>
					</select>
				</td>
				<th>Mark</th>
				<td><input type="text" name="mark" class="form-control"></td>
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
			<th>Roll</th>
			<th>Class</th>
			<th>Subject</th>
			<th>Marks</th>
			<th>Action</th>
		</tr>
		<?php while($data=fgetcsv($m)){ 
		$i=$data[0];
		$iii=$data[1];
			?>
		<tr>
			<td><?php echo $std[$i][0] ?></td>
			<td><?php echo $std[$i][1] ?></td>
			<td><?php echo $std[$i][2] ?></td>
			<td><?php echo $subject[$iii][0] ?></td>
			<td><?php echo $data[2] ?></td>
			<td>
				<a href="details.php?id=<?php echo $i ?>" class="btn btn-primary btn-sm" >View Result</a>
			</td>
		</tr>
		<?php $i+=1; } ?>
	</table>
</div>
