<?

	if($dept=="cse")
mysql_select_db("feedbackcse", $con);
else if($dept=="ece")
mysql_select_db("feedbackece", $con);
else if($dept=="eee")
mysql_select_db("feedbackeee", $con);
else if($dept=="eie")
mysql_select_db("feedbackeie", $con);
else if($dept=="it")
mysql_select_db("feedbackit", $con);
else if($dept=="mech")
mysql_select_db("feedbackmech", $con);
else if($dept=="prod")
mysql_select_db("feedbackprod", $con);
else if($dept=="civil")
mysql_select_db("feedbackcivil", $con);
else echo "wrong database";
?>