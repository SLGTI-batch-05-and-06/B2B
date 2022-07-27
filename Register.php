<?php 
include_once 'Config.php';
if(isset($_POST['SUBMIT'])){
    $name = mysqli_real_escape_string($conn,$_POST['NAME']);
    $email = mysqli_real_escape_string($conn,$_POST['EMAIL']);
    $password = mysqli_real_escape_string($conn, md5($_POST['PASSWORD']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cPASSWORD']));
    $image = $_FILES['IMAGE']['name'];
    $image_size = $_FILES['IMAGE']['size'];
    $image_tmp_name = $_FILES['IMAGE']['tmp_name'];
    $image_folder = 'UPLOADED_IMAGE/'.$image;
    $select=0;

    $select = mysqli_query($conn,"SELECT * FROM `user_info`  WHERE Email='$email' && Password ='$password'") or die ('query faild');

    
    if(mysqli_num_rows($select)>0){
        $Message[]='user already exit';
    }else{
           if($password != $cpassword ){
            $Message[]='confirm password not matched!';
           }elseif($image_size > 2000000){
            $Message[]='Image size is too large!';

           } else{
            $insert = mysqli_query ($conn,"INSERT INTO user_info (Name,Email,Password,Image) 
            VALUES ('$name','$email','$password','$image')")or die('query failed2');

               if($insert){
                move_uploaded_file($image_tmp_name,$image_folder);
                $Message[]='Registerd Successfully!';
                header('location:Login.php');
               }else{
                $Message[]='Registration failed!';
               }
           }


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
        <h3> Register Now</h3>



        <?php
        if (isset ($Message)){
            foreach($Message as $Message) {
                echo '<div class ="message">'.$Message.'</div>';
            }
        }
        ?>






        <input type="text" name="NAME" placeholder="Enter Username" class="box" required> 
        <input type="email" name="EMAIL" placeholder="Enter Email" class="box" required> 
        <input type="Password" name="PASSWORD" placeholder="Enter Password" class="box" required> 
        <input type="Password" name="cPASSWORD" placeholder="Confirm  Password" class="box" required> 
        <input type="file" name="IMAGE"  class="box" accept="IMAGE/jpg, IMAGE/jpeg, IMAGE/png">
        <input type="submit" name='SUBMIT' value="Register Now" class="BtnRegister">
        <P> already have an account? <a href="Login.php">Login Now</a> </p>
        
      </form>
  </div>

     
    



 </div>
















 <!----------------------------------------------footer------------------------------------------------------------->

    <?php include ("ZFooter2.php")?>

    




</body>

</html>