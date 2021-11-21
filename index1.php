<!DOCTYPE html>
<html>
    <head>
        <title>DROP DOWN MENU</title>
        <link rel="stylesheet" href="index_style.css">
        <meta charset="utf-8">
    </head>
    <body>
    <div class="header">
        <div class="search">
        <form method="post" ation="#">
           <label>SAMAN</label>
           <input type="text" placeholder="search a product" name="product-serach">
           <input type="submit" name="search" value="search">     
        </form>
        </div>

        <div class="menu-bar">
        <ul>
           <li class="active"><a href="index1.php">Home</a></li>
           <li><a href="#">Hotel</a>
               <div class="sub-menu-1">
                   <ul>
                       <li><a href="#">Addis Ababa</a></li>
                       <li><a href="#">Adama</a></li>
                       <li><a href="#">Hawasa</a></li>
                       <li><a href="#">Arbaminch</a></li>
                   </ul>
               </div>
           </li>
           
           <li><a href="#">Tourism</a></li>
           <li><a href="#">Shop</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="#">Clothes</a></li>
                    <li><a href="index1.php?electronic">Electronic Device</a></li>
                    <li><a href="#">Super Market</a></li>
                    <li><a href="#">Another</a></li>
                </ul>
            </div>
           </li>
           <li><a href="#">Hospital</a></li>
           <li><a href="#">Vacancy</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="#">Enginers</a></li>
                    <li><a href="#">Accountant</a></li>
                    <li><a href="#">Docter</a></li>
                    <li><a href="#">Others</a></li>
                </ul>
            </div>
           </li>
           <li><a href="index.php">Login</a></li>
           <li><a href="#">About us</a></li>
       </ul>
        </div>
        </div>
        <?php 
           if(isset($_GET['electronic']))
             include "next/next_page.php";
        ?>
       <?php include "footer.html"; ?>
    </body>
    </html>