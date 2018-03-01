<?php
 		if (isset($_POST['course_droped'])) {
 			if(!empty($_POST['course_drop']))
 			{
 				$n_course=count($_POST['course_drop']);
 				$course=$_POST['course_drop'];
 				for ($i=0; $i < $n_course; $i++) { 
 					echo $course[$i];
 				}
 				mysql_connect("localhost","root","aim522");
 				mysql_select_db("login");
 				for ($i=0; $i < $n_course; $i++) { 
 					mysql_query("ALTER TABLE `course_student_1` DROP `$course[$i]`");
 				}
 			}
 		}
 		include 'process_1.php';
?>