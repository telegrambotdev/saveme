<?php
$http = "http";
if (isset($_SERVER['HTTPS'])) $http = "https";
$root = "https" . "://" . $_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
define('BASEURL', $root);

// DB
define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');
