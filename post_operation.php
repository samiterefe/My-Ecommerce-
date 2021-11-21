<?php include "company_page.html" ?>
<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Operation</title>
    <link rel="stylesheet" href="table_style.css">
</head>
<body>
    
    <table>
        <tr>
            <th class="no">No</th>
            <th class='a' id='file'>File</th>
            <th class='a'>Company name</th>
            <th class='a'>Product Name</th>
            <th class='b'>Price</th>
            <th  class='a' colspan="2">Operation</th>
        </tr>
    </table>

<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = new mysqli ($server, $username, $password, $dbname);
$sql = "SELECT  id, company_name, product_name, product_file, description ,price FROM electronic_device";
$result = $conn->query($sql);

if($result->num_rows>0):
    while($row = $result->fetch_assoc()):

?>
       <table>
        <tr>
            <td class="no">  <?php echo $row['id'];?> </td>
            <td class='a'> <img class="img" src= "images/electronic_device/<?php echo $row['product_file']; ?>"> </td>
            <td class='a'> <?php echo $row["company_name"]; ?> </td>
            <td class='a'> <?php echo $row["product_name"]; ?> </td>
            <td class='a' id="pr"> <?php echo $row["price"]; ?></td>
            <td class='a'> <a  class="edit" href="post_edit_operation.php?edit=<?php echo $row['id']; ?>"> Edit </a>
            <a class="delete" href="#?edit=<?php echo $row['id']; ?>"> Delete </a> </td>
            
            
        </tr>
    </table>
    
</body>
</html>
<?php endwhile ?>
<?php endif ?>