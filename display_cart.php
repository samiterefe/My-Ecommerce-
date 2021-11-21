<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = new mysqli($server,$username,$password,$dbname);
if($conn!=TRUE)
echo "error:".$conn->connect_error;

$sql = "SELECT * FROM cart";
       $result = $conn->query($sql);
       $count=$result->num_rows;
       if($count>0)
       echo $count;
?>