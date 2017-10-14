        <article class="search-result row">
            <div class="col-xs-12 col-sm-12 col-md-2">
                <ul class="meta-search">
                    <li><i class="glyphicon glyphicon-calendar"></i> <span><?php echo $rdate; ?></span></li>
                    <li><i class="glyphicon glyphicon-time"></i> <span><?php echo $rtime; ?></span></li>
                    <li><i class="glyphicon glyphicon-tags"></i> <span>Seats Available - <?php echo $rseats; ?></span></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
                <p><?php echo $rorigin ?> to <?php echo $rdestination; ?></p>
                <form name="sendtorequestpage" action="/redirect.php" method="post">
                    <input type="hidden" name="remail" value="<?php echo $remail; ?>">
                    <input type="hidden" name="rorigin" value="<?php echo $rorigin; ?>">
                    <input type="hidden" name="rdestination" value="<?php echo $rdestination; ?>">
                    <input type="hidden" name="rdate" value="<?php echo $rdate; ?>">
                    <input type="hidden" name="rtime" value="<?php echo $rtime; ?>">
                    <button type="submit" class="plus"><a href="/payment.php" title="Lorem ipsum"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></button>
                </form>
                 </div>
        </article>




