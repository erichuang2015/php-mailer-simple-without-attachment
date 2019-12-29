<?php
require("class.phpmailer.php");
        $mailer = new PHPMailer();
        $mailer->IsSMTP();
        $mailer->Host = 'ssl://smtp.gmail.com';
        $mailer->Port = 465; //can be 587
        $mailer->SMTPAuth = TRUE;
        $mailer->Username = '';  // Change this to your gmail address
        $mailer->Password = '';  // Change this to your gmail password
        $mailer->From = '';  // Change this to your gmail address
        $mailer->FromName = 'Mehmood'; // This will reflect as from name in the email to be sent
        $mailer->Body = 'This is the body of your email.';
        $mailer->Subject = 'This is your subject.';
        $mailer->AddAddress('');  // This is where you want your email to be sent
        if(!$mailer->Send())
        {
           echo "Message was not sent<br/ >";
           echo "Mailer Error: " . $mailer->ErrorInfo;
        }
        else
        {
           echo "Message has been sent";
        }
?>