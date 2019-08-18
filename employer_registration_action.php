<!DOCTYPE html>
<html>
<?php error_reporting(0); session_start(); 


if(!(mysql_connect("localhost", "root", "root")))
        {
                die("connection not establish");
        }
        if(!(mysql_select_db("jobs")))
        {
            die("database not selected");
        }

        $rows = mysql_fetch_array(mysql_query("SELECT `email` FROM `jobs`.`employer` WHERE email='".md5($_POST["email"])."';"));
        $email_exists = $rows["email"];
        
        if($email_exists == md5($_POST["email"]))
        {
            $refresh1="http://localhost/job_new/employer_registration.php?email=exists";
            echo "<meta http-equiv='refresh' content='0;URL=".$refresh1."' />";
        }

?>
	

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

						<h1>Grab <span>Job</span></h1>
                        <br /><br /><br /><br /><br /><br />
                        
                        


					</div><!-- end .hero-text -->

					<div class="arrow"><a href="javascript:PS.scrollTo('.philosophy');"><img src="img/icon-arrow.png" alt="down" class="svg-raw"/></a></div>

				</div><!-- end .hero-parallax -->

				<div class="header-waypoint"></div>

				<div class="angle"></div>

			</section><!-- end .hero -->

			<section class="philosophy">

				<div class="container">

					<div class="row">

						<div class="column-2">

							<h2>Employer Registration <span class="line"><span></span></span></h2>

							<div class="column-1">
                        
                        	<?php
        
        
        if(!(mysql_connect("localhost", "root", "root")))
        {
                die("connection not establish");
        }
        if(!(mysql_select_db("jobs")))
        {
            die("database not selected");
        }
        

        $result = mysql_query("SELECT max(idemployer) FROM jobs.employer;");
        $row = mysql_fetch_array($result);
        $a = $row['max(idemployer)'];
        if ($a == null) {
            $a = 0;
        }
        $a++;

        $uploaddir = 'photo/';
        $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
        
        
        
        $str="";
        for($i=4;$i>0;$i--)
        {
            $str=$str.chr(rand(97, 122));
        }

        $otp=$str;
        

        
        $rows = mysql_fetch_array(mysql_query("SELECT `email` FROM `jobs`.`employer` WHERE email='".md5($_POST["email"])."';"));
        $refresh1="http://localhost/job_new/employer_registration.php";
        $refresh2="http://localhost/job_new/employer_verification.php?email=".md5($_POST["email"]);
        $email_exists = $rows["email"];
        
        if($email_exists == md5($_POST["email"]))
        {
            $refresh1="http://localhost/job_new/employer_registration.php?email=exists";
            echo "<meta http-equiv='refresh' content='0;URL=".$refresh1."' />";
        }

        elseif($email_exists != md5($_POST["email"]))
        {
            $comma = ",";
            $q = mysql_query("INSERT INTO `jobs`.`employer` (`idemployer`,`email`,`password`, `company_name`, `company_type`, `industry_type`, `address`, `country`, `state`, `city`, `pincode`, `contact_number`, `contact_person`, `current_employer`, `designation`, `photo`, `role_in_hiring`, `otp`, `status`, `following`, `mail`) VALUES (" . $a . ",'" . md5($_POST["email"]) . "', '" . md5($_POST["password"]) . "', '" . $_POST["company"]."','".$_POST["company_type"]. "', '" .   $_POST["industry_type"]. "', '" .   $_POST["address"]. "', '" . $_POST["country"]. "', '" . $_POST["state"]. "', '" . $_POST["city"]. "', '" .  $_POST["pincode"]. "', '" . $_POST["contact_number"] . "', '" . $_POST["contact_person"] . "', '".$_POST["current_employer"]."', '".$_POST["designation"]."', '".$_FILES['photo']['name']."', '".$_POST["role"]."', '".$otp."', 'unverified', '".$comma."', '" . $_POST["email"] . "');");
            if (!$q) {
                echo "ERROR OCCURED <br /> Wait For 5 Seconds Or Click <a href='employer_registration.php'>Here</a>" . mysql_error();
                echo "<meta http-equiv='refresh' content='5;URL=".$refresh1."' />";
                }
            else
                {
                

                /************************INITIALISING SOME ROWS****************************/
                                
                               /****resume****/
        $result_resume = mysql_query("SELECT max(id_resume_granted_notification) FROM jobs.resume_granted_notification;");
        $row_resume= mysql_fetch_array($result_resume);
        $a_resume = $row_resume['max(id_resume_granted_notification)'];
        if ($a_resume == null) {
            $a_resume = 0;
        }
        $a_resume++;
                                /*************/
                               
                                /*************/
                mysql_query("INSERT INTO jobs.resume_granted_notification(id_resume_granted_notification,idemployer,no,opened) VALUES ('".$a_resume."','".$a."',0,'yes');");
                
                
                /**********************************************************************/
                
                
                
                echo "Your Account Has Been Created <br /> Wait For Five Seconds Or Click <a href='employer_login.php'>Here</a>";
                echo "<meta http-equiv='refresh' content='5;URL=".$refresh2."' />";
                }
        }
        else
        {
            echo "This Email Allready Exists . <br /> Wait For 5 Seconds Or Click <a href='employer_registration.php'>Here</a>";
            echo "<meta http-equiv='refresh' content='5;URL=".$refresh1."' />";
        }
        
        
                $message = '
                    <html>
                    <head>
                      <title>Activation Email</title>
                    </head>
                    <body>
                     
                      <a href="http://localhost/job_new/employer_verification_action.php?email='.md5($_POST['email']).' & otp='.$otp.'">Activate Your Account</a>
                    Or Type <strong>'.$otp.'</strong>
                      
                      <a href="http://localhost/job_new/employer_verification.php?email='.md5($_POST['email']).'">here</a>

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
$mail->Subject = "Employer Verification | Grabjob";
$mail->Body = $message;
$mail->AddAddress($_POST['email']);
if(!$mail->Send())
{
    echo "Mailer Error." . $mail->ErrorInfo;
}

        

       
        ?>
                            
                        </div>

						</div><!-- end .column-2 -->

						<div class="column-2">

							<div class="principles">

								<div class="xline"></div>
								<div class="xline xline2"></div>

								<div class="logo"><img src="img/icon-logomark.png" alt="logo"/></div>

								<div class="block blue">
									<span>No. 1 Recruiters In India<br/> With Understanding</span>
								</div><!-- end .blue -->

								<div class="block black">
									<span>The Way To Your Career<br/> Starts Here</span>
								</div><!-- end .blue -->

							</div><!-- end .principles -->

						</div><!-- end .column-2 -->

					</div><!-- end .row -->

				</div><!-- end .container -->

			</section><!-- end .philosophy -->

									
				



			




			<section class="partners">

				<div class="container">

					<div class="row">

						

					</div><!-- end .row -->

				</div><!-- end .container -->

				<div class="angle"></div>


			</section><!-- end .partners -->

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


<!-- Mirrored from pocketsquaredesign.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jan 2015 19:10:49 GMT -->
</html>