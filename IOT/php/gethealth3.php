


<?php

// Used to find moisture status 

require_once('config.php');
$dbc=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
$query="SELECT * FROM deviceNotif WHERE  field3=0";
$result=mysqli_query($dbc,$query);
$row_array['sec1']=mysqli_num_rows($result);
$query="SELECT * FROM deviceNotif WHERE  field3=1";
$result=mysqli_query($dbc,$query);

$row_array['sec2']=mysqli_num_rows($result);
$result_array=array();
array_push($result_array,$row_array);
echo json_encode($result_array);
?>