<?php  
session_start();
  include_once('script.php'); 
  include_once ('HEADER.php');
  include_once ('Config.php');
?>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="CategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>












<?php

function getAll($table)
{
    global $conn;
    $query = "SELECT* FROM $table";
   return $query_run = mysqli_query($conn, $query);
}
?>

<div class="container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                       <H4> PRODUCTS</H4>
                    </div>

                    <div class="card-body">

                        <!-- <php  $query = "SELECT * FROM category";
                        $query_run = mysqli_query($conn , $query);
                        if(mysqli_num_rows($query_run) > 0){
                        ?>  -->
                            <table class="table table-boardered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>


                        <tbody>
                            <?php

                            $product = getAll("product");
                            if(mysqli_num_rows($product)>0)
                            {
                              foreach($product as $Item)
                               { 
                            //             $select= mysqli_query ($conn,"select *  from category ");

                            //             if(isset($_GET['delete'])){
                            //                     $id = $_GET['delete'];
                            //                     mysqli_query($conn, "DELETE FROM category WHERE ID = $id");
                                            
                            //             };                                                                        
                            //             while($row = mysqli_fetch_assoc($select))
                            //             { 
                                                ?>
                                            <tr>

                                            <td><?= $Item['ID']; ?></td>
                                            <td><?php echo $Item['Name']; ?></td>
                                            <td><?= $Item['Status'] == '0'?"visible":"hidden"?></td>
                                            <td><img src="./UPLOADED_IMAGE_CATEGORY/<?php echo trim($Item['Image']); ?>" height="100" alt="">

                                            <td>
                                            <a href="EDIT_PRDCT.php?ID=<?=$Item['ID'];?>" class="btn btn-primary">Edit</a>
                                           <!-- <a href="Colllection.php?edit=<?php echo $Item['ID'];?>" class="btn btn-primary">Edit</a>-->
                                           </td>

                                           <td>
                                           <form action="Edt_Product_btn" method="$_POST">
                                                 <input type="hidden" name="PRODUCT_ID" value="<?=$Item['ID'];?> ">
                                                  <button type ="submit" class="btn btn-danger" name="Delete_product_btn">Delete</button>
                                           </form>

                                          <!---  <a href="CATEGORY.php?delete=<?php echo $Item['ID']; ?>" class="btn btn-primary"> <i class="fas fa-trash"></i> Delete </a>--->
                                            </td>
                                            </tr>
                                            <?php 
                                }
                             }else{
                              echo "no recors found";
                             }                
                        //    }
                                                         ?>
                                                    </table>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                            //        }  
                                ?>                            
                            </tbody>

                       </table>

                  </div>
               </div> 
            </div>
       </div>
   </div>

  
<?php include ('FOOTER.php'); ?>
