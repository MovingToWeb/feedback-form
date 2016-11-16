<?

session_start();
if(isset($_SESSION['usermode'])==session_id())
{
	include('header.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    
</head>
</body><center>
<?
	$username1=$_POST["username1"];
$password1=$_POST["password1"];
$username2=$_POST["username2"];
$password2=$_POST["password2"];
$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
	mysql_select_db("feedback", $con);

$sqm="select * from admin where username='".$username1."';";
$result=mysql_query($sqm);
$row=mysql_fetch_array($result);
if($row[1]==$password1){

$sql="delete from admin where username='".$username1."' and password='".$password1."';";
mysql_query($sql);

$sql="insert into admin values('".$username2."','".$password2."');";
mysql_query($sql);




	?>

<br />New Username : <? echo "  ".$username2." "; ?><br><br> New Password : <? echo "  ".$password2." ";   }
else
echo "Wrong Current Username/Password";
?><br /><br /><br />
    <br /><a href="index.php">Logout</a><?
include('footer.php');


}
else
	{
		include('index.php' ) ;
	} ?>
</body>
</html>
	