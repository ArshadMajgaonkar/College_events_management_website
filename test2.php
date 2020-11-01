<?php
    // if(isset($_POST['submit'])){
        require 'connect.php' ;
    //       // $selected = $_POST['sport'];
     	$selected="Chess";
    //       echo 'You selected :' . $selected;
          //include('connect.php');
          if(!$connection){
			echo "Connection Error" . mysqli_connect_error();
		}
		$sql= " SELECT s.name, u.UEN, u.name, u.year FROM `sport` s
 INNER JOIN `user_login-sport` us ON s.sport_id=us.sport_id
 INNER JOIN `user_login` u ON us.UEN=u.UEN
 WHERE s.name='$selected' ";

		$result= mysqli_query($connection,$sql);

		echo 'hello';
		while($data=mysqli_fetch_assoc($result)){

			echo '1';

			print_r($data);

			echo '2';
		}
		

		
       
   
	//}
?>