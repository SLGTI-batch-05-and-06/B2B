<?php  

 include_once ('HEADER.php');

include_once ('Config.php');
?>


<?php

function getAll($table)
{
    global $conn;
    $query = "SELECT* FROM $table";
    return $query_run = mysqli_query($conn,$query);

}

?>




<div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Categories
        
                    </div>
                    <div class="card-body">
                        <table class="table table-boardered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $category = getAll("CATEGORY");

                                if(mysqli_num_rows($category)>0)
                                {
                                    foreach ($category as $Item) {
                                        ?>
                                                       <tr>
                                                          <td><?= $Item['ID'];?></td>
                                                          <td><?= $Item['Cat_Name'];?></td>

                                                          <td>
                                                            <img src="./UPLOADED_IMAGE_CATEGORY/<?= $Item['Image_Name']; ?>" width="50px" height="50px" alt="<?= $Item['Cat_Name']; ?>">
                                                          </td>
                                                          
                                                          <td><?= $Item['Status']== '0'?"visible":"hidden"?></td>

                                                          <td><a href="EDIT_CTGRY.php?ID=<?= $Item['ID'];?>" class="btn btn-primary">Edit</a>
                                                             
                                                             <form action="CADE.php" method="POST">
                                                                <input type="hidden" name="Category_id" value="<?= $Item['ID'];?>">
                                                             <button type="SUBMIT" class="btn btn-danger" name="Delete_Category_btn">DELETE</button>
                                                             </form>
                                                         </td>
                                                       </tr>

                                        <?php
                                    }

                                }else{
                                    echo"NO RECORD FOUND";
                                }

                                ?>


                                
                            </tbody>
                        
                        </table>
                    </div>



                </div>
                
            </div>
       </div>
  </div>

  
<?php include ('FOOTER.php'); ?>
