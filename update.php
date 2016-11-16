<?
	session_start();
if(isset($_SESSION['usermode'])==session_id())
{
	include('header.php');



$sec=$_SESSION["sec"];
 $sub=$_SESSION["sub"];
 $sem=$_SESSION["sem"];
 $dept=$_SESSION["dept"];
$op=$_SESSION["op"];




	
?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Updation</title>
</head>
<body ><div align="center">
    <br />
 

<table border="1" width="200px"><tr><th>Subject</th><th>Staff</th></tr> <? 
$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
	
	include('selectdb.php');
	
$op1=$arr;

$m=0;

if($sem=="first")
{$sql="delete from first where section='".$sec."';";
	$result=mysql_query($sql);
	}
	else if($sem=="second")
{$sql="delete from second where section='".$sec."';";
	$result=mysql_query($sql);
	}
	else if($sem=="third")
{$sql="delete from third where section='".$sec."';";
	$result=mysql_query($sql);
	}
	else if($sem=="fourth")
{$sql="delete from fourth where section='".$sec."';";
	$result=mysql_query($sql);
	}
	else if($sem=="fifth")
{$sql="delete from fifth where section='".$sec."';";
	$result=mysql_query($sql);
	}
	else if($sem=="sixth")
{$sql="delete from sixth where section='".$sec."';";
	$result=mysql_query($sql);
	}
	else if($sem=="seventh")
{$sql="delete from seventh where section='".$sec."';";
	$result=mysql_query($sql);
	}
	else 
{$sql="delete from eigth where section='".$sec."';";
	$result=mysql_query($sql);
	}

for($i=1,$j=0;$i<=($sub+$sub);$i++,$j++)
	{
	$subname[$j]=$_POST["sub$i"];
	$i++;echo "<tr><td>";
	echo "$subname[$j]";echo "</td><td>";
	$staffname[$j]=$_POST["sub$i"];
	echo "$staffname[$j]";echo "</td></tr>";
	
		
	}
echo "</table>";

for($i=0;$i<($j);$i++)
{
	 
	if($sem=="first")
		{ 
				$sql="insert into `first` values('".$subname[$i]."','".$staffname[$i]."' ,'".$sec."');";
		$result=mysql_query($sql);
		
		}
	else if($sem=="second")
		{
		
		$sql="insert into `second` values('".$subname[$i]."','".$staffname[$i]."' ,'".$sec."');";
		$result=mysql_query($sql);
		}
	else if($sem=="third")
		{
		
		$sql="insert into `third` values('".$subname[$i]."','".$staffname[$i]."' ,'".$sec."');";
		$result=mysql_query($sql);
		}
	else if($sem=="fourth")
		{
		
		$sql="insert into `fourth` values('".$subname[$i]."','".$staffname[$i]."' ,'".$sec."');";
		$result=mysql_query($sql);
		}
	else if($sem=="fifth")
		{
		$sql="insert into `fifth` values('".$subname[$i]."','".$staffname[$i]."' ,'".$sec."');";
		$result=mysql_query($sql);
		}
	else if($sem=="sixth")
		{
		$sql="insert into `sixth` values('".$subname[$i]."','".$staffname[$i]."' ,'".$sec."');";
		$result=mysql_query($sql);
		}
	else if($sem=="seventh")
		{
		$sql="insert into `seventh` values('".$subname[$i]."','".$staffname[$i]."' ,'".$sec."');";
		$result=mysql_query($sql);
		}
	
	else 
		{
		$sql="insert into `eigth` values('".$subname[$i]."','".$staffname[$i]."' ,'".$sec."');";
		$result=mysql_query($sql);
		}
	
}

if($sub==3){
$sq="DROP TABLE `".$sem."three".$sec."`;"; 
mysql_query($sq);
 $sql3="CREATE TABLE `".$sem."three".$sec."` ( `stdname` varchar(55), op0 int(3),op1 int(3), op2 int(3), op3 int(3), op4 int(3) , op5 int(3), op6 int(3) , op7 int(3), op8 int(3), op9 int(3), op10 int(3) , op11 int(3), op12 int(3) , op13 int(3) , op14 int(3) , op15 int(3) , op16 int(3) , op17 int(3) , op18 int(3) , op19 int(3), op20 int(3), op21 int(3) , op22 int(3) , op23 int(3) , op24 int(3) , op25 int(3) , op26 int(3) , op27 int(3),op28 int(3) , op29 int(3) , op30 int(3) , op31 int(3) , op32 int(3), op33 int(3) , op34 int(3), op35 int(3) , op36 int(3) , op37 int(3) , op38 int(3), op39 int(3) , op40 int(3), op41 int(3) ,op42 int(3),op43 int(3) , op44 int(3) ,op45 int(3) , op46 int(3), op47 int(3) , op48 int(3), op49 int(3) , op50 int(3), op51 int(3), op52 int(3) , op53 int(3) ,op54 int(3) , op55 int(3) , op56 int(3) , op57 int(3) , op58 int(3) , op59 int(3) );";
 mysql_query($sql3); 

}
else if($sub==4){
$sq="DROP TABLE `".$sem."four".$sec."`;"; 
mysql_query($sq);
 $sql3="CREATE TABLE `".$sem."four".$sec."` ( `stdname` varchar(55), op0 int(3),op1 int(3), op2 int(3), op3 int(3), op4 int(3) , op5 int(3), op6 int(3) , op7 int(3), op8 int(3), op9 int(3), op10 int(3) , op11 int(3), op12 int(3) , op13 int(3) , op14 int(3) , op15 int(3) , op16 int(3) , op17 int(3) , op18 int(3) , op19 int(3), op20 int(3), op21 int(3) , op22 int(3) , op23 int(3) , op24 int(3) , op25 int(3) , op26 int(3) , op27 int(3),op28 int(3) , op29 int(3) , op30 int(3) , op31 int(3) , op32 int(3), op33 int(3) , op34 int(3), op35 int(3) , op36 int(3) , op37 int(3) , op38 int(3), op39 int(3) , op40 int(3), op41 int(3) ,op42 int(3),op43 int(3) , op44 int(3) ,op45 int(3) , op46 int(3), op47 int(3) , op48 int(3), op49 int(3) , op50 int(3), op51 int(3), op52 int(3) , op53 int(3) ,op54 int(3) , op55 int(3) , op56 int(3) , op57 int(3) , op58 int(3) , op59 int(3), op60 int(3), op61 int(3), op62 int(3), op63 int(3), op64 int(3), op65 int(3), op66 int(3), op67 int(3), op68 int(3), op69 int(3), op70 int(3), op71 int(3), op72 int(3), op73 int(3), op74 int(3), op75 int(3), op76 int(3), op77 int(3), op78 int(3), op79 int(3) );";
 mysql_query($sql3);  
}
else if($sub==5){
$sq="DROP TABLE `".$sem."five".$sec."`;"; 
mysql_query($sq);
 $sql3="CREATE TABLE `".$sem."five".$sec."` ( `stdname` varchar(55), op0 int(3),op1 int(3), op2 int(3), op3 int(3), op4 int(3) , op5 int(3), op6 int(3) , op7 int(3), op8 int(3), op9 int(3), op10 int(3) , op11 int(3), op12 int(3) , op13 int(3) , op14 int(3) , op15 int(3) , op16 int(3) , op17 int(3) , op18 int(3) , op19 int(3), op20 int(3), op21 int(3) , op22 int(3) , op23 int(3) , op24 int(3) , op25 int(3) , op26 int(3) , op27 int(3),op28 int(3) , op29 int(3) , op30 int(3) , op31 int(3) , op32 int(3), op33 int(3) , op34 int(3), op35 int(3) , op36 int(3) , op37 int(3) , op38 int(3), op39 int(3) , op40 int(3), op41 int(3) ,op42 int(3),op43 int(3) , op44 int(3) ,op45 int(3) , op46 int(3), op47 int(3) , op48 int(3), op49 int(3) , op50 int(3), op51 int(3), op52 int(3) , op53 int(3) ,op54 int(3) , op55 int(3) , op56 int(3) , op57 int(3) , op58 int(3) , op59 int(3), op60 int(3), op61 int(3), op62 int(3), op63 int(3), op64 int(3), op65 int(3), op66 int(3), op67 int(3), op68 int(3), op69 int(3), op70 int(3), op71 int(3), op72 int(3), op73 int(3), op74 int(3), op75 int(3), op76 int(3), op77 int(3), op78 int(3), op79 int(3),op80 int(3),op81 int(3),op82 int(3),op83 int(3),op84 int(3),op85 int(3),op86 int(3),op87 int(3),op88 int(3),op89 int(3),op90 int(3),op91 int(3),op92 int(3),op93 int(3),op94 int(3),op95 int(3),op96 int(3),op97 int(3),op98 int(3),op99 int(3) );";
 mysql_query($sql3); 
}
else if($sub==6){
$sq="DROP TABLE `".$sem."six".$sec."`;"; 
mysql_query($sq);
 $sql3="CREATE TABLE `".$sem."six".$sec."` ( `stdname` varchar(55), op0 int(3),op1 int(3), op2 int(3), op3 int(3), op4 int(3) , op5 int(3), op6 int(3) , op7 int(3), op8 int(3), op9 int(3), op10 int(3) , op11 int(3), op12 int(3) , op13 int(3) , op14 int(3) , op15 int(3) , op16 int(3) , op17 int(3) , op18 int(3) , op19 int(3), op20 int(3), op21 int(3) , op22 int(3) , op23 int(3) , op24 int(3) , op25 int(3) , op26 int(3) , op27 int(3),op28 int(3) , op29 int(3) , op30 int(3) , op31 int(3) , op32 int(3), op33 int(3) , op34 int(3), op35 int(3) , op36 int(3) , op37 int(3) , op38 int(3), op39 int(3) , op40 int(3), op41 int(3) ,op42 int(3),op43 int(3) , op44 int(3) ,op45 int(3) , op46 int(3), op47 int(3) , op48 int(3), op49 int(3) , op50 int(3), op51 int(3), op52 int(3) , op53 int(3) ,op54 int(3) , op55 int(3) , op56 int(3) , op57 int(3) , op58 int(3) , op59 int(3), op60 int(3), op61 int(3), op62 int(3), op63 int(3), op64 int(3), op65 int(3), op66 int(3), op67 int(3), op68 int(3), op69 int(3), op70 int(3), op71 int(3), op72 int(3), op73 int(3), op74 int(3), op75 int(3), op76 int(3), op77 int(3), op78 int(3), op79 int(3),op80 int(3),op81 int(3),op82 int(3),op83 int(3),op84 int(3),op85 int(3),op86 int(3),op87 int(3),op88 int(3),op89 int(3),op90 int(3),op91 int(3),op92 int(3),op93 int(3),op94 int(3),op95 int(3),op96 int(3),op97 int(3),op98 int(3),op99 int(3), op100 int(3), op101 int(3), op102 int(3), op103 int(3), op104 int(3), op105 int(3), op106 int(3), op107 int(3), op108 int(3), op109 int(3), op110 int(3), op111 int(3), op112 int(3), op113 int(3), op114 int(3), op115 int(3), op116 int(3), op117 int(3), op118 int(3), op119 int(3) );";
 mysql_query($sql3);  
}
else if($sub==7){

$sq="DROP TABLE `".$sem."seven".$sec."`;"; 
mysql_query($sq);
 $sql3="CREATE TABLE `".$sem."seven".$sec."` ( `stdname` varchar(55), op0 int(3),op1 int(3), op2 int(3), op3 int(3), op4 int(3) , op5 int(3), op6 int(3) , op7 int(3), op8 int(3), op9 int(3), op10 int(3) , op11 int(3), op12 int(3) , op13 int(3) , op14 int(3) , op15 int(3) , op16 int(3) , op17 int(3) , op18 int(3) , op19 int(3), op20 int(3), op21 int(3) , op22 int(3) , op23 int(3) , op24 int(3) , op25 int(3) , op26 int(3) , op27 int(3),op28 int(3) , op29 int(3) , op30 int(3) , op31 int(3) , op32 int(3), op33 int(3) , op34 int(3), op35 int(3) , op36 int(3) , op37 int(3) , op38 int(3), op39 int(3) , op40 int(3), op41 int(3) ,op42 int(3),op43 int(3) , op44 int(3) ,op45 int(3) , op46 int(3), op47 int(3) , op48 int(3), op49 int(3) , op50 int(3), op51 int(3), op52 int(3) , op53 int(3) ,op54 int(3) , op55 int(3) , op56 int(3) , op57 int(3) , op58 int(3) , op59 int(3), op60 int(3), op61 int(3), op62 int(3), op63 int(3), op64 int(3), op65 int(3), op66 int(3), op67 int(3), op68 int(3), op69 int(3), op70 int(3), op71 int(3), op72 int(3), op73 int(3), op74 int(3), op75 int(3), op76 int(3), op77 int(3), op78 int(3), op79 int(3),op80 int(3),op81 int(3),op82 int(3),op83 int(3),op84 int(3),op85 int(3),op86 int(3),op87 int(3),op88 int(3),op89 int(3),op90 int(3),op91 int(3),op92 int(3),op93 int(3),op94 int(3),op95 int(3),op96 int(3),op97 int(3),op98 int(3),op99 int(3), op100 int(3), op101 int(3), op102 int(3), op103 int(3), op104 int(3), op105 int(3), op106 int(3), op107 int(3), op108 int(3), op109 int(3), op110 int(3), op111 int(3), op112 int(3), op113 int(3), op114 int(3), op115 int(3), op116 int(3), op117 int(3), op118 int(3), op119 int(3), op120 int(3), op121 int(3) , op122 int(3) , op123 int(3) , op124 int(3) , op125 int(3) , op126 int(3) , op127 int(3),op128 int(3) , op129 int(3) , op130 int(3) , op131 int(3) , op132 int(3), op133 int(3) , op134 int(3), op135 int(3) , op136 int(3) , op137 int(3) , op138 int(3), op139 int(3) );";
 mysql_query($sql3);  


}
else if($sub==8){
$sq="DROP TABLE `".$sem."eight".$sec."`;"; 
mysql_query($sq);
 $sql3="CREATE TABLE `".$sem."eight".$sec."` ( `stdname` varchar(55), op0 int(3),op1 int(3), op2 int(3), op3 int(3), op4 int(3) , op5 int(3), op6 int(3) , op7 int(3), op8 int(3), op9 int(3), op10 int(3) , op11 int(3), op12 int(3) , op13 int(3) , op14 int(3) , op15 int(3) , op16 int(3) , op17 int(3) , op18 int(3) , op19 int(3), op20 int(3), op21 int(3) , op22 int(3) , op23 int(3) , op24 int(3) , op25 int(3) , op26 int(3) , op27 int(3),op28 int(3) , op29 int(3) , op30 int(3) , op31 int(3) , op32 int(3), op33 int(3) , op34 int(3), op35 int(3) , op36 int(3) , op37 int(3) , op38 int(3), op39 int(3) , op40 int(3), op41 int(3) ,op42 int(3),op43 int(3) , op44 int(3) ,op45 int(3) , op46 int(3), op47 int(3) , op48 int(3), op49 int(3) , op50 int(3), op51 int(3), op52 int(3) , op53 int(3) ,op54 int(3) , op55 int(3) , op56 int(3) , op57 int(3) , op58 int(3) , op59 int(3), op60 int(3), op61 int(3), op62 int(3), op63 int(3), op64 int(3), op65 int(3), op66 int(3), op67 int(3), op68 int(3), op69 int(3), op70 int(3), op71 int(3), op72 int(3), op73 int(3), op74 int(3), op75 int(3), op76 int(3), op77 int(3), op78 int(3), op79 int(3),op80 int(3),op81 int(3),op82 int(3),op83 int(3),op84 int(3),op85 int(3),op86 int(3),op87 int(3),op88 int(3),op89 int(3),op90 int(3),op91 int(3),op92 int(3),op93 int(3),op94 int(3),op95 int(3),op96 int(3),op97 int(3),op98 int(3),op99 int(3), op100 int(3), op101 int(3), op102 int(3), op103 int(3), op104 int(3), op105 int(3), op106 int(3), op107 int(3), op108 int(3), op109 int(3), op110 int(3), op111 int(3), op112 int(3), op113 int(3), op114 int(3), op115 int(3), op116 int(3), op117 int(3), op118 int(3), op119 int(3), op120 int(3), op121 int(3) , op122 int(3) , op123 int(3) , op124 int(3) , op125 int(3) , op126 int(3) , op127 int(3),op128 int(3) , op129 int(3) , op130 int(3) , op131 int(3) , op132 int(3), op133 int(3) , op134 int(3), op135 int(3) , op136 int(3) , op137 int(3) , op138 int(3), op139 int(3)  , op140 int(3), op141 int(3) ,op142 int(3),op143 int(3) , op144 int(3) ,op145 int(3) , op146 int(3), op147 int(3) , op148 int(3), op149 int(3) , op150 int(3), op151 int(3), op152 int(3) , op153 int(3) ,op154 int(3) , op155 int(3) , op156 int(3) , op157 int(3) , op158 int(3) , op159 int(3));";
 mysql_query($sql3);  


}

	
 ?> 

	  
    <br />Staffs and Subjects Updated Sucessfully !!!
	  
	   <br />
    <br /><br /><a align="center" href="index.php">Home</a>
    <br />
  </div>
</body>
</html><?
include('footer.php');
}
else
	{
		include('index.php');
	} 
  
 ?>