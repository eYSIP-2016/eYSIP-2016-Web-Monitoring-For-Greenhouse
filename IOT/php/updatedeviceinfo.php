<?php

//Update device info 

require_once('config.php');
$dbc=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname) or die('Error connecting to database');

$id=trim($_POST['id']);
$name=$_POST['name'];
$regionId=$_POST['regionId'];

$description=$_POST['description'];
$group1=$_POST['group1'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$elevation=$_POST['elevation'];

$query1="SELECT * FROM groups WHERE name='$group1'";
$result=mysqli_query($dbc,$query1);
$group=mysqli_fetch_array($result);
$groupId=$group['id'];
$query2="UPDATE devices SET devices.name='$name',devices.description='$description',devices.groupId='$groupId',devices.latitude='$latitude',devices.longitude='$longitude',devices.elevation='$elevation', devices.status=0 WHERE devices.deviceId='5c:cf:7f:d1:ae:cc'";
$result=mysqli_query($dbc,$query2);
echo $id."group name".$group1." group".$group['id'].$result;
?>
