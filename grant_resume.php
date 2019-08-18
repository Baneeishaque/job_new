<?php error_reporting(0); session_start(); 


$con=mysql_connect("localhost","root","root");

if(!$con)
    die(mysql_error());

if(!mysql_select_db("jobs",$con))
    die("No Database Selected");

$idemployer = $_GET["idemployer"];
$iduser = $_GET["iduser"];

$row_notification = mysql_fetch_array(mysql_query("SELECT no FROM jobs.resume_granted_notification WHERE idemployer='".$idemployer."';"));
$no = $row_notification["no"];
$no = $no+1;

mysql_query("UPDATE jobs.resume_granted_notification SET no=".$no.",opened='no',iduser='".$iduser."' WHERE idemployer='".$idemployer."';");

$idresume = date('Y-m-d H:i:s');
$row_resume_name = mysql_fetch_array(mysql_query("SELECT resume FROM jobs.employee WHERE iduser='".$iduser."';"));
$resume_name = $row_resume_name["resume"];

mysql_query("INSERT INTO jobs.resume_granted_info (iduser,idresume,resume_name,idemployer) VALUES ('".$iduser."', '".$idresume."', '".$resume_name."', '".$idemployer."');");

header('Location: http://localhost/job_new/resume_asked_notification.php?iduser='.$iduser.'&idemployer='.$idemployer.'');

$row_email = mysql_fetch_array(mysql_query("SELECT mail FROM jobs.employer WHERE idemployer='".$idemployer."';"));

$message = '
                    <html>
                    <head>
                      <title>Activation Email</title>
                    </head>
                    <body>
                     One Employee Has Given The Resume<br />
                      <a href="http://localhost/job_new/employer_login.php">Click Here To Login</a>
                      
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
$mail->Subject = "Resume Granted | Grabjob";
$mail->Body = $message;
$mail->AddAddress($row_email["mail"]);
if(!$mail->Send())
{
    echo "Mailer Error." . $mail->ErrorInfo;
}

?>