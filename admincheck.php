<? $password=$_POST["password"];
$username=$_POST["username"];


$con = mysql_connect("localhost","root",""); 
if (!$con)
	{
	die('Could not connect: ' . mysql_error()); 
	}

mysql_select_db("feedback", $con);
$sql="SELECT * FROM `admin` where username='".$username."';";
$result = mysql_query($sql); 
$row1= mysql_fetch_array($result);
$row=$row1[1]; 

if( $row1[1]!=null)
{
	session_start();$sid=session_id();
	$_SESSION["usermode"]=$sid;
	$_SESSION['username']=$_POST["username"];
include('admin.php' ) ;
}

else
{
	
	session_start();
	session_destroy();
	header('Location: /feedback/index.php?q=Invalid Login' ) ;
}


?>