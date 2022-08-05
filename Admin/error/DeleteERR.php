

//else if(isset($_POST['Delete_Category_btn']))
//{ 
//     $Category_id= mysqli_real_escape_string($conn, $_POST['Category_id']);

//     $delete_query ="SELECT * FROM category WHERE ID='$Category_id' ";
//     $delete_query_RUN = mysqli_query($conn, $delete_query);
//    // $category_Data = mysqli_fetch_array($delete_query_RUN);
//     //$image =$category_Data['Image_Name'];

//     $delete_query= "DELETE FROM 'category' WHERE ID='Category_id'";
//     $delete_query_RUN =mysqli_query($conn , $delete_query);



//     if($delete_query_RUN)
//     {
//        // if(file_exists("./UPLOADED_IMAGE_CATEGORY/".$image))
//         //    {
//         //        unlink("./UPLOADED_IMAGE_CATEGORY".$image);
//           //  }
//         redirect("CATEGORY.php","CATEGORY DELETED SUCCESSFULLY!!");     
//     }
//     else{
//         redirect("CATEGORY.php","SOMTHING WENT WRONG!!");
//     }
//}






?>

















<!-- <php



//if(isset($_GET['delete'])){
 // $id = $_GET['delete'];
//  mysqli_query($conn, "DELETE FROM category WHERE ID = $id");
 // header('location:CATEGORY.php');
};     
                                                                
while($row = mysqli_fetch_assoc($select)){ ?>
<tr>

<td><= $Item['ID']; ?></td>
<td><php echo $row['Cat_Name']; ?></td>
<td><= $Item['Status'] == '0'?"visible":"hidden"?></td>
<td><img src="./UPLOADED_IMAGE_CATEGORY/<php echo trim($row['Image_Name']); ?>" height="100" alt="">

<td>
<a href="EDIT_CTGRY.php?ID=<=$Item['ID'];?>" class="btn btn-primary">Edit</a>

<a href="CATEGORY.php?delete=<php echo $row['ID']; ?>" class="btn btn-primary"> <i class="fas fa-trash"></i> Delete </a>
</td>
</tr>
<?php
 //}
 ?>
</table>

 -->