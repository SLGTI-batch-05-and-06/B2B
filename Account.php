<?php include_once("script.php");?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C2C BUSSINESS</title>


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylrHome.css">
    <link rel="stylesheet" href="styleCategoryy.css">
    <link rel="stylesheet" href="StyleAccount.css">


</head>

<body class="Acnt">



    <!----------------------------------------------header-------------------------------------------------------------->

    <?php include ("ZHeader2.php")?>>





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





  

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col1">
                    <h3> Download Our App</h3>
                    <p>Download for Android Mobile and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="IMAGE/images (5).png">
                        <img src="IMAGE/images (6).png">
                    </div>
                </div>
                <div class="footer-col2">
                    <h3>More From TakTook</h3>
                    <ul>
                        <li><a href="#">Sell Fast </a></li>
                        <li><a href="#">Membership </a></li>
                        <li><a href="#">Banner Ads </a></li>
                    </ul>
                </div>

                <div class="footer-col3">
                    <h3> Help & Suppor</h3>
                    <ul>
                        <li><a href="#">FAQ </a></li>
                        <li><a href="#">Sell Fast </a></li>
                        <li><a href="#">Privacy Policy </a></li>

                    </ul>
                </div>

                <div class="footer-col4">
                    <h3> Follow us</h3>
                    <ul>
                        <li><a href="#">Facebook </a></li>
                        <li><a href="#">Twittwer</a></li>
                        <li><a href="#">Instagram </a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>

                <div class="logo1">
                    <img src="IMAGE/LOGOH.png" width="155px">
                </div>


            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Easy Tutorials</p>
        </div>
    </div>











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