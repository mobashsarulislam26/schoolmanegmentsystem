<?php
$f=fopen('./students.csv','a');
$data=array($_POST['name'],$_POST['roll'],$_POST['class']);
fputcsv($f,$data);
fclose($f);
header('Location: std.php');
?>
