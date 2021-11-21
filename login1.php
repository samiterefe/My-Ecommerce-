
<?php include('Drop_down_menu.php'); ?>
<div class="login_box" style="padding-left:400px">

  <form method = "post" action="">
    
	<table align="left" width="70%">
	
	  <tr align="left">	   
	   <td colspan="4">
	   <h2>Login.</h2><br />
	   <span>
	     Don't have account? <a href="register1.php">Register Here</a><br /><br />
	   </span>
	   </td>	   
	  </tr>
	  
	  <tr>
	   <td width="15%" style="padding:10px"><b>Email:</b></td>
	   <td colspan="3" style="padding:10px"><input type="text" name="email" required placeholder="Email" /></td>
	  </tr>
	  
	  <tr>
	   <td width="15%" style="padding:10px"><b>Password:</b></td>
	   <td colspan="3" style="padding:10px"><input type="password" name="password" required placeholder="Password" /></td>
	  </tr>
	  
	  <tr align="left">
	   <td></td>
	   <td colspan="4" style="padding:10px">
	   <a href="checkout.php?forgot_pass">
	     Forgot Password
	   </a>
	   <br /><br />
	   </td>
	  </tr>
	  
	  <tr align="left">
	   <td style="padding:10px"></td>
	   <td colspan="4" style="padding:10px">
	   <input type="submit" name="login" value="Login" />
	   </td>
	  </tr>
	
	</table>
	
	
  </form>

</div>





