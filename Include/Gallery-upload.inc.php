<?php

include_once 'Config.php';


if(isset($_POST['submit'])){

    $NewFileName = $_POST['NAME'];

    //if($_POST['NAME']){
    //    $NewFileName="Galary";
    //}else{
     //   $NewFileName = strtolower(str_replace("","-",$NewFileName));
    //}
    
    $ImgTitle = $_POST['Title'];
    $ImgDescp = $_POST['Description'];


    $files = $_FILES['IMAGE'];

    $filesName = $_FILES['NAME'];
    $filesType = $_FILES['Type'];
    $filesTempName = $_FILES['tmp_name'];
    $filesError = $_FILES['error'];
    $filesSize = $_FILES['size'];

    $filesExt = explode ("." , $filesName);
    $fileActualExt = strtolwer(end($filesExt));

    $_POST
    

}

?>



