<?php
session_start();
include '../db/dbconnect.php';
include '../db/functions.php';

$origin = $_POST['origin'];
$desination = $_POST['destination'];
$dateOfTravel = $_POST['dateOfTravel'];
$dateOfTravel = date("y-m-d",strtotime($dateOfTravel));
$time = date('h:i A', strtotime($_POST['preferedTime']));
$numberOfSeats = $_POST['numbOfSeats'];
$email = $_SESSION['email'];

$sql = "INSERT INTO requestedrides (origin, destination, date_of_travel, prefered_time, num_of_seats, email) 
    VALUES ('$origin', '$desination', '$dateOfTravel', '$time', '$numberOfSeats', '$email')";

if (mysqli_query($conn, $sql)) {
    $_SESSION['requestedride'] = "true";
    header('Location: /profile.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
