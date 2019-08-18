<?php error_reporting(0); session_start(); ?>



<?php

$con=mysql_connect("localhost","root","root");
if(!$con)
    die(mysql_error());

if(!mysql_select_db("jobs",$con))
    die("No Database Selected");

$uploaddir = 'photo/';
$uploadfile = $uploaddir . basename($_FILES['photo']['name']);
move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);


$updated = mysql_query("UPDATE jobs.employer SET company_name='".$_POST["company"]."',address='".$_POST["address"]."',country='".$_POST["country"]."',state='".$_POST["state"]."',city='".$_POST["city"]."',pincode='".$_POST["pincode"]."',contact_number='".$_POST["contact_number"]."',contact_person='".$_POST["contact_person"]."',current_employer='".$_POST["current_employer"]."',designation='".$_POST["designation"]."',photo='".$_FILES['photo']['name']."' WHERE email='".$_SESSION["employer"]."';");

if(!$updated)
{
    header('Location: http://localhost/job_new/employer_edit_profile.php?id=1&updated=no');
}
else
{
    header('Location: http://localhost/job_new/employer_edit_profile.php?id=1&updated=yes');
}


?>

