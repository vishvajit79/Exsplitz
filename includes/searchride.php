<div class="modal fade" tabindex="-1" id="searchridemodel"
     data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-xs-center" id="myModalLabel">Let's Share</h4>
            </div>
            <div class="modal-body">
                <section id="sec_searchride">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 offset-lg-4 text-xs-center">
                                <h3>Find Your Driver</h3>
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
                                <form name="searchride" id="searchride" method="post" action="/requests/requestride.php">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="text" class="form-control" name="origin" placeholder="Origin" id="searchride_origin" required maxlength="100"">
                                        </div>
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="text" class="form-control" name="destination" placeholder="Destination" id="searchride_destination" required maxlength="100"">
                                        </div>
                                    </div>

                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="text" class="form-control" placeholder="Date of travel" id="datetimepick" name="dateOfTravel" required>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="time" class="form-control" name="preferedTime" data-placeholder="Prefered Time" required>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <input type="number" class="form-control" name="numberOfSeats" placeholder="No. of seats" required minlength="1" maxlength="6">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                                            <input type="submit" class="btn btn-default font-white btn-back login_btn" id="searchride_searchridebtn" value="Request a ride">
                                        </div>
                                    </div>
                                </form>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <input type="submit" class="form-control" name="hostearning" id="hostearning" value="Calculate Fare Now">
                                    </div>
                                    <div class="form-group col-xs-12 floating-label-form-group controls bg-inverse" id="outputresults">

                                    </div>
                                </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-lg-4 offset-lg-4 text-xs-center">
                                            <span>Want to host a ride?</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-4 offset-lg-4 floating-label-form-group controls text-xs-center">
                                            <button type="button" class="btn btn-default font-white btn-back signup_btn text-lg-center" id="searchride_hostridebtn" data-dismiss="modal" data-toggle="modal" data-target="#hostridemodel">Host a ride</button>
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


        var input1 = document.getElementById('searchride_origin');
        var autocomplete = new google.maps.places.Autocomplete(input1);

        var input = document.getElementById('searchride_destination');
        var autocomplete = new google.maps.places.Autocomplete(input);

    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script>

    $(document).ready(function(){
        var d = new Date();
        var curr_year = d.getFullYear();
        $("#datetimepick").datepicker(
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
    $('#outputresults').html(err);
    } else {
    var origin = response.originAddresses[0];
    var destination = response.destinationAddresses[0];
    if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
    $('#outputresults').html("Better get on a plane. There are no roads between "
    + origin + " and " + destination);
    } else {
    var distance = response.rows[0].elements[0].distance;
    var distance_value = distance.value;
    var distance_text = distance.text;
    var miles = distance_text.substring(0, distance_text.length - 3);
    var fare = miles*0.7;
    $('#outputresults').html("It is " + miles + " miles from " + origin + " to " + destination + "<br/>Total fare per passenger is: <strong>$" + fare +"</strong>");
    }
    }
    }


    $('#hostearning').click(function(e){
    event.preventDefault();
    var origin = $('#searchride_origin').val();
    var destination = $('#searchride_destination').val();
    var distance_text = calculateDistance(origin, destination);

    });

    });
</script>

