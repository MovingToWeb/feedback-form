<?

session_start();
if(isset($_SESSION['usermode'])==session_id())
{



$stdname=$_SESSION["stdname"];

$sec=$_SESSION["sec"];
$sem=$_SESSION["sem"];

$dept=$_SESSION["dept"];

$con = mysql_connect("localhost","root",""); 
if (!$con)
	{
	die('Could not connect: ' . mysql_error()); 
	}
include('selectdb.php');

$ss="select * from subject where sem='".$sem."'";
$resul=mysql_query($ss);
$rr=mysql_fetch_array($resul);$sub=$rr[1];
	include("feedbackform.php");
/*}
else{ echo "Wrong Subject";
}*/



}
else
	{
		include('index.php' ) ;
	}

?>