<?php

require './connect.php';

$name= $_GET['name'];

$sql = "DELETE FROM `sport` WHERE `name`='$name' ";

mysqli_query($connection, $sql);

if(mysqli_affected_rows($connection))
{
    echo "<script>
    alert('Data deleted successfully');
    window.location.href='./a_deleteSport.php';
    </script>";
}
else
{
    echo "<script>
    alert('Failed to insert data');
    window.location.href='./a_deleteSport.php';
    </script>";

}

?>