
<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = new mysqli($server,$username,$password,$dbname);
if($conn!=TRUE)
echo "error:".$conn->connect_error;

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
  $count = $id[$i];
  $i++;
  }
  $count--;

?>



<!DOCTYPE html>
<html>
  <head>
      <title>post company product</title>
      <meta charset = "utf-8">
      <link rel = "stylesheet" href = "post_style.css">
  </head>
  <body>
     <h1>Electronic Device product</h1>

     <?php if(isset($_GET['next'])): ?>
         <?php $amount = $_GET['next']; ?>
     <?php elseif(isset($_GET['back'])): ?>
         <?php $amount = $_GET['back']; ?>
     <?php else: ?>
         <?php $amount = $count;?>
     <?php endif; ?>

     <?php if($amount>$count) $amount=$count; ?>

     <div class="total">
       <ul>    
          <?php  for($n=$amount;$n>=0;$n--): ?>
  
              <div class = "detail">
              <li class="no"><?php if($n<0){ echo "No more Post is available";  break; } ?></li>
              <li><strong><?php echo "$prod_name[$n]"; ?></strong></li>
              <li><img src="<?php echo "uploaded_file/$prod_file[$n]"; ?>"></li>
              <li class="desc"><strong><?php echo "$descr[$n]"; ?></strong><li>
              <li><strong>Price: </strong> <?php echo "$price[$n]"; ?> Birr</li>
              <li class="no"><?php if($n==0){ echo "No more Post is available";  break; } ?></li>
              </div>
              <?php if($n==$amount-2) break; ?>
              
          <?php endfor ?>
       </ul>
     </div>

     <div class="total">
       <ul>
          <?php  for($n=$amount-3;$n>=-1;$n--): ?>
            
              <div class = "detail">
              <li class="no"><?php if($n==-1){ echo "No more Post is available";  break; } ?></li>
              <li><strong><?php echo "$prod_name[$n]"; ?></strong></li>
              <li><img src="<?php echo "uploaded_file/$prod_file[$n]"; ?>"></li>
              <li class="desc"><strong><?php echo "$descr[$n]"; ?></strong><li>
              <li><strong>Price: </strong> <?php echo "$price[$n]"; ?> Birr</li>
              <li class="no"><?php if($n==0){ echo "No more Post is available";  break; } ?></li>
              </div>
              <?php if($n==$amount-5) break; ?>
          <?php endfor ?>
       </ul>
     </div>

     <?php $no=$amount-6; ?>
     <?php if($no>-1): ?>
          <?php if($amount<=$count): ?>
             <a href="next_page.php?next=<?php echo $no;?>">
             <button  type="submit" class="next"><strong> Next </strong</button></a>

             <?php $no=$amount+6; ?>
             <a href="next_page.php?back=<?php echo $no;?>">
             <button  type="submit" class="back"><strong> Back </strong</button></a><br>
          <?php else: ?>
            <?php $no=$amount+6; ?>
             <a href="next_page.php?back=<?php echo $no;?>">
             <button  type="submit" class="back"><strong> Back </strong</button></a><br>
          <?php endif; ?>

     <?php else: ?>
      <?php $no=$amount+6; ?>
      <a href="next_page.php?back=<?php echo $no;?>">
     <button  type="submit" class="backend"><strong> Back </strong</button></a><br>
     <?php endif; ?>
    
         
      
  </body>
</html>



