<?


$sem=$_GET["sem"];$_SESSION["sem"]=$sem;

$sec=$_GET["sec"];$_SESSION["sec"]=$sec;

$stdname=$_GET["stdname"];$_SESSION["stdname"]=$stdname;


if($_GET["sem"]!="")
{
	session_start();$sid=session_id();
	$_SESSION["usermode"]=$sid;$sem=$_GET["sem"];$_SESSION["sem"]=$sem; $dept=$_GET["dept"]; $_SESSION["dept"]=$dept;

$sec=$_GET["sec"];$_SESSION["sec"]=$sec;

$stdname=$_GET["stdname"];$_SESSION["stdname"]=$stdname;

	include('login.php' ) ;
}
else
{
	session_start();
	session_destroy();
	include('index.php' ) ;
}

?>
