<?php
const rootDir = '/home/multistream6/domains/dashboard.creditmonumentplc.online/public_html/';
require rootDir . 'include/vendor/autoload.php';


use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
        //$mail->isSMTP();
        $mail->isMail();
        $mail->Host = "mail.rsfcorporation.com"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "support@rsfcorporation.com"; // Change Email Address
        $mail->Password = '+Rsfcorporation123'; // Change Email Password
        $mail->Port = 587; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('support@rsfcorporation.com',' Regions Financial Corporation'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("support@rsfcorporation.com", " Regions Financial Corporation"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}
