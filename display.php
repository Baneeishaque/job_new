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
               if(pair[0] == "expired")
               {var ex = pair[1];
                   //document.write(up);
               
               if(ex == 'yes')
               {
                   alert("Requested Job Expired");
               }
               
            
            }
       }
       return;
   }
                    function alerts()
                    {
                        alert("Login To Apply A Job");
                    }
                    
                    function already()
                    {
                        alert("Already Applied");
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

$con=mysql_connect("localhost","root","root");

if(!$con)
	die(mysql_error());

if(!mysql_select_db("jobs",$con))
	die("No Database Selected");

         
 		
        $out_em= $_SESSION["login_user"];
        
	  if($_SESSION["login_user"] != null)   
         echo '<a href="index.php?logout='.$out_em.'" class="logout">'.'Logout'.'</a>';
          
     mysql_close();
		 
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

							
                        
                        	<?php
                                
                                    $con=mysql_connect("localhost","root","root");

                                    if(!$con)
                                	die(mysql_error());

                                    if(!mysql_select_db("jobs",$con))
                                	die("No Database Selected");
                                    
                                    $company_name=$_GET["company"];
                                    $category=$_GET["category"];
                                    $state=$_GET["state"];
                                    
                                    
                                    
                                    if($company_name != null)
                                    {
                                    echo "<h2 style='text-transform: uppercase'>".$company_name." <span class='line'><span></span></span></h2>

							<div class='column-1'>";
                                    
                                    $result=mysql_query("SELECT idemployer,email,company_name FROM jobs.employer WHERE company_name='".$company_name."';");
                                    while($row=mysql_fetch_array($result))
                                    {
                                        $employer_id=$row["idemployer"];
                                        $email = $row["email"];
                                        
                                    $result2=mysql_query("SELECT * FROM jobs.job WHERE idemployer='".$employer_id."' ORDER BY idjob DESC;");
                                    while($row2=mysql_fetch_array($result2))
                                    {
                                    if($row2["expirydate"] > date("Y-m-d"))
                                    {
                                    echo "<h3><strong>".$row2['title']."</strong></h3>";
                                    echo "<!--<strong>Employer</strong> &nbsp : &nbsp--> <h3><small>".$company_name."</small></h3>";
                                    echo "<br /><strong>Job Description</strong><br />";
                                    echo $row2['description']."<br />";
                                    echo "<strong>Experience Required &nbsp : &nbsp </strong>".$row2['experience'];
                                    echo "<br /><strong>Minimum Salary &nbsp : &nbsp </strong>".$row2['minsalary'];
                                    echo "<br /><strong>Maximum Salary &nbsp : &nbsp </strong>".$row2['maxsalary'];
                                    echo "<br /><strong>Vacancies &nbsp : &nbsp </strong>".$row2['vacancies'];
                                    echo "<br /><strong>Role &nbsp : &nbsp </strong>".$row2['role'];
                                    echo "<br /><strong>Qualification Required &nbsp : &nbsp </strong>".$row2['qualification'];
                                    echo "<br /><strong>Available From &nbsp : &nbsp </strong>".$row2['fromdate']."&nbsp<strong>Till &nbsp : &nbsp </strong>".$row2['expirydate'];
                                    echo "<br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                    
                                    if($_SESSION['login_user'] == null)
                                    {
                                    echo "<input type='button' class='formsbtn' value='Apply' onclick='alerts();'>";
                                    echo "<hr>";
                                    }
                                    else
                                    {
                                    $job_id = $row2["idjob"];
                                    $user_id_row = mysql_fetch_array(mysql_query("SELECT iduser FROM jobs.employee WHERE email='".$_SESSION["login_user"]."' AND jobs_applied REGEXP ',[[:<:]]".$job_id."[[:>:]],';"));
                                    $user_id = $user_id_row["iduser"];
                                    if($user_id == null)
                                    {
                                    echo "<a href='apply.php?job_id=".$row2["idjob"]."&company=".$company_name."'><input type='button' class='formsbtn' value='Apply'></a>&nbsp&nbsp";
                                    }
                                    else
                                    {
                                        echo "<input type='button' class='formsbtn' value='Apply' style='color:#757975;' onclick='already();'>";
                                    }
                                    echo "<a href='company_profile.php?company=".$email."'><input type='button' class='formsbtn' value='Profile'></a>";
                                    echo "<hr>";
                                    
                                    }
                                    }
                                    }
                                    }
                                    }
                                    
                                    elseif ($category != null)
                                    {
                                        echo "<h2 style='text-transform: uppercase'>Jobs<span class='line'><span></span></span></h2>

							<div class='column-1'>";
                                        
                                    $result = mysql_query("SELECT idemployer,email,company_name FROM jobs.employer WHERE industry_type='".$category."';");
                                    while($row = mysql_fetch_array($result))
                                    {
                                    $employer_id = $row["idemployer"];
                                    $email = $row["email"];
                                    $company_name = $row["company_name"];
                                    
                                    
                                    $result2=mysql_query("SELECT * FROM jobs.job WHERE idemployer='".$employer_id."' ORDER BY idjob DESC;");
                                    while($row2=mysql_fetch_array($result2))
                                    {
                                    if($row2["expirydate"] > date("Y-m-d"))
                                    {
                                    
                                    echo "<h3><strong>".$row2['title']."</strong></h3>";
                                    echo "<!--<strong>Employer</strong> &nbsp : &nbsp--> <h3><small>".$company_name."</small></h3>";
                                    echo "<br /><strong>Category &nbsp : &nbsp </strong>".$category."<br />";
                                    echo "<br /><strong>Job Description</strong><br />";
                                    echo $row2['description']."<br />";
                                    echo "<strong>Experience Required &nbsp : &nbsp </strong>".$row2['experience'];
                                    echo "<br /><strong>Minimum Salary &nbsp : &nbsp </strong>".$row2['minsalary'];
                                    echo "<br /><strong>Maximum Salary &nbsp : &nbsp </strong>".$row2['maxsalary'];
                                    echo "<br /><strong>Vacancies &nbsp : &nbsp </strong>".$row2['vacancies'];
                                    echo "<br /><strong>Role &nbsp : &nbsp </strong>".$row2['role'];
                                    echo "<br /><strong>Qualification Required &nbsp : &nbsp </strong>".$row2['qualification'];
                                    echo "<br /><strong>Available From &nbsp : &nbsp </strong>".$row2['fromdate']."&nbsp<strong>Till &nbsp : &nbsp </strong>".$row2['expirydate'];
                                    echo "<br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                    
                                    if($_SESSION['login_user'] == null)
                                    {
                                    echo "<input type='button' class='formsbtn' value='Apply' onclick='alerts();'>";
                                    echo "<hr>";
                                    }
                                    else
                                    {
                                    $job_id = $row2["idjob"];
                                    $user_id_row = mysql_fetch_array(mysql_query("SELECT iduser FROM jobs.employee WHERE email='".$_SESSION["login_user"]."' AND jobs_applied REGEXP ',[[:<:]]".$job_id."[[:>:]],';"));
                                    $user_id = $user_id_row["iduser"];
                                    if($user_id == null)
                                    {
                                    echo "<a href='apply.php?job_id=".$row2["idjob"]."&category=".$category."'><input type='button' class='formsbtn' value='Apply'></a>&nbsp&nbsp";
                                    }
                                    else
                                    {
                                    echo "<input type='button' class='formsbtn' value='Apply' style='color:#757975;' onclick='already();'>";
                                    }
                                    echo "<a href='company_profile.php?company=".$email."'><input type='button' class='formsbtn' value='Profile'></a>";
                                    echo "<hr>";
                                    
                                    }
                                    }
                                    }
                                    }
                                    }
                                    elseif ($state != null)
                                    {
                                        echo "<h2 style='text-transform: uppercase'>Jobs<span class='line'><span></span></span></h2>

							<div class='column-1'>";
                                        
                                    $result = mysql_query("SELECT idemployer,email,company_name FROM jobs.employer WHERE state='".$state."' ORDER BY idjob DESC;");
                                    while($row = mysql_fetch_array($result))
                                    {
                                    $employer_id = $row["idemployer"];
                                    $email = $row["email"];
                                    $company_name = $row["company_name"];
                                    
                                    
                                    $result2=mysql_query("SELECT * FROM jobs.job WHERE idemployer='".$employer_id."';");
                                    while($row2=mysql_fetch_array($result2))
                                    {
                                    if($row2["expirydate"] > date("Y-m-d"))
                                    {
                                    
                                    echo "<h3><strong>".$row2['title']."</strong></h3>";
                                    echo "<!--<strong>Employer</strong> &nbsp : &nbsp--> <h3><small>".$company_name."</small></h3>";
                                    echo "<br /><strong>Job Description</strong><br />";
                                    echo $row2['description']."<br />";
                                    echo "<strong>Experience Required &nbsp : &nbsp </strong>".$row2['experience'];
                                    echo "<br /><strong>Minimum Salary &nbsp : &nbsp </strong>".$row2['minsalary'];
                                    echo "<br /><strong>Maximum Salary &nbsp : &nbsp </strong>".$row2['maxsalary'];
                                    echo "<br /><strong>Vacancies &nbsp : &nbsp </strong>".$row2['vacancies'];
                                    echo "<br /><strong>Role &nbsp : &nbsp </strong>".$row2['role'];
                                    echo "<br /><strong>Qualification Required &nbsp : &nbsp </strong>".$row2['qualification'];
                                    echo "<br /><strong>Available From &nbsp : &nbsp </strong>".$row2['fromdate']."&nbsp<strong>Till &nbsp : &nbsp </strong>".$row2['expirydate'];
                                    echo "<br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                    
                                    if($_SESSION['login_user'] == null)
                                    {
                                    echo "<input type='button' class='formsbtn' value='Apply' onclick='alerts();'>";
                                    echo "<hr>";
                                    }
                                    else
                                    {
                                    $job_id = $row2["idjob"];
                                    $user_id_row = mysql_fetch_array(mysql_query("SELECT iduser FROM jobs.employee WHERE email='".$_SESSION["login_user"]."' AND jobs_applied REGEXP ',[[:<:]]".$job_id."[[:>:]],';"));
                                    $user_id = $user_id_row["iduser"];
                                    if($user_id == null)
                                    {
                                    echo "<a href='apply.php?job_id=".$row2["idjob"]."&state=".$state."'><input type='button' class='formsbtn' value='Apply'></a>&nbsp&nbsp";
                                    }
                                    else
                                    {
                                     echo "<input type='button' class='formsbtn' value='Apply' style='color:#757975;' onclick='already();'>";
                                    }
                                    echo "<a href='company_profile.php?company=".$email."'><input type='button' class='formsbtn' value='Profile'></a>";
                                    echo "<hr>";
                                    
                                    }
                                    } 
                                    }
                                    }
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