<?php
session_start();
include '../db/dbconnect.php';
include '../db/functions.php';
$email = $_SESSION['email'];
    if(isset($_POST['firstname'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $address = $_POST['address'];
        $postal = $_POST['postal'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $city = $_POST['city'];

        $sql = "UPDATE userinfo SET first_name='$fname', last_name='$lname', address='$address', city='$city', postal='$postal', state='$state', country='$country' WHERE email='$email'";
        $sql1 = "UPDATE user SET first_name='$fname', last_name='$lname' WHERE email='$email'";

        if(mysqli_query($conn, $sql)){
            if(mysqli_query($conn, $sql1)) {
                $_SESSION['changessaved'] = "true";
                header('Location: /redirect.php');
            }else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    if(isset($_POST['newpassword'])){
        $newpassword = passenc($_POST['newpassword']);


        $sql = "UPDATE user SET password = '$newpassword' WHERE email='$email'";
        if(mysqli_query($conn, $sql)){
            sendPasswordEmail($email,$_POST['newpassword']);
            $_SESSION['changessaved'] = "true";
            header('Location: /redirect.php');
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    if(isset($_POST['newemail'])){
        $newemail = $_POST['newemail'];
        $email = $_SESSION['email'];
        resetEmail($email,$newemail);
    }

    if(isset($_POST['newphone'])){
        $newphone = $_POST['newphone'];

        $sql = "UPDATE userinfo SET phone = '$newphone' WHERE email='$email'";
        if(mysqli_query($conn, $sql)){
            $_SESSION['changessaved'] = "true";
            header('Location: /redirect.php');
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

    if(isset($_POST['notify'])){
        if($_POST['notify']=="yes") {
            $sql = "UPDATE userinfo SET notifications = '1' WHERE email='$email'";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['changessaved'] = "true";
                header('Location: /redirect.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }else{
        $sql = "UPDATE userinfo SET notifications = '0' WHERE email='$email'";
        if(mysqli_query($conn, $sql)){
            $_SESSION['changessaved'] = "true";
            header('Location: /redirect.php');
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    if(isset($_POST['notify'])){
        $_SESSION['changessaved'] = "true";
        header('Location: /redirect.php');
    }