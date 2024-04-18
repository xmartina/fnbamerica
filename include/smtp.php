<?php



use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
//        $mail->isSMTP();
        $mail->isMail();
        $mail->Host = "mail.fnbamerica.com"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "info@fnbamerica.com"; // Change Email Address
        $mail->Password = '+Fnbamerica123'; // Change Email Password
        $mail->Port = 587; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('info@fnbamerica.com','First National Bank of America'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("info@fnbamerica.com", "First National Bank of America"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}
