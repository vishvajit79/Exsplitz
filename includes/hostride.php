<div class="modal fade" tabindex="-1" id="hostridemodel"
     data-keyboard="false" data-backdrop="static" xmlns="http://www.w3.org/1999/html">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-xs-center" id="myModalLabel">Let's Share</h4>
            </div>
            <div class="modal-body">
                <section id="sec_hostride">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 offset-lg-4 text-xs-center">
                                <h3>Find Your Passenger</h3>
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
                                <form name="hostride" id="hostride" action="/requests/hostriderequest.php" method="post">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="text" class="form-control" placeholder="Origin" id="hostride_origin" name="hostride_origin" required maxlength="100">
                                        </div>
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="text" class="form-control" placeholder="Destination" id="hostride_destination" name="hostride_destination" required maxlength="100">
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="text" class="form-control" placeholder="Date of travel" id="datetimepicker" name="dateOfTravel" required data-validation-required-message="Please enter your date of birth." aria-required="true">
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="time" class="form-control" data-placeholder="Departure Time" id="departureTime" name="departureTime" required data-validation-required-message="Please enter your time of travel." aria-required="true">
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="text" class="form-control" placeholder="Vehicle Model/Type" name="vehicleModel" required data-validation-required-message="Please enter type of vehicle or model number." aria-required="true" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="number" class="form-control" placeholder="No. of Seats Available" name="numberOfSeats" required data-validation-required-message="Please enter type of vehicle or model number." aria-required="true" minlength="1" maxlength="6">
                                        </div>
                                    </div>
                                    <div class="row control-group form-inline">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label for="host_checkbox"><input type="checkbox" id="host_checkbox" required>You or the person driving the car has a valid government driving licence and he/she is able to drive and has/have no disabilities</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                                            <input type="submit" class="btn btn-default font-white btn-back signup_btn text-lg-center" id="login_hostridebtn" value="Host a ride">
                                        </div>
                                    </div>
                                    </form>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="submit" class="form-control" name="calculatepay" id="calculatepay" value="Calculate Earning Now">
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12 floating-label-form-group controls bg-inverse" id="hostrideresult">

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-lg-4 offset-lg-4 text-xs-center">
                                            <span>Want to search a ride?</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                                            <button type="button" class="btn btn-default font-white btn-back login_btn" id="login_searchridebtn" data-dismiss="modal" data-toggle="modal" data-target="#searchridemodel">Search a ride</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script>
    function initialize() {


        var input1 = document.getElementById('hostride_origin');
        var autocomplete = new google.maps.places.Autocomplete(input1);

        var input = document.getElementById('hostride_destination');
        var autocomplete = new google.maps.places.Autocomplete(input);

    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script>

    $(document).ready(function(){
        var d = new Date();
        var curr_year = d.getFullYear();
        $("#datetimepicker").datepicker(
            { yearRange: '2016:'+ curr_year, changeMonth:true, changeYear:true, minDate: 0, maxDate: '+1m'});
    });
</script>

<script>
    $(function() {

        function calculateDistance(origin, destination) {
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.IMPERIAL,
                    avoidHighways: false,
                    avoidTolls: false
                }, callback);
        }

        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#hostrideresult').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#hostrideresult').html("Better get on a plane. There are no roads between "
                        + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var distance_value = distance.value;
                    var distance_text = distance.text;
                    var miles = distance_text.substring(0, distance_text.length - 3);
                    var pay = miles*0.5;
                    $('#hostrideresult').html("It is " + miles + " miles from " + origin + " to " + destination + "<br/>Total earning per passenger is: <strong>$" + pay +"</strong>");
                }
            }
        }


        $('#calculatepay').click(function(e){
            event.preventDefault();
            var origin = $('#hostride_origin').val();
            var destination = $('#hostride_destination').val();
            var distance_text = calculateDistance(origin, destination);

        });

    });
</script>
