<?php
ob_start();
session_start();
// var_dump($_SESSION['user']);
// var_dump($_COOKIE['user_id']);

require_once 'vendor/autoload.php';

define('ROOT_URL', '127.0.0.1:5000');

use App\Core\Routes;


new Routes;


ob_end_flush();
