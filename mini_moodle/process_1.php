<?php
	session_start();
?>
<?php
	//to collect the values from the form that we cresated in login.php
	$username = $_post['user'];
	$password = $_post['pass'];
	$_SESSION["username_1"]=$usename;
	// to prevent from mysql injection
	$username= stripcslashes($username);
	$password= stripcslashes($password);
	$username=mysql_real_escape_string($username);
	$password=mysql_real_escape_string($password);

	//connect to server and select database
	mysql_connect("localhost","root","aim522");
	mysql_select_db("login");

	//quiry the database for users
	$result = mysql_query("select * from users where username = '$username' and password = '$password'") or die("Failed to quiry database ".mysql_error());
	$row= mysql_fetch_array($result);
	if($raw['username']==$username && $raw['password']==$password)
	{
		//echo "login successfull";
		include 'student_data.php' ;
	}
	else
	{
		//echo "failed to login";
		$result= mysql_query("select * from prof where username = '$username' and password='$password'") or die("Failed to quiry database".mysql_error());
		$raw=mysql_fetch_array($result);
		if($raw['username']==$username && $raw['password']==$password)
		{
			echo "login sucessfull !!"; 
		}
		else
		{
			echo "login fail";
		}
	}
?>
