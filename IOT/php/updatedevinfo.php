<?php

//Update device info 

require_once('config.php');
$dbc=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname) or die('Error connecting to database');


$id=$_POST['id'];
$fp = fopen('abc.txt', 'a+');
fwrite($fp, print_r($_POST, TRUE));
fclose($fp);
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
$fp = fopen('file.txt', 'a+');
fwrite($fp, print_r($group, TRUE));
fclose($fp);
$query2="UPDATE devices SET name='$name',description='$description',groupId='$groupId',latitude='$latitude',longitude='$longitude',elevation='$elevation' WHERE id='$id' ";
$result=mysqli_query($dbc,$query2);

?>
