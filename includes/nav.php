<?php
if(isset($_SESSION['login']) && $_SESSION['login']=="true"){
    include 'includes/profile-nav.php';
}else {

?><section id="navbar">
<nav>
    <div class="navbar navbar-nav">
        <a class="navbar-brand font-white" href="/index.php" id="navbar-style"><span id="logo">Exsplitz<br><span id="tagline">Let's Share</span></span></a>
        <div class="float-xs-right nav-inline">
            <button type="button" data-toggle="modal" data-target="#signupmodel" class="btn btn-default navbar-btn font-white btn-back" id="signup-btn">Sign Up</button>
            <button type="button" data-toggle="modal" data-target="#loginmodel" class="btn btn-default navbar-btn font-white btn-back" id="login-btn">Log In</button>
        </div>
    </div>
</nav>

<?php include 'signup.php'; ?>

<?php include 'login.php'; ?>
</section>
    <?php

}
?>