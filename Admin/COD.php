<?php 





include_once ('Config.php');

include_once ('./FUNCTION/MY_FUNCTN.php');


if (isset($_POST['add_PRODUCT_SUBMIT'])) {

    $Category_Id = $_POST['Category_Id'];

    $NAME = $_POST['NAME'];
    $SLUG = $_POST['SLUG'];
    $Small_Description = $_POST['Samll_Description'];
    $Description = $_POST['Description'];
    $Orginal_price = $_POST['Orginal_price'];
    $Selling_Price = $_POST['Selling_Price'];
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

            $Product_Insert_Query = "INSERT INTO product (Category_ID,Name,Slug,Small_Description,Description,Orginal_Price,Selling_Price,Image,Qty,Status,Trending,Meta_Title,Meta_Keyword,Meta_Keyword) 
            VALUES ('$NAME','$SLUG','$Small_Description','$Description','$Orginal_price','$Selling_Price','$META_TITLE','$META_DESCRIPTION','$Meta_Keyword','$Status','$Trending','$fileName')";

            $Product_Insert_Query_RUN = mysqli_query($conn, $Product_Insert_Query);

            
            if( $Product_Insert_Query_RUN ){
                move_uploaded_file($_FILES['IMAGE']['tmp_name'], $path.'/'.$fileName);
                redirect("START.php","Something went wrong");
            }

    } else {
        
        redirect("CATEGORY.php","ALLfeilds are required");
    }
}




?>
