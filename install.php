<?
include('header.php');


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Resetting Database</title>
</head>
<body ><div align="center">
   
    <br /><?

$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
	mysql_select_db("feedback", $con);


$sql="DROP DATABASE `feedback`;";
mysql_query($sql);

$sql="DROP DATABASE `feedbackcse`;";
mysql_query($sql);

$sql="DROP DATABASE `feedbackece`;";
mysql_query($sql);

$sql="DROP DATABASE `feedbackit`;";
mysql_query($sql);

$sql="DROP DATABASE `feedbackeie`;";
mysql_query($sql);

$sql="DROP DATABASE `feedbackmech`;";
mysql_query($sql);

$sql="DROP DATABASE `feedbackprod`;";
mysql_query($sql);

$sql="DROP DATABASE `feedbackeee`;";
mysql_query($sql);

$sql="DROP DATABASE `feedbackcivil`;";
mysql_query($sql);


$sql="CREATE DATABASE `feedbackcivil`;";
mysql_query($sql);

$sql="CREATE DATABASE `feedback` ;";
mysql_query($sql);


$sql="CREATE DATABASE `feedbackcse`;";
mysql_query($sql);

$sql="CREATE DATABASE `feedbackece`;";
mysql_query($sql);

$sql="CREATE DATABASE `feedbackit`;";
mysql_query($sql);

$sql="CREATE DATABASE `feedbackeie`;";
mysql_query($sql);

$sql="CREATE DATABASE `feedbackmech`;";
mysql_query($sql);

$sql="CREATE DATABASE `feedbackprod`;";
mysql_query($sql);

$sql="CREATE DATABASE `feedbackeee`;";
mysql_query($sql);




if (!$con) { die('Could not connect: ' . mysql_error()); }
	mysql_select_db("feedbackcse", $con);



$sql="CREATE TABLE `first` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,`section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `second` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `third` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fourth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fifth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `sixth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `seventh` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `eigth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="CREATE TABLE `subject` (  `sem` varchar(55) collate latin1_general_ci NOT NULL,  scount int(2) collate latin1_general_ci)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="insert into `subject` values('first',0);";
mysql_query($sql);


$sql="insert into `subject` values('second',0);";
mysql_query($sql);

$sql="insert into `subject` values('third',0);";
mysql_query($sql);

$sql="insert into `subject` values('fourth',0);";
mysql_query($sql);

$sql="insert into `subject` values('fifth',0);";
mysql_query($sql);

$sql="insert into `subject` values('sixth',0);";
mysql_query($sql);

$sql="insert into `subject` values('seventh',0);";
mysql_query($sql);

$sql="insert into `subject` values('eigth',0);";
mysql_query($sql);

mysql_close($con);

$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
	mysql_select_db("feedbackece", $con);



$sql="CREATE TABLE `first` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,`section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `second` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `third` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fourth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fifth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `sixth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `seventh` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `eigth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="CREATE TABLE `subject` (  `sem` varchar(55) collate latin1_general_ci NOT NULL,  scount int(2) collate latin1_general_ci)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="insert into `subject` values('first',0);";
mysql_query($sql);


$sql="insert into `subject` values('second',0);";
mysql_query($sql);

$sql="insert into `subject` values('third',0);";
mysql_query($sql);

$sql="insert into `subject` values('fourth',0);";
mysql_query($sql);

$sql="insert into `subject` values('fifth',0);";
mysql_query($sql);

$sql="insert into `subject` values('sixth',0);";
mysql_query($sql);

$sql="insert into `subject` values('seventh',0);";
mysql_query($sql);

$sql="insert into `subject` values('eigth',0);";
mysql_query($sql);

mysql_close($con);
$con = mysql_connect("localhost","root",""); 

if (!$con) { die('Could not connect: ' . mysql_error()); }
	mysql_select_db("feedbackeee", $con);



$sql="CREATE TABLE `first` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,`section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `second` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `third` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fourth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fifth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `sixth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `seventh` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `eigth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="CREATE TABLE `subject` (  `sem` varchar(55) collate latin1_general_ci NOT NULL,  scount int(2) collate latin1_general_ci)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="insert into `subject` values('first',0);";
mysql_query($sql);


$sql="insert into `subject` values('second',0);";
mysql_query($sql);

$sql="insert into `subject` values('third',0);";
mysql_query($sql);

$sql="insert into `subject` values('fourth',0);";
mysql_query($sql);

$sql="insert into `subject` values('fifth',0);";
mysql_query($sql);

$sql="insert into `subject` values('sixth',0);";
mysql_query($sql);

$sql="insert into `subject` values('seventh',0);";
mysql_query($sql);

$sql="insert into `subject` values('eigth',0);";
mysql_query($sql);

mysql_close($con);

$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
	mysql_select_db("feedbackeie", $con);



$sql="CREATE TABLE `first` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,`section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `second` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `third` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fourth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fifth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `sixth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `seventh` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `eigth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="CREATE TABLE `subject` (  `sem` varchar(55) collate latin1_general_ci NOT NULL,  scount int(2) collate latin1_general_ci)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="insert into `subject` values('first',0);";
mysql_query($sql);


$sql="insert into `subject` values('second',0);";
mysql_query($sql);

$sql="insert into `subject` values('third',0);";
mysql_query($sql);

$sql="insert into `subject` values('fourth',0);";
mysql_query($sql);

$sql="insert into `subject` values('fifth',0);";
mysql_query($sql);

$sql="insert into `subject` values('sixth',0);";
mysql_query($sql);

$sql="insert into `subject` values('seventh',0);";
mysql_query($sql);

$sql="insert into `subject` values('eigth',0);";
mysql_query($sql);

