<?php 
include_once 'Config.php';
session_start();

if(isset($_POST['SUBMIT'])){

    $email = mysqli_real_escape_string($conn,$_POST['EMAIL']);
    $password = mysqli_real_escape_string($conn, md5($_POST['PASSWORD']));
;
    $select=0;

    $select = mysqli_query($conn,"SELECT * FROM `user_info`  WHERE Email='$email' && Password ='$password'") or die ('query faild');

    
    if(mysqli_num_rows($select)>0){
        $row =mysqli_fetch_assoc($select);
        $_SESSION['user_id'] =$row['ID'];
        header('location:AddProct.php');
        
     }else{
        $Message[]='Incorrect Email or Password';
           


        }
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B2B BUSSINESS</title>
<!----------------------------------------------CSS FILE LINK------------------------------------------------------------->

    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="StyleRegister.css">
    <link rel="stylesheet" href="styleCategoryy.css">

</head>

<body>

<!----------------------------------------------HEADER------------------------------------------------------------->

<?php include ("ZHeader2.php");?>

<!----------------------------------------------ABOUT------------------------------------------------------------->

 

<div class="FORM_CONTAINER">
  <div class="row">
      <form action="" method="POST" enctype="multipart/form-data">
        <h3> LOGIN NOW</h3>



        <?php
        if (isset ($Message)){
            foreach($Message as $Message) {
                echo '<div class ="message">'.$Message.'</div>';
            }
        }
        ?>






       
        <input type="email" name="EMAIL" placeholder="enter email" class="box" required> 
        <input type="Password" name="PASSWORD" placeholder="enter password" class="box" required> 
       
        <input type="submit" name='SUBMIT' value="LOGIN NOW" class="BtnRegister">
        <P> Don't have an account? <a href="Register.php">REGISTOR NOW</a> </p>
        
      </form>
  </div>

     
    



</div>







 <!----------------------------------------------footer------------------------------------------------------------->

    <?php include ("ZFooter2.php")?>

    




</body>

</html>