<?
$password=$_POST["password"];
$username=$_POST["username"];


$con = mysql_connect("localhost","root",""); 
if (!$con)
	{
	die('Could not connect: ' . mysql_error()); 
	}

mysql_select_db("feedback", $con);
$sql="SELECT * FROM staff where username='".$username."' and password='".$password."'";
$result = mysql_query($sql);

if($row = mysql_fetch_array($result))
{
	session_start();$sid=session_id();
	$_SESSION["usermode"]=$sid;
	$_SESSION['username']=$_POST["username"];
	include('staffoption.php' ) ;
}
else
{
	session_start();
	session_destroy();
	header('Location: /feedback/index.php?q=Invalid Login' ) ;
}

?>
