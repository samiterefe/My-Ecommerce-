<?php include 'Drop_down_menu.php'; ?>
<?php 
if(isset($_GET['detail_id'])){


    $id = $_GET['detail_id'];   

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project1";
    $conn = new mysqli($server,$username,$password,$dbname);
?>



<div class="total">
<ul>

<?php

$sql = "SELECT * FROM hotel where id='$id' ";
$result = $conn->query($sql);

if($result->num_rows>0){
$row = $result->fetch_assoc();
$comp_name = $row["company_name"];
$prod_name = $row["product_name"];
$prod_file = $row["product_file"];
$price = $row["price"];
$descr = $row["description"];
$id = $row["id"];
    
?>
   <img style="width:650px;height:450px; padding-left:200px; padding-top:20px" src="<?php echo "images/hotel/$prod_file"; ?>">

    <div class = "detail" style="padding-left:800px; margin-top:-300px">
      <li><strong><?php echo "$prod_name"; ?></strong></li>
      <li class="desc"><strong><?php echo "$descr"; ?></strong><li>
      <li class="price"><strong>Price: </strong> <?php echo "$price"; ?> Birr</li>
      <a href="#"><button style="background-color:white; color:green; margin:10px; ">Add to Cart</button></a>
    </div>

    

<?php } ?>

</ul>
</div>

<?php } ?>
