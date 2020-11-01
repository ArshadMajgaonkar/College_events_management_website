<?php


define('DB_HOST','localhost');
define('DB_NAME','college_eventsDB');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');

$connection=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die("cannot connect");

// if(isset($_POST['deletebtn']))
// {
//     $sport_id=;

//     $sql="DELETE FROM `sport` WHERE `sport_id`=$sport_id ";
// }
?>

<!-- // <form method="POST" action="./test.php"> -->

<?php
$selected="chess";
// echo "hi";
$sql = " SELECT s.name, u.UEN, u.name, u.year FROM `sport` s
 INNER JOIN `user_login-sport` us ON s.sport_id=us.sport_id
 INNER JOIN `user_login` u ON us.UEN=u.UEN
 WHERE s.name='$selected' ";

$result = mysqli_query($connection, $sql);
// print_r($row);
while ($row = mysqli_fetch_all($result,MYSQLI_ASSOC)) {
    print_r($row);

}
?>

