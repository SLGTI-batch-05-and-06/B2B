<?php  
 session_start();
 include ('HEADER.php');
 
 include_once ('Config.php');

?>


<?php

function getByID($table , $id)
{
    global $conn;
    $query = "SELECT* FROM $table WHERE ID='$id' ";
    return $query_run = mysqli_query($conn,$query);
}
?>






  <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <?php 
                    if(isset($_GET['ID'])) 
                    {
                        $id = $_GET['ID'];
                        $CAtegory = getByID("category", $id);

                        if(mysqli_num_rows($CAtegory)>0)
                        {
                            $data = mysqli_fetch_array($CAtegory);
                ?>
                <div class="card">
                        <div class="card-header">
                                <h4>Edit Category</h4>
                                <a href="CATEGORY.php" class="btn btn-primary float-end">Back</a>
                        </div>
                <div class="card-body">
                                      <form action="CADE.php" method="POST" enctype="multipart/form-data">
                                          <div class="row">
                                              <div class="col-md-6">
                                                    <input type="hidden" name="CATEGORY_ID" value="<?= $data['ID']?>">
                                                    <label for="">Name</label>
                                                    <input type="text" name="NAME" value="<?= $data['Cat_Name']?>"   placeholder="Enter category name" class="form-control">
                                              </div>

                                              <div class="col-md-6">
                                                      <label for="">Slug</label>
                                                      <input type="text" name="SLUG"  value="<?= $data['Slug']?>" placeholder="Enter Slug"  class="form-control">
                                              </div>

                                              <div class="col-md-12">
                                                      <label for="">Description</label>
                                                      <textarea rows="3" name="Description" placeholder="Enter Description"  class="form-control"><?= $data['Description']?></textarea>
                                              </div>                           

                                              <div class="col-md-12">
                                                      <label for="">Upload_Image</label>
                                                      <input type="hidden" name="old_image" value="<?= trim($data['Image_Name'])?>">
                                                      <input type ="file" name="IMAGE" class="form-control mb-2">

                                                      <label for="">Current_Image</label>
                                                     
                                                      <img src="./UPLOADED_IMAGE_CATEGORY/<?= trim($data['Image_Name']) ?>" width="50px" height="50px" alt="">
                                              </div>

                                              <div class="col-md-12">
                                                      <label for="">Meta_Title</label>
                                                      <input type="text" name="META_TITLE"  value="<?= $data['Meta_Title']?>" Paceholder="Enter META_TITLE"  class="form-control">
                                              </div>

                                              <div class="col-md-12">
                                                      <label for="">Meta_Description</label>
                                                      <textarea rows="3" name="META_DESCRIPTION" placeholder="Enter Description"  class="form-control"><?= $data['MetaDecription']?></textarea>
                                              </div>

                                              <div class="col-md-12">
                                                      <label for="">Meta_Keyword</label>
                                                      <textarea rows="3" name="Meta_Keyword" placeholder="Enter Meta_Keyword"  class="form-control"><?= $data['MetaKeyWord']?></textarea>                                          
                                              </div>

                                              <div class="col-md-12">
                                                      <label for="">Status</label>
                                                      <input type="checkbox" <?= $data['Status']?"checked":"" ?>  name="Status">                          
                                              </div>

                                              <div class="col-md-12">
                                                      <label for="">Popular</label>
                                                      <input type="checkbox"  <?= $data['Popular']?"checked":"" ?> name="Popular">
                                              </div>

                                              <div class="col-md-12">
                                                      <button type="submit"  class="btn btn-primary" name="update_category_SUBMIT">Update</button>
                                              </div>
                                         </div>
                                    </form>
                          </div>
                        
                </div>
                           

                                  
                              <?php
                                  }else{
                                      echo "category not found";
                                  }
                              }else{
                                  echo "ID missing from ur";
                              }
                              ?>
            </div>
       </div>
  </div>



<?php include ('FOOTER.php'); ?>
