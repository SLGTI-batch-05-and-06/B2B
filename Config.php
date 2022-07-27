<?php
//$servername = "localhost";
//$username = "root";
//$password="";
//$dbname = "B2B";

//$conn = NEW mysqli($servername,$username ,$password,$dbname);

//chek connection
//if ($conn->connect_error){
 //   die("connection failed:" .$conn->connect_error);
   
//}

$conn = mysqli_connect ('localhost','root','','b2b') or die('connection failed');

//if(mysqli_connect_errno())
//{
//  echo "connection error:".mysqli_connect_error();
//}?>
    
