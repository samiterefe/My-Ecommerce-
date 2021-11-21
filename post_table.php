<?php include "company_page.html"; ?>
<!DOCTYPE html>
<html lang="en"  style="background-color:skyblue">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           font-family: sans-serif;
           margin-top: 40px;
           margin-bottom: 50px;
           
        }
    
        table,th,td{

            border: 1px blueviolet solid;
        }
        table{
            border-collapse: collapse;
            margin-left: 350px;
            height: 60px;
            width: 50%;
        }
        th{
            background-color: #c2bdbd;
            text-transform: initial;
            font-size: 18px;
        }

        td{
            padding-top: 10px;
            padding-bottom: 10px;

        }

        th.a,td.a{
            width:30px;
           
        }
        td.a{
            text-align: center;
        }
        th.b,td.b{
            width: 155px;
        }
        th.c,td.c{
            width: 130px;
        }
        th.d,td.d{
            width: 145px;
        }
        th.e,td.e{
            width: 65px;
            text-align: center;
        }
        th.f,td.f{
            width: 123px;
        }
       
        tr:hover{
            background-color: #e6dbdb;
        }
        
        

        button:hover{
            background-color: #f75151;
        }
      

    </style>
</head>
<body>
    
    <table>
        <tr>
            <th class="a">No</th>
            <th class="b">Company name</th>
            <th class="c">Product Name</th>
            <th class="d">Description</th>
            <th class="e">Price</th>
            <th colspan="2" class="f">Action</th>
        </tr>
    </table>

<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = new mysqli ($server, $username, $password, $dbname);
$sql = "SELECT  id, company_name, product_name, product_file, description ,price FROM company_post";
$result = $conn->query($sql);

if($result->num_rows>0):
    while($row = $result->fetch_assoc()):

?>
       <table>
        <tr>
            <td class='a'><?php echo $row['id'];?> </td>
            <td class="b"> <?php echo $row["company_name"]; ?> </td>
            <td class="c"> <?php echo $row["product_name"]; ?> </td>
            <td class="d"> <?php echo $row["description"]; ?> </td>
            <td class="e"> <?php echo $row["price"]; ?></td>
            <td class="f"><button class='edit'>Edit</button><button classs="delete">Delete</button></td>
            
            
        </tr>
    </table>
    
</body>
</html>
<?php endwhile ?>
<?php endif ?>