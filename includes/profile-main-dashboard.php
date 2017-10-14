<?php
if(isset($_SESSION['login'])&&$_SESSION['login']=="true"){

    $rdate = "02/15/2014";
    $rorigin = "1440 Lawrence Ave West";
    $rdestination = "1440 Lawrence Ave West";
    $rtime = "4:28 pm";
    $rvehicle = "Some description about vehicle";
    $rseats = "2";

    $hdate = "";
    $horigin = "";
    $hdestination = "";
    $htime = "";
    $hvehicle = "";
    $hseats = "";

}
$requestedresult = getrequestedResuts();
$hostedresults =gethostedResults();



?><div class="container text-xs-center" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-xs-12">
<!--            <h4>Browse Rides</h4>-->
<!--            <p>Enter your Origin and Destination to see all matching rides</p>-->
        </div>
<!--        <div class="col-xs-12">-->
<!--            <div class="form-group floating-label-form-group controls">-->
<!--                <input type="text" class="form-control" placeholder="Origin" id="searchride_origin" required">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-xs-12">-->
<!--            <div class="form-group floating-label-form-group controls">-->
<!--                <input type="text" class="form-control" placeholder="Destination" id="searchride_destination" required">-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <div class="row">
        <div class="col-xs-4 offset-xs-4 text-xs-center">
            <div class="form-group floating-label-form-group controls" id="browse">
                <button class="btn form-control login_btn" type="button" id="dashboard_search" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Browse Rides</button>
            </div>
        </div>
    </div>

    <div class="collapse" id="collapseExample">

        <div class="card card-block">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 text-xs-center">
                            <h4>Requested Rides</h4>
                        </div>
                        <div class="form-group">
                            <div class="container-fluid">
                                <section class="col-xs-12 col-sm-6 col-md-12">
                            <?php
                            if(sizeof($requestedresult)!=0) {
                            while ($value = $requestedresult->fetch_assoc()) {
                                    if ($value['email'] != $_SESSION['email']) {
                                        $rdate = $value['date_of_travel'];
                                        $rorigin = $value['origin'];
                                        $rdestination = $value['destination'];
                                        $rtime = $value['prefered_time'];
                                        $rseats = $value['num_of_seats'];
                                        $remail = $value['email'];
                                        include 'includes/result.php';
                                    }
                            }
                            }else{
                                echo "<h2>No results found.</h2>";
                            }
                            ?>
                                </section>
                            </div>

                        </div>
                    </div>
                </div><hr>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 text-xs-center">
                            <h4>Hosted Rides</h4>
                        </div>
                        <div class="form-group">
                            <div class="container-fluid">


                                <section class="col-xs-12 col-sm-6 col-md-12">
                            <?php
                            if(sizeof($hostedresults)!=0){
                            while ($value = $hostedresults->fetch_assoc()) {
                                    if($value['email']!=$_SESSION['email']) {
                                        $hdate = $value['date_of_travel'];
                                        $horigin = $value['origin'];
                                        $hdestination = $value['destination'];
                                        $htime = $value['departure_time'];
                                        $hvehicle = $value['vehicle'];
                                        $hseats = $value['number_of_seats'];
                                        $hemail = $value['email'];
                                        include 'includes/hostedresults.php';
                                    }
                                }
                            }else{
                                echo "<h2>No results found.</h2>";
                            }

                            ?></section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

