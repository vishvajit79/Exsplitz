<div class="container">
    <div class="row">
        <div class="col-xs-6 offset-xs-3 text-xs-center">
            <form name="paymentmethod" id="paymentform" method="post" action="/redirect.php">
                <input type="hidden" name="hemail" value="<?php echo $_POST['hemail'] ?>">
                <input type="hidden" name="horigin" value="<?php echo $_POST['horigin'] ?>">
                <input type="hidden" name="hdestination" value="<?php echo $_POST['hdestination'] ?>">
                <input type="hidden" name="hdate" value="<?php echo $_POST['hdate'] ?>">
                <input type="hidden" name="htime" value="<?php echo $_POST['htime'] ?>">
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <input type="tel" class="form-control" name="cardnumber" placeholder="Card Number" id="paymentnumber" required maxlength="16">
                    </div>
                </div>

                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <input type="text" class="form-control" placeholder="Card Holder Name" id="paymentname" name="cardname" required>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <input type="date" class="form-control" name="expirationdate" data-placeholder="YYYY-MM-DD" class="expiration" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" required>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <input type="tel" class="form-control" name="numberOfSeats" placeholder="CVV" required maxlength="3">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                        <input type="submit" class="btn btn-default font-white btn-back login_btn" id="payment_paybtn" value="Pay Now">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('.expiration').keyup(function() {
        foo = $(this).val().split("-").join("");

        foo = foo.match(new RegExp('.{1,4}$|.{1,3}', 'g')).join("-");

        $(this).val(foo);

    });
</script>