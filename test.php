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