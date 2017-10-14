<?php
session_start();
include '../db/dbconnect.php';

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    $email = mysqli_real_escape_string($conn,$_GET['email']); // Set email variable
    $hash = mysqli_real_escape_string($conn,$_GET['hash']); // Set hash variable

    $search = mysqli_query($conn,"SELECT email, hash, active FROM user WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error($conn));
    $match  = mysqli_num_rows($search);
}else{
    header('Location: /');
}

if($match > 0){
    // We have a match, activate the account
    mysqli_query($conn,"UPDATE user SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error());
    $_SESSION['emailverified'] = "true";
    header('Location: /redirect.php');

}else{
    header('Location: /');
}


if(isset($_GET['newemail']) && !empty($_GET['newemail']) AND isset($_GET['hash']) && !empty($_GET['hash'])) {
    $newemail = mysqli_real_escape_string($conn, $_GET['newemail']); // Set email variable
    $hash = mysqli_real_escape_string($conn, $_GET['hash']); // Set hash variable
    if (mysqli_query($conn, "UPDATE user SET email = '$newemail' WHERE email='" . $_SESSION['email'] . "' AND hash='" . $hash . "'")) {
        mysqli_query($conn, "UPDATE userinfo SET email = '$newemail' WHERE email='" . $_SESSION['email']."'");
        $_SESSION['changessaved'] = "true";
        $_SESSION['email'] = $newemail;
        header('Location: /profile.php');
    } else {
        header('Location: /');
    }
}else {
    header('Location: /');
}
