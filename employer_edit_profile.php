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
                
                <script type="text/javascript">
                
               
    function getQueryVariable()
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == "updated")
               {var up = pair[1];
                   //document.write(up);
               
               if(up == 'no')
               {
                   alert("Not Updated");
               }
               else
               {
                   alert("Updated");
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
                        
                        	 <form enctype="multipart/form-data" name="Employer_registration"  action="employer_edit_action.php" method="post">
                                     <table border="0">
            <?php
            
$con=mysql_connect("localhost","root","root");
if(!$con)
    die(mysql_error());

if(!mysql_select_db("jobs",$con))
    die("No Database Selected");

$row = mysql_fetch_array(mysql_query("SELECT * FROM jobs.employer WHERE email='".$_SESSION["employer"]."';"));
            
            
            echo "<tr><td><label>Company Name</label></td><td><input type='text' name='company' value='".$row["company_name"]."' class='formstxt'/></td></tr>
            
            
            <tr><td><label>Address</label></td><td><textarea name='address' class='formstxt' style='height:80px;'>".$row["address"]."</textarea></td></tr>
            <tr><td><label>Country</label></td><td><input type='text' name='country' value='".$row["country"]."' class='formstxt'/></td></tr>
            <tr><td><label>State/Province</label></td><td><input type='text' name='state' value='".$row["state"]."' class='formstxt'/></td></tr>
            <tr><td><label>City</label></td><td><input type='text' name='city' value='".$row["city"]."' class='formstxt'/></td></tr>
            <tr><td><label>Pin</label></td><td><input type='text' size='6' name='pincode' value='".$row["pincode"]."' class='formstxt'/></td></tr>
            <tr><td><label>Contact Number</label></td><td><input type='tel' name='contact_number' value='".$row["contact_number"]."' class='formstxt'/></td></tr>
            <tr><td><label>Contact Person</label></td><td><input type='text' name='contact_person' value='".$row["contact_person"]."' class='formstxt'/></td></tr>

            <tr><td><label>Current Employer</label></td><td><input type='text' name='current_employer' value='".$row["current_employer"]."' class='formstxt'/></td></tr>       
<tr><td><label>Current Designation</label></td><td><input type='text' name='designation' value='".$row["designation"]."' class='formstxt'/></td></tr>
<tr><td>Upload Photo</td><td><input type='file' name='photo' accept='.jpg,.jpeg,.png'/></td></tr>

"
                             ?>        
            
<tr><td></td><td><input type="submit" value="Update" class="formsbtn"></td><td></td></tr>
            </table>

        </form>
                            
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