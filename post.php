<!DOCTYPE html>
<html>
<?php error_reporting(0); session_start(); ?>
	
    


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	
		<meta charset="utf-8">
		<title>Grab Job | Find Jobs Online</title>
		
		<!-- Set Keywords & Description -->
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		
		<!-- Set Viewport Options -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon2.png" />

		<!-- Set Viewport Options -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;"/>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		
		<!-- Include Fonts 	
		<link href="css/font.css" rel="stylesheet" type="text/css">	-->	
		
		<!-- Include Stylesheets -->
		<link rel="stylesheet" href="css/main.css" />

		<!-- Include Libraries -->
		<script src="js/jquery.min.js"></script>
		<script src="js/lib/waypoints.min.js"></script>
		<script src="js/lib/jquery.easing.min.js"></script>
		<script src="js/lib/jquery.royalslider.min.js"></script>
		<script src="js/lib/modernizr-2.6.2.min.js"></script>
		<script src="js/lib/respond.min.js"></script>

		<!-- Include Google Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','js/analytics.js','ga');

		ga('create', 'UA-58092843-1', 'auto');
		ga('send', 'pageview');
		</script>
        
	


        
        

	</head>
	
	<body>

		
	
    
    <!--<div class="mynav">
            	<nav>
			<a href="">All Jobs</a> | 
            <a href="">Jobs By Category</a> | 
            <a href="">Jobs By Location</a> | 
            <a href="">Register</a> |
            <a href=""></a>
            
				</nav>
            </div>-->
            
            
    
    
		<header class="header">
        	
            <div class="now">
            <a href="#">
            <?php


         
 		
        $out_em= $_SESSION["employer"];
        
	  if($_SESSION["employer"] != null)   
         echo '<a href="index.php?logout='.$out_em.'" class="logout">'.'Logout'.'</a>';
          
     
		 
                 ?>
       

            
            </a>
            </div>
			
			<div class="logo-mobile"><a href="index.php"><img src="img/icon-logomark.png" alt="logo"/></a></div>
			<div class="logo"><a href="index.php"><img src="img/logo.png" alt="logo"/></a></div>
            
          
          
          

			<nav class="men">
            
			</nav><!-- end nav -->
		
		</header>
				
		<div id="viewport">

							
			
			
			<section class="hero set-background" data-background="img/bg-contacts2.jpg">








				<div class="hero-parallax">

					<div class="hero-text">

						<h1>Job <span>Posted</span></h1>
                        <br /><br />
                        <a href="index.php"><input type="button" value="Click&#13;&#10;Here" style="width: 75px; height: 75px;" class="formsbtn"></a><br /><br /><br /><br />
                        
                        


					</div><!-- end .hero-text -->

					<div class="arrow"><a href="javascript:PS.scrollTo('.philosophy');"><img src="img/icon-arrow.png" alt="down" class="svg-raw"/></a></div>

				</div><!-- end .hero-parallax -->

				<div class="header-waypoint"></div>

				<div class="angle"></div>

			</section><!-- end .hero -->

			

									
				



			




			

		</div><!-- end #viewport -->


		<footer>

			<div class="logo"><a href="index.php"><img src="img/logo.png" alt="logo"/></a></div>

			<p>
				Copyright © Grab Job, Inc. All Rights Reserved.<br/>
				<a href="mailto:www.grabjob.in">www.grabjob.in</a>
			</p>

			<p>
				<a href="https://www.facebook.com/pocketsquaredesignLLC" target="_blank" class="social"><img src="img/icon-fb.png" alt="icon"/></a>
			</p>

		</footer><!-- end footer -->

		<!-- Include Scripts -->
		<script src="js/ps.Parallax.js"></script>
		<script src="js/ps.News.js"></script>
		<script src="assets/js/ps.Modal.js"></script>
		<script src="js/ps.CaseStudy.js"></script>
		<script src="js/ps.js"></script>

	</body>
<?php

$con=mysql_connect("localhost","root","root");

if(!$con)
	die(mysql_error());

if(!mysql_select_db("jobs",$con))
	die("No Database Selected");
	
	$employer_email=$_SESSION['employer'];
	$findquery=mysql_query("SELECT idemployer FROM `employer` WHERE email='".$employer_email."';");
	$findqueryrow=mysql_fetch_array($findquery);
	$company_id=$findqueryrow["idemployer"];
	
	
	$result=mysql_query("SELECT max(idjob) FROM jobs.job;");
	$row=mysql_fetch_array($result);
	$a=$row['max(idjob)'];
	if($a==null)
		$a=0;
	$a++;

$ttl=$_POST["title"];
$des=$_POST["description"];
$exp=$_POST["experience"];
$min=$_POST["minsalary"];
$max=$_POST["maxsalary"];
$vac=$_POST["vaccancies"];
$loc=$_POST["location"];
$ind=$_POST["industry"];
$rol=$_POST["role"];
$qua=$_POST["qualification"];
$frm=$_POST["from"];
$xpr=$_POST["expiry"];
$key=$_POST["keyword"];

