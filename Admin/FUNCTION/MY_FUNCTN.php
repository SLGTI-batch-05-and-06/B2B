<?php function getByID($table , $id)
{
    global $conn;
    $query = "SELECT* FROM $table WHERE ID='$id' ";
    return $query_run = mysqli_query($conn,$query);
}
?>
