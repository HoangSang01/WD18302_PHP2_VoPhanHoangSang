
<?php
ob_start();
session_start();
require_once 'vendor/autoload.php';
require 'App/PHPMailer/src/Exception.php';
require 'App/PHPMailer/src/PHPMailer.php';
require 'App/PHPMailer/src/SMTP.php';

define('ROOT_URL', '127.0.0.1:5000');
date_default_timezone_set('Asia/Ho_Chi_Minh');

use App\Core\Routes;

new Routes;


ob_end_flush();
