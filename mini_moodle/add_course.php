<?php
		session_start();
?>
<?php
 		if (isset($_POST['submit'])) {
 			if(!empty($_POST['course_add']))
 			{
 				$n_course=count($_POST['course_add']);
 				$course=$_POST['course_add'];
 				
				mysql_connect("localhost","root","aim522");
 				mysql_select_db("login");
//				for ($i=0; $i < $n_course; $i++) { 
//					mysql_query("ALTER TABLE `course_student_1` ADD `$course[$i]` VARCHAR(100)");
// 				}				
				for ($i=0; $i < $n_course; $i++) 
 				{ 
 					$course_resourse = mysql_query("select * from course where id='$course[$i]'");
					$course_2[$i]= mysql_fetch_row($course_resourse);
				}
				$username=$_SESSION["username_1"];
				mysql_connect("localhost","root","aim522");
 				mysql_select_db("login");
				for ($i=0; $i < $n_course; $i++) 
				{ 
					mysql_query("UPDATE course_student_1 
								SET `$course[$i]`=`course_2[$i][1]`
							 	WHERE student_username=`$username`") or die("Failed to quiry database ".mysql_error());				
				}
 			}
 		}

		
?>
