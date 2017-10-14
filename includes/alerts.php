<?php
if(isset($_SESSION['verificationsent'])){
    if($_SESSION['verificationsent'] == "true"){
        ?>
        <section class="container-fluid" id="main_sec3">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Signup Success!</strong> Verification link has been sent to your registered email address.
                    </div>
                </div>
            </div>
        </section>
        <?php
            $_SESSION['verificationsent'] = "";
    }
}
?>

<?php
if(isset($_SESSION['pay'])){
    if($_SESSION['pay'] == "true"){
        ?>
        <section class="container-fluid">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Payment Success!</strong>
                    </div>
                </div>
            </div>
        </section>
        <?php
            $_SESSION['pay'] = "";
    }
}
?>

<?php
if(isset($_SESSION['newemailverificationsent'])){
    if($_SESSION['newemailverificationsent'] == "true"){
        ?>
        <section class="container-fluid">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Request Sent!</strong> Please click the link sent to your new email address to change email address.
                    </div>
                </div>
            </div>
        </section>
        <?php
        $_SESSION['newemailverificationsent'] = "";
    }
}
?>

<?php
if(isset($_SESSION['riderequested'])){
    if($_SESSION['riderequested'] == "true"){
        ?>
        <section class="container-fluid">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Request Sent!</strong> User will reply to your email.
                    </div>
                </div>
            </div>
        </section>
        <?php
        $_SESSION['riderequested'] = "";
    }
}
?>


<?php
if(isset($_SESSION['hostrideadded'])|| isset($_SESSION['requestedride'])){
    if($_SESSION['hostrideadded'] == "true" || $_SESSION['requestedride'] == "true"){
        ?>
        <section class="container-fluid">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Request Submitted!</strong>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $_SESSION['hostrideadded'] = "";
        $_SESSION['requestedride'] = "";
    }
}
?>

<?php
if(isset($_SESSION['userexists'])){
    if($_SESSION['userexists'] == "true"){
        ?>
        <section class="container-fluid">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-danger alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Signup Error!</strong> A user already exists with the same email address.
                    </div>
                </div>
            </div>
        </section>
        <?php
        $_SESSION['userexists'] = "";
    }
}
?>

<?php
if(isset($_SESSION['emailverified'])){
    if($_SESSION['emailverified'] == "true"){
        ?>
        <section class="container-fluid">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Email Verified</strong> Now you can login to your account.
                    </div>
                </div>
            </div>
        </section>
        <?php
        $_SESSION['emailverified'] = "";
    }
}
?>

<?php
if(isset($_SESSION['loginfailed'])){
    if($_SESSION['loginfailed'] == "true"){
        ?>
        <section class="container-fluid">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-danger alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Login Failed!</strong> Email and Password combination is incorrect. Please try again.
                    </div>
                </div>
            </div>
        </section>
        <?php
        $_SESSION['loginfailed'] = "";
    }
}
?>

<?php
if(isset($_SESSION['changessaved'])){
    if($_SESSION['changessaved'] == "true"){
        ?>
        <section class="container-fluid">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Changes Saved!</strong> All changes made has been saved.
                    </div>
                </div>
            </div>
        </section>
        <?php
        $_SESSION['changessaved'] = "";
    }
}
?>

<?php
if(isset($_SESSION['dpchanged'])){
    if($_SESSION['dpchanged'] == "true"){
        ?>
        <section class="container-fluid">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Changes Saved!</strong> Profile picture is updated.
                    </div>
                </div>
            </div>
        </section>
        <?php
        $_SESSION['dpchanged'] = "";
    }
}
?>

<?php
if(isset($_SESSION['dpchangefailed'])){
    if($_SESSION['dpchangefailed'] == "true"){
        ?>
        <section class="container-fluid">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-danger alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>An error has been occured!</strong> Please try again with correct image format and max of 2mb.
                    </div>
                </div>
            </div>
        </section>
        <?php
        $_SESSION['dpchangefailed'] = "";
    }
}
?>

<?php
if(isset($_SESSION['passwordresetdone'])){
    if($_SESSION['passwordresetdone'] == "true"){
        ?>
        <section class="container-fluid">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Password Sent!</strong> New password has been sent to your email address. You can change it anytime.
                    </div>
                </div>
            </div>
        </section>
        <?php
        $_SESSION['passwordresetdone'] = "";
    }
}
?>

<?php
if(isset($_SESSION['passwordresetfailed'])){
    if($_SESSION['passwordresetfailed'] == "true"){
        ?>
        <section class="container-fluid">
            <div class="row" style="padding-top: 0.75%">
                <div class="col-xs-12">
                    <div class="alert alert-danger alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Password Reset Failed!</strong>  Provided Email is incorrect. Please try again.
                    </div>
                </div>
            </div>
        </section>
        <?php
        $_SESSION['passwordresetfailed'] = "";
    }
}
?>
