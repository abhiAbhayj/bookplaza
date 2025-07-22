<?php
include('../config.php');
$admin=new Admin();
$email=$_GET['email'];
$otp=$_SESSION['otp'];

$name = "";
$password="";
$query=$admin->ret("select * from `seller` WHERE `seller_email`='$email'");
$row=$query->fetch(PDO::FETCH_ASSOC);
$name=$row['seller_name'];



// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'abhay2003.jp@gmail.com';                     // SMTP username
    $mail->Password   = 'xbilninnflmluwii';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('abhay2003.jp@gmail.com', 'BookPlaza');
    $mail->addAddress("$email", "$name");     // Add a recipient
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'BookPlaza';
    $mail->Body    = "<b>Hello..$name, Your one time password for login is : $otp . </b>
                         If you did not request a password change, please ignore this email.";
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail';

    $mail->send();
    echo 'Message has been sent';
    header("location: ../otpenter.php");
} catch (Exception $e) {

    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}