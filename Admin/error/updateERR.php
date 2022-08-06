

////////------------------------UPDATE
//else if
           //(isset($_POST['update_category_SUBMIT']))




        //    <?php
           // >

    // $CAT_ID = $_POST['CATEGORY_ID'];
    // $NAME = $_POST['NAME'];
    // $SLUG = $_POST['SLUG'];
    // $Description = $_POST['Description'];
    // $META_TITLE = $_POST['META_TITLE'];
    // $META_DESCRIPTION = $_POST['META_DESCRIPTION'];
    // $Meta_Keyword = $_POST['Meta_Keyword'];
    // $Status =isset($_POST['Status'])? '1':'0';
    // $Popular= isset($_POST['Popular'])? '1':'0';

    // $new_image = $_FILES['IMAGE']['name'];
    // $old_image = $_POST['old_image'];

    //             if($new_image !="")
    //             {
    //                       $update_fil_nam =$new_image;
    //                       //  $image_ext = pathinfo($image,PATHINFO_EXTENSION);
    //                      //   $update_fil_nam  = time().'.'.$image_ext;
    //             }else{
    //                         $update_fil_nam =$old_image;
     //                         $path = './UPLOADED_IMAGE_CATEGORY';


    //                         redirect("EDIT_CTGRY.php?ID=$CAT_ID" , "went wrong!");
    //             }


   


    //                         $update_query = "UPDATE `category` SET `,
    //                         ,,``Image_Name='[$update_fil_nam]',`Meta_Title`='[$META_TITLE]',
    //                         `MetaDecription`='[$META_DESCRIPTION]',`MetaKeyWord`='[$Meta_Keyword]' WHERE ID='$CAT_ID'";

    //                         $update_query_run = mysqli_query($conn, $update_query);


    //             if($update_query_run)
    //             {
    //                             if($_FILES['IMAGE']['name'] != "")
    //                             {
    //                                         move_uploaded_file ($_FILES['IMAGE']['tmp_name'],$path.'/'.$new_image);
    //                                         if(file_exists ("./UPLOADED_IMAGE_CATEGORY/".$old_image))
    //                                         {
    //                                             unlink ("./UPLOADED_IMAGE_CATEGORY".$old_image);
    //                                         }
    //                             }
    //                             redirect("EDIT_CTGRY.php?ID=$CAT_ID","CATEGORY UPDATED SUCCESSFULLY..!");
    //             }else{
    //                 redirect("EDIT_CTGRY.php?ID=$CAT_ID","update so
    //                 mthing went wrong!");
    //             }