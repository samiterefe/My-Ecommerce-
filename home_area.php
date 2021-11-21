<?php include 'Drop_down_menu.php'; ?>

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

        <div class="head"><h4>Electronic Devices</h4><div> 
          <div class="total">
          <ul>

       <?php

       $sql = "SELECT * FROM electronic_device order by id desc limit 3 ";
       $result = $conn->query($sql);
      
       if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
          $comp_name = $row["company_name"];
          $prod_name = $row["product_name"];
          $prod_file = $row["product_file"];
          $price = $row["price"];
          $descr = $row["description"];
          $id = $row["id"];
              
      ?>
              <div class = "detail">
                <li><strong><?php echo "$prod_name"; ?></strong></li>
                <li><img src="<?php echo "images/electronic_device/$prod_file"; ?>"></li>
                <li class="price"><strong>Price: </strong> <?php echo "$price"; ?> Birr</li>
                <li class="button"><a href="electronic_detail.php?detail_id=<?php echo $id; ?>"><button>Details</button></a></li>
              </div>

              
       <?php } ?>
       <?php } ?>

       </ul>
     </div>
  


<div class="head"><h4>Clothes</h4><div> 
<div class="total">
<ul>

<?php

$sql = "SELECT * FROM clothes order by id desc limit 3 ";
$result = $conn->query($sql);

if($result->num_rows>0){
while($row = $result->fetch_assoc()){
$comp_name = $row["company_name"];
$prod_name = $row["product_name"];
$prod_file = $row["product_file"];
$price = $row["price"];
$descr = $row["description"];
$id = $row["id"];
    
?>
    <div class = "detail">
      <li><strong><?php echo "$prod_name"; ?></strong></li>
      <li><img src="<?php echo "images/clothes/$prod_file"; ?>"></li>
      <li class="price"><strong>Price: </strong> <?php echo "$price"; ?> Birr</li>
      <li class="button"><a href="clothes_detail.php?detail_id=<?php echo $id; ?>"><button>Details</button></a></li>
    </div>

    
      <?php } ?>
      <?php } ?>

    </ul>
    </div>


<div class="head"><h4>Hotels</h4><div> 
  <div class="total">
  <ul>

<?php

      $sql = "SELECT * FROM hotel order by id desc limit 3 ";
      $result = $conn->query($sql);

      if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
      $comp_name = $row["company_name"];
      $prod_name = $row["product_name"];
      $prod_file = $row["product_file"];
      $price = $row["price"];
      $descr = $row["description"];
      $id = $row["id"];
    
?>
          <div class = "detail">
            <li><strong><?php echo "$prod_name"; ?></strong></li>
            <li><img src="<?php echo "images/hotel/$prod_file"; ?>"></li>
            <li class="price"><strong>Price: </strong> <?php echo "$price"; ?> Birr</li>
            <li class="button"><a href="hotel_detail.php?detail_id=<?php echo $id; ?>"><button>Details</button></a></li>
            
          </div>

    
    <?php } ?>
    <?php } ?>

  </ul>
  </div>

  </body>
</html>






