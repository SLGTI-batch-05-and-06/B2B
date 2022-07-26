<?php include_once("script.php");
include_once('Config.php');?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C2C BUSSINESS</title>


    <!-- <script  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script> -->
  


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylrHome.css">
    <link rel="stylesheet" href="styleCategoryy.css">
    <link rel="stylesheet" href="StyleAccount.css">


</head>

<body class="Acnt">



    <!----------------------------------------------header-------------------------------------------------------------->

    <?php include ("ZHeader2.php");?>





    <!----------------------------------------------Login page------------------------------------------------------------->


  <div class="container" class="Acnt">
       <div class="row">
         <div class="card">
             <div class="Inner-box" id="card">


                  <div class="card-front">
                     <h2>LOGIN</h2>
                     <form>
                          <input type="email" class="input-box" placeholder="Enter Yor Email Id" required>
                          <input type="password" class="input-box" placeholder="Enter Yor Password" required>
                          <button type="submit" class="submit-btn">Submit</button>
                          <input type="checkbox"><span>Remember Me</span>
                     </form>
                     <button type="button" class="Sign-up-btn" onclik="openRegister()">I'm New Here</button>
                     <a href="">Forgot Password</a>
                  </div>



                  <div class="card-back">
                  <h2>REGISTER</h2>
                     <form>
                          <input type="text" class="input-box" placeholder="Enter Yor Name" required>
                          <input type="email" class="input-box" placeholder="Enter Yor Email Id" required>
                          <input type="password" class="input-box" placeholder="Enter Yor Password" required>
                          <button type="submit" class="submit-btn">Submit</button>
                          <input type="checkbox"><span>Remember Me</span>
                     </form>
                     <button type="button" class="Sign-up-btn" onclic="openLogin()">I'h an Account</button>
                     <a href="">Forgot Password</a>

                  </div>
             </div>
         </div> 
     </div> 
  </div>









    <!----------------------------------------------footer------------------------------------------------------------->







    <?php include ("ZFooter2.php");?>







    <!-- ----------------------------open other form---------------------------------->
    <script>
    

        var card= document.getElementById("card");

        function openRegister(){
            card.style.transform="rotateY(-180deg)";
        }

        function openLogin(){
            card.style.transform="rotateY(0deg)";
        }


    </script>



 </body>

</html>