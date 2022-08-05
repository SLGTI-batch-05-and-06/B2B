<?php
include_once ('Config.php');
session_start();
  include_once('script.php'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="StyleAll.css">


</head>
<body>







       <div class="Container py-5">
        <div class="row mt-4">

                <?php
                    $sql = "SELECT * FROM category";
                    $sql_run = mysqli_query($conn, $sql);
                    $check_department =( mysqli_num_rows($sql_run) > 0);

                    if ($check_department) {
                        while ($row = mysqli_fetch_assoc($sql_run))
                        {
                 ?>
                                        
                            <div class="col-md-3 mt-3">
                                <div class="card">
                                
                                    <div class="card-body">
                                    <img src="./UPLOADED_IMAGE_CATEGORY/<?php echo trim($row['Image_Name']);?>" class="card-img-top" width="30px;" height="150px;"  alt="_images">
                                        <h2 class="card-title"><?php  echo ($row['Cat_Name']);?></h2>
                                        <p class="card-text"><?php  echo ($row['Description']);?></p>
                                    </div>
                                </div>
                            </div>

                            <?php
                   
                        }

                    }else{
                        echo "no faclty found";
                    }
                             ?>
                 

        </div>
                
       </div>

        
 





















</body>
</html>


