<<<<<<< HEAD
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
=======
<?php


define('DB_HOST','localhost');
define('DB_NAME','college_eventsDB');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');

$connection=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die("cannot connect");

if(isset($_POST['deletebtn']))
{
    $sport_id=;

    $sql="DELETE FROM `sport` WHERE `sport_id`=$sport_id ";
}
?>

<form method="POST" action="./test.php">

<?php
$sql = "SELECT DISTINCT `name` FROM `sport` ORDER BY `name` ";

                    $result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        // print_r($row);
                    echo '  
                            <tr>  
                                 
                                 <td>' . $row["name"] . '<a href="./a_deleteSportScript.php?name='.$row['name'].' "><input type="button" name="deletebtn" value="Delete"></a> </td>
                                 </tr><br>';
                    }
                ?>


</form>
>>>>>>> 5b0e0638f91a989b1c50d375f58fc6a1afe9babb
