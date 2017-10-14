<div class="container">
<div class="row">
        <div class="col-xs-12 text-xs-center ">
            <form action="/requests/my_upload.php" enctype="multipart/form-data" method="post" id="form">
                <div id="preview" class="img-fluid col-xs-12 text-xs-center"><img src="<?php if(file_exists('images/users/'.$image.'.jpg')){ echo 'images/users/'.$image.'.jpg';}else{echo 'images/default.png';} ?>" /></div>
                <div class="col-xs-12 text-xs-center"><?php echo "<h3>$fname $lname</h3>"; ?></div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">

                        <div class="row">

                            <div class="col-xs-6 offset-xs-3">
                                <input type="file" class="form-control" accept="image/*" name="image" id="uploadImage" required"><br>
                                <input type="submit" name="upload" class="btn btn-default navbar-btn font-white btn-back text-xs-center" id="avatar-btn" value="Upload(Only .jpg)">
                            </div>
                        </div>
                    </div>

                </div>

            </form>
            <div id="err"></div>
        </div>

    </div>
    <?php include_once 'alerts.php'; ?>
    <div class="row">

        <div class="col-xs-6">

            <div class="row">
                <div class="col-xs-12">
                    <h5 class="text-xs-center">Your Hosted Rides</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <p>You haven't hosted any ride yet</p>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <button class="btn" id="hostridebtn" data-toggle="modal" data-target="#hostridemodel">Host a ride</button>
                </div>
            </div>

        </div>

        <div class="col-xs-6 verticalLine">

            <div class="row">
                <div class="col-xs-12">
                    <h5 class="text-sm-center">Your Booked Rides</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <p>You haven't booked any ride yet</p>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <button class="btn" id="searchridebtn" data-toggle="modal" data-target="#searchridemodel">Request a ride</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12"><hr></div>
        </div>
    </div>
</div>
