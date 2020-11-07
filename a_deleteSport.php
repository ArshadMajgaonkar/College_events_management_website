<?php

require './connect.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Delete</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/sport.css">
    </head>
    <body>
        <div id='jumbotron'>
            <div id='title'>
                <h2>Delete Sports</h2>
            </div>
            <div id="menu">
                <?php

                    $sql = "SELECT DISTINCT `name` FROM `sport` ORDER BY `name` ";

                    $result = mysqli_query($connection, $sql);

                    ?>


                    <!-- <form method="POST" action="a_deleteSportScript.php"> -->
                         <table>
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {
                        // print_r($row);
                    echo "   
                            <tr>  
                                 
                               <td>".$row['name']."</td><td><a href='./a_deleteSportScript.php?name=".$row['name']." '><input type='button' name='deletebtn' value='Delete'></a>

                               </td>
                            </tr>";
                    }
                    echo "</table>";
                ?>
                <!-- </form> -->
            </div>
        </div>
    </body>
</html>