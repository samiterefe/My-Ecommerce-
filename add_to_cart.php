<?php 
if(isset($_GET['cart_id'])){


    $id = $_GET['cart_id'];   

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project1";
    $conn = new mysqli($server,$username,$password,$dbname);


$sql = "SELECT * FROM clothes where id='$id' ";
$result = $conn->query($sql);

if($result->num_rows>0){
$row = $result->fetch_assoc();
$comp_name = $row["company_name"];
$prod_name = $row["product_name"];
$prod_file = $row["product_file"];
$price = $row["price"];
$descr = $row["description"];
$id = $row["id"];

} 

$insert_cart = "INSERT INTO cart(product_id, product_name, user_id)  VALUES('$id','$prod_name','')";
$result2 = $conn->query($insert_cart);

header('location: home_area.php');



 }
 ?>
