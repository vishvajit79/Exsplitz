<div class="modal fade" tabindex="-1" id="signupmodel"
	 data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-xs-center" id="myModalLabel">Become an Exsplitz Member</h4>
			</div>
			<div class="modal-body">
				<section id="sec_signup">

					<div class="container">

						<div class="row">
							<div class="col-lg-4 offset-lg-4 text-xs-center">

								<h2>Sign Up!</h2>
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
								<form name="signup" id="signup" method="post" action="requests/signup-request.php">
									<div class="row control-group">
										<div class="form-group col-xs-12 floating-label-form-group controls">
											<input type="text" name="firstname" class="form-control" placeholder="First Name" id="signup_firstname" required data-validation-required-message="Please enter your first name." maxlength="50">
										</div>
									</div>
									<div class="row control-group">
										<div class="form-group col-xs-12 floating-label-form-group controls">
											<input type="text" name="lastname" class="form-control" placeholder="Last Name" id="signup_lastname" required data-validation-required-message="Please enter your last name." maxlength="50">
										</div>
									</div>
									<div class="row control-group">
										<div class="form-group col-xs-12 floating-label-form-group controls">
											<input type="email" name="email" class="form-control" placeholder="Email Address" id="signup_email" required data-validation-required-message="Please enter your email address." maxlength="50">
										</div>
									</div>
									<div class="row control-group">
										<div class="form-group col-xs-12 floating-label-form-group controls">
											<input type="password" name="password" class="form-control" placeholder="Password" id="signup_password" required data-validation-required-message="Please enter your password." maxlength="32">
										</div>
									</div>
									<div class="row control-group">
										<div class="form-group col-xs-12 floating-label-form-group controls">
											<input type="text" name="dob" class="form-control" placeholder="Date of Birth" readonly = "readonly" id="dob" required data-validation-required-message="Please enter your date of birth." aria-required="true">
										</div>
									</div>
									<div class="row control-group form-inline">
										<div class="form-group col-xs-12 floating-label-form-group controls">
											<label for="checkbox"><input type="checkbox" id="signup_checkbox"> I’d like to receive coupons, promotions, surveys, and updates via email about Exsplitz and its partners.</label>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
											<input type="submit" class="btn btn-default font-white btn-back signup_btn text-lg-center" id="signup_signupbtn" value="Sign Up">
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="form-group col-lg-4 offset-lg-4 text-xs-center">
											<span>Already have an account?</span>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
											<button type="button" data-toggle="modal" data-target="#loginmodel" data-dismiss="modal" class="btn btn-default font-white btn-back login_btn" id="signup_loginbtn">Log In</button>
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

<script>

	$(document).ready(function(){
		var d = new Date();
		var curr_year = d.getFullYear();
		$("#dob").datepicker(
			{ yearRange: '1940:'+ curr_year, changeMonth:true, changeYear:true, maxDate: '-16y'});
	});
    
    function getemail() {
        document.getElementById("signup_email").value = document.getElementById("main_email").value;
        document.getElementById("login_email").value = document.getElementById("main_email").value;
    }

</script>