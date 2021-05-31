<?php
$f=fopen('./marks.csv','a');
$data=array($_POST['stdID'],$_POST['subID'],$_POST['mark']);
fputcsv($f,$data);
fclose($f);
header('Location: marks.php');
?>
