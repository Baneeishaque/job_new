<!DOCTYPE html>
<html>

	<?php
	error_reporting(0);
	 session_start();
	 
	 if($_GET['logout'])
	 	{
			session_destroy();
		}
	else
		{
	 
	 $con=mysql_connect("localhost","root","root");

if(!$con)
	die(mysql_error());

if(!mysql_select_db("jobs",$con))
	die("No Database Selected");
	
     //   session_start();

$employer_check=$_SESSION['employer'];
$user_check=$_SESSION['login_user'];

if($user_check!="")
{
header('Location: login_action.php?session_check='.$user_check.'');
}
else if($employer_check!="")
{
header('Location: employer_login_action.php?session_check='.$employer_check.'');
}
else{
	mysql_close($con);
}
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
        
        <script type="text/javascript">
    
            function validateForm(){
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
			
			}
                        
                        
function getQueryVariable()
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == "wrong")
               {var up = pair[1];
                   //document.write(up);
               
               if(up == 'yes')
               {
                   alert("Wrong Email Or Password");
               }
               
            
            }
       }
       return;
   }
		</script>

	</head>
	
        <body onload="return getQueryVariable();">

		
	
    
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
            
            </div>
			
			<div class="logo-mobile"><a href="index.php"><img src="img/icon-logomark.png" alt="logo"/></a></div>
			<div class="logo"><a href="index.php"><img src="img/logo.png" alt="logo"/></a></div>
            
          <!--<div class="navbar-up">
		    <input type=button value="Post Job">
		    <input type=button value="View Following">
		    <input type=button value="View Consultants">
		    <input type=button value="Matching Profiles">
   		  </div>-->
          
          

			<nav class="men">
			</nav><!-- end nav -->
		
		</header><!-- end header -->
        
        
        			
					 </div>		
				
		<div id="viewport">

							
			
			
			<section class="hero set-background" data-background="img/bg-contacts2.jpg">








				<div class="hero-parallax">

					<div class="hero-text">

						<h1>Grab <span>Job</span></h1>
                        <br /><br /><br />
                        <div class="employer_login">
      					<form name="login" id="log" action="employer_login_action.php" method="get" onsubmit="return validateForm();">
					        <input type="email" placeholder="email" name="em" class="formstxt">
					        <br />
					        <input type="password" placeholder="password" name="pwd" class="formstxt">
					        <br />
					        <input type="submit" value="Login" class="formsbtn">
					        <br />
					        <p>forgot <a href="#">password?</a><br /></p>
					        
                        </form>
                        </div>
                        <div class="column-1">
                        
                        	
                        


					</div><!-- end .hero-text -->

					

				</div><!-- end .hero-parallax -->

				<div class="header-waypoint"></div>

				

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


<!-- Mirrored from pocketsquaredesign.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jan 2015 19:10:49 GMT -->
</html>