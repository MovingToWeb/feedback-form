<?

session_start();
if(isset($_SESSION['usermode'])==session_id())
{include('header.php');

$sec=$_SESSION["sec"];
 $stdname=$_SESSION["stdname"];
 $sem=$_SESSION["sem"];
 $opt=$_SESSION["opt"];
 $sub=$_SESSION["sub"];
$dept=$_SESSION["dept"];
 for($i=1,$j=0;$i<=($opt);$i++,$j++)
	{
	$opname[$j]=$_POST["op$i"];
	//echo "$opname[$j]";
		
	}

$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
	
	include('selectdb.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Result for Feedback</title><meta http-equiv="refresh" content="5;URL=index.php?q=Successfully Logged off" />
</head>
<body ><div align="center">
    <br /> <br />
     <br />
    <br />
    <br />
<?



	if($sub==3){
$sq="INSERT INTO `".$sem."three".$sec."` VALUES ('".$stdname."',".$opname[0].",".$opname[1].",".$opname[2].",".$opname[3].",".$opname[4].",".$opname[5].",".$opname[6].",".$opname[7].",".$opname[8].",".$opname[9].",".$opname[10].",".$opname[11].",".$opname[12].",".$opname[13].",".$opname[14].",".$opname[15].",".$opname[16].",".$opname[17].",".$opname[18].",".$opname[19].",".$opname[20].",".$opname[21].",".$opname[22].",".$opname[23].",".$opname[24].",".$opname[25].",".$opname[26].",".$opname[27].",".$opname[28].",".$opname[29].",".$opname[30].",".$opname[31].",".$opname[32].",".$opname[33].",".$opname[34].",".$opname[35].",".$opname[36].",".$opname[37].",".$opname[38].",".$opname[39].",".$opname[40].",".$opname[41].",".$opname[42].",".$opname[43].",".$opname[44].",".$opname[45].",".$opname[46].",".$opname[47].",".$opname[48].",".$opname[49].",".$opname[50].",".$opname[51].",".$opname[52].",".$opname[53].",".$opname[54].",".$opname[55].",".$opname[56].",".$opname[57].",".$opname[58].",".$opname[59].");"; 
mysql_query($sq); }

else if($sub==4){	
$sq="INSERT INTO `".$sem."four".$sec."` VALUES ('".$stdname."',".$opname[0].",".$opname[1].",".$opname[2].",".$opname[3].",".$opname[4].",".$opname[5].",".$opname[6].",".$opname[7].",".$opname[8].",".$opname[9].",".$opname[10].",".$opname[11].",".$opname[12].",".$opname[13].",".$opname[14].",".$opname[15].",".$opname[16].",".$opname[17].",".$opname[18].",".$opname[19].",".$opname[20].",".$opname[21].",".$opname[22].",".$opname[23].",".$opname[24].",".$opname[25].",".$opname[26].",".$opname[27].",".$opname[28].",".$opname[29].",".$opname[30].",".$opname[31].",".$opname[32].",".$opname[33].",".$opname[34].",".$opname[35].",".$opname[36].",".$opname[37].",".$opname[38].",".$opname[39].",".$opname[40].",".$opname[41].",".$opname[42].",".$opname[43].",".$opname[44].",".$opname[45].",".$opname[46].",".$opname[47].",".$opname[48].",".$opname[49].",".$opname[50].",".$opname[51].",".$opname[52].",".$opname[53].",".$opname[54].",".$opname[55].",".$opname[56].",".$opname[57].",".$opname[58].",".$opname[59].",".$opname[60].",".$opname[61].",".$opname[62].",".$opname[63].",".$opname[64].",".$opname[65].",".$opname[66].",".$opname[67].",".$opname[68].",".$opname[69].",".$opname[70].",".$opname[71].",".$opname[72].",".$opname[73].",".$opname[74].",".$opname[75].",".$opname[76].",".$opname[77].",".$opname[78].",".$opname[79].");"; 
mysql_query($sq);
}

else if($sub==5){	
$sq="INSERT INTO `".$sem."five".$sec."` VALUES ('".$stdname."',".$opname[0].",".$opname[1].",".$opname[2].",".$opname[3].",".$opname[4].",".$opname[5].",".$opname[6].",".$opname[7].",".$opname[8].",".$opname[9].",".$opname[10].",".$opname[11].",".$opname[12].",".$opname[13].",".$opname[14].",".$opname[15].",".$opname[16].",".$opname[17].",".$opname[18].",".$opname[19].",".$opname[20].",".$opname[21].",".$opname[22].",".$opname[23].",".$opname[24].",".$opname[25].",".$opname[26].",".$opname[27].",".$opname[28].",".$opname[29].",".$opname[30].",".$opname[31].",".$opname[32].",".$opname[33].",".$opname[34].",".$opname[35].",".$opname[36].",".$opname[37].",".$opname[38].",".$opname[39].",".$opname[40].",".$opname[41].",".$opname[42].",".$opname[43].",".$opname[44].",".$opname[45].",".$opname[46].",".$opname[47].",".$opname[48].",".$opname[49].",".$opname[50].",".$opname[51].",".$opname[52].",".$opname[53].",".$opname[54].",".$opname[55].",".$opname[56].",".$opname[57].",".$opname[58].",".$opname[59].",".$opname[60].",".$opname[61].",".$opname[62].",".$opname[63].",".$opname[64].",".$opname[65].",".$opname[66].",".$opname[67].",".$opname[68].",".$opname[69].",".$opname[70].",".$opname[71].",".$opname[72].",".$opname[73].",".$opname[74].",".$opname[75].",".$opname[76].",".$opname[77].",".$opname[78].",".$opname[79].",".$opname[80].",".$opname[81].",".$opname[82].",".$opname[83].",".$opname[84].",".$opname[85].",".$opname[86].",".$opname[87].",".$opname[88].",".$opname[89].",".$opname[90].",".$opname[91].",".$opname[92].",".$opname[93].",".$opname[94].",".$opname[95].",".$opname[96].",".$opname[97].",".$opname[98].",".$opname[99].");"; 
mysql_query($sq);
}

else if($sub==6){	
$sq="INSERT INTO `".$sem."six".$sec."` VALUES ('".$stdname."',".$opname[0].",".$opname[1].",".$opname[2].",".$opname[3].",".$opname[4].",".$opname[5].",".$opname[6].",".$opname[7].",".$opname[8].",".$opname[9].",".$opname[10].",".$opname[11].",".$opname[12].",".$opname[13].",".$opname[14].",".$opname[15].",".$opname[16].",".$opname[17].",".$opname[18].",".$opname[19].",".$opname[20].",".$opname[21].",".$opname[22].",".$opname[23].",".$opname[24].",".$opname[25].",".$opname[26].",".$opname[27].",".$opname[28].",".$opname[29].",".$opname[30].",".$opname[31].",".$opname[32].",".$opname[33].",".$opname[34].",".$opname[35].",".$opname[36].",".$opname[37].",".$opname[38].",".$opname[39].",".$opname[40].",".$opname[41].",".$opname[42].",".$opname[43].",".$opname[44].",".$opname[45].",".$opname[46].",".$opname[47].",".$opname[48].",".$opname[49].",".$opname[50].",".$opname[51].",".$opname[52].",".$opname[53].",".$opname[54].",".$opname[55].",".$opname[56].",".$opname[57].",".$opname[58].",".$opname[59].",".$opname[60].",".$opname[61].",".$opname[62].",".$opname[63].",".$opname[64].",".$opname[65].",".$opname[66].",".$opname[67].",".$opname[68].",".$opname[69].",".$opname[70].",".$opname[71].",".$opname[72].",".$opname[73].",".$opname[74].",".$opname[75].",".$opname[76].",".$opname[77].",".$opname[78].",".$opname[79].",".$opname[80].",".$opname[81].",".$opname[82].",".$opname[83].",".$opname[84].",".$opname[85].",".$opname[86].",".$opname[87].",".$opname[88].",".$opname[89].",".$opname[90].",".$opname[91].",".$opname[92].",".$opname[93].",".$opname[94].",".$opname[95].",".$opname[96].",".$opname[97].",".$opname[98].",".$opname[99].",".$opname[100].",".$opname[101].",".$opname[102].",".$opname[103].",".$opname[104].",".$opname[105].",".$opname[106].",".$opname[107].",".$opname[108].",".$opname[109].",".$opname[110].",".$opname[111].",".$opname[112].",".$opname[113].",".$opname[114].",".$opname[115].",".$opname[116].",".$opname[117].",".$opname[118].",".$opname[119].");"; 
mysql_query($sq);
}

else if($sub==7){	
$sq="INSERT INTO `".$sem."seven".$sec."` VALUES ('".$stdname."',".$opname[0].",".$opname[1].",".$opname[2].",".$opname[3].",".$opname[4].",".$opname[5].",".$opname[6].",".$opname[7].",".$opname[8].",".$opname[9].",".$opname[10].",".$opname[11].",".$opname[12].",".$opname[13].",".$opname[14].",".$opname[15].",".$opname[16].",".$opname[17].",".$opname[18].",".$opname[19].",".$opname[20].",".$opname[21].",".$opname[22].",".$opname[23].",".$opname[24].",".$opname[25].",".$opname[26].",".$opname[27].",".$opname[28].",".$opname[29].",".$opname[30].",".$opname[31].",".$opname[32].",".$opname[33].",".$opname[34].",".$opname[35].",".$opname[36].",".$opname[37].",".$opname[38].",".$opname[39].",".$opname[40].",".$opname[41].",".$opname[42].",".$opname[43].",".$opname[44].",".$opname[45].",".$opname[46].",".$opname[47].",".$opname[48].",".$opname[49].",".$opname[50].",".$opname[51].",".$opname[52].",".$opname[53].",".$opname[54].",".$opname[55].",".$opname[56].",".$opname[57].",".$opname[58].",".$opname[59].",".$opname[60].",".$opname[61].",".$opname[62].",".$opname[63].",".$opname[64].",".$opname[65].",".$opname[66].",".$opname[67].",".$opname[68].",".$opname[69].",".$opname[70].",".$opname[71].",".$opname[72].",".$opname[73].",".$opname[74].",".$opname[75].",".$opname[76].",".$opname[77].",".$opname[78].",".$opname[79].",".$opname[80].",".$opname[81].",".$opname[82].",".$opname[83].",".$opname[84].",".$opname[85].",".$opname[86].",".$opname[87].",".$opname[88].",".$opname[89].",".$opname[90].",".$opname[91].",".$opname[92].",".$opname[93].",".$opname[94].",".$opname[95].",".$opname[96].",".$opname[97].",".$opname[98].",".$opname[99].",".$opname[100].",".$opname[101].",".$opname[102].",".$opname[103].",".$opname[104].",".$opname[105].",".$opname[106].",".$opname[107].",".$opname[108].",".$opname[109].",".$opname[110].",".$opname[111].",".$opname[112].",".$opname[113].",".$opname[114].",".$opname[115].",".$opname[116].",".$opname[117].",".$opname[118].",".$opname[119].",".$opname[120].",".$opname[121].",".$opname[122].",".$opname[123].",".$opname[124].",".$opname[125].",".$opname[126].",".$opname[127].",".$opname[128].",".$opname[129].",".$opname[130].",".$opname[131].",".$opname[132].",".$opname[133].",".$opname[134].",".$opname[135].",".$opname[136].",".$opname[137].",".$opname[138].",".$opname[139].");"; 
mysql_query($sq);
}
else if($sub==8){	
$sq="INSERT INTO `".$sem."eight".$sec."` VALUES ('".$stdname."',".$opname[0].",".$opname[1].",".$opname[2].",".$opname[3].",".$opname[4].",".$opname[5].",".$opname[6].",".$opname[7].",".$opname[8].",".$opname[9].",".$opname[10].",".$opname[11].",".$opname[12].",".$opname[13].",".$opname[14].",".$opname[15].",".$opname[16].",".$opname[17].",".$opname[18].",".$opname[19].",".$opname[20].",".$opname[21].",".$opname[22].",".$opname[23].",".$opname[24].",".$opname[25].",".$opname[26].",".$opname[27].",".$opname[28].",".$opname[29].",".$opname[30].",".$opname[31].",".$opname[32].",".$opname[33].",".$opname[34].",".$opname[35].",".$opname[36].",".$opname[37].",".$opname[38].",".$opname[39].",".$opname[40].",".$opname[41].",".$opname[42].",".$opname[43].",".$opname[44].",".$opname[45].",".$opname[46].",".$opname[47].",".$opname[48].",".$opname[49].",".$opname[50].",".$opname[51].",".$opname[52].",".$opname[53].",".$opname[54].",".$opname[55].",".$opname[56].",".$opname[57].",".$opname[58].",".$opname[59].",".$opname[60].",".$opname[61].",".$opname[62].",".$opname[63].",".$opname[64].",".$opname[65].",".$opname[66].",".$opname[67].",".$opname[68].",".$opname[69].",".$opname[70].",".$opname[71].",".$opname[72].",".$opname[73].",".$opname[74].",".$opname[75].",".$opname[76].",".$opname[77].",".$opname[78].",".$opname[79].",".$opname[80].",".$opname[81].",".$opname[82].",".$opname[83].",".$opname[84].",".$opname[85].",".$opname[86].",".$opname[87].",".$opname[88].",".$opname[89].",".$opname[90].",".$opname[91].",".$opname[92].",".$opname[93].",".$opname[94].",".$opname[95].",".$opname[96].",".$opname[97].",".$opname[98].",".$opname[99].",".$opname[100].",".$opname[101].",".$opname[102].",".$opname[103].",".$opname[104].",".$opname[105].",".$opname[106].",".$opname[107].",".$opname[108].",".$opname[109].",".$opname[110].",".$opname[111].",".$opname[112].",".$opname[113].",".$opname[114].",".$opname[115].",".$opname[116].",".$opname[117].",".$opname[118].",".$opname[119].",".$opname[120].",".$opname[121].",".$opname[122].",".$opname[123].",".$opname[124].",".$opname[125].",".$opname[126].",".$opname[127].",".$opname[128].",".$opname[129].",".$opname[130].",".$opname[131].",".$opname[132].",".$opname[133].",".$opname[134].",".$opname[135].",".$opname[136].",".$opname[137].",".$opname[138].",".$opname[139].",".$opname[140].",".$opname[141].",".$opname[142].",".$opname[143].",".$opname[144].",".$opname[145].",".$opname[146].",".$opname[147].",".$opname[148].",".$opname[149].",".$opname[150].",".$opname[151].",".$opname[152].",".$opname[153].",".$opname[154].",".$opname[155].",".$opname[156].",".$opname[157].",".$opname[158].",".$opname[159].");"; 
mysql_query($sq);
}


?>   Feedback form has been Successfully Submitted...
<br />
   
    <br />
 <br />
    <br /><a href="index.php?q=Sucessfully Logged Out">Logout</a>
   </div>
</body><? include('footer.php');
}
else
	{
		include('index.php');
	}?>
</html>