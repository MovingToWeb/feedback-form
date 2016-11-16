<?php session_start();
if(isset($_SESSION['usermode'])==session_id())
{
include('header.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Result for Feedback</title>
	<script language="JavaScript">

function fCheck(thisform)
{
	if(thisform.dept.value=="")
			{alert("Select Department");
return false;}
	else if(thisform.sem.value=="")
			{alert("Select Semester");
return false;}
else if(thisform.sec.value=="")
	{alert("Select Section");
return false;
	}
	else if(thisform.sub.value=="")
	{
		alert("Select No of Subjects");
		return false;
	}

else return true;
}

</script>
</head>
<body ><div align="center">
    <br />
    
   
    <strong>
    
    <br /><form method="POST" action="getresult.php" name="form2" onSubmit="return fCheck(this);"><font color="#0000" size="3" face="Georgia">
    Result for Feedback Form</a><br /></strong><br />
    <br /></div><table align="center"><tr></tr><tr></tr><tr><td>
  Department </td><td></td>
<td>    <select id="dept" name="dept">
         <option selected="selected" ></option><option value="civil">civil</option>
		<option value="cse">cse</option>
        <option value="ece">ece</option>
		<option value="eee">eee</option>
		<option value="eie">eie</option>
		<option value="it">it</option>
		<option value="mech">mech</option>
		<option value="prod">prod</option>    
       
    </select></td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr><td>
    Semester</td> <td></td> <td> <select name="sem" id="sem">
        <option selected="selected"></option>
		<option value="first">first</option>
        <option value="second">second</option>
        <option value="third">third</option>
        <option value="fourth">fourth</option>
        <option value="fifth">fifth</option>
        <option value="sixth">sixth</option>
        <option value="seventh">seventh</option>
        <option value="eigth">eigth</option>
    </select></td></tr><tr></tr> <tr></tr><tr></tr><tr></tr> <tr><td>
  Section</td><td></td> <td> <select name="sec" id="sec">
        <option selected="selected"></option>
		<option value="A">A</option>
        <option value="B">B</option><br />
    
    </select></td></tr><tr></tr><tr></tr><tr></tr> <tr></tr> <tr><td>
	No of Subjects</td><td></td> <td>
	<select name="sub" id="sub">
        <option selected="selected"></option>
		  <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
		
		
    </select></td></tr></table><br /><br />
    
       <center> <input type="submit" name="submit" value="Submit" id="submit"></form><br /><br />
    <br />
    
    <br /></font>
   <br />
	 
    <br /><a href="index.php">Home</a>
    <br /><center>
    
   <?  include('footer.php'); }
	else
	{
		include('index.php');
	} ?>
</div>
</body>
</html>
