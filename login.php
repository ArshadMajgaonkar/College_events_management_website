<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['submit'])) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($connection,$_POST['susername']);
      $mypassword = mysqli_real_escape_string($connection,$_POST['spassword']); 
      
      $sql = "SELECT * FROM user_login WHERE `student_id` = '".$myusername."' and `password` = '$mypassword'";
      $result = mysqli_query($connection,$sql);
    //   $row = mysqli_fetch_array($result,);
   
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: userdashboard.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="main">
        <div class="box">
            <div class="button">
                <div id="btn1"></div>
                <button type="button" class="btn" onclick="student()">STUDENT</button>
                <button type="button" class="btn" onclick="admin()">ADMIN</button>
            </div>
            <form id="student" class="form1" action="login.php" method="POST">
                STUDENT USERNAME: <br>
                <input type="text" class="field" placeholder="user ID" name = "susername" required><br>
                 PASSWORD:<br>
                <input type="password" class="field" placeholder="password" name = "spassword" required>
                <button type="submit" name="submit" class="submit">LOG IN</button>
            </form>
            <form id="admin" action="admin.php" method="POST" class="form1">
               ADMIN USERNAME: <br>
               <input type="text" class="field" placeholder="user ID"  name = "ausername"  required><br>
                PASSWORD:<br>
               <input type="password" class="field" placeholder="password" name = "apassword" required>
               <button type="submit" class="submit">LOG IN</button>
           </form>
        </div>
       
    </div>

    <script>
    var x = document.getElementById("student");
    var y= document.getElementById("admin")
    var z= document.getElementById("btn1");

    function admin(){
        x.style.left ="-400px";
        y.style.left ="61px";
        z.style.left ="110px";
        
    }
    function student(){
        x.style.left ="61px";
        y.style.left ="450px";
        z.style.left ="0px";
        
    }

    </script>

</body>

</html>