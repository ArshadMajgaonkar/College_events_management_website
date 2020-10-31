
<?php

define('DB_HOST','localhost');
define('DB_NAME','college_eventsDB');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');

$connection=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die("cannot connect");

// $sql = "SELECT * FROM `admin_login` ";
//                          $result = mysqli_query($connection, $sql);


//                          while ($row = mysqli_fetch_assoc($result)) {
//                             echo '  
//                             <tr>  
//                                  <td>' . $row["AEN"] . '</td>  
//                                  <td>' . $row["student_id"] . '</td>  
//                                  <td>' . $row["branch"] . '</td>  
//                                  <td>' . $row["year"] . '</td>  
//                                  <td>' . $row["name"] . '</td></tr>';

//                          }

                            

?>
