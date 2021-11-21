
<?php 

  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project1";
  
  $conn = new mysqli($server,$username,$password,$dbname);
  if($conn!=TRUE)
  echo "error:".$conn->connect_error;
  
         $sql = "SELECT company_name, product_name, product_file, description ,price, id FROM electronic_device";
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
  
  

<!DOCTYPE html>
<html>
    <head>
        <title>post company product</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "shop_style.css">
    </head>
    <?php include "side_menu_bar.html"; ?>
    <body>
       <h1>Electronic Device product</h1>
       <?php for($m=0;$m<=4;$m++):?>
       <div class="total">
         <ul>
            <?php  for($n=$amount;$n>=0;$n--): ?>
                <?php if($n==-1) break; ?>
                <div class = "detail">
                <li><strong><?php echo "$prod_name[$n]"; ?></strong></li>
                <li><img src="<?php echo "images/electronic_device/$prod_file[$n]"; ?>" width="300" height="350"></li>
                <li class="desc"><strong><?php echo "$descr[$n]"; ?></strong><li>
                <li><strong>Price: </strong> <?php echo "$price[$n]"; ?> Birr</li>
                </div>
                <?php if($n==$amount-2) break; ?>
                
            <?php endfor ?>
         </ul>
       </div>

       <div class="total">
         <ul>
            <?php  for($n=$amount-3;$n>=-1;$n--): ?>
                <?php if($n==-1) break; ?>
                <div class = "detail">
                <li><strong><?php echo "$prod_name[$n]"; ?></strong></li>
                <li><img src="<?php echo "images/electronic_device/$prod_file[$n]"; ?>" width="300" height="350"></li>
                <li class="desc"><strong><?php echo "$descr[$n]"; ?></strong><li>
                <li><strong>Price: </strong> <?php echo "$price[$n]"; ?> Birr</li>
                </div>
                <?php if($n==$amount-5) break; ?>
            <?php endfor ?>
         </ul>
       </div>
       <?php $amount=$amount-6 ?>
       <?php endfor ?>
      
    </body>
</html>




