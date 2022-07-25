<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require_once '../vendor/autoload.php';
 
$mail = new PHPMailer(true);
?>