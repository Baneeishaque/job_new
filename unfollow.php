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
echo $user_id."<br />";

if($user_id != null)
{
$row = mysql_fetch_array(mysql_query("SELECT company_following FROM jobs.employee WHERE email='".$_SESSION["login_user"]."'"));
$follow = $row["company_following"];
$follow = str_replace(','.$company_id.',', '', $follow);

mysql_query("UPDATE jobs.employee SET company_following='".$follow."' WHERE email='".$_SESSION["login_user"]."';");

$row_employer = mysql_fetch_array(mysql_query("SELECT following FROM jobs.employer WHERE email='".$company."';"));
$follow_employer = $row_employer["following"];
$follow_employer = str_replace(','.$user_id.',', '', $follow_employer);

mysql_query("UPDATE jobs.employer SET following='".$follow_employer."' WHERE email='".$company."';");

header('Location: http://localhost/job_new/company_profile.php?company='.$company.'');
}
else
{
header('Location: http://localhost/job_new/company_profile.php?company=no');
}








?>
