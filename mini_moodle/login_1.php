

<!DOCTYPE html>
<html>
	<head>
		<style>
		p
		{
			text-align: center;
		}
		body
		{
			background-color: lightgrey;
		}
		div
		{
			border: black solid 1px;
			border-radius: 4px;
		}
		p.one
		{
			background-color:lightblue;
			color:white;
		}
	</head>
	<body>
		<form action="process.php" method="POST">
		<div>	
			<p>
				<label>username:</label>
				<input type="text" name="user" id="user">
			</p>
			<p>
				<label>password</label>
				<input type="password" name="pass" id="pass">
			</p>
			<p class="one">
				<input type="submit" id="btn" value="Login">
			</p>
		</div>
		</form>
	</body>
</html>