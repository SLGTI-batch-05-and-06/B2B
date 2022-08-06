<?php  
session_start();
include('./FUNCTION/USR_FUNTN.php');

if(isset($_GET['CATGRY']))
{


    function getBy_Slug_ACTIVE($Slug)
    {
        global $conn;
        $query = "SELECT * FROM category WHERE Slug='$Slug'AND Status='1' ";
        return $query_run = mysqli_query($conn,$query);
    }

    

             $Slug = $_GET['CATGRY'];
             $Cat_Details = getBy_Slug_ACTIVE($Slug);
             $category=mysqli_fetch_array($Cat_Details);
             if($category){

                $CID = $category['ID'];

                            ?>



                            

                            <div class="py-3 bg-primary">
                                <div class="container">
                                    <h6 class="text-white">
                                    <a class="text-white" href="CATEGORY.php">
                                        Home /
                                     </a>
                                        <a class="text-white" href="CATEGORY.php">
                                        Collection/</a>
                                        
                                        <?= $category['Cat_Name']; ?> 
                                        </h6>
                                </div>
                            </div>



                            <div class="py-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <h1><?= $category['Cat_Name'];?></h1>
                                            <hr>
                                            <div class="row">
                                                    <?php
                                                        $product =  getProductByCategory($CID);
                                                        if(mysqli_num_rows($product)>0)
                                                        {
                                                                foreach($product as $Item){
                                                                    ?>
                                                                    
                                                                    <div class="col-md-3 mb-2">
                                                                        <a href="#">
                                                                            <div class="card shadow">
                                                                                <div class="card-body">
                                                                                    <img src="./UPLOADED_IMAGE_CATEGORY/<?= trim($Item['Image']); ?>" alt="Product Image" class="w-100">
                                                                                    <h4 class="text-center"><?= $Item['Name']; ?></h4>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        </div>
                                                                    
                                                                <?php
                                            

                                                                }
                                                            
                                                        }
                                                        else{
                                                            echo"NO CATEGORY AVAILABE!!!";
                                                        }

                                                    ?>

                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>

     <?php
            }
        else{
               echo"Something WENT WRONG!!!";
            }


}else{
   echo"somthng wnt wrng";
}


 include ('FOOTER.php'); ?>