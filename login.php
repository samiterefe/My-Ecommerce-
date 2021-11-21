


<?php include 'server.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Registration System</title>
        <link rel="stylesheet" href="style1.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="header">
            <h2>Login</h2>
        </div>
        <form  method="post" action="login.php">
            <!--displaying error-->
            <?php include 'errors.php';?>

            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign in </a>
        </form>
    </body>
</html>