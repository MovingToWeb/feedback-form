<?php

session_start();
session_destroy();
include('header.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>FeedBack Form</title>
	<script language="JavaScript">

function fCheck(thisform)
{
	
	if(thisform.stdname.value=="")
			{alert("Fill Ur Name");
return false;}
else if(thisform.dept.value=="")
	{alert("Select Department");
return false;
	}
	else if(thisform.sec.value=="")
	{alert("Select Section");
	return false;
	}
else if(thisform.sem.value=="")
	{alert("Select Semester");
return false;
	}
else return true;
}

</script>
</head>
<body>
    
	<div align="center">
   
    <br />
    <br />
   <strong><font color="#0000" size="3" face="Georgia, Arial, Helvetica, sans-serif">STUDENT FEEDBACK
    FORM</font></strong><br />
    <br />
    <br /></div>
    <br />
    <br /><form name="form1" method="GET" action="logincheck.php" onSubmit="return fCheck(this);">
    <table align="center"><tr><td>Student Name</td><td> 
    <input id="Text1" type="text" name="stdname" id="stdname" /></td></tr><tr><td>
    (As in Certificate)</td></tr>
	<tr></tr><tr></tr><tr><td>
  Department </td>
<td>    <select id="dept" name="dept">
         <option selected="selected" ></option>
		 <option value="civil">civil</option>
		<option value="cse">cse</option>
        <option value="ece">ece</option>
		<option value="eee">eee</option>
		<option value="eie">eie</option>
		<option value="it">it</option>
		<option value="mech">mech</option>
		<option value="prod">prod</option>    
       
    </select></td></tr><tr></tr><tr></tr><tr></tr><tr></tr>
   <tr></tr><tr></tr><tr><td>
  Section </td>
<td>    <select id="sec" name="sec">
         <option selected="selected" ></option>
		<option value="A">A</option>
        <option value="B">B</option>
       
       
    </select></td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr>
    <td>
    Semester</td><td>
    <select id="sem" name="sem">
	 <option selected="selected" ></option>
        <option value="first">first</option>
        <option value="second">second</option>
        <option value="third">third</option>
        <option value="fourth">fourth</option>
        <option value="fifth">fifth</option>
        <option value="sixth">sixth</option>
        <option value="seventh">seventh</option>
        <option value="eigth">eigth</option>
       
    </select></td></tr></table>
    
    <br />
    <br /> <div align="center">
    
   <input id="Button1" type="submit" value="Submit" /> </form><br />
  
    <br /><a href="index.php">Home</a>
    <br />
	
  </div>
 <?php include('footer.php');
?>
</body>
</html>
