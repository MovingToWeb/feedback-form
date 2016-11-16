<?php session_start();
if(isset($_SESSION['usermode'])==session_id())
{ ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Result for Feedback</title>
</head>
<body>
    <?
$sem=$_POST["sem"]; 
$sec=$_POST["sec"];
$sub=$_POST["sub"];
$dept=$_POST["dept"];

$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
	include('selectdb.php');

if($sem=="first" || $sem=="second")
$year=" I ";
else if($sem=="third" || $sem=="fourth")
$year=" II ";
else if($sem=="fifth" || $sem=="sixth")
$year=" III ";
else if($sem=="seventh" || $sem=="eigth")
$year=" IV ";


for($count=0;$count<$sub;$count++){ $col=$count;
?><div align="center">
   <center><h2>VELAMMAL ENGINEERING COLLEGE </h2></center>
   <strong><font color="#0000" size="3" face="Georgia, Arial, Helvetica, sans-serif">FEED BACK PUBLICATION</strong><BR />
      <br />
    <table width="672" border="0">
      <tr>
        <td width="185">ODD / EVEN SEMESTER</td>
        <td width="164">ACADEMIC YEAR :  </td>
      </tr>
    </table><BR />
   
    <table width="673" border="0">
      <tr>
        <td width="410" align="left">Staff Name:
        <? $qu="SELECT * FROM ".$sem." WHERE section='".$sec."';"; ;
		$que=mysql_query($qu);for($m=0;$m<=$count;$m++){
		$qur=mysql_fetch_array($que);
				}
echo $qur[1];		
		 ?></td>
        <td width="253" align="left">Subject Name: <? echo $qur[0]; ?></td>
      </tr>
      <tr>
        <td align="left">Semester: <? echo $sem; ?></td>
        <td align="left">Subject Code:</td>
      </tr>
      <tr>
        <td align="left">Department: <? echo $dept; ?></td>
        <td align="left">Year: <? echo $year; ?> </td>
      </tr>
    </table>
    <p>
      <? if($sub==3)
		{
$sqk="select count(*) from `".$sem."three".$sec."`";
$ss=mysql_query($sqk);
$totalstud=mysql_fetch_array($ss);
			
         		
		 }
			
	else if($sub==4)
		{
$sqk="select count(*) from `".$sem."four".$sec."`";
$ss=mysql_query($sqk);
$totalstud=mysql_fetch_array($ss);
		 } 
else if($sub==5)
		{
$sqk="select count(*) from `".$sem."five".$sec."`";
$ss=mysql_query($sqk);
$totalstud=mysql_fetch_array($ss);
         		
		 }

else if($sub==6)
		{
$sqk="select count(*) from `".$sem."six".$sec."`";
$ss=mysql_query($sqk);
$totalstud=mysql_fetch_array($ss);         		
		 }
else if($sub==7)
		{
$sqk="select count(*) from `".$sem."seven".$sec."`";
$ss=mysql_query($sqk);
$totalstud=mysql_fetch_array($ss);
		 }
		 else if($sub==8)
		{
$sqk="select count(*) from `".$sem."eight".$sec."`";
$ss=mysql_query($sqk);
$totalstud=mysql_fetch_array($ss);
         		
		 }
		 
		 
 ?>
    </p>
    </div>
  
    <table align="center" width="673" height="1017" border="1">
      <tr>
        <td width="320" rowspan="2"><div align="center"><strong>Details</strong></div></td>
        <td width="79" rowspan="2"><div align="center"><strong>No of Students Responded </strong></div></td>
        <td height="33" colspan="5"><div align="center"><strong>Frequency of Student response </strong></div></td>
        <td width="30" rowspan="2"><div align="center"><strong>W.A</strong></div></td>
        <td width="28" rowspan="2"><strong>S.E</strong></td>
        <td width="65" rowspan="2"><div align="center"><strong>Deviation</strong></div></td>
      </tr>
      <tr>
        <td width="17" height="28"><div align="center"><strong>5</strong></div></td>
        <td width="22"><div align="center"><strong>4</strong></div></td>
        <td width="16"><div align="center"><strong>3</strong></div></td>
        <td width="18"><div align="center"><strong>2</strong></div></td>
        <td width="14"><div align="center"><strong>1</strong></div></td>
      </tr>
      <tr>
        <td><strong>1. PLANNING AND ORGANISATION</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>1.1 Teacher Comes to the class in time</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
       
        <td><?  	

$sss="select * from `".$sem."` where section='".$sec."';";
$res=mysql_query($sss);
$rrr=mysql_fetch_array($res);
	if($sub==3)
	$ssub="three";
	else if($sub==4)
	$ssub="four";
		else if($sub==5)
	$ssub="five";	else if($sub==6)
	$ssub="six";	else if($sub==7)
	$ssub="seven";	else if($sub==8)
	$ssub="eight";
	
	
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	
	
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	}
		
echo $five;
		


 ?></td> <td><? echo $four; ?></td>
        <td><? 
	echo $three; ?></td>
        <td><?
	echo $two; ?></td>
        <td><?
	echo $one; ?></td>
        <td><? $we[1]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0]; echo number_format($we[1],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>1.2 Teaching is well planned</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	
	
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><?
	echo $four; ?></td>
        <td><?
	echo $three; ?></td>
        <td><?
	echo $two; ?></td>
        <td><?
	echo $one; ?></td>
        <td><? $we[2]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0]; echo number_format($we[2],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>1.3 Aims/Objectives made clear</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	

	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[3]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0]; echo number_format($we[3],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>1.4 Subject matter organised in logical sequence</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[4]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[4],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>1.5 Teacher comes Well prepared in the Subject</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
       <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[5]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[5],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>2. PRESENTATION / COMMUNICATION</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>2.1 Teacher speaks clearly and audibly</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[6]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[6],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>2.2 Teacher writes and draws legibly</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[7]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[7],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>2.3 Teacher provides examples of concepts / principles explanations are clear and effective</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[8]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[8],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>2.4 Teacher's pace and level of institution are suited to the attainment of students</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[9]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[9],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>2.5 Teacher offers assistance and counselling to the needy students</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[10]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[10],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>3. STUDENTS PARTICIPATION</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>3.1 Teacher asks questions to promote interaction and reflective thinking</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[11]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[11],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>3.2 Teacher encourages questioning / raising doubts by students and answers them well</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[12]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0]; echo number_format($we[12],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>3.3 Teacher enxures learner activity and problem solving ability in the class</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[13]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[13],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>3.4 Teacher encourages, compliments and praises originality and creativity displayed by the students</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
       <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[14]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[14],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>3.5 Teacher is courteous and impartial in dealing with the students</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
         <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[15]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[15],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>4. CLASS MANAGEMENT / ASSESSMENT OF STUDENT</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>4.1 Teacher engages classes regularly and maintains discipline</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
         <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[16]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0]; echo number_format($we[16],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>4.2 Teacher covers the syllabus completely and at appropriate pace</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[17]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[17],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>4.3 Teacher hold tests regularly which are helpful to students in building up confidence in their acquistion and application of knowledge</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[18]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[18],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>4.4 Teacher's evaluation of scripts is fair and impartial</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
        <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[19]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[19],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>4.5 Teacher is prompt in valuing and returning the answer scripts</td>
        <td align="center"><? echo $totalstud[0]; ?></td>
       <td><? $col=$col+$sub;
	$one=0;$two=0;$three=0;$four=0;$five=0;
		$sqq="SELECT op".$col." FROM `".$sem."".$ssub."".$sec."`;";
			$section=mysql_query($sqq);
	while($rsection=mysql_fetch_array($section))
	{
	if($rsection[0]==1)
	$one++;
	else if($rsection[0]==2)
	$two++;
	else if($rsection[0]==3)
	$three++;
	else if($rsection[0]==4)
	$four++;
	else if($rsection[0]==5)
	$five++;
	} echo $five; ?></td>
        <td><? echo $four; ?></td>
        <td><? echo $three; ?></td>
        <td><? echo $two; ?></td>
        <td><? echo $one; ?></td>
        <td><? $we[20]=(($five*5)+($four*4)+($three*3)+($two*2)+($one*1))/$totalstud[0];  echo number_format($we[20],2); ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table><br /><center>
      <strong>Overall Weighted Average=
      <? $twe=0;
	for($r=1;$r<=20;$r++)
	$twe=$twe+$we[$r];
	$twe=$twe/20; echo number_format($twe,2); ?>
      </strong>
    </center>
    
<div align="center">
<table ><tr><td>W.A. - Weighted Average</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>S.E. - Self Evaluation</td></tr></table><br />
<table width="313" >
  <tr><th width="176">Weighted Average</th>
  <th width="125">Rating</th>
  </tr>
<tr><td align="center">1</td><td>Poor</td></tr>
<tr><td align="center">2</td><td>Fair</td></tr>
<tr><td align="center">3</td><td>Good</td></tr>
<tr><td align="center">4</td><td>Very Good</td></tr>
<tr><td align="center">5</td><td>Excellent</td></tr></table>
</div>
<br />NOTE:  <ol type="1"><li> The Head of the Department after consulting with the teacher sheet his/her remarks and attacht the same to this evaluation.</li><li> A copy of this Data Sheet may be given to the Teacher.</li></ol>
<br /><br /><br /><br /><br /><br />

<? } ?>	</font>
    <br /><div align="center">
	
	<a href="index.php?q=Successfully Logged out">Home</a>  <?  }
	else
	{
		include('index.php');
	} ?>
   </div>
</body>
</html>