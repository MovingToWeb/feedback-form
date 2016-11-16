<? session_start();
if(isset($_SESSION['usermode'])==session_id())
{
include('header.php');
$con = mysql_connect("localhost","root",""); 
if (!$con)
	{
	die('Could not connect: ' . mysql_error()); 
	}

mysql_select_db("feedback", $con);
$sql="SELECT * FROM staff";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);?><table align="center">
<?
	echo "Current Staff Username : ".$row[0]."<br><br>Current Staff Password : ".$row[1]."";
?> </table><br />
  
    <br /><div align="center"><a href="index.php">Home</a></div><?

 include('footer.php'); }
	else
	{
		include('index.php');
	}

	?>
