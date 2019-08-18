<?php error_reporting(0); session_start(); 


$con=mysql_connect("localhost","root","root");

if(!$con)
die(mysql_error());

if(!mysql_select_db("jobs",$con))
die("No Database Selected");

$row_idemployer = mysql_fetch_array(mysql_query("SELECT idemployer FROM jobs.employer WHERE email='".$_SESSION["employer"]."';"));

$iduser = $_GET["iduser"];
$id_info = date('Y-m-d H:i:s');
$idemployer = $row_idemployer["idemployer"];

$insert = "INSERT INTO jobs.resume_notification_info (iduser,idinfo,idemployer) VALUES ('".$iduser."','".$id_info."','".$idemployer."');";
mysql_query($insert);

$result_notif_number = mysql_query("SELECT no FROM jobs.resume_notification_employee WHERE iduser='".$iduser."';");
$row_notif_number = mysql_fetch_array($result_notif_number);
$no = $row_notif_number["no"];
$no++;
mysql_query("UPDATE jobs.resume_notification_employee SET no=".$no.",opened='no',idemployer='".$idemployer."' WHERE iduser='".$iduser."';");
header('Location: http://localhost/job_new/display_employee.php?iduser='.$iduser);     

$row_email = mysql_fetch_array(mysql_query("SELECT mail FROM jobs.employee WHERE iduser='".$iduser."';"));

$message = '
                    <html>
                    <head>
                      <title>Activation Email</title>
                    </head>
                    <body>
                     One Employer Need Your Resume<br />
                      <a href="http://localhost/job_new/index.php">Click Here To Login</a>
                      
                    </body>
                    </html>
                    ';

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
$mail->Subject = "Need Resume | Grabjob";
$mail->Body = $message;
$mail->AddAddress($row_email["mail"]);
if(!$mail->Send())
{
    echo "Mailer Error." . $mail->ErrorInfo;
}



?>