mysql_close($con);
$con = mysql_connect("localhost","root",""); 

if (!$con) { die('Could not connect: ' . mysql_error()); }
	mysql_select_db("feedbackit", $con);



$sql="CREATE TABLE `first` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,`section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `second` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `third` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fourth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fifth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `sixth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `seventh` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `eigth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="CREATE TABLE `subject` (  `sem` varchar(55) collate latin1_general_ci NOT NULL,  scount int(2) collate latin1_general_ci)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="insert into `subject` values('first',0);";
mysql_query($sql);


$sql="insert into `subject` values('second',0);";
mysql_query($sql);

$sql="insert into `subject` values('third',0);";
mysql_query($sql);

$sql="insert into `subject` values('fourth',0);";
mysql_query($sql);

$sql="insert into `subject` values('fifth',0);";
mysql_query($sql);

$sql="insert into `subject` values('sixth',0);";
mysql_query($sql);

$sql="insert into `subject` values('seventh',0);";
mysql_query($sql);

$sql="insert into `subject` values('eigth',0);";
mysql_query($sql);

mysql_close($con);

$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
	mysql_select_db("feedbackmech", $con);



$sql="CREATE TABLE `first` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,`section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `second` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `third` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fourth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fifth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `sixth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `seventh` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `eigth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="CREATE TABLE `subject` (  `sem` varchar(55) collate latin1_general_ci NOT NULL,  scount int(2) collate latin1_general_ci)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="insert into `subject` values('first',0);";
mysql_query($sql);


$sql="insert into `subject` values('second',0);";
mysql_query($sql);

$sql="insert into `subject` values('third',0);";
mysql_query($sql);

$sql="insert into `subject` values('fourth',0);";
mysql_query($sql);

$sql="insert into `subject` values('fifth',0);";
mysql_query($sql);

$sql="insert into `subject` values('sixth',0);";
mysql_query($sql);

$sql="insert into `subject` values('seventh',0);";
mysql_query($sql);

$sql="insert into `subject` values('eigth',0);";
mysql_query($sql);

mysql_close($con);

$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
	mysql_select_db("feedbackprod", $con);



$sql="CREATE TABLE `first` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,`section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `second` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `third` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fourth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fifth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `sixth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `seventh` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `eigth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="CREATE TABLE `subject` (  `sem` varchar(55) collate latin1_general_ci NOT NULL,  scount int(2) collate latin1_general_ci)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="insert into `subject` values('first',0);";
mysql_query($sql);


$sql="insert into `subject` values('second',0);";
mysql_query($sql);

$sql="insert into `subject` values('third',0);";
mysql_query($sql);

$sql="insert into `subject` values('fourth',0);";
mysql_query($sql);

$sql="insert into `subject` values('fifth',0);";
mysql_query($sql);

$sql="insert into `subject` values('sixth',0);";
mysql_query($sql);

$sql="insert into `subject` values('seventh',0);";
mysql_query($sql);

$sql="insert into `subject` values('eigth',0);";
mysql_query($sql);

mysql_close($con);
$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
	mysql_select_db("feedback", $con);

$sql="CREATE TABLE `staff` (  `username` varchar(55) collate latin1_general_ci NOT NULL,  `password` varchar(55) collate latin1_general_ci)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `admin` (  `username` varchar(55) collate latin1_general_ci NOT NULL,  `password` varchar(55) collate latin1_general_ci)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="insert into `staff` values('velammal','velammal');";
mysql_query($sql);


$sql="insert into `admin` values('velammal','velammal');";
mysql_query($sql);


mysql_close($con);
$con = mysql_connect("localhost","root",""); 
if (!$con) { die('Could not connect: ' . mysql_error()); }
	mysql_select_db("feedbackcivil", $con);



$sql="CREATE TABLE `first` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,`section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `second` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL )ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `third` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL ,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fourth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `fifth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `sixth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `seventh` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);

$sql="CREATE TABLE `eigth` (  `subname` varchar(55) collate latin1_general_ci NOT NULL,  `staffname` varchar(25) collate latin1_general_ci NOT NULL,  `section` varchar(3) collate latin1_general_ci NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="CREATE TABLE `subject` (  `sem` varchar(55) collate latin1_general_ci NOT NULL,  scount int(2) collate latin1_general_ci)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";
mysql_query($sql);


$sql="insert into `subject` values('first',0);";
mysql_query($sql);


$sql="insert into `subject` values('second',0);";
mysql_query($sql);

$sql="insert into `subject` values('third',0);";
mysql_query($sql);

$sql="insert into `subject` values('fourth',0);";
mysql_query($sql);

$sql="insert into `subject` values('fifth',0);";
mysql_query($sql);

$sql="insert into `subject` values('sixth',0);";
mysql_query($sql);

$sql="insert into `subject` values('seventh',0);";
mysql_query($sql);

$sql="insert into `subject` values('eigth',0);";
mysql_query($sql);

mysql_close($con);


?>
<br /><strong><font color="#0000" size="3" face="Georgia, Arial, Helvetica, sans-serif"> Database successfully created.</font></strong><br /><br />
    <br /> <table><tr><td>STAFF</td></tr><tr><td>Username :</td><td> velammal</td></tr><tr><td>Password :</td><td> velammal</td></tr><tr><td></td></tr><tr><td></td></tr><tr><td>ADMIN</td></tr><tr><td>Username :</td><td> velammal</td></tr><tr><td>Password :</td><td> velammal</td></tr></table>
	<br /> <br />
	<br /> 
<br /><a href="index.php">Home</a></div>
    <br />
	<br /> 
    
  <br />
  
<? include('footer.php');
?>
 
</body>
</html>