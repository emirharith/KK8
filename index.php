<html>
<head>
<title>
Farmasi Login
</title>
  <link rel='stylesheet' href="stylesheet.css">
</head>
<body>

<?php
session_start();
$_SESSION['USERNAME'] = "";
unset($_POST['username'], $_POST['password']);
session_unset(); //padam semua session

?>

<div class="container-register">
<div id="box-2">
<img src="logo.png" class="img-logo">
<center>
<br><br>
<span class="normal">Login</span>
</center>
<form action="login.php" method= "post">

<label class="label-2">USERNAME:</label>
<input type="text" name="username" class="textbox-2">
<p>
<label class="label-2">PASSWORD:</label>
<input type="password" name="password" class="textbox-2">
</p>
<p>
<br>
<input type="submit" value="LOG IN" class="btn-2">
</p>
</form>

</div>
<div class="box-register">

<img src="image/contact.png" class="contact">
<p class="article-register">
Register Your New Account Now As Our User
</p>
<div class="btn-register-center">
<a href="register.php" class="btn-link">REGISTER</a>
</div>
</div>
</div>
</body>
</html>
