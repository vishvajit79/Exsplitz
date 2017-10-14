<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span><?php echo $hdate; ?></span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span><?php echo $htime; ?></span></li>
            <li><i class="glyphicon glyphicon-tags"></i> <span>Seats Available - <?php echo $hseats; ?></span></li>
        </ul>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
        <p><?php echo $horigin ?> to <?php echo $hdestination; ?></p>
        <p><?php echo $hvehicle ?></p>
        <form name="sendtopayment" action="/payment.php" method="post">
            <input type="hidden" name="hemail" value="<?php echo $hemail; ?>">
            <input type="hidden" name="horigin" value="<?php echo $horigin; ?>">
            <input type="hidden" name="hdestination" value="<?php echo $hdestination; ?>">
            <input type="hidden" name="hdate" value="<?php echo $hdate; ?>">
            <input type="hidden" name="htime" value="<?php echo $htime; ?>">
            <button type="submit" class="plus"><a href="/payment.php" title="Lorem ipsum"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></button>
        </form>
    </div>
</article>
