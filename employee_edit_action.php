<?php error_reporting(0); session_start(); ?>
    
    
    
<?php

$con=mysql_connect("localhost","root","root");
if(!$con)
    die(mysql_error());

if(!mysql_select_db("jobs",$con))
    die("No Database Selected");

$uploaddir = 'resume/';
$uploadfile = $uploaddir . basename($_FILES['resume']['name']);
move_uploaded_file($_FILES['resume']['tmp_name'], $uploadfile);

$updated = mysql_query("UPDATE jobs.employee SET name='".$_POST["name"]."',address='".$_POST["address"]."',country='".$_POST["country"]."',state='".$_POST["state"]."',city='".$_POST["city"]."',mobile='".$_POST["mobile"]."',experience='".$_POST["experience"]."',key_skills='".$_POST["key_skills"]."',professional_background='".$_POST["professional_background"]."',resume='".$_FILES['resume']['name']."' WHERE email='".$_SESSION["login_user"]."';");

if(!$updated)
{
    header('Location: http://localhost/job_new/employee_edit_profile.php?id=1&updated=no');
}
else
{
    header('Location: http://localhost/job_new/employee_edit_profile.php?id=1&updated=yes');
}


?>

