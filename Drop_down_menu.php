<!DOCTYPE html>
<html>
    <head>
        <title>Online Marketing</title>
        <link rel="stylesheet" href="style3.css">
        <meta charset="utf-8">
    </head>
    <body>
        <strong><div class="menu-bar">  
        

        <div style="padding-bottom:20px; padding-right:40px">
            
            <li class="search"><form method="post" action="search.php">
            <label style=" text-shadow: red 2px 2px;font-size:30px;font-family: sans-serif;margin-left:-200px">Online Marketing<label>
            <input type="text" placeholder="search" name="search_key" style="padding-left:10px; padding-right:100px; padding-top:5px; padding-bottom:5px; margin-top:30px; margin-left:100px">
            <input type="submit" name="search" value="Search" style="padding:5px"> </form></li>
            </div>

        <ul style="margin-left:80px">
           <li class="active"><a href="home_area.php">Home</a></li>
           <!-- <li><a href="#">Food</a>
               <div class="sub-menu-1">
                   <ul>
                       <li><a href="#">Addis Ababa</a></li>
                       <li><a href="hotel.php">Adama</a></li>
                       <li><a href="#">Hawasa</a></li>
                       <li><a href="#">Arbaminch</a></li>
                   </ul>
               </div>
           </li> -->
           
           <li><a href="#">Category</a></li>
           <li><a href="#">Products</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="clothes.php">Clothes</a></li>
                    <li><a href="select_company_post_from_db.php">Electronic Device</a></li>
                    <li><a href="hotel.php">Food</a></li>
                    <li><a href="#">Super Market</a></li>
                    <li><a href="#">Another</a></li>
                </ul>
            </div>
           </li>
           <li><a href="#">About us</a></li>
           <li><a href="register1.php">Sign up</a></li>
           <li><a href="login1.php">Login</a></li>
           <li><a href="#"><img src="images/Cart1.jpg" style="width:35px; height:35px; margin-left:-50px; margin-top:-8px"></a></li>
            <strong><li><a href="#"><p  style="color:red; font-size:18px; margin-left:-365px; margin-top:-10px"><?php include 'display_cart.php'; ?></p></a></li></strong>
             

       </ul>

          
        </div></strong>
    </body>
    </html>