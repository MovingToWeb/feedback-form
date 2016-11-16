<?php
	session_start();
if(isset($_SESSION['usermode'])==session_id())
{
	include('header.php');
$sub=$_GET['sub'];
$sec=$_GET["sec"];
$sem=$_GET["sem"];
$dept=$_GET["dept"];
$_SESSION["sec"]=$sec;
$_SESSION["sub"]=$sub; 
$_SESSION["sem"]=$sem;
$_SESSION["dept"]=$dept; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Staffs and Subject Updation</title>
	<script type="text/javascript" src="message.js"></script>
</head>
<body ><div align="center">
    <br />
	<?
	

 

if($sem!="" && $sub!="" && $sec!="" && $dept!="")
	{
$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
include('selectdb.php');
$sql="update subject set scount=".$sub." where sem='".$sem."';";
$result=mysql_query($sql);

?>
   
    <br />
    <br /><form method="POST" action="update.php" name="form" onSubmit="return fCheck(this);">
    <strong><font color="#0000" size="3" face="Georgia, Arial, Helvetica, sans-serif"> Staffs and Subject Updation</font></strong><br /> 
    <br />
     <br /> <b>Sample Data :</b><br /><br /><table border="1"><tr><th>  Subject </th><th>Staff</th></tr><tr><td>DSP</td><td>Raj Kumar</td></tr></table> <br />DSP - Digital Signal Processing<br />Don't use Special character like ( , . @ # $ ; ^ & * ( ) { } ) in the Staff Name or Subject Name<br />
  <br />
<? echo "".$dept." Department<br>Semester ".$sem."<br>Section ".$sec."<br>No of Subjects ".$sub; ?>
<br /> <input type="hidden" value="<?echo $sub?>" name="hidden">
    
  <br /><table>
<tr><td>Subject Name*</td><td></td><td>Staff Name</td>
</tr>
<? $op=0; for ($j=0;$j<$sub;$j++)
{ 
echo "<tr>";
 for($i=0;$i<2;$i++)
{
  $op = $op+1;
?>	<td><input size="25" name="sub<? echo $op; ?>" value="" style="width: 120px; height: 22px" type="text" /></td><td></td>
 <? } 
echo "</tr>";
}
$_SESSION["op"]=$op;
?>
</table>

	     * Maximum 4 characters
    <br /> 
    <input type="submit" id="submit" name="submit" value="Update"  align="center"></form>
  <br />
 
    
	<br /><a href="index.php">Home</a></div>
    <br />
	<br /> 
    
  <br />
  
 <? } 
 include('footer.php');
}
else
	{
		include('index.php');
	} 
  
 
 ?>
</body>
</html>