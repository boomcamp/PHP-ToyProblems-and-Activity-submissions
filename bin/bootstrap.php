<?php 
error_reporting(E_ALL ^ E_NOTICE);
require "HotReloader.php";
use HotReloader\HotReloader;
$reloader = new HotReloader();
$reloader->setRoot(__DIR__);
$reloader->init();

# More setup : https://github.com/felippe-regazio/php-hot-reloader/tree/V1
?>