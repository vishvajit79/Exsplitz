<div class="modal fade" tabindex="-1" id="loginmodel"
     data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-xs-center" id="myModalLabel">Welcome to Exsplitz</h4>
            </div>
            <div class="modal-body">
                <section id="sec_login">

                    <div class="container">

                        <div class="row">
                            <div class="col-lg-2 offset-lg-5 text-xs-center">
                                <h2>Log In!</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6"><hr></div>
                            <div class="col-xs-6"><hr></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2 offset-xs-5 text-xs-center arrow_1">&#x2193;</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 text-xs-center">
                                <form name="login" id="login" method="post" action="requests/login-request.php">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="email" name="email" class="form-control" placeholder="Email Address" id="login_email" required data-validation-required-message="Please enter your email address." maxlength="50">
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="password" name="password" class="form-control" placeholder="Password" id="login_password" required data-validation-required-message="Please enter your password." maxlength="32">
                                        </div>
                                    </div>

                                    <div class="row control-group form-inline">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label for="checkbox" class="pull-left"><input type="checkbox" id="login_checkbox">Remember Me</label>
                                            <a href="#" data-toggle="modal" data-target="#forgotpasswordmodel"><span class="pull-right" id="forgotpassword">Forgot Password?</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                                            <input type="submit" class="btn btn-default font-white btn-back login_btn" id="login_loginbtn" value="Log In">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php include 'forgot-password.php'; ?>