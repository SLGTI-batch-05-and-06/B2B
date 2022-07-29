<?php 
include_once 'Config.php';
session_start();
$User_ID =  $_SESSION['User_ID'] ;

if(!isset($User_ID)){
    header('location:Login.php');
}


?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C2C BUSSINESS</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

<!----------------------------------------------HEADER------------------------------------------------------------->

<?php include ("ZHeader2.php")?>

<!----------------------------------------------ABOUT------------------------------------------------------------->


<?php
        if (isset ($Message)){
            foreach($Message as $Message) {
                echo '<div class ="message">'.$Message.'</div>';
            }
        }
        ?>







 <div class="container">
    <div class="row">

    <div class="profile">
        
        <?php   



         

            $select= mysqli_query($conn,"SELECT * FROM 'user_info' WHERE ID = '$User_ID'") or die('err');



?>


    </div>



    </div>
 </div>


















 <!----------------------------------------------footer------------------------------------------------------------->

    <?php include ("ZFooter2.php")?>

    




</body>

</html>