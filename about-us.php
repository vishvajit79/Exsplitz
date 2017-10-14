<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Vishvajit Kher, Akash Chamaria, karan Acharya">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <title>About Us | Exsplitz - let's share</title>

    <?php include 'includes/header-files.php'; ?>

    <!-- Sticky Note CSS -->
    <link href="css/stickynote.css" rel="stylesheet">




</head>
<body>
<!-- Navigation Bar -->
<section>
    <?php include 'includes/nav.php'; ?>
</section>

<!-- About Us -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>About Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12"><hr></div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <p id="about-para" class="text-justify">We are a fast-growing company with a simple aim in our minds. Lets make travelling more interesting. This led us to make an app like Exsplitz that primarily focuses on extending the extents of travelling with new people.  </p>
            </div>
            <div class="col-lg-3 text-justify" id="stickynote">
                <ul>
                    <li>
                        <a href="#">
                            <p>When you do things right, people won't be sure you've done anything at all.</p>
                            <p>~~ Exsplitz Team</p>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- Founders -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Founders</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12"><hr></div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img src="images/vishvajit.jpg" class="img-fluid" alt="Random">
            </div>
            <div class="col-lg-10">
                <h3>Vishvajit Kher<em class="pull-right small"><u>Founder and Designer</u></em></h3>
                <br>
                <p>Based in Toronto, Ontario, Vishvajit is pursuing engineering at George Brown college. He is a techno-head with an eye for unusual developments. He is always the 'jugadu' kind of guy. He was born and brought up in India, and is still Indian by heart(and passport, ofcourse).</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12"><hr></div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img src="images/akash.jpg" class="img-fluid" alt="Random">
            </div>
            <div class="col-lg-10">
                <h3>Akash Chamaria<em class="pull-right small"><u>Co-Founder and Programmer</u></em></h3>
                <br>
                <p>Based in Toronto, Ontario, Vishvajit is pursuing engineering at George Brown college. He is a techno-head with an eye for unusual developments. He is always the 'jugadu' kind of guy. He was born and brought up in India, and is still Indian by heart(and passport, ofcourse).</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12"><hr></div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img src="images/karan.jpg" class="img-fluid" alt="Random">
            </div>
            <div class="col-lg-10">
                <h3>Karan Amul Acharya<em class="pull-right small"><u>Editor and Marketing Head</u></em></h3>
                <br>
                <p>Currently living in Toronto, Canada, Karan is an budding programmer and editor. He likes to find unique ways to solve problems. Born in Mumbai, he likes to keep it simple. He speaks fluent Sarcasm (Level 3 out of 3). He also like to read,write and follow his passion in free-time i.e. Acting and Movies!</p>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<section>
    <?php include 'includes/footer.php'; ?>
</section>
</body>
</html>