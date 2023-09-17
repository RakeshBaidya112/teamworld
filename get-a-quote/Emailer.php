<?php



$path = dirname(dirname(__FILE__));



use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;



require_once('./PHPMailer/src/Exception.php');

require_once('./PHPMailer/src/PHPMailer.php');

require_once('./PHPMailer/src/SMTP.php');





class Emailer

{

    var $mail;



    public function __construct($subject = null)

    {

        $mail = new PHPMailer(true);

        try {

             //Enable SMTP debugging.

            $mail->SMTPDebug = 0;

            //Set PHPMailer to use SMTP.

            //$mail->isSMTP();

            $mail->isSendmail();

            //Set SMTP host name                          

            // $mail->Host = "smtp.office365.com";

            // $mail->Host = "mail.teamworld.in";

            //Set this to true if SMTP host requires authentication to send email

            // $mail->SMTPAuth = true;

            //Provide username and password                   

            // $mail->Username = "webquery@tgixl.in";

            // $mail->Password = "Poiuy@2022";

            

            // $mail->Username = "_mainaccount@teamworld.in";

            // $mail->Password = "G0lden@2022$#J";

            

            //Set TCP port to connect to

            // $mail->Port = 587; 



            $mail->From = 'webquery@teamworld.in';

            $mail->addAddress('info@teamworld.in');

             $mail->addAddress('sreeramr@teamworld.in');

             $mail->addAddress('manojg@teamglobal.in'); 



            $mail->Subject = $subject;



            $mail->isHTML(true);

        } catch (Exception $e) {

            echo "Mailer Configuration Error: {$mail->ErrorInfo}";

        }



        $this->mail = $mail;

    }



    function sendMail($message, $refid)

    {

        $this->mail->MsgHTML($message);

        try {

            $this->mail->send();

            echo $refid;

        } catch (Exception $e) {

            echo "Mailer Error: " . $this->mail->ErrorInfo;

        }

    }

}

