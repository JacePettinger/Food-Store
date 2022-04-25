<?php
require_once("config/config.php");
require_once("config/debug.php");
// load all files from libraries folder
spl_autoload_register(function ($className) {
    require_once("libraries/" . $className . ".php");
});

$core = new Core;
$controller = new Controller;
$database = new Database;
