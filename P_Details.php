<?php include_once('script.php');
include_once('Config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylrHome.css">
    <link rel="stylesheet" href="styleCategory.css">
    <link rel="stylesheet" href="styleP_Detail.css">


    
</head>
<body>
    



 <!----------------------------------------------header-------------------------------------------------------------->
 <?php include ("ZHeader2.php")?>
 





 <!----------------single product details----------------------------------------------------------->


 <div class="PDet-Heading">
   <div class="row">

   <div class="col2-com-hd1">
               <h1 class="p-Name">Magic Sofa</h1>
                <p class="p1">Posted 1h ago ,  Colombo</p>
      </div>
      <div class="col2-com-hd2">
           
                <img src="IMAGE/Com-Logo.jpg" WIDTH="125PX"  class="Com-Logo">
             <h1 class="Com-Name">SFA Private Limited</h1>
      </div>

   </div>
      
        
 </div>




 <div class="P_Details">
   <div class="single-p-container" >
       <div class="row">

          <div class="col2">

         
                     
                   <img src="IMAGE/F3.jpg" width="100%" height="550px"  id="productBigImg">

          

                  <div class="small-img-row">

                     <div class="small-img-col">
                        <img src="IMAGE/S1.jpg" width="100%" class="small-img">
                     </div>

  
                     <div class="small-img-col">
                        <img src="IMAGE/S2.jpg" width="100%"  class="small-img">
                     </div>

  
                    <div class="small-img-col">
                       <img src="IMAGE/S3.jpg" width="100%"  class="small-img">
                   </div>

  
                   <div class="small-img-col">
                      <img src="IMAGE/S4.jpg" width="100%"  class="small-img">
                   </div>

                  </div>
          </div>
          



          <div class="col2">

           
            <h4>RS: 100.00</h4>
            <h3>RS: 50. 00</H3>

            <select>
                <option>Select Colour</option>
                <option>Blue Colour</option>
                <option>Red Colour</option>
                <option>Pink Colour</option>
                <option>Maroon Colour</option>
                <option>Black colour</option>
                <option>Yellow Colour</option> 

            </select>

            <input type="number" value="1">
          

            <h4>Product details</h4>
            <p>SOFA PROTECTOR: A must-have for homes with children and pets, this couch cover protects
              furniture from dust, stains, wear, and tear while offering a fresh look. (No matter how
               your sofa looks or feels now, with our slipcover it will seem like a new sofa!）

              HIGH-QUALITY FABRIC: Made of high-quality fabric, this slipcover has a smooth soft feel and is easy to care for.
                Instantly improve the look of any sofa in your home with these stretch couch covers!</p>

            <h4>Contact details</h4>
            <p>Address:22/1,main road , kandy <br>
               WAats app Number:0523698744<br>
               Local call Number: 0123658977<br>
               Mail Address:Loli13@gmail.com<br></p>

        
          </div>
       </div>
   </div>
</div>



<!---------------------------------title------------------------------------------------->

<div class="small-continer">
   <div class="row row-2">
      <h2>Related Products</h2>
      <p class="v-more">View More</P>
   </div>
</div>


<br>
<hr>





<div class="Add">
  <div class="row">
  <img src="IMAGE/coca.jpg" width="1200px" height="200px" >
  </div>
</div>


















    






<!----------------------------------------js for product gallery-------------------------------------------------->

<script>

  var productBigImg = document.getElementById("productImg");
  var smallImg = document.getElementsByClassName("small-img");



  smallImg[0].onclick = function ()
   {
    productImg.src = smallImg[0].src;
  }

  smallImg[1].onclick = function ()
   {
    productImg.src = smallImg[1].src;
  }

  smallImg[2].onclick = function ()
   {
    productImg.src = smallImg[2].src;
  }

  smallImg[3].onclick = function ()
   {
    productImg.src = smallImg[3].src;
  }



</script>











</body>
</html>


