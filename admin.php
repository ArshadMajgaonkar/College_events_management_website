<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($connection,$_POST['ausername']);
      $mypassword = mysqli_real_escape_string($connection,$_POST['apassword']); 
      echo $myusername." ".$mypassword ;
      $sql = "SELECT * FROM admin_login WHERE `student_id` = '".$myusername."' and `password` = '".$mypassword."' ";
      $result = mysqli_query($connection,$sql);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if(mysqli_num_rows($result) == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: admindashboard.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
