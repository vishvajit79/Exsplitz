<?php
session_start();
include '../db/dbconnect.php';
include '../db/functions.php';

if(isset($_POST['email'])){
    $email = $_POST['email'];
    if(emailExists($email)){
        resetPassword($email);
        $_SESSION['passwordresetdone'] = "true";
        header('Location: /');
    }
    else{
        $_SESSION['passwordresetfailed'] = "true";
        header('Location: /');
    }
}