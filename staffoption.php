<?php session_start();
if(isset($_SESSION['usermode'])==session_id())
{
include('header.php');
?>
<div align="center">
<br><br>
<a href="staff.php">Updation of Staffs for Each Semester</a><br><br>
<a href="result.php">Result for Feedback</a><br><br>
<div>  
   <div align="center"> <br /><a href="index.php">Home</a></div>
<?  include('footer.php'); }
	else
	{
		include('index.php');
	}?>