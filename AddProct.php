<?php 
include_once 'Config.php';
session_start();
$USER_ID = $_SESSION['user_id'];

if(!isset($USER_ID)){
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

 <div class="container">
    <div class="row">

    <div class="profile">
        <?php


       
            $select = mysqli_query($conn,"SELECT * FROM 'user_info' WHERE ID = '$USER_ID'") or die ('query faild3');

            if(mysqli_num_rows($select)>0){
                $fetch =mysqli_fetch_assoc($select);
            }
        ?>

        <h3><?php   echo $fetch['Name']; ?></h3>



    </div>



    </div>
 </div>


















 <!----------------------------------------------footer------------------------------------------------------------->

    <?php include ("ZFooter.php")?>

    




</body>

</html>