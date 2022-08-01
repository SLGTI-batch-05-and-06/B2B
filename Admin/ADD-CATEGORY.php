<?php  
 
 include ('HEADER.php');
?>




<!-- <PH 

include_once 'Config.php';
session_start();

if(isset($_POST['add_category_SUBMIT'])){


    $NAME = mysqli_real_escape_string($conn,$_POST['NAME']);
    $SLUG = mysqli_real_escape_string($conn,$_POST['SLUG']);
    $Description =mysqli_real_escape_string ($conn,$_POST['Description']);
    $META_TITLE = mysqli_real_escape_string($conn,$_POST['META_TITLE']);
    $META_DESCRIPTION = mysqli_real_escape_string($_POST['META_DESCRIPTION']);
    $Meta_Keyword = mysqli_real_escape_string($_POST['Meta_Keyword']);
    $Status =isset($_POST['Status']) ? '1':'0';
    $Popular= isset($_POST['Popular']) ? '1':'0';


    $image = $_FILES['IMAGE']['name'];
    $image_size = $_FILES['IMAGE']['size'];
    $image_tmp_name = $_FILES['IMAGE']['tmp_name'];
    $image_folder = 'UPLOADED_IMAGE/'.$image;

  
            
           //CHECK PASSWORD
          
           if($image_size > 2000000){
            $Message[]='Image size is too large!';

           } else{
            $insert = mysqli_query ($conn,"INSERT INTO user_info (Cat_Name,Slug,Description,Status ,Popular,Image_Name,Meta_Title ,
            MetaDecription 	,MetaKeyWord,) 
            VALUES (''$NAME','$SLUG','$Description','$META_TITLE','$META_DESCRIPTION','$Meta_Keyword','$Status','$Popular' ,'$image)")or die('query failed2');

               if($insert){
                move_uploaded_file($image_tmp_name,$image_folder);
                $Message[]='Registerd Successfully!';
                header('location:Login.php');
               }else{
                $Message[]='Registration failed!';
               }
           }
       

}
?> -->








  <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>
                <div class="card-body">
                    <form action="CADE.php" method="POST" enctype="multipart/form-data">
                       <div class="row">
                           <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" name="NAME" placeholder="Enter category name" class="form-control">

                           </div>
                           <div class="col-md-6">
                                   <label for="">Slug</label>
                                     <input type="text" name="SLUG" placeholder="Enter Slug"  class="form-control">
                            
                           </div>

                           <div class="col-md-12">
                                   <label for="">Description</label>
                                     <input type="textarea" rows="3" name="Description" placeholder="Enter Description"  class="form-control">
                            
                           </div>                           

                           <div class="col-md-12">
                                   <label for="">Upload_Image</label>
                                     <input type = "file" name="IMAGE"   class="form-control">
                           </div>

                           <div class="col-md-12">
                                   <label for="">Meta_Title</label>
                                     <input type="text" name="META_TITLE" Paceholder="Enter META_TITLE"  class="form-control">
                            
                           </div>

                           <div class="col-md-12">
                                   <label for="">Meta_Description</label>
                                     <input type="textarea" rows="3" name="META_DESCRIPTION" placeholder="Enter Description"  class="form-control">
                            
                           </div>

                           <div class="col-md-12">
                                   <label for="">Meta_Keyword</label>
                                     <input type="textarea" rows="3" name="Meta_Keyword" placeholder="Enter Meta_Keyword"  class="form-control">
                            
                           </div>

                           <div class="col-md-12">
                                   <label for="">Status</label>
                                     <input type="checkbox" name="Status">
                            
                           </div>

                           <div class="col-md-12">
                                   <label for="">Popular</label>
                                   <input type="checkbox" name="Popular">
                           </div>

                           <div class="col-md-12">
                                     <button type="submit"  class="btn btn-primary" name="add_category_SUBMIT">Save</button>
                            
                           </div>



                           
                       </div>
                    </form>

                    
                    
                </div>




                </div>
                
            </div>
       </div>
  </div>



<?php include ('FOOTER.php'); ?>
