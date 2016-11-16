<?php 
include('header.php');
?>
<center>
<form name='login' id='login' method="POST" action="staffcheck.php">
	Staff Username: <input type='textfield' name='username' id='username'><br><br>
	Staff Password: <input type='password' name='password' id='password'><br><br>
	<input type="submit" name="submit" value="Submit">
</form><br />
  
    <br /><a href="index.php">Home</a>
</center> <?  include('footer.php'); 
	 ?>