<?php  
 
include_once ('Config.php');
 include_once ('HEADER.php');
 include ('FOOTER.php'); 
 
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


<?php function getByID($table , $id)
{
    global $conn;
    $query = "SELECT* FROM $table WHERE ID='$id' ";
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
           <?php 
            if(isset($_GET['ID']))
            {
            $id=$_GET['ID'];
            $product = getByID("product",$id);
                if (mysqli_num_rows($product)>0)
                {
                    $data =mysqli_fetch_array($product);
                   ?>
                        <div class="card">
                                    <div class="card-header">
                                        <h4>Edit Product</h4>
                                        <a href="PORDUCT.php" class="btn btn-primary float-end">Back</a>
                                    </div>
                            <div class="card-body">
                                <form action="CADE.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <label class="mb-0">Select Category</label>
                                                        <select name="Category_Id" class="form-select mb-2">
                                                            <option selected>Select Category</option>
                                                            
                                                            <?php
                                                            $categories =getAll("category");

                                                            if(mysqli_num_rows($categories)>0)
                                                            {
                                                                foreach($categories as $item){
                                                                    ?>
                                                                    <option value="<?=$item['ID']; ?>"  <?= $data['Category_ID'] == $item['ID']?'selected':'' ?>   > <?=$item['Cat_Name']; ?></option>
                                
                                                                    <?php
                                                                    } 
                                                                
                                                            }else{
                                                                echo"NO CATEGORY AVAILABLE";
                                                            }  
                                                            ?>   
                                                    
                                                        </select>
                                                </div>

 
                                                <input type="hidden" name="Product_Id"  VALUE ="<?= $data['ID']?>">
                                                <div class="col-md-6">
                                                        <label class="mb-0">Name</label>
                                                        <input type="text" name="NAME" VALUE ="<?= $data['Name']?>"  placeholder="Enter category name" class="form-control mb-2  required">
                                                </div>

                                                <div class="col-md-6">
                                                        <label class="mb-0">Slug</label>
                                                        <input type="text" name="SLUG"  VALUE ="<?= $data['Slug']?>" placeholder="Enter Slug"  class="form-control mb-2" required> 
                                                </div>

                                                <div class="col-md-12">
                                                        <label class="mb-0">Samll Description</label>
                                                        <textarea rows="2" name="Samll_Description" placeholder="Enter Description"  class="form-control mb-2" required> <?= $data['Small_Description']?> </textarea>
                                                </div>                                            

                                                <div class="col-md-12">
                                                        <label class="mb-0">Description</label>
                                                        <textarea rows="2" name="Description" placeholder="Enter Description"  class="form-control mb-2" required> <?= $data['Description']?> </textarea> 
                                                </div> 

                                                <div class="col-md-6">
                                                        <label class="mb-0">Orginal Price</label>
                                                        <input type="text" name="Orginal_price"  VALUE ="<?= $data['Orginal_Price']?>" placeholder="Enter the Orginal_price" class="form-control mb-2" required>
                                                </div>

        
                                            <div class="col-md-6">
                                                        <label class="mb-0">Selling Price</label>
                                                            <input type="text" name="Selling_Price"  VALUE ="<?= $data['Selling_Price']?>" placeholder="Enter the Selling Price"  class="form-control mb-2" required> 
                                                </div>

                                                <div class="col-md-12">
                                                        <label class="mb-0">Upload_Image</label>
                                                        <input type="hidden" name="old_image"  value="<?= $data['Image']?>">
                                                            <input type = "file" name="IMAGE"   class="form-control mb-2">
                                                        <label class="mb-0">Current_Image</label>
                                                        <img src="./UPLOADED_IMAGE_CATEGORY/<?= $data['Image']?>" alt="product_image"  hight ="50px" width="50px">
                                                </div>

                                                <div class="row"> 
                                                    <div class="col-md-6">
                                                            <label class="mb-0">Quantity</label>
                                                            <input type="number" name="Qty"  VALUE ="<?= $data['Qty']?>" placeholder="Enter Quantity"  class="form-control mb-2" required> 
                                                </div>
                                                                                            
                                                    <div class="col-md-3">
                                                            <label class="mb-0">Status</label><br>
                                                            <input type="checkbox" name="Status" <?=$data['Status']=='0'?'':'checked' ?> >
                                                    </div>


                                                    <div class="col-md-3">
                                                            <label class="mb-0">Trending</label><br>
                                                            <input type="checkbox" name="Trending"  <?=$data['Trending']=='0'?'':'checked' ?>>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                        <label class="mb-0">Meta_Title</label>
                                                        <input type="text" name="META_TITLE"  VALUE ="<?= $data['Meta_Title']?>" Paceholder="Enter META_TITLE"  class="form-control mb-2" required> 
                                                </div>

                                                <div class="col-md-12">
                                                        <label class="mb-0">Meta_Keyword</label>
                                                        <textarea rows="2" name="Meta_Keyword" placeholder="Enter Meta_Keyword"  class="form-control mb-2" required> <?= $data['Meta_Keyword']?> </textarea>  
                                                </div>


                                                <div class="col-md-12">
                                                        <label class="mb-0">Meta_Description</label>
                                                        <textarea rows="2" name="META_DESCRIPTION" placeholder="Enter Description"  class="form-control mb-2" required> <?= $data['Meta_Description']?> </textarea>   
                                                </div>


                                               




                                                <div class="col-md-12">
                                                        <button type="submit"  class="btn btn-primary" name="Updt_PRODUCT_SUBMIT">Update</button>
                                                    
                                                </div>
                                        </div>
                                </form>
                            </div>
                        </div> 
                        <?php  


                                }else{
                                    echo "PRODUCT NOT FOUND FOR GIVEN ID";
                                }

                                }else {
                                echo "ID MISSING FROM URL";
                                }
                                ?>
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






