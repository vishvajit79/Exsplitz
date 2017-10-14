<?php
$servername = "localhost";
$username = "pyggin_avk";
$password = "Random@1405";
$db = "pyggin_exsplitz";
// Create connection
global $conn;
$conn= mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}