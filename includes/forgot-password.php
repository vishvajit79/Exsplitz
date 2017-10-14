<div class="modal fade" tabindex="-1" id="forgotpasswordmodel"
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
                            <div class="col-lg-12 text-xs-center">
                                <h2>Reset Your Password!</h2>
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
                                <form name="passwordresetform" id="passwordresetform" method="post" action="requests/password-reset.php">
                                    <div class="row control-group">
                                        <div class="form-group col-lg-12 floating-label-form-group controls">
                                            <input type="email" name="email" class="form-control" placeholder="Email Address" id="resetpassword_email" required data-validation-required-message="Please enter your email address." maxlength="50">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                                            <input type="submit" class="btn btn-default font-white btn-back login_btn" id="login_loginbtn" value="Reset Password">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-lg-12 text-xs-center">
                                            <span>Enter your email address to get a new password for your account.<br>You can change it anytime.</span>
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

