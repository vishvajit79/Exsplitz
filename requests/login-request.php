<?php
session_start();
include '../db/dbconnect.php';
include '../db/functions.php';

$username = $_POST['email'];
$password = passenc($_POST['password']);

if(loginauth($username,$password)){
    $_SESSION['login'] = "true";
    $_SESSION['email'] = $username;
    header('Location: /profile.php');
}else{
    $_SESSION['loginfailed'] = "true";
    header('Location: /redirect.php');
}