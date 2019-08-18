<?php
error_reporting(0); session_start(); 

require("fpdf/fpdf.php");

$con=mysql_connect("localhost","root","root");

if(!$con)
	die(mysql_error());

if(!mysql_select_db("jobs",$con))
	die("No Database Selected");
        
        if($_FILES['photo']['name'] != null){
        $uploaddir = 'resume_photo/';
        $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
        }

        
        
        mysql_query("UPDATE jobs.employee SET photo='".$_FILES['photo']['name']."' WHERE email='".$_SESSION["login_user"]."';");
        
        $row_photo = mysql_fetch_array(mysql_query("SELECT photo FROM jobs.employee WHERE email='".$_SESSION["loginuser"]."';"));
        
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        
        $address = $_POST["address"];
        
        
        
        $job_title1 = $_POST["job_title1"];
        $comp_name1 = $_POST["comp_name1"];
        $strt_dt1 = $_POST["strt_dt1"];
        $end_dt1 = $_POST["end_dt1"];
        $other1 = $_POST["other1"];
        
        $job_title2 = $_POST["job_title2"];
        $comp_name2 = $_POST["comp_name2"];
        $strt_dt2 = $_POST["strt_dt2"];
        $end_dt2 = $_POST["end_dt2"];
        $other2 = $_POST["other2"];
        
        $job_title3 = $_POST["job_title3"];
        $comp_name3 = $_POST["comp_name3"];
        $strt_dt3 = $_POST["strt_dt3"];
        $end_dt3 = $_POST["end_dt3"];
        $other3 = $_POST["other3"];
        
        $job_title4 = $_POST["job_title4"];
        $comp_name4 = $_POST["comp_name4"];
        $strt_dt4 = $_POST["strt_dt4"];
        $end_dt4 = $_POST["end_dt4"];
        $other4 = $_POST["other4"];
        
        $job_title5 = $_POST["job_title5"];
        $comp_name5 = $_POST["comp_name5"];
        $strt_dt5 = $_POST["strt_dt5"];
        $end_dt5 = $_POST["end_dt5"];
        $other5 = $_POST["other5"];
        
        
        
        $qualification = $_POST["qualification"];
        
        
        
        $course1 = $_POST["course1"];
        $institute1 = $_POST["institute1"];
        $edu_strt_dt1 = $_POST["edu_strt_dt1"];
        $edu_end_dt1 = $_POST["edu_end_dt1"];
        $edu_other1 = $_POST["edu_other1"];
        
        $course2 = $_POST["course2"];
        $institute2 = $_POST["institute2"];
        $edu_strt_dt2 = $_POST["edu_strt_dt2"];
        $edu_end_dt2 = $_POST["edu_end_dt2"];
        $edu_other2 = $_POST["edu_other2"];
        
        $course3 = $_POST["course3"];
        $institute3 = $_POST["institute3"];
        $edu_strt_dt3 = $_POST["edu_strt_dt3"];
        $edu_end_dt3 = $_POST["edu_end_dt3"];
        $edu_other3 = $_POST["edu_other3"];
        
        $course4 = $_POST["course4"];
        $institute4 = $_POST["institute4"];
        $edu_strt_dt4 = $_POST["edu_strt_dt4"];
        $edu_end_dt4 = $_POST["edu_end_dt4"];
        $edu_other4 = $_POST["edu_other4"];
        
        $course5 = $_POST["course5"];
        $institute5 = $_POST["institute5"];
        $edu_strt_dt5 = $_POST["edu_strt_dt5"];
        $edu_end_dt5 = $_POST["edu_end_dt5"];
        $edu_other5 = $_POST["edu_other5"];
        
        
        
        $interests = $_POST["interests"];
        
        
        $pdf = new FPDF();

