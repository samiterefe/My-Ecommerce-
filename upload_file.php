
<!DOCTYPE html>
<html style="background-color: #0dab7c">
    <heaad>
        <title>File Upload</title>
        <meta charset = "utf-8">
    </heaad>
    <body style="margin-left:500px">
    <h1 style="margin-left:-100px">Please Fill about your product</h1>
        <form method="post" action = "upload_file.php" enctype="multipart/form-data">
            Company Name:<br>
            <input type="txt" name="company_name" required><br>
            Product Name:<br>
            <input type="txt" name="product_name" required><br>
            Description About Product:<br>
            <textarea  name="description" rows="10" cols="25" required></textarea><br><br>
            Photo of Prodcut:
            <input type="file" name="image" required><br><br>
            Price of Product:<br>
            <input type="txt" name="price" required><br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>

<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = new mysqli($server,$username,$password,$dbname);
if($conn!=TRUE)
echo "error:".$conn->connect_error;

   if(isset($_POST["submit"]))
   {
       $comp_name = $_POST['company_name'];
       $prod_name = $_POST['product_name'];
       $price = $_POST['price'];
       $descr = $_POST['description'];

       
       $file_name = $_FILES['image']['name'];
       $location = "uploaded_file/";
       $tempname = $_FILES['image']['tmp_name'];
       $target_file = $location.basename($file_name);
         
       $sql = "INSERT INTO company_post(company_name, product_name, product_file, description,price) 
               VALUES('$comp_name', '$prod_name', '$file_name', '$descr', '$price')";
        $store = $conn->query($sql);
        if($store!=TRUE)
           echo "error".$conn->error;
           else
           echo "<h3 style='color:red'>Posted Successfully!</h3><br>";

       if(!empty($file_name))
       {
           $save = move_uploaded_file($tempname, $target_file);
       }
   }
  
?>

