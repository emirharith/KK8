<?php

include("config.php"); //nama fail yang salah

$nama = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user VALUES ('','$nama','$username','$email','$password','2')"; //tiada "" & nama variable yang salah
$result = mysqli_query($conn, $sql); //tiada $conn

header("Location: index.php"); //tiada directory ke laman utama