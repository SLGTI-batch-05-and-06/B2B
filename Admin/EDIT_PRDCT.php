<?php  
 
include_once ('Config.php');
 include_once ('HEADER.php');
 
?>
 <link rel="stylesheet" href="StyleAll.css">


<?php
function getAll($table)
{
    global $conn;
    $query = "SELECT* FROM $table";
    return $query_run = mysqli_query($conn,$query);
}
?>




<?php
    if (isset ($Message))
    {
        foreach($Message as $Message) {
            echo '<div class ="message" onclick="this.remove();">'.$Message.'</div>';
        }
    }
?>








 <div class="container">
     <div class="row ">
          <div class="col-md-12">
                <div class="card">
                            <div class="card-header">
                                <h4>Edit Product</h4>
                            </div>
                     <div class="card-body">
                         <form action="CADE.php" method="POST" enctype="multipart/form-data">
                                 <div class="row">
                                        <div class="col-md-12">
                                            <?php 
                                            ?>




                                                <label class="mb-0">Select Category</label>
                                                <select name="Category_Id" class="form-select mb-2">
                                                    <option selected>Select Category</option>
                                                    
                                                    <?php
                                                    $categories =getAll("category");

                                                    if(mysqli_num_rows($categories)>0)
                                                    {
                                                        foreach($categories as $item){
                                                            ?>
                                                            <option value="<?=$item['ID']; ?>"> <?=$item['Cat_Name']; ?></option>
                        
                                                            <?php
                                                            } 
                                                        
                                                    }else{
                                                        echo"NO CATEGORY AVAILABLE";
                                                    }  
                                                    ?>   
                                            
                                                </select>
                                        </div>


                                        <div class="col-md-6">
                                                <label class="mb-0">Name</label>
                                                <input type="text" name="NAME" placeholder="Enter category name" class="form-control mb-2  required">
                                        </div>

                                        <div class="col-md-6">
                                                <label class="mb-0">Slug</label>
                                                <input type="text" name="SLUG" placeholder="Enter Slug"  class="form-control mb-2" required> 
                                        </div>

                                        <div class="col-md-12">
                                                <label class="mb-0">Samll Description</label>
                                                <input type="textarea" rows="3" name="Samll_Description" placeholder="Enter Description"  class="form-control mb-2" required> 
                                        </div>                                            

                                        <div class="col-md-12">
                                                <label class="mb-0">Description</label>
                                                <input type="textarea" rows="3" name="Description" placeholder="Enter Description"  class="form-control mb-2" required> 
                                        </div> 

                                        <div class="col-md-6">
                                                <label class="mb-0">Orginal Price</label>
                                                <input type="text" name="Orginal_price" placeholder="Enter the Orginal_price" class="form-control mb-2" required>
                                        </div>

 
                                       <div class="col-md-6">
                                                <label class="mb-0">Selling Price</label>
                                                    <input type="text" name="Selling_Price" placeholder="Enter the Selling Price"  class="form-control mb-2" required> 
                                        </div>

                                        <div class="col-md-12">
                                                <label class="mb-0">Upload_Image</label>
                                                    <input type = "file" name="IMAGE"   class="form-control mb-2" required>
                                        </div>

                                        <div class="row"> 
                                            <div class="col-md-6">
                                                    <label class="mb-0">Quantity</label>
                                                    <input type="number" name="Qty" placeholder="Enter Quantity"  class="form-control mb-2" required> 
                                        </div>
                                                                                    
                                            <div class="col-md-3">
                                                    <label class="mb-0">Status</label><br>
                                                    <input type="checkbox" name="Status">
                                            </div>


                                            <div class="col-md-3">
                                                    <label class="mb-0">Trending</label><br>
                                                    <input type="checkbox" name="Trending">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                                <label class="mb-0">Meta_Title</label>
                                                <input type="text" name="META_TITLE" Paceholder="Enter META_TITLE"  class="form-control mb-2" required> 
                                        </div>


                                        <div class="col-md-12">
                                                <label class="mb-0">Meta_Description</label>
                                                <input type="textarea" rows="3" name="META_DESCRIPTION" placeholder="Enter Description"  class="form-control mb-2" required>    
                                        </div>


                                        <div class="col-md-12">
                                                <label class="mb-0">Meta_Keyword</label>
                                                <input type="textarea" rows="3" name="Meta_Keyword" placeholder="Enter Meta_Keyword"  class="form-control mb-2" required>  
                                        </div>




                                        <div class="col-md-12">
                                                <button type="submit"  class="btn btn-primary" name="Updt_PRODUCT_SUBMIT">Update</button>
                                            
                                        </div>
                                </div>
                        </form>
                     </div>
                 </div> 
          </div>
       </div>
  </div>


       

  
       <?php
        if (isset ($Message)){
            foreach($Message as $Message) {
                echo '<div class ="message" onclick="this.remove();">'.$Message.'</div>';
            }
        }
        ?>





<?php include ('FOOTER.php'); ?>
