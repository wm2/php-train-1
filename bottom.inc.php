<?php

if (!drawMenu($leftMenu, false))
    echo ERR_DM_BOTTOMT;
?>
&copy; <?php echo COPYRIGHT; ?>, 2000 - <?= strftime('%Y') ?>
<p>
    Powered by <?php echo $_SERVER['SERVER_SOFTWARE']?>/PHP<?php echo PHP_VERSION ?> on <?php echo PHP_OS?>;
</p>