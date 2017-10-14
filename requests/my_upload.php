<?php
session_start();
include '../db/dbconnect.php';
include '../db/functions.php';
$valid_extensions = array('jpeg', 'jpg'); // valid extensions
$path = '../images/users/'; // upload directory
$email = $_SESSION['email'];
if(isset($_FILES['image']))
{
    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

    $imgname = getUserinfo($email);
    // can upload same image using rand function
    $final_image = $imgname['image'].'.'.'jpg';

    // check's valid format
    if(in_array($ext, $valid_extensions))
    {
        $path = $path.strtolower($final_image);

        if(move_uploaded_file($tmp,$path))
        {
            $_SESSION['dpchanged'] = "true";
            header('location: /profile.php');
        }
    }
    else
    {
        $_SESSION['dpchangefailed'] = "true";
        header('location: /profile.php');
    }
}

?>