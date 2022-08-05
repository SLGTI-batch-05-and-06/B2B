<?php
        if (isset ($Message)){
            foreach($Message as $Message) {
                echo '<div class ="message" onclick="this.remove();">'.$Message.'</div>';
            }
        }
        ?>
<?php



include_once ('Config.php');
session_start();
function redirect($url , $message)
{
    $_SESSION['message'] =$message;
header ('Location:'.$url);
exit();
}
?>








<!-----------------------------ADD---------------------------->
<?php 

include_once ('Config.php');
include_once ('./FUNCTION/MY_FUNCTN.php');
 //include ('FOOTER.php'); 



if(isset($_POST['add_category_SUBMIT'])){
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

  // if(file_exists("./UPLOADED_IMAGE_CATEGORY/".$_FILES['IMAGE']['name'];))
  // {
  //     $store = $_FILES['IMAGE']['name'];
  //     $_SESSION['$Message'] = "Image already existis!.'.$store'";
  //     header('Location:CATEGORY.php');
  // }else{
    $insert = "INSERT INTO  category  (Cat_Name, Slug,Description ,Meta_Title, MetaDecription,MetaKeyWord ,Status ,Popular, Image_Name ) 
    VALUES ('$NAME','$SLUG','$Description','$META_TITLE','$META_DESCRIPTION','$Meta_Keyword','$Status','$Popular' ,' $fileName')"
    or die('query failed2');

    $insert_run = mysqli_query($conn, $insert);

    if( $insert_run){
        move_uploaded_file($_FILES['IMAGE']['tmp_name'], $path.'/'.$fileName);
        redirect("ADD-CATEGORY.php","CATEGORY ADDED SUCCESSFULLY!");
    }else{
        redirect("ADD-CATEGORY.php","Something went wrong");
    }
   //}


   //<!------------------------------UPDATE--------------------------->
}else if (isset($_POST['update_category_SUBMIT'])) {
                $id = $_POST['CATEGORY_ID'];
                $NAME = $_POST['NAME'];
                $SLUG = $_POST['SLUG'];
                $Description = $_POST['Description'];
                $META_TITLE = $_POST['META_TITLE'];
                $META_DESCRIPTION = $_POST['META_DESCRIPTION'];
                $Meta_Keyword = $_POST['Meta_Keyword'];
                $Status =isset($_POST['Status'])? '1':'0';
                $Popular= isset($_POST['Popular'])? '1':'0';


                $images = $_FILES['IMAGE']['name'];
                $old_image = $_POST['old_image'];
           


                $sql = "UPDATE category SET Image_Name='$images',Cat_Name='$NAME',Description='$Description',`Slug`='$SLUG',`Status`='$Status' ,
                `Popular`='$Popular',`Meta_Title`='$META_TITLE' , `MetaDecription`='$META_DESCRIPTION',`MetaKeyWord`='$Meta_Keyword'  WHERE ID='$id'";
                $sql_run = mysqli_query($conn, $sql);

                if ($sql_run) {
                    move_uploaded_file($_FILES["IMAGE"]["tmp_name"], "upload/".$_FILES["IMAGE"]["name"]);
                    redirect ("Updated Successfully");
                    header('location:inventory.php');
                } else {
                    redirect ("Data Not Updated");
                    header('ADD-CATEGORY.php:inventory.php');
                }



}elseif (isset($_POST['add_PRODUCT_SUBMIT'])) {

    $Category_Id = $_POST['Category_Id'];

    $NAME = $_POST['NAME'];
    $SLUG = $_POST['SLUG'];
    $Small_Description = $_POST['Samll_Description'];
    $Description = $_POST['Description'];
    $Orginal_price = $_POST['Orginal_price'];
    $Selling_Price = $_POST['Selling_Price'];
    $Qty=$_POST['Qty'];
    $META_TITLE = $_POST['META_TITLE'];
    $META_DESCRIPTION = $_POST['META_DESCRIPTION'];
    $Meta_Keyword = $_POST['Meta_Keyword'];
    $Status =isset($_POST['Status']) ? '1':'0';
    $Trending = isset($_POST['Trending']) ? '1':'0';

    $image = $_FILES['IMAGE']['name'];
                               
    $path = './UPLOADED_IMAGE_CATEGORY';
    $image_ext = pathinfo($image,PATHINFO_EXTENSION);
    $fileName=time().'.'.$image_ext;


    if($NAME !="" && $SLUG != "" && $Description !=""){

            $Product_Insert_Query = "INSERT INTO product (Category_ID,Name,Slug,Small_Description,Description,Orginal_Price,Selling_Price,Image,Qty,Status,Trending,Meta_Title,Meta_Keyword,Meta_Description) 
            VALUES ('$Category_Id','$NAME','$SLUG','$Small_Description','$Description','$Orginal_price','$Selling_Price','$fileName','$Qty','$Status','$Trending','$META_TITLE','$Meta_Keyword','$META_DESCRIPTION')";

            $Product_Insert_Query_RUN = mysqli_query($conn, $Product_Insert_Query);

            
            if( $Product_Insert_Query_RUN ){
                move_uploaded_file($_FILES['IMAGE']['tmp_name'], $path.'/'.$fileName);
                redirect("START.php","poroduct add sucessfully");
            
            }else {
        
            redirect("ADD-PORDUCT.php","SOMTHING WENT WRONG");
        }


    } else {
        
        redirect("ADD-PORDUCT.php","ALLfeilds are required");
    }
}elseif (isset ($_POST['Updt_PRODUCT_SUBMIT'])){
    
}




?>




























                             
