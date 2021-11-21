
<?php if(isset($_POST['$imgname'])): ?>
<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = new mysqli ($server, $username, $password, $dbname);
$sql = "SELECT  id, company_name, product_name, product_file, description ,price FROM  company_post where id=22 ";
$result = $conn->query($sql);



if($result->num_rows>0)
 $row = $result->fetch_assoc();
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{
           padding-left: 200px;
           padding-top: 100px;
       }
        input.a{
            width: 50px;
        }
      
    </style>
</head>
<body>
    <input class="a" type="text" value= "<?php echo $row['id']; ?>" >
    <input type="text" value= "<?php echo $row['company_name']; ?>" >
    <input type="text" value= "<?php echo $row['product_name']; ?>" >
    <input type="text" value= "<?php echo $row['price']; ?>" >
    <input type="submit" name="" value="update">
</body>
</html>
<?php endif ?>
