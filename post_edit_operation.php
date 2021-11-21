<?php include "company_page.html" ?>

<?php if(isset($_GET['edit'])): ?>

<?php 
$id = $_GET['edit'];   
$server = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = new mysqli($server,$username,$password,$dbname);
$sql = "SELECT company_name, product_name, product_file, description ,price, id FROM electronic_device  where id=$id";
$result = $conn->query($sql);
if($result->num_rows>0){
    $row = $result->fetch_assoc();
  $id = $row['id'];
  $comp_name = $row["company_name"];
  $prod_name = $row["product_name"];
  $prod_file = $row['product_file'];
  $price = $row["price"];
  $descr = $row["description"]; 
}


?>



<!DOCTYPE html>
<html>
    <heaad>
        <title>File Upload</title>
        <meta charset = "utf-8">
    </heaad>
    <body style="margin-left:500px">
    <h1 style="margin-left:-100px">Please Fill about your product</h1>
        <form method="post" action = "post_edit_operation.php" enctype="multipart/form-data">
            
            <input type='hidden' name='id' value="<?php echo $id; ?>">

            Company Name:<br>
            <input type="txt" name="company_name" value="<?php echo $comp_name; ?>" required><br>

            Product Name:<br>
            <input type="txt" name="product_name"  value="<?php echo $prod_name; ?>" required><br>

            Description About Product:<br>
            <textarea  name="description" value="<?php echo $descr; ?>" rows="10" cols="25"></textarea><br><br>

            Photo of Prodcut:
            <input type="file" name="image"><br><br>

            Price of Product:<br>
            <input type="txt" name="price"  value="<?php echo $price; ?>" required><br><br>

            <input type="submit" name="update" value="update" onclick="alert('Updated Succesfuly!')">
            <button><a href="post_operation.php">Back</a></button>
        </form>
    </body>
</html>
<?php endif; ?>


<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = new mysqli($server,$username,$password,$dbname);
if($conn!=TRUE)
echo "error:".$conn->connect_error;

   if(isset($_POST["update"]))
   {
       $id = $_POST['id'];
       $comp_name = $_POST['company_name'];
       $prod_name = $_POST['product_name'];
       $price = $_POST['price'];
       $descr = $_POST['description'];

       
       $file_name = $_FILES['image']['name'];
       $location = "images/electronic_device/";
       $tempname = $_FILES['image']['tmp_name'];
       $target_file = $location.basename($file_name);
         
       if(!empty($file_name)){
       $sql = "UPDATE electronic_device SET company_name='$comp_name', product_name='$prod_name', 
               product_file='$file_name', price='$price' where id=$id ";
       }
       else{
        $sql = "UPDATE electronic_device SET company_name='$comp_name', product_name='$prod_name', 
                price='$price' where id=$id ";

       }

       if(!empty($descr)){
           $sql = "UPDATE electronic_device SET description='$descr'  where id=$id ";
       }
        
       $store = $conn->query($sql);

       if(!empty($file_name))
       {
           $save = move_uploaded_file($tempname, $target_file);
       }

       header('location:post_operation.php');
   }
  
?>

