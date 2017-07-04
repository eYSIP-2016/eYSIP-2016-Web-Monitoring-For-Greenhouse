<?php

require_once('config.php');
$dbc=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname) or die('Error connecting to database');


$deviceId=$_POST['deviceId'];

// $fp = fopen('abc1.txt', 'a+');
// fwrite($fp, print_r($deviceId, TRUE));
// fclose($fp);


$count_row= "SELECT * from switches where deviceId='$deviceId'";
$res=mysqli_query($dbc,$count_row);
$group1=mysqli_fetch_array($res);

// $fp = fopen('abc1.txt', 'a+');
// fwrite($fp, print_r($group1, TRUE));
// fclose($fp);


 $sql1 = "DELETE FROM switches WHERE deviceId='$deviceId'";

 $res1=mysqli_query($dbc,$sql1);

 $sql3 = "DELETE FROM deviceNotif WHERE deviceId='$deviceId'";
	$res3=mysqli_query($dbc,$sql3);
	$sql2 = "DELETE FROM devices WHERE deviceId='$deviceId'";
	$res2=mysqli_query($dbc,$sql2);

// $fp = fopen('abc1.txt', 'a+');
// fwrite($fp, print_r('done', TRUE));
// fclose($fp);

?>
