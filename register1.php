

<!------------ Header starts --------------------->
<?php include('Drop_down_menu.php'); ?>
<!------------ Header ends ----------------------->
<?php 

  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project1";
  
  $conn = new mysqli($server,$username,$password,$dbname);
  ?>

<!------------ Content wrapper starts -------------->
  <div class="content_wrapper">
    

	
<div class="register_box">

  <form method = "post" action="" enctype="multipart/form-data" style="padding-left:400px">
    
	<table align="left" width="70%" >
	
	  <tr align="left" ">	   
	   <td colspan="4" >
	   <h2>Register.</h2><br />
	   <span>
	     Already have account? <a href="login1.php">Login Now.</a><br /><br />
	   </span>
	   </td>	   
	  </tr>
	  
	  <tr>
	   <td width="15%" style="padding:10px"><b>Name:</b></td>
	   <td colspan="3"><input type="text" name="name" required placeholder="Name" /></td>
	  </tr>
	  
	  <tr >
	   <td width="15%" style="padding:10px"><b>Email:</b></td>
	   <td colspan="3" style="padding:10px"><input type="text" name="email" required placeholder="Email" /></td>
	  </tr>
	  
	  <tr>
	   <td width="15%" style="padding:10px"><b>Password:</b></td>
	   <td colspan="3" style="padding:10px"><input type="password" id="password_confirm1" name="password" required placeholder="Password" /></td>
	  </tr>
	  
	  <tr>
	   <td width="15%" style="padding:10px"><b>Confirm Password:</b></td>
	   <td colspan="3" style="padding:10px"><input type="password" id="password_confirm2" name="confirm_password" required placeholder="Confirm Password" />
	   <p id="status_for_confirm_password"></p><!-- Showing validate password here -->
	   </td>
	  </tr>
	  
	  <tr>
	   <td width="15%" style="padding:10px"><b>Image:</b></td>
	   <td colspan="3" style="padding:10px"><input type="file" name="image" /></td>
	  </tr>
	  
	  </tr>
	  
	  <tr>
	   <td width="15%" style="padding:10px"><b>City:</b></td>
	   <td colspan="3" style="padding:10px"><input type="text" name="city" required placeholder="City" /></td>
	  </tr>
	  
	  <tr>
	   <td width="15%" style="padding:10px"><b>Contact:</b></td>
	   <td colspan="3" style="padding:10px"><input type="text" name="contact" required placeholder="Contact" /></td>
	  </tr>
	  
	  <tr>
	   <td width="15%" style="padding:10px"><b>Address:</b></td>
	   <td colspan="3" style="padding:10px"><input type="text" name="address" required placeholder="Address" /></td>
	  </tr>
	  
	  <tr align="left">
	   <td style="padding:10px"></td>
	   <td colspan="4" style="padding:10px">
	   <input type="submit" name="register" value="Register" />
	   </td>
	  </tr>
	
	</table>
	
	
  </form>

</div>

