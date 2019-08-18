<?php error_reporting(0); session_start(); ?>
    
    
    
    <?php
    
    
$con=mysql_connect("localhost","root","root");
if(!$con)
    die(mysql_error());

if(!mysql_select_db("jobs",$con))
    die("No Database Selected");

$company = $_GET["company"];
$category = $_GET["category"];
$state = $_GET["state"];

$job_id=$_GET["job_id"];


$row = mysql_fetch_array(mysql_query("SELECT iduser FROM jobs.employee WHERE email='".$_SESSION["login_user"]."';"));
$user_id = $row["iduser"];
$row2 = mysql_fetch_array(mysql_query("SELECT idjob FROM jobs.job WHERE idjob='".$job_id."' AND applied REGEXP ',[[:<:]]".$user_id."[[:>:]],';"));
$id_job = $row2["idjob"];

if($id_job == null)
{
    
    $row3 = mysql_fetch_array(mysql_query("SELECT applied FROM jobs.job WHERE idjob='".$job_id."';"));
    
    $dt = date('Y-m-d');
    if($row3["expirydate"]>$dt)
    {
     if($company != null)
    header('Location: http://localhost/job_new/display.php?company='.$company.'&expired=yes');
    elseif ($category != null)
    header('Location: http://localhost/job_new/display.php?category='.$category.'&expired=yes');
    elseif($state != null)
    header('Location: http://localhost/job_new/display.php?state='.$state.'&expired=yes');   
    }
    else
    {
    $apply = $row3["applied"].",".$user_id.",";
    
    $row4 = mysql_fetch_array(mysql_query("SELECT jobs_applied FROM jobs.employee WHERE email='".$_SESSION["login_user"]."';"));
    $job_apply = $row4["jobs_applied"].",".$job_id.",";
    echo $job_apply;
    
    mysql_query("UPDATE jobs.job SET applied='".$apply."' WHERE idjob='".$job_id."';");
    mysql_query("UPDATE jobs.employee SET jobs_applied='".$job_apply."' WHERE email='".$_SESSION["login_user"]."';");
    header('Location: http://localhost/job_new/posted_notification.php?iduser='.$user_id.'&idjob='.$job_id);
    
    if($company != null)
    header('Location: http://localhost/job_new/display.php?company='.$company.'');
    elseif ($category != null)
    header('Location: http://localhost/job_new/display.php?category='.$category.'');
    elseif($state != null)
    header('Location: http://localhost/job_new/display.php?state='.$state.'');
    }
}
 else
{
    if($company != null)
    header('Location: http://localhost/job_new/display.php?company='.$company.'');
    elseif ($category != null)
    header('Location: http://localhost/job_new/display.php?category='.$category.'');
    elseif($state != null)
    header('Location: http://localhost/job_new/display.php?state='.$state.'');
}


mysql_close();
    
    
    ?>

