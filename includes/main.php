
<section class="container-fluid text-xs-center" id="main_sec1">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h3>Register now for free & <br>Share your ride</h3>
        </div>
    </div>
</section>

<section class="container-fluid text-xs-center" id="main_sec2">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <input type="email" class="form-control" placeholder="Email Address" id="main_email" data-validation-required-message="Please enter your email address." required maxlength="50">
            <p class="text-xs-center">By clicking Sign up, I agree to the Terms of Service and Privacy Policy.</p>
        </div>
    </div>
</section>

<section class="container-fluid" id="main_sec3">
    <div class="row" style="padding-top: 0.75%">
        <div class="col-lg-4 offset-lg-4 text-xs-center">
            <button onclick="getemail()" type="button" data-toggle="modal" data-target="#signupmodel" class="btn btn-default font-white btn-back" id="main_signup" style="width: 200px">Sign Up</button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 offset-lg-4 text-xs-center"><span>or</span></div>
    </div>

    <div class="row">
        <div class="col-lg-4 offset-lg-4 text-xs-center">
            <button type="button" onclick="getemail()" data-toggle="modal" data-target="#loginmodel" class="btn btn-default font-white btn-back" id="main_login" style="width: 200px">Log In</button></div>
    </div>
</section>

<?php include 'alerts.php'; ?>
<!-- Body Main data end -->

<!-- How the emdplitz works -->
<section class="container-fluid" id="main_sec4">
    <div class="row text-xs-center">
        <div class="col-lg-8 offset-lg-2">
            <h5>Exsplitz is a ride-sharing application where the driver can host the <br>ride and the passenger(s) can join the host and share the ride.</h5>
        </div>
    </div>
    <br>
    <div class="row text-xs-center">
        <div class="col-lg-8 offset-lg-2">
            <h4><strong>How Exsplitz works?</strong></h4>
        </div>
        <hr class="centered">
    </div>

    <div class="row text-xs-center">
        <div class="col-lg-8 offset-lg-2"><span>Sign Up/Log In</span></div>
    </div>

    <div class="row text-xs-center">
        <div class="col-lg-8 offset-lg-2 arrow"><span>&#x2193;</span></div>
    </div>

    <div class="row text-xs-center">
        <div class="col-lg-8 offset-lg-2"><span>Select the role which suits the best</span></div>
    </div>

    <div class="row text-xs-center arrow">
        <div class="col-lg-8 offset-lg-2"><span>&#x2199;&#x2198;</span></div>
    </div>

    <div class="row text-xs-center">
        <div class="col-lg-8 offset-lg-2">
                <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#loginmodel">
                    Host a ride
                </button>
                <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#loginmodel">
                    Book a ride
                </button>
        <div class="arrow">&#x2193;</div>
        </div>
    </div>
    <div class="row text-xs-center">
        <div class="col-xs"></div>
        <div class="col-xs">

            <p><strong>
                Enter Origin<br>
                Enter Destination<br>
                Provide Preferred Time/Departure Time<br>
                Select/Provide Vehilce Type/Model<br>
                Enter No. of Passengers/Seats Available<br>
                Click Host a ride/Search a ride<br>
                Request driver/passenger from the list<br>
                Once you receive a confirmation, you are all set to share a ride<br/>
            </strong>
                <i>Note: Your payment will be on hold till the ride is complete. Once the ride is completed, payment will be released to the host of the ride</i>
            </p>

        </div>
        <div class="col-xs"></div>
        </div>
</section>

<!-- Fare calculator-->
<section class="container-fluid" id="farecalculator">
    <div class="row">
        <div class="col-xs-8 offset-xs-2">
            <h5><strong>How to calculate your fare?</strong></h5>
                <h6>1. Check the type of vehicle</h6><br>
                <h6>2. Measure the average distance of the total ride</h6><br>
                <h6>3. Compare the vehicle average and the location of your ride fuel expense</h6><br>
                <h6>4. Divide the total fuel cost by number of riders</h6>
        </div>
</section>

<script>
    $(document).ready(function(){
        $("#forgotpassword").click(function(){
            $('#loginmodel').modal('hide');
        });
    });
</script>