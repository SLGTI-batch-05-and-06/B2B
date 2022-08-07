<?php  
session_start();
include('./FUNCTION/USR_FUNTN.php');

?>

<link rel="stylesheet" href="zUSR_CTGRY.css">


<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">Home / Collection</h6>
    </div>
</div>



<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Colllection</h1>
                <hr>
                   <div class="row">
                        <?php
                            $categories =  getAllActive("category");
                            if(mysqli_num_rows($categories)>0)
                            {
                                    foreach($categories as $Item){
                                        ?>
                                          
                                           <div class="col-md-3 mb-2">
                                              <a href="USR_PRDCT.php?CATGRY=<?=($Item['Slug']); ?>">
                                                  <div class="card ">
                                                      <div class="card-body">
                                                          <img src="./UPLOADED_IMAGE_CATEGORY/<?= trim($Item['Image_Name']); ?>" alt="Category Image" class="Cat_Img">
                                                          <P class="P_CAT_NAM"><?= $Item['Cat_Name']; ?></P>  
                                                      </div>
                                                  </div>
                                              </a>
                                            </div>
                                        
                                    <?php
                

                                    }
                                
                            }
                            else{
                                echo"NO CATEGORY AVAILABE";
                            }

                         ?>

                   </div>
              
            </div>
        </div>
    </div>
</div>































<?php include ('FOOTER.php'); ?>