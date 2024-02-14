<?php include("link.php");

$nama = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = INSERT INTO user VALUES ('','$name','$username','$email','$pssword','2')";
$result = mysql_query($sql);


?>
