<?php 

session_start();
if(isset($_SESSION['usermode'])==session_id())
{
include('header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Feedback Form</title><script type="text/javascript" src="messages.js"></script>

</head>
<body><div align="center">
    
    <font color="#0000" size="3" face="Georgia"><br /> </div><br />
    <? 
	
	$stdname=$_SESSION["stdname"];
$sec=$_SESSION["sec"];
$sem=$_SESSION["sem"];
$dept=$_SESSION["dept"];

$_SESSION["stdname"]=$stdname;
$_SESSION["sec"]=$sec;
$_SESSION["sem"]=$sem;
$_SESSION["dept"]=$dept;

$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
	
	include('selectdb.php');

if($sem=="first")
{
$sql="SELECT * FROM `first` WHERE section='".$sec."';";
$result=mysql_query($sql);

	$sqw="SELECT * FROM subject where sem='first';";
$rer=mysql_query($sqw);
$scount1=mysql_fetch_array($rer);
$scount=$scount1['scount'];
}
else if($sem=="second")
{
$sql="SELECT * FROM `second` where section='".$sec."';";
$result=mysql_query($sql);

	$sqw="SELECT * FROM subject where sem='second';";
$rer=mysql_query($sqw);
$scount1=mysql_fetch_array($rer);
$scount=$scount1['scount'];
}
else if($sem=="third")
{
$sql="SELECT * FROM `third` where section='".$sec."';";
$result=mysql_query($sql);

	$sqw="SELECT * FROM subject where sem='third';";
$rer=mysql_query($sqw);
$scount1=mysql_fetch_array($rer);
$scount=$scount1['scount'];
}else if($sem=="fourth")
{
$sql="SELECT * FROM `fourth` where section='".$sec."';";
$result=mysql_query($sql);

	$sqw="SELECT * FROM subject where sem='fourth';";
$rer=mysql_query($sqw);
$scount1=mysql_fetch_array($rer);
$scount=$scount1['scount'];
}else if($sem=="fifth")
{
$sql="SELECT * FROM `fifth` where section='".$sec."';";
$result=mysql_query($sql);

	$sqw="SELECT * FROM subject where sem='fifth';";
$rer=mysql_query($sqw);
$scount1=mysql_fetch_array($rer);
$scount=$scount1['scount'];
}else if($sem=="sixth")
{
$sql="SELECT * FROM `sixth` where section='".$sec."';";
$result=mysql_query($sql);

	$sqw="SELECT * FROM subject where sem='sixth';";
$rer=mysql_query($sqw);
$scount1=mysql_fetch_array($rer);
$scount=$scount1['scount'];
}else if($sem=="seventh")
{
$sql="SELECT * FROM `seventh` where section='".$sec."';";
$result=mysql_query($sql);

	$sqw="SELECT * FROM subject where sem='seventh';";
$rer=mysql_query($sqw);
$scount1=mysql_fetch_array($rer);
$scount=$scount1['scount'];
}	
else 
{
$sql="SELECT * FROM `eigth` where section='".$sec."';";
$result=mysql_query($sql);

	$sqw="SELECT * FROM subject where sem='eigth';";
$rer=mysql_query($sqw);
$scount1=mysql_fetch_array($rer);
$scount=$scount1['scount'];
}
$result1=$result;
 
 $result=mysql_query($sql);
	$row2=mysql_fetch_array($result);
 if($row2[0]!=null || $row2[0]!="")
 {
?>
  <center>
	<strong><font color="#0000" size="3" face="Georgia, Arial, Helvetica, sans-serif">STUDENT FEEDBACK FORM</font></strong>
    <br /><br />Rating points
    <br />5-Excellent&nbsp;&nbsp;4-Very Good&nbsp;&nbsp;3-Good&nbsp;&nbsp;2-Fair&nbsp;&nbsp;1-Poor<br />
    <br />
    
	
	
<table><tr><th>Subject</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<th>Staff</th></tr>
<? $result=mysql_query($sql);
	while($row=mysql_fetch_array($result))
	{
		echo "<tr><td>".$row['subname']."</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>".$row['staffname']."</td></tr>"; 

	}
	?></table><br> <br>Welcome<strong> <? echo $stdname; ?>,&nbsp;&nbsp;<? echo $dept;?> Department,&nbsp;&nbsp;<? echo $sem;?>&nbsp; Semester ,&nbsp;&nbsp;'<? echo $sec;?>' Section <br></center><br>
	<form action="feedbackupdate.php" method="POST" name="form"><input type="hidden" name="hidden" value="<?echo $sub; ?>">
   <table style="width: 800px; height: 326px" border="1" align="center">
              <th style="width: 518px; height: 35px" > <center>Subjects ---></center>
            </th>
            <? $result=mysql_query($sql);

	while($row=mysql_fetch_array($result))
	{

		?><th style="width: 15px; height: 21px">
                <? echo $row['subname'];  ?></th><? } 
	$opt=0;
	$name= Array("<strong>1. PLANNING AND ORGANISATION</strong><BR>1.1 Teacher Comes to the class in time","1.2 Teaching is well planned","1.3 Aims/Objectives made clear","1.4 Subject matter organised in logical sequence","1.5 Teacher comes Well prepared in the Subject","<strong>2. PRESENTATION / COMMUNICATION</strong><BR>2.1 Teacher speaks clearly and audibly","2.2 Teacher writes and draws legibly","2.3 Teacher provides examples of concepts / principles explanations are clear and effective","2.4 Teacher's pace and level of institution are suited to the attainment of students","2.5 Teacher offers assistance and counselling to the needy students","<strong>3. STUDENTS PARTICIPATION</strong><br>3.1 Teacher asks questions to promote interaction and reflective thinking","3.2 Teacher encourages questioning / raising doubts by students and answers them well","3.3 Teacher enxures learner activity and problem solving ability in the class","3.4 Teacher encourages, compliments and praises originality and creativity displayed by the students","3.5 Teacher is courteous and impartial in dealing with the students","<strong>4. CLASS MANAGEMENT / ASSESSMENT OF STUDENT </strong><br>4.1 Teacher engages classes regularly and maintains discipline","4.2 Teacher covers the syllabus completely and at appropriate pace","4.3 Teacher hold tests regularly which are helpful to students in building up confidence in their acquistion and application of knowledge","4.4 Teacher's evaluation of scripts is fair and impartial","4.5 Teacher is prompt in valuing and returning the answer scripts");

for($j=0;$j<20;$j++)
{?>
<tr>
<td style="width: 518px; height: 15px;">
       <? echo $name[$j];  echo "</td>";

for($i=0;$i<$sub;$i++)
{
	 $opt=$opt+1;
	?>

	<td> <select name="op<? echo $opt; ?>" style="width: 40px; height: 25px">
                    <option selected="selected"></option>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                    
                </select>
            </td>
<? }
echo "</tr>";
} $_SESSION["opt"]=$opt; $_SESSION["sub"]=$scount; ;

?>

</table><br /><div align="center"><strong >PS:</Strong> Fill ratings for all subjects and then Click "Submit" button</div></font>

 <br />
    <br />

<center><input type="submit" value="Submit" onclick="return fCheck(document.form)";></form>
<?
}
else
echo "</body></html><html><head><meta http-equiv='refresh' content='3;URL=index.php?q=Wait till the Staff names are updated !!'></head><body><center><font color='CC0000'>Staff Names are not upadated yet !! report it immediately !!<br> Page will be automatically redirected.</body></html>";

?>

    <br />
    <br />
  
</div>
</body>
</html><?php include('footer.php'); }
	else
	{
		include('index.php' ) ;
	}
?>