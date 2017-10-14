<?php
session_start();
include '../db/dbconnect.php';
include '../db/functions.php';

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$password = passenc($_POST['password']);
$dob = $_POST['dob'];
$dateToday = date("d/m/Y");
$dob = date("y-m-d",strtotime($dob));
$hash = md5( rand(0,1000) );
$image = ''.rand(1000,1000000);

if(!userExist($email)){
    $sql = "INSERT INTO user (id, first_name, last_name, email, password, dob, last_login, register_date,hash,active) 
VALUES (NULL, '$firstName', '$lastName', '$email', '$password', '$dob', CURRENT_TIMESTAMP, '$dateToday','$hash',0)";

    $sql1 = "INSERT INTO userinfo (email, first_name, last_name,image)
VALUES ('$email','$firstName', '$lastName','$image')";

    if (mysqli_query($conn, $sql)) {
        if(mysqli_query($conn, $sql1)){
            sendEmailVerification($email,$hash);
            $_SESSION['verificationsent'] = "true";
            header('Location: /redirect.php');
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else{
    $_SESSION['userexists'] = "true";
    header('Location: /redirect.php');
}