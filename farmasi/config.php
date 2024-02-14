<?php
$servername = "localhost";
$username = "root";
$password = ""; //tiada semicolon
$database = "farmasi"; //tiada nama database

// Create connection
$conn = mysqli_connect("localhost","root","","farmasi"); //tiada nama database
$db = mysqli_select_db($conn,"farmasi");
echo "databases not connected";
?>