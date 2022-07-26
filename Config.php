<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "B2B";

$conn = NEW MYSQLI($servername,$username ,$password,$dbname);

//chek connection
if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
   
}
?>
    
