<?php include('header.php');
?>
<html>
<head>
 <title>Admin</title>
	<script language="JavaScript">

function fCheck(thisform)
{
	
	if(thisform.username.value=="")
			{alert("Fill Username");return false;}

	else if(thisform.password.value=="")
	{alert("Fill Password");
	return false;
	}

else return true;
}

</script>
</head>
<body><center>
<form name='login' id='login' method="POST" action="admincheck.php" onSubmit="return fCheck(this);">
	Administrator Username: <input type='textfield' name='username' id='username'><br><br>
	Administrator Password: <input type='password' name='password' id='password' ><br><br>
	<input type="submit" name="submit" value="Submit" >
</form><br />
  
    <br /><a href="index.php">Home</a>
</center></body><?php include('footer.php');
?></html>