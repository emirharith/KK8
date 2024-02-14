<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href="stylesheet.css">
</head>
<body >

<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password) 
{
	$conn = mysql_connect("localhost","root","")
	or die("Not Connect to the database");
	mysql_select_db("farmasi") or die("incorrect database");

	$query = mysql_query("SELECT * FROM user WHERE username= '$username'");

	$numrows = mysql_num_rows($query);

	if($numrows!==0)
	{
		while ($row = mysql_fetch_assoc($query)) 
		{
			$dbusername = $row['USERNAME'];
			$dbpassword = $row['PASSWORD'];	
			$dblevel = $row['level'];
		}

		if($username==$dbusername && $password==$dbpassword)
		{
			echo "You Have Log In";
			$_SESSION['username'] = $username;
			
			if($dblevel == 1)
			{
				header("location: admin.php");
			}
			
			else
				header("location: users.php");
		}
		else
			?>

			<div id = 'box'>
			<center>
			<span class='normal'>Your Password Wrong!!</span>
			</center>
			<div class='btn-index'>
			<a href="index.php" class="btn-link">RE-ENTER</a><br><br><b>OR</b><br><br>
			<a href="register.php" class="btn-link">REGISTER</a>
			</div>
			</div>

			<?php
	}
	else
		?>

		<div id = 'box'>
		<center>
		<span class='normal'>That user no exist!</span>
		</center>
		<div class='btn-index'>
		<a href="index.php" class="btn-link">RE-ENTER</a><br><br><b>OR</b><br><br>
		<a href="register.php" class="btn-link">REGISTER</a>
		</div>
		</div>

<?php
}
else
	?>

	<div id = 'box'>
	<center>
	<span class='normal'>Please enter username and password</span>
	</center>
	<div class='btn-index'>
	<a href="index.php" class="btn-link">RE-ENTER</a><br><br><b>OR</b><br><br>
	<a href="register.php" class="btn-link">REGISTER</a>
	</div>
	</div>

<?php
	die("");


?>