$pdf->AddPage();
$pdf->AddFont('times', '', 'times.php');
//$pdf->Image();
if($_FILES['photo']['name'] != null){
$pdf->Image('resume_photo/'.$_FILES['photo']['name'],179,0,20);
}
$pdf->SetFont("times","B","28");
//$pdf->Cell(0,0,$_FILES['photo']['name'],0,1,"C");$pdf->write(5,"\n");$pdf->write(5,"\n");
$pdf->Cell(0,0,$name,0,1,"C");
$pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
$pdf->SetFont("times","","15");
$pdf->Cell(0,0,"Email :".$email,0,1,"L");
$pdf->Cell(0,0,"Phone :".$phone,0,1,"R");$pdf->write(5,"\n");$pdf->write(5,"\n");
$pdf->Cell(0,0,"Address :".$address,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");

$hr = 55;

if($job_title1 != null && $comp_name1 != null && $strt_dt1 !=null && $end_dt1 != null)
    {
        $pdf->SetFont("times","B","22");
        $pdf->Cell(0,0,"Work Experience",0,1,"L");$pdf->write(5,"\n");
        $pdf->SetFont("times","","15");
        $pdf->Cell(0,0,"",0,1,"L");
        
$i = 1;

    
        
if($job_title1 != null && $comp_name1 != null && $strt_dt1 !=null && $end_dt1 != null)
{
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->SetFont("times","B","16");
    $pdf->Cell(0,0,$job_title1,0,1,"L");
    $pdf->SetFont("times","","15");
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Company Name :".$comp_name1,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Start Date :".$strt_dt1,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"End Date :".$end_dt1,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    if($other1 != null){
    $pdf->Cell(0,0,"Description :".$other1,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    }
    $pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
}
if($job_title2 != null && $comp_name2 != null && $strt_dt2 !=null && $end_dt2 != null)
{
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->SetFont("times","B","16");
    $pdf->Cell(0,0,$job_title2,0,1,"L");
    $pdf->SetFont("times","","15");
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Company Name :".$comp_name2,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Start Date :".$strt_dt2,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"End Date :".$end_dt2,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    if($other2 != null){
    $pdf->Cell(0,0,"Description :".$other2,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    }
    $pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
}
if($job_title3 != null && $comp_name3 != null && $strt_dt3 !=null && $end_dt3 != null)
{
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->SetFont("times","B","16");
    $pdf->Cell(0,0,$job_title3,0,1,"L");
    $pdf->SetFont("times","","15");
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Company Name :".$comp_name3,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Start Date :".$strt_dt3,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"End Date :".$end_dt3,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    if($other3 != null){
    $pdf->Cell(0,0,"Description :".$other3,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    }
    $pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
}
if($job_title4 != null && $comp_name4 != null && $strt_dt4 !=null && $end_dt4 != null)
{
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->SetFont("times","B","16");
    $pdf->Cell(0,0,$job_title4,0,1,"L");
    $pdf->SetFont("times","","15");
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Company Name :".$comp_name4,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Start Date :".$strt_dt4,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"End Date :".$end_dt4,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    if($other4 != null){
    $pdf->Cell(0,0,"Description :".$other4,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    }
    $pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
}
if($job_title5 != null && $comp_name5 != null && $strt_dt5 !=null && $end_dt5 != null)
{
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->SetFont("times","B","16");
    $pdf->Cell(0,0,$job_title5,0,1,"L");
    $pdf->SetFont("times","","15");
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Company Name :".$comp_name5,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Start Date :".$strt_dt5,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"End Date :".$end_dt5,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    if($other5 != null){
    $pdf->Cell(0,0,"Description :".$other5,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    }
    $pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
}
    }
if($qualification != null)
{
        $pdf->SetFont("times","B","22");
        $pdf->Cell(0,0,"Qualification",0,1,"L");$pdf->write(5,"\n");
        $pdf->SetFont("times","","15");
        $pdf->Cell(0,0,"",0,1,"L");$pdf->write(5,"\n");
        $pdf->Cell(0,0,$qualification,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
}

if($course1 != null && $institute1 != null && $edu_strt_dt1 !=null && $edu_end_dt1 != null)
    {
        $pdf->SetFont("times","B","22");
        $pdf->Cell(0,0,"Education",0,1,"L");$pdf->write(5,"\n");
        $pdf->SetFont("times","","15");
        $pdf->Cell(0,0,"",0,1,"L");
        
$i = 1;

    
        
if($course1 != null && $institute1 != null && $edu_strt_dt1 !=null && $edu_end_dt1 != null)
{
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->SetFont("times","B","16");
    $pdf->Cell(0,0,$course1,0,1,"L");
    $pdf->SetFont("times","","15");
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Company Name :".$institute1,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Start Date :".$edu_strt_dt1,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"End Date :".$edu_end_dt1,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    if($edu_other1 != null){
    $pdf->Cell(0,0,"Description :".$edu_other1,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    }
    $pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
}
if($course2 != null && $institute2 != null && $edu_strt_dt2 !=null && $edu_end_dt2 != null)
{
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->SetFont("times","B","16");
    $pdf->Cell(0,0,$course2,0,1,"L");
    $pdf->SetFont("times","","15");
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Company Name :".$institute2,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Start Date :".$edu_strt_dt2,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"End Date :".$edu_end_dt2,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    if($edu_other2 != null){
    $pdf->Cell(0,0,"Description :".$edu_other2,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    }
    $pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
}
if($course3 != null && $institute3 != null && $edu_strt_dt3 !=null && $edu_end_dt3 != null)
{
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->SetFont("times","B","16");
    $pdf->Cell(0,0,$course3,0,1,"L");
    $pdf->SetFont("times","","15");
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Company Name :".$institute3,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Start Date :".$edu_strt_dt3,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"End Date :".$edu_end_dt3,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    if($edu_other3 != null){
    $pdf->Cell(0,0,"Description :".$edu_other3,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    }
    $pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
}
if($course4 != null && $institute4 != null && $edu_strt_dt4 !=null && $edu_end_dt4 != null)
{
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->SetFont("times","B","16");
    $pdf->Cell(0,0,$course4,0,1,"L");
    $pdf->SetFont("times","","15");
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Company Name :".$institute4,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Start Date :".$edu_strt_dt4,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"End Date :".$edu_end_dt4,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    if($edu_other4 != null){
    $pdf->Cell(0,0,"Description :".$edu_other4,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    }
    $pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
}
if($course5 != null && $institute5 != null && $edu_strt_dt5 !=null && $edu_end_dt5 != null)
{
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->SetFont("times","B","16");
    $pdf->Cell(0,0,$course5,0,1,"L");
    $pdf->SetFont("times","","15");
    $pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Company Name :".$institute5,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"Start Date :".$edu_strt_dt5,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    $pdf->Cell(0,0,"End Date :".$edu_end_dt5,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    if($edu_other5 != null){
    $pdf->Cell(0,0,"Description :".$edu_other5,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");
    }
    $pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
}
    }
    if($qualification != null)
{
        $pdf->SetFont("times","B","22");
        $pdf->Cell(0,0,"Interests",0,1,"L");$pdf->write(5,"\n");
        $pdf->SetFont("times","","15");
        $pdf->Cell(0,0,"",0,1,"L");$pdf->write(5,"\n");
        $pdf->Cell(0,0,$interests,0,1,"L");$pdf->write(5,"\n");$pdf->write(5,"\n");$pdf->write(5,"\n");
}



$pdf->SetFont("","","20");
$pdf->write(5,"\n");
$pdf->write(5,"\n");
//$pdf->write(5,"usdvfujcvbsdjugcvkusd");
$pdf->Output();

        
        ?>