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
       $count = $result->num_rows;
       
       echo $count;
       echo "<br>";

       $id = array();
       if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            array_push($id, $row["id"]);
        }
    }

       $i=0;
       while(!empty($id[$i])){
       $amount = $id[$i];
       $i++;
       }
      
       echo $amount;
     
     ?>