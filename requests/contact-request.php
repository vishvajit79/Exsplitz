<?php
include '../db/functions.php';
    $name = $_POST['contactname'];
    $email = $_POST['contactemail'];
    $msg = $_POST['contactmessage'];

    sendContactInfo($name,$email,$msg);
    header('Location: /about-us.php');
?>
