<? session_start();
if(isset($_SESSION['usermode'])==session_id())
{
include('header.php');
?>
<div align="center">
<br><br><a href="install.php">Delete Previous Database and Create new one.</a><br><br><br><br>
<br></div><div align="center"><a href="index.php">Logout</a></div>
<?
 include('footer.php'); }
	else
	{
		include('index.php');
	}

	?>


