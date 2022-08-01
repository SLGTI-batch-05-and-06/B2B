<!-- <php
session_start();

function redirect($url,$message)

$_SESSION['message'] =$message;
header ('Location:'.$url);
exit();




<?php 

include_once ('Config.php');
//include_once ('FUNCTION/MY_FUNCTN.php');







if(isset($_POST['add_category_SUBMIT']))
{
    $NAME = $_POST['NAME'];
    $SLUG = $_POST['SLUG'];
    $Description = $_POST['Description'];
    $META_TITLE = $_POST['META_TITLE'];
    $META_DESCRIPTION = $_POST['META_DESCRIPTION'];
    $Meta_Keyword = $_POST['Meta_Keyword'];
    $Status =isset($_POST['Status']) ? '1':'0';
    $Popular= isset($_POST['Popular']) ? '1':'0';





    $image = $_FILES['IMAGE']['name'];
                               
    $path = './UPLOADED_IMAGE_CATEGORY';
    $image_ext = pathinfo($image,PATHINFO_EXTENSION);
    $fileName=time().'.'.$image_ext;




    $insert = "INSERT INTO  category  (Cat_Name, Slug,Description ,Meta_Title, MetaDecription,MetaKeyWord ,Status ,Popular, Image_Name ) 
    VALUES ('$NAME','$SLUG','$Description','$META_TITLE','$META_DESCRIPTION','$Meta_Keyword','$Status','$Popular' ,' $fileName')"
    or die('query failed2');



    $insert_run = mysqli_query($conn, $insert);

    if( $insert_run){
        move_uploaded_file($_FILES['IMAGE']['tmp_name'], $path.'/'.$fileName);
        redirect("ADD-CATEGORY.php","CAT ADD");

    }else{
        redirect("ADD-CATEGORY.php","Something went wrong");

    }








}
else if(isset($_POST['update_category_SUBMIT']))
{
    $CAT_ID = $_POST['CATEGORY_ID'];
    $NAME = $_POST['NAME'];
    $SLUG = $_POST['SLUG'];
    $Description = $_POST['Description'];
    $META_TITLE = $_POST['META_TITLE'];
    $META_DESCRIPTION = $_POST['META_DESCRIPTION'];
    $Meta_Keyword = $_POST['Meta_Keyword'];
    $Status =isset($_POST['Status']) ? '1':'0';
    $Popular= isset($_POST['Popular']) ? '1':'0';





    $new_image = $_FILES['IMAGE']['name'];
    $old_image = $_POST['old_image'];

    if($new_image !="")
    {
      //  $update_fil_nam =$new_image;

        $image_ext = pathinfo($image,PATHINFO_EXTENSION);
        $update_fil_nam  =time().'.'.$image_ext;


    }else{
        $update_fil_nam =$old_image;
    }


    $path = './UPLOADED_IMAGE_CATEGORY';

    $update_query = "UPDATE 'category' SET Cat_Name ='$NAME',Slug='$SLUG',Description='$Description' ,Meta_Title='$META_TITLE',
     MetaDecription='$META_DESCRIPTION',MetaKeyWord='$Meta_Keyword' ,Status='$Status' ,Popular='$Popular', Image_Name='$update_fil_nam'
     WHERE ID='$CAT_ID'";

     $update_query_run = mysqli_query($conn, $update_query);

     if($update_query_run)
     {
        if($_FILES['IMAGE']['name'] != "")
        {
            move_uploaded_file($_FILES['IMAGE']['tmp_name'], $path.'/'.$update_fil_nam );
            if(file_exists("./UPLOADED_IMAGE_CATEGORY/".$old_image))
            {
                unlink("./UPLOADED_IMAGE_CATEGORY".$old_image);
            }
        }
        redirect("EDIT_CTGRY.php?ID=$CAT_ID","CATEGORY UPDATED SUCCESSFULLY");

     }else{
        redirect("EDIT_CTGRY.php?ID=$CAT_ID","update somthing went wrong!");
     }

}
else if(isset($_POST['Delete_Category_btn']))
{
    $Category_id= mysqli_real_escape_string($conn, $_POST['Category_id']);
    
    $category_query ="SELECT * FROM cayegory WHERE ID='$Category_id' ";
    $category_query_RUN = mysqli_query($conn, $category_query);
    $category_Data = mysqli_fetch_array($category_query_RUN);
    $image =$category_Data['Image_Name']

    $delete_query="DELETE FROM 'category' WHERE ID='Category_id'";
    $delete_query_RUN =mysqli_query($conn , $delete_query);



    if($delete_query_RUN)
    {

        if(file_exists("./UPLOADED_IMAGE_CATEGORY/".$image))
            {
                unlink("./UPLOADED_IMAGE_CATEGORY".$image);
            }


        redirect("CATEGORY.php","CATEGORY DELETED SUCCESSFULLY!!");

        
    }
    else{
        redirect("CATEGORY.php","SOMTHING WENT WRONG!!");
    }
}






?>
