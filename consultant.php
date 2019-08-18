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
		<link rel="stylesheet" href="css/main-eplye-login.css" />

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
        
        <script type="text/javascript">
    
           /* function validateForm(){
            var email = document.login.em.value;
            var password = document.login.pwd.value;
			
			if ((email == null || email == "") || (password == null || password == ""))
					{
						if ((email == null || email == "") && (password == null || password == ""))
						{
							alert("Blank field are not accepted!");
                    
                    		return false;
						}
						
						else if((email == null || email == ""))
						{
							alert("Enter Your Email");
							return false;
						}
						else if((password == null || password == ""))
						{
							alert("Enter The Password");
							return false;
						}
						
                }
			
			}*/
			function verify(a)
    		{
            window.open("verification.php?email='"+a+"'","title"); 
      	    }
		</script>



        
        

	</head>
	
	<body>

		<div class="menu">

			<div class="col">

				<div class="menu-item">
  
					<a href="case-studies/index.php" class="animate-1">
						<span class="numtitle">01.</span>
						Edit
						<span class="subtitle">Account</span>
					</a>
				</div><!-- end .menu-item -->

			</div><!-- end .col -->

			<div class="col">

				<div class="menu-item">
					<a href="category/news/index.php" class="animate-2">
						<span class="numtitle">02.</span>
						Write
						<span class="subtitle">Resume</span>
					</a>
				</div><!-- end .menu-item -->

			</div><!-- end .col -->

			<div class="col">

				<div class="menu-item">
					<a href="contact/index.php" class="animate-3">
						<span class="numtitle">03.</span>
						Upload
						<span class="subtitle">Resume</span>
					</a>
				</div><!-- end .menu-item -->

			</div><!-- end .col -->
            

		</div><!-- end .menu -->
	
    
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

$con=mysql_connect("localhost","root","root");

if(!$con)
	die(mysql_error());

if(!mysql_select_db("jobs",$con))
	die("No Database Selected");
	
	if($_GET['session_check'])
		{
		$em=$_GET['session_check'];
		$ses_sql=mysql_query("SELECT password FROM `employer` WHERE email='".$em."' ");
		$row=mysql_fetch_array($ses_sql);
		$pwd = $row['password'];	
		}
	else
	{
	
$em=$_GET["email"];
$pass_sql=mysql_query("SELECT password FROM `employer` WHERE email='".$em."' ");
$row=mysql_fetch_array($pass_sql);
$pwd = $row['password'];

	}
//For Security Purpose
$em = stripslashes($em);
$pwd = stripslashes($pwd);
$em = mysql_real_escape_string($em);
$pwd = mysql_real_escape_string($pwd);

$result=null;
$row=null;
$result=mysql_query("SELECT * FROM jobs.employer where email='".$em."' and password='".$pwd."' ;");
$row=mysql_fetch_array($result);


if($row==null)
{

        
            die("wrong email or password");
       
}
else{

	$username=$row["email"];
	$_SESSION['employer']=$username;
        $st=$row["status"];
        if($st=="unverified")
        {
			
            echo "please verify";
            
            header('location:employer_verification.php?email='.$em.'');
            
            
            
        }
        
        
        
		 else {
         
 		$nam=$row["company_name"];
        $out_em=$row["email"];
	     echo $nam;
         echo '<a href="employer_login.php?logout='.$out_em.'" class="logout">'.'Logout'.'</a>';
		 }
	
}	
	
mysql_close($con);


?>

            
            </a>
            </div>
			
			<div class="logo-mobile"><a href="index.php"><img src="img/icon-logomark.png" alt="logo"/></a></div>
			<div class="logo"><a href="index.php"><img src="img/logo.png" alt="logo"/></a></div>
            
          <div class="navbar-up">
		    <a href="jobpost.php"><input type=button value="Post Job"></a>
		    <input type=button value="Following Members">
		    <input type=button value="View Consultants">
		    <input type=button value="Matching Profiles">
   		  </div>
          
          

			<nav class="men">
            
				<a href="javascript:PS.toggleMenu();"><span></span></a>
			</nav><!-- end nav -->
		
		</header>
				
		<div id="viewport">

							
			
			
			<section class="hero set-background" data-background="img/eplyr-reg.jpg">








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

							<h2>Welcome <span class="line"><span></span></span></h2>

							

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

						<div class="column-2 quad">

							<div class="quadrant">

								<div class="xline"></div>
								<div class="xline xline2"></div>

								<div class="logo">
									<div class="logo-inner">
										<img src="img/icon-logomark-white.svg" alt=""/>
									</div><!-- end .logo-inner -->
								</div>

								<div class="circle circle-top"><img src="img/partner-seagull.jpg" alt="partner"/></div>
								<div class="circle circle-left"><img src="img/partner-murray.jpg" alt="partner"/></div>
								<div class="circle circle-right"><a href="contact/index.php"><img src="img/icon-partner.svg" alt="partner"/></a></div>
								<div class="circle circle-bottom"><img src="img/partner-zuba.jpg" alt="partner"/></div>

							</div><!-- end .quadrant -->

						</div><!-- end .column-2 -->

						<div class="column-2 text">

							<!--<h2>Partners <span>Expanding Our Expertise</span>
								<span class="line"><span></span></span>
							</h2>

							<p>We are very fortunate to be collaborating with some of the most creative &amp; highly capable talent!  We believe in a lean business model with a breadth of skillsets available as we need them.</p>-->

						</div><!-- end .column-2 -->

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