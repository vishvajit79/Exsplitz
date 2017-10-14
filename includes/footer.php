<!-- Footer -->
<footer id="footer">
    <div class="container " style="padding-right:40px">
            <div class="row">
                <div class=" col-md-4 text-xs-center">
                    <a href="/about-us.php">About Us</a>
                    <a href="/contact-us.php">Contact Us</a>
                    <a href="/faq.php">FAQs</a>
                </div>

                <div class="col-md-4 text-xs-center" id="fa_icon ">
                    <a href="https://www.facebook.com/" class="btn-social btn-outline" target="_blank"><i class="fa  fa-facebook" style="color: #3b5998; font-size: 30px;"></i></a>

                    <a href="https://twitter.com/" class="btn-social btn-outline" target="_blank"><i class="fa  fa-twitter " style="color: #1da1f2; font-size: 30px;"></i></a>

                    <a href="https://play.google.com/store" class="btn-social btn-outline" target="_blank"><i class="fa  fa-play" style="color: #b71c1c; font-size: 30px;"></i></a>

                    <a href="https://www.instagram.com/" class="btn-social btn-outline" target="_blank"><i class="fa  fa-instagram" style="color: #f77036; font-size: 30px;"></i></a>

                </div>
                <div class="col-md-4 text-xs-center">
                    <?php
                    if(isset($_SESSION['login'])&& $_SESSION['login']=="true"){
                        echo "<a data-toggle=\"modal\" href=\"/profile.php\">Host a ride</a>";
                    }else{
                    ?>
                    <a data-toggle="modal" href="#loginmodel">Log In</a>
                    <?php }
                    if(isset($_SESSION['login'])&& $_SESSION['login']=="true"){
                        echo "<a data-toggle=\"modal\" href=\"/profile.php\">Book a ride</a>";
                    }else {
                        ?>
                        <a data-toggle="modal" href="">Sign Up</a>
                        <?php
                    }
                    ?>
                    <a href="/sitemap.xml" target="_blank">Site Map</a>
                </div>
            </div>
            <div class="row footer-below">
                <div class="col-xs-12 text-xs-center">
                    <h6>Copyright &copy; 2016 Exsplitz</h6>
                </div>
            </div>
    </div>
</footer>
