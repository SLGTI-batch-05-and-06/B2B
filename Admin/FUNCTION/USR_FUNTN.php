<?php
include_once ('Config.php');
include_once('script.php'); 
?>




<?php
function getAllActive($table)
{
    global $conn;
    $query = "SELECT* FROM $table WHERE status='1' ";
    return $query_run = mysqli_query($conn,$query);
}
?>

<?php
function getAll($table)
{
    global $conn;
    $query = "SELECT* FROM $table";
    return $query_run = mysqli_query($conn,$query);
}
?>




<?php function getIDActive($table , $id)
{
    global $conn;
    $query = "SELECT* FROM $table WHERE ID='$id' AND Status='1' ";
    return $query_run = mysqli_query($conn,$query);
}
?>

<?php function getProductByCategory($Category_ID)
{
    global $conn;
    $query = "SELECT* FROM product WHERE Category_ID='$Category_ID' AND Status='1'";
    return $query_run = mysqli_query($conn,$query);
}
?>


