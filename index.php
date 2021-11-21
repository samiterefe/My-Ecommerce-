
<?php include "company_page.html"; ?>

<?php include "server.php";
//if user is not logged in ,they can not access this page
if(empty($_SESSION['username'])){
    header('location: login.php');
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>User Registration System</title>
        <link rel="stylesheet" href="style1.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="header">
            <h2>Homepage</h2>
        </div>
        <div class="content">
            <?php if(isset($_SESSION['success'])): ?>
                <div class="error success">
                    <h3>
                        <?php 
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
            <?php if(isset($_SESSION['username'])): ?>
               <p>Wellcome <strong> <?php echo $_SESSION['username']; ?> </strong> </p>
               <p><a href="index.php?logout='1'" style="color:red">Logout</a></p> 
            <?php endif ?>
         </div>   
    </body>
</html>

