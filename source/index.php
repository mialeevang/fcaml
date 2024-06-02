<?php

include("config.php");

include("site-head.php");

foreach (glob("mapped/*.php") as $filename)
{
    include $filename;
}

include("site-foot.php");

?>
