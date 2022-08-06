<?php function getByID($table , $id)
{
    global $conn;
    $query = "SELECT* FROM $table WHERE ID='$id' ";
    return $query_run = mysqli_query($conn,$query);
}
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
function getAllActive($table)
{
    global $conn;
    $query = "SELECT* FROM $table WHERE status='0' ";
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



