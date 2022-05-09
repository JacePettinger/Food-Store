<?php
define("APPROOT", dirname(__FILE__, 2));

$host = substr($_SERVER['HTTP_HOST'], 0, 5);
if ($host == 'local') {
    $local = true;
} else {
    $local = false;
}
define("LOCAL", $local);

if ($local) {
    $debug = true;
    define("URLROOT", "http://localhost/food-store/");
} else {
    $debug = false;
    define("URLROOT", ""); // change
}

define("SITENAME", "Jace Pettinger");
define("CURRENTYEAR", "2022");

if ($local) {
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PORT", "3306");
    define("DB_PASS", "");
    define("DB_NAME", "farm");
} else {
    define("DB_HOST", "localhost");
    define("DB_USER", ""); // change
    define("DB_PORT", "3306");
    define("DB_PASS", ""); // change
    define("DB_NAME", ""); // change
}
