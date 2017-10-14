<?php
session_start();
include '../db/dbconnect.php';
include '../db/functions.php';
    $origin = $_POST['hostride_origin'];
    $desination = $_POST['hostride_destination'];
    $dateOfTravel = $_POST['dateOfTravel'];
    $dateOfTravel = date("y-m-d",strtotime($dateOfTravel));
    $time = date('h:i A', strtotime($_POST['departureTime']));
    $numberOfSeats = $_POST['numberOfSeats'];
    $vehicle = $_POST['vehicleModel'];
    $email = $_SESSION['email'];

    $sql = "INSERT INTO hostedrides (origin, destination, date_of_travel, departure_time, vehicle, number_of_seats, email) 
    VALUES ('$origin', '$desination', '$dateOfTravel', '$time', '$vehicle', '$numberOfSeats', '$email')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['hostrideadded'] = "true";
        header('Location: /profile.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
