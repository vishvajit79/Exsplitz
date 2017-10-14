<section id="sec_phoneverify">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-xs-center">
                <h2>Verify Your Phone Number To Complete the Signup Process</h2>
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
                <form name="phoneverify" id="phoneverify" method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input id="tel" type="tel" placeholder="Phone Number" pattern="^\d{4}-\d{3}-\d{4}$" class="form-control" required data-validation-required-message="Please enter correct phone number" maxlength="10">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                            <button type="button" class="btn btn-default font-white btn-back login_btn text-lg-center" id="phoneverify_verify">Verify</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>