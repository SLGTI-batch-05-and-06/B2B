<?php  
session_start();
include('./FUNCTION/USR_FUNTN.php');
include_once('script.php'); 



function getBy_Slug_ACTIVE($Slug)
    {
        global $conn;
        $query = "SELECT * FROM product WHERE Slug='$Slug'AND Status='1' ";
        return $query_run = mysqli_query($conn,$query);
    }









if(isset($_GET['product_ID']))
{

    $Slug = $_GET['product_ID'];
    $PRDCT_Details = getBy_Slug_ACTIVE($Slug);
    $PRDCT_Details_RUN=mysqli_fetch_array($PRDCT_Details);

    if($PRDCT_Details_RUN)
    {     ?>  
                         <div class="py-3 bg-primary">
                                <div class="container">
                                    <h6 class="text-white">
                                    <a class="text-white" href="CATEGORY.php">
                                        Home /
                                     </a>
                                        <a class="text-white" href="USR_CTGRY.php">
                                        Collection/</a>
                                        
                                        <?= $PRDCT_Details_RUN['Name']; ?> 
                                        </h6>
                                </div>
                            </div>

                       
                            <div class="bg-light py-4">

                             


                   
                        
                                    <div class="container mt-3">
                                    <div class="row">
                                            <div class="col-md-4">
                                                <div class="shadow">
                                                    <img src="./UPLOADED_IMAGE_CATEGORY/<?= trim($PRDCT_Details_RUN['Image']); ?>" alt="Product_Image"  class="w-100">
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class = "fw-bold"><?= $PRDCT_Details_RUN['Name'];?>
                                            <span class="float-end text-danger"><?php  if($PRDCT_Details_RUN['Trending']){ echo "Trending";}  ?></span>
                                            </h4>
                                                <hr>
                                                <p><?= $PRDCT_Details_RUN['Small_Description'];?></p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5> Rs <s class="text-danger"><?= $PRDCT_Details_RUN['Orginal_Price'];?> </s></h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5>Rs  <span class="text-success fw-bold"> <?= $PRDCT_Details_RUN['Selling_Price'];?> </span>  </h5>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h6>Product Description :</h6>
                                                <p><?= $PRDCT_Details_RUN['Description'];?></p>

                                            </div>
                                        </div>
                                    </div>
                            </div>

        <?php
    }else{
    echo"PRODUCT NOT FOUND!!!";
     }



    
}else{
    echo"somthng wnt wrng";
 }
 
 
  include ('FOOTER.php'); ?>