<?php
session_start();
include 'db/functions.php';

    if(isset($_SESSION['userexists'])){
        if($_SESSION['userexists']=="true"){
            header('Location: /');
        }
    }

    if(isset($_SESSION['verificationsent'])){
        if($_SESSION['verificationsent']=="true"){
            header('Location: /');
        }
    }

    if(isset($_SESSION['emailverified'])){
        if($_SESSION['emailverified']=="true"){
            header('Location: /');
        }
    }

    if(isset($_SESSION['loginfailed'])){
        if($_SESSION['loginfailed']=="true"){
            header('Location: /');
        }
    }

    if(isset($_SESSION['changessaved'])){
        if($_SESSION['changessaved']=="true"){
            header('Location: /profile-setting.php');
        }
    }

    if(isset($_SESSION['hostrideadded'])){
        if($_SESSION['hostrideadded']=="true"){
            header('Location: /profile.php');
        }
    }

    if(isset($_SESSION['requestedride'])){
        if($_SESSION['requestedride']=="true"){
            header('Location: /profile.php');
        }
    }

    if(isset($_POST['logout'])){
            session_destroy();
            header('Location: /');
    }

if(isset($_POST['cardnumber'])){
$_SESSION['pay']="true";
    sendShareRideEmail($_POST['hemail'], $_POST['horigin'], $_POST['hdestination'], $_POST['hdate'], $_POST['htime']);
    var_dump($_POST);
            header('Location: /profile.php');
    }

if(isset($_POST['remail'])){
    $_SESSION['riderequested']="true";
    sendRequestedRideEmail($_POST['remail'], $_POST['rorigin'], $_POST['rdestination'], $_POST['rdate'], $_POST['rtime']);
    header('Location: /profile.php');
}