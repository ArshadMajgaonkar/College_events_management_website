<!DOCTYPE html>
<html lang="en">
<body>
<?php
  session_start();
   include("connect.php");
  
       $myusername = $_SESSION['login_user'];
    $sql = "SELECT * FROM user_login WHERE `student_id` = '".$myusername."' ";
      $result = mysqli_query($connection,$sql);

echo "<table border='1'>
<tr>
<th>name</th>
<th>student ID</th>
<th>special enrollment number</th>
<th>Password</th>
<th>branch</th>
<th>year of study</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['student_id'] . "</td>";
echo "<td>" . $row['UEN'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['year'] . "</td>";
echo "</tr>";
}
echo "</table>";

?>



</body>

</html>