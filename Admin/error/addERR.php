

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

