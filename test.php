<?php 

include("connect.php");

if(!$connection){
	echo "Connection Error" . mysqli_connect_error();
}
$sql= 'Select * FROM sport';

$result= mysqli_query($connection,$sql);

$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
print_r($data)
 ?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>