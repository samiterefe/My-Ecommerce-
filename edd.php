<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = new mysqli ($server, $username, $password, $dbname);
$sql = "SELECT  id, company_name, product_name, product_file, description ,price FROM company_post";
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

   $i=0;
   while(!empty($id[$i])){
   $amount = $id[$i];
   $i++;
   }
   $amount--;
   $n=$amount;

 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "shop_style.css">
    <title>Document</title>
</head>
<body>
<div class="total">
         <ul>
                <div class = "detail">
                <li><strong><?php echo "$prod_name[$n]"; ?></strong></li>
                <li><img src="<?php echo "uploaded_file/$prod_file[$n]"; ?>" width="300" height="350"></li>
                <li class="desc"><strong><?php echo "$descr[$n]"; ?></strong><li>
                <li><strong>Price: </strong> <?php echo "$price[$n]"; ?> Birr</li>
                <li><form method="post" action="editing_post.php"><input type="submit" name="$imgname" value="edit"></form></li>
       </div>
       </ul>
</body>
</html>