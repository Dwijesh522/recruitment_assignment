<?php
	//asuming the user ius a student
	//connect to server
	mysql_connect("localhost","root","aim522");
	mysql_select_db("login");
	

	//quiry the database for users
	$username_check= $_POST['user'];
	$result_1=mysql_query("select * from course_student_1 where student_username='$username_check'") or die("Failed to quiry 			database".mysql_error());
	$raw_1=mysql_fetch_row($result_1);
	
	
	$n_raw_1=count($raw_1);
	


	//writting the content of a student.
	echo "your current courses are given below<br>";
	for($i=1;$i<=$n_raw_1;$i++)
	{
		echo "$i  $raw_1['course_1']";
	}

	include 'selction_course_student.html';
	
	$_POST['user']= $row['username_check'];

?>