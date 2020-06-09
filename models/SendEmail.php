<?php
include '../misc/phpmailer/SMTP.php';
include '../misc/phpmailer/PHPMailer.php';
// include '../misc/phpmailer/src/Exception.php';

/**
 * 
 */
class SendEmail
{
 
    private $mail;
    private $host;
    private $SMTPAuth;
    private $Username;
    private $Password;
    private $SMTPSecure;
    private $Port;

    private $mailFrom;
    private $mailSender;
    function __construct()
    {
        $this->mail       = new  PHPMailer(true);
        $this->host       ="smtp.gmail.com";
        $this->SMTPAuth   =true;
        $this->Username   ="tucorreo@gmail.com";
        $this->Password   ="tucontraseña";
        $this->SMTPSecure ="TLS";
        $this->Port       =587;
        
        $this->mailFrom   ="tucorreo@gmail.com";
        $this->mailSender ="CodigoWebLibre";
    }

    public function newEmail($mailFrom="", $mailSender="",  $mailFor="", $mailRecipientName="", $mailSubject="", $mailBody="")
    {
        try {
            //Server settings
            $this->mail->SMTPDebug = false;
            $this->mail->isSMTP();
            $this->mail->Host       = $this->host;
            $this->mail->SMTPAuth   = $this->SMTPAuth;
            $this->mail->Username   = $this->Username;
            $this->mail->Password   = $this->Password;
            $this->mail->SMTPSecure = $this->SMTPSecure;
            $this->mail->Port       = $this->Port;

            //Recipients
            $mailFrom   =($mailFrom=="" || empty($mailFrom))?$this->mailFrom:$mailFrom;
            $mailSender =($mailSender=="" || empty($mailSender))?$this->mailSender:$mailSender;

            $this->mail->setFrom($mailFrom, $mailSender);
            $this->mail->addAddress($mailFor, $mailRecipientName);     // Add a recipient
            $this->mail->addReplyTo($mailFrom, $mailSender);
            // $this->mail->addCC('cc@example.com');
            // $this->mail->addBCC('bcc@example.com');

            // Attachments
            // $this->mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $this->mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $this->mail->isHTML(true);                                  // Set email format to HTML
            $this->mail->Subject = $mailSubject;
            $this->mail->Body    = $mailBody;
            $this->mail->AltBody = 'Su gestor de correos no soporta HTML.';

            $this->mail->send();
            return true;
        } catch (Exception $e) {
            return "Ocurrió un error al enviar el correo: {$this->mail->ErrorInfo}";
        }
    }
}

