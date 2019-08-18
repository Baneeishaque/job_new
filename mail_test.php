<?php


require_once("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; //or587
$mail->IsHTML(true);
$mail->Username = "grabjobforyou@gmail.com";
$mail->Password = "kkrrazzy#4";
$mail->SetFrom("grabjobforyou@gmail.com");
$mail->Subject = "Hello World Of SMTP";
$mail->Body = "This Is The First Email Send From PHP.";
$mail->AddAddress("sajeerbabu44@gmail.com");
if(!$mail->Send())
{
    echo "Mailer Error." . $mail->ErrorInfo;
}
 else {
     echo "Message Has Been Sent";
}

?>