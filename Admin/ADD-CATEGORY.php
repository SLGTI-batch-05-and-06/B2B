<?php  
 
 include ('HEADER.php');
?>









  <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>
                <div class="card-body">
                    <form action="CADE.php" method="POST" enctype="multipart/form-data">
                       <div class="row">
                           <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" name="NAME" placeholder="Enter category name" class="form-control">

                           </div>
                           <div class="col-md-6">
                                   <label for="">Slug</label>
                                     <input type="text" name="SLUG" placeholder="Enter Slug"  class="form-control">
                            
                           </div>

                           <div class="col-md-12">
                                   <label for="">Description</label>
                                     <input type="textarea" rows="3" name="Description" placeholder="Enter Description"  class="form-control">
                            
                           </div>                           

                           <div class="col-md-12">
                                   <label for="">Upload_Image</label>
                                     <input type = "file" name="IMAGE"   class="form-control">
                           </div>

                           <div class="col-md-12">
                                   <label for="">Meta_Title</label>
                                     <input type="text" name="META_TITLE" Paceholder="Enter META_TITLE"  class="form-control">
                            
                           </div>

                           <div class="col-md-12">
                                   <label for="">Meta_Description</label>
                                     <input type="textarea" rows="3" name="META_DESCRIPTION" placeholder="Enter Description"  class="form-control">
                            
                           </div>

                           <div class="col-md-12">
                                   <label for="">Meta_Keyword</label>
                                     <input type="textarea" rows="3" name="Meta_Keyword" placeholder="Enter Meta_Keyword"  class="form-control">
                            
                           </div>

                           <div class="col-md-12">
                                   <label for="">Status</label>
                                     <input type="checkbox" name="Status">
                            
                           </div>

                           <div class="col-md-12">
                                   <label for="">Popular</label>
                                   <input type="checkbox" name="Popular">
                           </div>

                           <div class="col-md-12">
                                     <button type="submit"  class="btn btn-primary" name="add_category_SUBMIT">Save</button>
                            
                           </div>



                           
                   </div>
                  </form>

                </div>
            </div>                
       </div>
   </div>
</div>


