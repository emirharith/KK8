<html>
<head>
	<title>
		FARMASI TRIPLE A++
	</title>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body >

<div class = "content-home">

<p class="h1-2">
Selamat Datang Ke Database Farmasi Orkid<br>
Anda telah login masuk sebagai user
</p>


<?php
	session_start();
	if(!isset($_SESSION['username']))
   header("location: index.php");
	if(!isset($_SESSION))
?>


<p>
<div class="center-box">
</p>

<ul>
</ul>

</div>
</div>
<footer>

</footer>

</div>
</body>
</html>
