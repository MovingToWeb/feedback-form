<?

session_start();
if(isset($_SESSION['usermode'])==session_id())
{
	include('header.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Staff and Subject Updation</title><script language="JavaScript">

function fCheck(thisform)
{
	if(thisform.username1.value=="")
			{alert("Fill Current Username");
return false;}

	else if(thisform.password1.value=="")
	{alert("Fill Current Password");
	return false;
	}
	else if(thisform.username2.value=="")
			{alert("Fill New Username");
return false;}

	else if(thisform.password2.value=="")
	{alert("Fill New Password");
	return false;
	}

else return true;
}

</script>
</head>
</body><center>
<form name='login' id='login' method="POST" action="changeadminupdate.php" onSubmit="return fCheck(this);">
	Current Admin Username: <input type='textfield' name='username1' id='username1'><br><br>
	Current Admin Password: <input type='password' name='password1' id='password1' ><br><br>
	New Admin Username: <input type='textfield' name='username2' id='username2'><br><br>
	New Admin Password: <input type='password' name='password2' id='password2' ><br><br>
	<input type="submit" name="submit" value="Submit" >
</form><br />
  
    <br /><a href="index.php">Logout</a><? 
include('footer.php');
}
else
	{
		header( 'Location: /feedback/index.php' ) ;
	} ?>
</body>
</html>
	