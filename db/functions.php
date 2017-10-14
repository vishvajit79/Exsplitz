<?php
function passenc($password){
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $key = "bdk bc mc mml";

    $password = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, $password, MCRYPT_MODE_ECB, $iv);

    $pass = md5($password);
    return $pass;
}

function loginauth($username,$password)
{
    $user = getUserByUsername($username);
    if($user){
        return $user[4]==$password;
    }
}

function getUserByUsername($username){
    global $conn;

    $query = 'SELECT * FROM user where email = \''. mysqli_real_escape_string($conn,$username). '\'';
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        return $result->fetch_row();
    }
}

function getUserinfo($username){
    global $conn;

    $query = 'SELECT * FROM userinfo where email = \''. mysqli_real_escape_string($conn,$username). '\'';
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        return $result->fetch_assoc();
    }
}

function getrequestedResuts(){
    global $conn;

    $query = "SELECT * FROM requestedrides Where NOT (email = '".$_SESSION['email']."')";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        return $result;
    }
}

function gethostedResults(){
    global $conn;

    $query = "SELECT * FROM hostedrides Where NOT (email = '".$_SESSION['email']."')";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        return $result;
    }
}

function deleteUser($email)
{
    global $conn;
    $query = 'DELETE FROM user where email = \''.$email.'\'';
    if(mysqli_query($conn, $query)){
        return 1;
    }

}

function userExist($email){
    global $conn;
    $query = 'SELECT email FROM user where email = \''. mysqli_real_escape_string($conn,$email). '\'';
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        return 1;
    }else{
        return 0;
    }

}

function sendEmailVerification($email,$hash){

    $to      = $email; // Send email to our user
    $subject = 'Signup Verification | Exsplitz'; // Give the email a subject
    $message = '
 
Thanks for signing up to Exsplitz!
Your account has been created, you can login and start using Exsplitz after you have activated your account by pressing the url below.
 
------------------------
Username: '.$email.'
------------------------

Please click this link to activate your account:
http://f6team8.gblearn.com/requests/verify.php?email='.$email.'&hash='.$hash.'

';

    $headers = 'From:noreply@f6team8.gblearn.com' . "\r\n"; // Set from headers
    mail($to, $subject, $message, $headers); // Send our email
}

function sendShareRideEmail($email,$origin,$destination,$date,$time){

    $to      = $email; // Send email to our user
    $subject = 'Ride Share Request | Exsplitz'; // Give the email a subject
    $message = '
 
You have one ride share request from '.$email.' on Exsplitz for the ride from '.$origin.' to '.$destination.' on date '.$date.' at '.$time.'. 

As soon as we get email from your passenger that ride is completed Exsplitz will release your payment.
';

    $headers = 'From:noreply@f6team8.gblearn.com' . "\r\n"; // Set from headers
    mail($to, $subject, $message, $headers); // Send our email
}



function sendRequestedRideEmail($email,$origin,$destination,$date,$time){

    $to      = $email; // Send email to our user
    $subject = 'Ride Share Request | Exsplitz'; // Give the email a subject
    $message = '
 
You have one ride share request from '.$email.' on Exsplitz for the ride from '.$origin.' to '.$destination.' on date '.$date.' at '.$time.'. 

Contact '.$email.' for futher information about ride.
';

    $headers = 'From:noreply@f6team8.gblearn.com' . "\r\n"; // Set from headers
    mail($to, $subject, $message, $headers); // Send our email
}



function sendNewEmailVerification($email,$hash){

    $to      = $email; // Send email to our user
    $subject = 'Email Change Verification | Exsplitz'; // Give the email a subject
    $message = '
 
You can change the email of your Exsplitz account by pressing the url below.


Please click this link to change your email:
http://f6team8.gblearn.com/requests/verify.php?newemail='.$email.'&hash='.$hash.'

';

    $headers = 'From:noreply@f6team8.gblearn.com' . "\r\n"; // Set from headers
    mail($to, $subject, $message, $headers); // Send our email
}

function isLogin(){
    if($_SESSION['active'] == 1){
        return 1;
    }
}

function setsessionlogin($set){
    $_SESSION['active'] = $set;
}

function setsessionuser($email){
    $_SERVER['user'] = $email;
}

function emailExists($email){
    global $conn;

    $query = 'SELECT email FROM user where email = \''. mysqli_real_escape_string($conn,$email). '\'';
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        return 1;
    }
}

function getRandomPassword($length = 7) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function resetPassword($email){
    $password = getRandomPassword();
    global $conn;
    $encpassword = passenc($password);
    $query = "UPDATE user ". "SET password = '$encpassword' WHERE email = '$email'";
    if(mysqli_query($conn, $query)){
        sendPasswordEmail($email,$password);
        return 1;
    }
    else{
        echo "query not working";
    }
}


function sendPasswordEmail($email,$password){
    $to      = $email; // Send email to our user
    $subject = 'Password Reset | Exsplitz'; // Give the email a subject
    $message = '
 
Use the credentials given below to login to your Exsplitz account.
 
------------------------
Username: '.$email.'
Password: '.$password.'
------------------------

You can change this password anytime.

';

    $headers = 'From:noreply@f6team8.gblearn.com' . "\r\n"; // Set from headers
    mail($to, $subject, $message, $headers); // Send our email
}

function resetEmail($email,$newemail){
    if($email==$newemail){
        $_SESSION['changessaved']="true";
        header('Location: /profile.php');
    }
    else {
        global $conn;
        $hash = md5(rand(0, 1000));
        mysqli_query($conn, "UPDATE user SET hash = '$hash' WHERE email='" . $email . "'");
        sendNewEmailVerification($newemail, $hash);
        $_SESSION['newemailverificationsent'] = "true";
        header('Location: /profile.php');
    }
}

function sendContactInfo($name, $email, $contactmessage){
    $to      = 'vishvajit79@gmail.com'; // Send email to our user
    $subject = 'Contact Us Feedback | Exsplitz'; // Give the email a subject
    $message = $name;
    $message .= $contactmessage;
    mail($to, $subject, $message, $email); // Send our email
}