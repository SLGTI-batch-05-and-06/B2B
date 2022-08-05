<?php  
session_start();
  include_once('script.php'); 

  include_once ('Config.php');
?>






<?php



$id = $_GET['edit'];

if(isset($_POST['update_category_SUBMIT'])){

   $product_name = $_POST['NAME'];
   $product_image = $_FILES['IMAGE']['name'];
   $product_image_tmp_name = $_FILES['IMAGE']['tmp_name'];
   $product_image_folder = 'UPLOADED_IMAGE_CATEGORY/'.$product_image;
   
   

   if(empty($product_name)  || empty($product_image)){
      $message[] = 'Please fill out all!';    
   }else{

      $update_data = "UPDATE category SET Cat_Name='$product_name', Image_Name='$product_image'  WHERE ID = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:CATEGORY.php');
      }else{
         $message[] = 'Please fill out all!'; 
      }

   }
};

?>







<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">
<div class="admin-product-form-container centered">

   <?php
      
      
      $select = mysqli_query($conn, "SELECT * FROM category WHERE ID = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the category</h3>
      
      <input type="text" class="box" name="NAME" value="<?php echo $row['Cat_Name']; ?>" placeholder="Enter the category name">
      <input type="file" class="box" name="IMAGE"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="Update_category" name="update_category_SUBMIT" class="btn">
      <a href="EDIT_CTGRY.php" class="btn">Go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>