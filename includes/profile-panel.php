<?php include 'alerts.php'; ?>
<section id="sec_profilepanel">
    <form name="profilechange" id="profilechange" method="post" action="/requests/profile-changes.php">
    <div class="container ">
        <ul class="nav-tabs nav " role="tablist" id="profile-panel">
            <li class="active"><a data-toggle="tab" href="#personal" role="tab">Personal</a></li>
            <li><a data-toggle="tab" href="#security" role="tab">Security</a></li>
            <li><a data-toggle="tab" href="#email" role="tab">Email</a></li>
            <li><a data-toggle="tab" href="#phone" role="tab">Phone</a></li>
            <li><a data-toggle="tab" href="#notification" role="tab">Notification</a></li>
        </ul>
        <div class="tab-content">

            <div id="personal" class="tab-pane fade in active" role="tabpanel">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3>Profile Details</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <hr>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Name</h4>
                        </div>
                        <div class="col-xs-12">
                            <div class="row control-group">
                                <div class="form-group col-xs-6 floating-label-form-group controls">
                                    <input type="text" value="<?php echo $fname; ?>" name="firstname" class="form-control" placeholder="First Name" id="profile_firstname" required data-validation-required-message="Please enter your first name." maxlength="50">
                                </div>
                                <div class="form-group col-xs-6 floating-label-form-group controls">
                                    <input type="text" value="<?php echo $lname; ?>" name="lastname" class="form-control" placeholder="Last Name" id="profile_lastname" required data-validation-required-message="Please enter your last name." maxlength="50">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Address</h4>
                        </div>
                        <div class="col-xs-12">
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <input type="text" value="<?php echo $address; ?>" name="address" class="form-control" placeholder="Address" id="profile_address" required maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <h4>City</h4>
                        </div>
                        <div class="col-xs-12">
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <input type="text" value="<?php echo $city; ?>" name="city" class="form-control" placeholder="City" id="profile_city" required maxlength="50">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <h4>Postal Code</h4>
                        </div>
                        <div class="col-xs-6">
                            <h4>Province</h4>
                        </div>
                        <div class="col-xs-12">
                            <div class="row control-group">
                                <div class="form-group col-xs-6 floating-label-form-group controls">
                                    <input type="text" value="<?php echo $postal; ?>" name="postal" class="form-control" placeholder="Postal Code/ Zip Code" id="profile_postal" required maxlength="50">
                                </div>
                                <div class="form-group col-xs-6 floating-label-form-group controls">
                                    <input type="text" value="<?php echo $state; ?>" name="state" class="form-control" placeholder="State / Province" id="profile_state" required maxlength="50">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <h4>Country</h4>
                        </div>
                        <div class="col-xs-12">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input type="text" value="<?php echo $country; ?>" name="country" class="form-control" placeholder="Country" id="profile_country" required maxlength="50">
                            </div>
                        </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                                    <input type="submit" class="btn btn-default font-white btn-back signup_btn text-xs-center" id="profile_submitbtn" value="Save Change">
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
            <div id="security" class="tab-pane fade" role="tabpanel">
                <div class="row">
                    <form method="post" action="/requests/profile-changes.php">
                    <div class="col-xs-12 text-xs-center">
                        <h3>Change Password</h3>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-6 offset-xs-3 floating-label-form-group controls">
                            <input type="password" name="newpassword" class="form-control" placeholder="Enter New Password" id="profile_newpassword" required data-validation-required-message="Please enter your password." maxlength="32">
                        </div>
                    </div>
                        <div class="container">
                            <div class="row">
                                <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                                    <input type="submit" class="btn btn-default font-white btn-back signup_btn text-xs-center" id="profile_submitbtn" value="Save Changes">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="email" class="tab-pane fade" role="tabpanel">
                <div class="row">
                    <form method="post" action="/requests/profile-changes.php">
                    <div class="col-xs-12 text-xs-center">
                        <h3>Change Email Address</h3>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-6 offset-xs-3 floating-label-form-group controls">
                            <input type="email"  value="<?php echo $email; ?>"  name="newemail" class="form-control" placeholder="Enter Your Email Address" id="profile_newemail" required data-validation-required-message="Please enter your email address." maxlength="50">
                        </div>
                    </div>
                        <div class="container">
                            <div class="row">
                                <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                                    <input type="submit" class="btn btn-default font-white btn-back signup_btn text-xs-center" id="profile_submitbtn" value="Save Changes">
                                </div>
                            </div></form>
                        </div>
                </div>
            </div>
            <div id="phone" class="tab-pane fade" role="tabpanel">
                <form method="post" action="/requests/profile-changes.php">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3>Change Phone Number</h3>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-6 offset-xs-3 floating-label-form-group controls">
                            <input name="newphone" value="<?php echo $phone; ?>" id="profile_newphonenumber" type="tel" placeholder="Eg: 1234567890" pattern="\d{3}[\-]\d{3}[\-]\d{4}" class="form-control telnumber" required data-validation-required-message="Please enter correct phone number"maxlength="12">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                            <input type="submit" class="btn btn-default font-white btn-back signup_btn text-xs-center" id="profile_submitbtn" value="Save Changes">
                        </div></form>
                    </div>
                </div>
            </div>
            <div id="notification" class="tab-pane fade" role="tabpanel">
                <form method="post" action="/requests/profile-changes.php">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3>Receive Notification</h3>
                    </div>
                    <div class="row control-group form-inline">
                        <div class="form-group col-xs-12 text-xs-center floating-label-form-group controls">
                            <label for="checkbox"><input type="checkbox" name="notify" id="signup_checkbox" value="yes" <?php if($notify=='1'){echo 'checked';} ?>> I’d like to receive coupons, promotions, surveys, and updates via email about Exsplitz and its partners.</label>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                            <input type="submit" class="btn btn-default font-white btn-back signup_btn text-xs-center" id="profile_submitbtn" value="Save Changes">
                        </div>
                    </div>
                </form>
            </div>


        </div>


    </form>
</section>
<script>
    $(function () {
        $('#profile-panel a:first').tab('show')
    })
</script>

<script>
    $('.telnumber').keyup(function() {
        foo = $(this).val().split("-").join("");

        foo = foo.match(new RegExp('.{1,4}$|.{1,3}', 'g')).join("-");

        $(this).val(foo);

    });
</script>