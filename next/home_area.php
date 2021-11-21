<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = new mysqli($server,$username,$password,$dbname);
if($conn!=TRUE)
echo "error:".$conn->connect_error;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Area</title>
        <meta charset="utf-8">
        <link rel='stylesheet' href='home_area_style.css'>
        
    </head>
    <body>
        <h1>Well Come To Our Page</h1>
        <h3>You Can get all You Want!</h3>

        <div class="head"><h4>You Can get all You Want!</h4><div> 
       <?php

       $sql = "SELECT company_name, product_name, product_file, description ,price, id FROM company_post";
       $result = $conn->query($sql);
       
       $comp_name = array();
       $prod_name = array();
       $prod_file = array();
       $price = array();
       $descr = array();
       $id = array();

       if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
          array_push($comp_name, $row["company_name"]);
          array_push($prod_name, $row["product_name"]);
          array_push($prod_file, $row["product_file"]);
          array_push($price, $row["price"]);
          array_push($descr, $row["description"]);
          array_push($id, $row["id"]);
              
        }
    }
  $i=0;
  while(!empty($id[$i])){
  $amount = $id[$i];
  $i++;
  }
  $amount--;

?>

     <div class="total">
       <ul>
          <?php  for($n=$amount;$n>=0;$n--): ?>
              <?php if($n==-1) break; ?>
              <div class = "detail">
              <li><strong><?php echo "$prod_name[$n]"; ?></strong></li>
              <li><img src="<?php echo "uploaded_file/$prod_file[$n]"; ?>" width="300" height="350"></li>
              <li class="desc"><strong><?php echo "$descr[$n]"; ?></strong><li>
              <li><strong>Price: </strong> <?php echo "$price[$n]"; ?> Birr</li>
              </div>
              <?php if($n==$amount-2) break; ?>
              
          <?php endfor ?>
       </ul>
     </div>


     <?php

$sql = "SELECT company_name, product_name, product_file, description ,price, id FROM clothes";
$result = $conn->query($sql);

$comp_name = array();
$prod_name = array();
$prod_file = array();
$price = array();
$descr = array();
$id = array();

if($result->num_rows>0){
 while($row = $result->fetch_assoc()){
   array_push($comp_name, $row["company_name"]);
   array_push($prod_name, $row["product_name"]);
   array_push($prod_file, $row["product_file"]);
   array_push($price, $row["price"]);
   array_push($descr, $row["description"]);
   array_push($id, $row["id"]);
       
 }
}
$i=0;
while(!empty($id[$i])){
$amount = $id[$i];
$i++;
}
$amount--;

?>

<div class="total">
<ul>
   <?php  for($n=$amount;$n>=0;$n--): ?>
       <?php if($n==-1) break; ?>
       <div class = "detail">
       <li><strong><?php echo "$prod_name[$n]"; ?></strong></li>
       <li><img src="<?php echo "images/clothes/$prod_file[$n]"; ?>" width="300" height="350"></li>
       <li class="desc"><strong><?php echo "$descr[$n]"; ?></strong><li>
       <li><strong>Price: </strong> <?php echo "$price[$n]"; ?> Birr</li>
       </div>
       <?php if($n==$amount-2) break; ?>
       
   <?php endfor ?>
</ul>
</div>

  </body>
</html>






