<?php
$dbc=mysqli_connect('localhost','root','ankitg444','IOT');
$id=$_POST['id'];
$query="UPDATE tasks set active=0 WHERE id=$id";
$result=mysqli_query($dbc,$query);
?>