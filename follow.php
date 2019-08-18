<?php error_reporting(0); session_start(); ?>
    
    
    
<?php
$con=mysql_connect("localhost","root","root");
if(!$con)
    die(mysql_error());

if(!mysql_select_db("jobs",$con))
    die("No Database Selected");


$company = $_GET["company"];

$company_id_row = mysql_fetch_array(mysql_query("SELECT idemployer FROM jobs.employer WHERE email='".$_GET["company"]."';"));
$company_id = $company_id_row["idemployer"];
$user_id_row = mysql_fetch_array(mysql_query("SELECT iduser FROM jobs.employee WHERE company_following REGEXP ',[[:<:]]".$company_id."[[:>:]],' AND email='".$_SESSION["login_user"]."';"));
$user_id = $user_id_row["iduser"];


if($user_id == null)
{
$row = mysql_fetch_array(mysql_query("SELECT company_following FROM jobs.employee WHERE email='".$_SESSION["login_user"]."';"));
$follow = $row["company_following"].",".$company_id.",";
mysql_query("UPDATE jobs.employee SET company_following='".$follow."' WHERE email='".$_SESSION["login_user"]."'");


$row_user_id = mysql_fetch_array(mysql_query("SELECT iduser FROM jobs.employee WHERE email='".$_SESSION["login_user"]."';"));
$usr_id = $row_user_id["iduser"]."";


$row_employer = mysql_fetch_array(mysql_query("SELECT following FROM jobs.employer WHERE email='".$company."';"));
$follow_employer = $row_employer["following"].",".$usr_id.",";
mysql_query("UPDATE jobs.employer SET following='".$follow_employer."' WHERE idemployer='".$company_id."';");

header('Location: http://localhost/job_new/company_profile.php?company='.$company.'');
}
else
{
header('Location: http://localhost/job_new/company_profile.php?company='.$company.'');
}
?>