/*$key1=$_POST["keyword1"];
$key2=$_POST["keyword2"];
$key3=$_POST["keyword3"];
$key4=$_POST["keyword4"];
$key5=$_POST["keyword5"];

$result=null;
$row=null;
$result=mysql_query("SELECT * FROM jobs.keyword where keyword='".$key1."';");
$row=mysql_fetch_array($result);

if($row==null)
{
$result = mysql_query("SELECT max(idkeyword) FROM jobs.keyword;");
        $row = mysql_fetch_array($result);
        $a = $row['max(idkeyword)'];
        if ($a == null) {
            $a = 0;
        }
        $a++;
        
        $qu="INSERT INTO `jobs`.`keyword` (`idkeyword`, `keyword`) VALUES (".$a.", '".$key1."');";

        $id = $a;
        
	if(!mysql_query($qu))
		die ("Not Inserted ".mysql_error());
}
else {
	$id = $row['idkeyword'];
	
		
}*/

$comma = ",";
$q=mysql_query("INSERT INTO `jobs`.`job` (`idjob`, `idemployer`, `title`, `description`, `experience`, `minsalary`, `maxsalary`, `vacancies`, `location`, `industrytype`, `role`, `qualification`, `fromdate`, `expirydate`, `keyword`, `applied` ) VALUES (".$a.", '".$company_id."', '".$ttl."', '".$des."', '".$exp."', '".$min."', '".$max."', '".$vac."', '".$loc."', '".$ind."', '".$rol."', '".$qua."', '".$frm."', '".$xpr."', '".$key."', '".$comma."');");

	if($q)
        {
		/*//header('Location: http://localhost/job_new/message_insert.php');
                $refresh = "http://localhost/job_new/messages_insert.php?idjob=".$a;
                echo "<meta http-equiv='refresh' content='0;URL=".$refresh."' />";*/
            
            
            $id_job = $a;


$result_keyword = mysql_query("SELECT keyword FROM jobs.job WHERE idjob='".$id_job."';");
$row_keyword = mysql_fetch_array($result_keyword);
$keyword_job = $row_keyword["keyword"];
$array_keyword_job = explode(",",$keyword_job);
array_map('trim', $array_keyword_job);
for($i=0;$i<count($array_keyword_job);$i++)
{
   $i_th_value = $array_keyword_job[$i];
   
   $result_match_keyword = mysql_query("SELECT iduser,email,mail FROM jobs.employee WHERE key_skills REGEXP '[[:<:]]".$i_th_value."[[:>:]]';");
   
   while($row_match_keyword = mysql_fetch_array($result_match_keyword))
   {
       
       $iduser_matched = $row_match_keyword["iduser"];
       
       //echo $iduser_matched."hi<br />";
       //$result_allready_messages = mysql_query("SELECT idmessage FROM jobs.messages_posted_employee WHERE iduser='".$iduser_matched."';");
       //$row_allready_messages = mysql_fetch_array($result_allready_messages);
       //if($row_allready_messages != null)
       //{
           
           $id_message = date('Y-m-d H:i:s');
           //$id_message++;
           $message = "Click Here To View Your Matching Job";
           //echo $message;
           $insert = "INSERT INTO jobs.messages_posted_employee (iduser,idmessage,message,idjob) VALUES ('".$iduser_matched."','".$id_message."','".$message."','".$id_job."');";
           mysql_query($insert);
           
           $result_notif_number = mysql_query("SELECT no FROM jobs.posted_notification_employee WHERE iduser='".$iduser_matched."';");
           $row_notif_number = mysql_fetch_array($result_notif_number);
           $no = $row_notif_number["no"];
           $no++;
           mysql_query("UPDATE jobs.posted_notification_employee SET no=".$no.",opened='no',idjob='".$id_job."' WHERE iduser='".$iduser_matched."';");
           
           $message = '
                    <html>
                    <head>
                      <title>Activation Email</title>
                    </head>
                    <body>
                     One New Job For You<br />
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
$mail->Subject = "New Job For You | Grabjob";
$mail->Body = $message;
$mail->AddAddress($row_match_keyword["mail"]);
if(!$mail->Send())
{
    echo "Mailer Error." . $mail->ErrorInfo;
}
           
       /*}
       else
       {
        $idmessage = 1;
        $message = "<a href='display.php?idjob=".$id_job."'>Click Here To View Your Matching Job</a>";
        $insert = "INSERT INTO jobs.messages_posted_employee (iduser,idmessage,message) VALUES('".$iduser_matched."',".$idmessage.",'".$message."');";
           if(mysql_query($insert))
           {
               echo "inserted<br />";
               
           }
           else
           {
               echo "not inserted <br />".mysql_error();
           }*/
       //}
   }
}
        }
        else
        {
            die ("Not Inserted ".mysql_error());
        }
	
	mysql_close($con);
?>

<!-- Mirrored from pocketsquaredesign.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jan 2015 19:10:49 GMT -->
</html>