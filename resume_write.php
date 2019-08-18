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
   
   function setVisibility(id, visibility) {
document.getElementById(id).style.display = visibility;
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


         
 		
        $out_em= $_SESSION["login_user"];
        
	  if($_SESSION["login_user"] != null)   
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

							<h2>Employee Registration <span class="line"><span></span></span></h2>

							<div class="column-1">
                        
                                                            <form enctype="multipart/form-data" name="f1"  action="resume_page.php" target="_blank" method="post">
                                                                
                                                                
                                                                <table>
                                                                    
                                                                    
                                                                    <tr><td>Full Name </td><td>:</td><td><input type="text" name="name" class="formstxt"></td></tr>
                                                                    <tr><td>Email </td><td>:</td><td><input type="email" name="email" class="formstxt"></td></tr>
                                                                    <tr><td>Phone </td><td>:</td><td><input type="text" name="phone" class="formstxt"></td></tr>
                                                                    <tr><td>Photo </td><td>:</td><td><input type="file" name="photo" accept=".jpg,.jpeg"></td></tr>
                                                                    <tr><td>Address </td><td>:</td><td><textarea name="address" class="formstxt" style="height:80px;"></textarea></td></tr>
																
																</table>
                                                                    <b class="resume_caption">
																	
                                                                        <hr>
                                                                    <input type=button value="Work Experience" onclick="setVisibility('wrk_exp1', 'inline');">
                                                                    <div id="wrk_exp1">
																	<br /><small>Leave As Blank If Not Needed.</small>
																	<table>
                                                                        <tr><td>Job Title </td><td>:</td><td><input type="text" name="job_title1" class="formstxt"></td></tr>
                                                                        <tr><td>Company Name </td><td>:</td><td><input type="text" name="comp_name1" class="formstxt"></td></tr>
                                                                        <tr><td>Start Date </td><td>:</td><td><input type="date" name="strt_dt1" class="formstxt"></td></tr>
                                                                        <tr><td>End Date </td><td>:</td><td><input type="date" name="end_dt1" class="formstxt"></td></tr>
                                                                        <tr><td>Other Informations </td><td>:</td><td><textarea name="other1" class="formstxt" style="height:80px;"></textarea></td></tr>
                                                                        <tr><td><input type=button value="More" onclick="setVisibility('wrk_exp2', 'inline');"></td></tr>
                                                                    </table>
																	</div>
                                                                    <div id="wrk_exp2"><br /><small>Leave As Blank If Not Needed.</small>
																	<table>
                                                                        <tr><td>Job Title </td><td>:</td><td> <input type="text" name="job_title2" class="formstxt"></td></tr>
                                                                        <tr><td>Company Name </td><td>:</td><td> <input type="text" name="comp_name2" class="formstxt"></td></tr>
                                                                        <tr><td>Start Date </td><td>:</td><td> <input type="date" name="strt_dt2" class="formstxt"></td></tr>
                                                                        <tr><td>End Date </td><td>:</td><td> <input type="date" name="end_dt2" class="formstxt"></td></tr>
                                                                        <tr><td>Other Informations </td><td>:</td><td> <textarea name="other2" class="formstxt" style="height:80px;"></textarea></td></tr>
                                                                        <tr><td><input type=button value="More" onclick="setVisibility('wrk_exp3', 'inline');"></td></tr>
																	</table>
                                                                    </div>
                                                                    <div id="wrk_exp3"><br /><small>Leave As Blank If Not Needed.</small>
                                                                        <table>
                                                                        <tr><td>Job Title</td><td>:</td><td><input type="text" name="job_title3" class="formstxt"></td></tr>
                                                                        <tr><td>Company Name</td><td>:</td><td><input type="text" name="comp_name3" class="formstxt"></td></tr>
                                                                        <tr><td>Start Date</td><td>:</td><td><input type="date" name="strt_dt3" class="formstxt"></td></tr>
                                                                        <tr><td>End Date</td><td>:</td><td><input type="date" name="end_dt3" class="formstxt"></td></tr>
                                                                        <tr><td>Other Informations</td><td>:</td><td><textarea name="other3" class="formstxt" style="height:80px;"></textarea></td></tr>
                                                                        <tr><td><input type=button value="More" onclick="setVisibility('wrk_exp4', 'inline');"></td></tr>
                                                                        </table>
                                                                    </div>
                                                                    <div id="wrk_exp4"><br /><small>Leave As Blank If Not Needed.</small>
                                                                        <table>
                                                                        <tr><td>Job Title</td><td>:</td><td><input type="text" name="job_title4" class="formstxt"></td></tr>
                                                                        <tr><td>Company Name</td><td>:</td><td><input type="text" name="comp_name4" class="formstxt"></td></tr>
                                                                        <tr><td>Start Date</td><td>:</td><td><input type="date" name="strt_dt4" class="formstxt"></td></tr>
                                                                        <tr><td>End Date</td><td>:</td><td><input type="date" name="end_dt4" class="formstxt"></td></tr>
                                                                        <tr><td>Other Informations</td><td>:</td><td><textarea name="other4" class="formstxt" style="height:80px;"></textarea></td></tr>
                                                                        <tr><td><input type=button value="More" onclick="setVisibility('wrk_exp5', 'inline');"></td></tr>
                                                                        </table>
                                                                    </div>
                                                                    <div id="wrk_exp5"><br /><small>Leave As Blank If Not Needed.</small>
                                                                        <table>
                                                                        <tr><td>Job Title</td><td>:</td><td><input type="text" name="job_title5" class="formstxt"></td></tr>
                                                                        <tr><td>Company Name</td><td>:</td><td><input type="text" name="comp_name5" class="formstxt"></td></tr>
                                                                        <tr><td>Start Date</td><td>:</td><td><input type="date" name="strt_dt5" class="formstxt"></td></tr>
                                                                        <tr><td>End Date</td><td>:</td><td><input type="date" name="end_dt5" class="formstxt"></td></tr>
                                                                        <tr><td>Other Informations</td><td>:</td><td><textarea name="other5" class="formstxt" style="height:80px;"></textarea></td></tr>
                                                                        </table>
                                                                    </div>
                                                                        <hr>
                                                                    <input type=button value="Qualification" onclick="setVisibility('qlfctn', 'inline');">
                                                                    <div id="qlfctn"><br /><small>Leave As Blank If Not Needed.</small>
                                                                        <table>
                                                                        <tr><td>Qualification</td><td>:</td><td><textarea name="qualification" class="formstxt" style="height:80px;"></textarea></td></tr>
                                                                        </table>
                                                                    </div>
                                                                        <hr>
                                                                    <input type=button value="Education" onclick="setVisibility('edu1', 'inline');">
                                                                    <div id="edu1"><br /><small>Leave As Blank If Not Needed.</small>
                                                                        <table>
                                                                        <tr><td>Course Name</td><td>:</td><td><input type="text" name="course1" class="formstxt"></td></tr>
                                                                        <tr><td>Institution Name</td><td>:</td><td><input type="text" name="institute1" class="formstxt"></td></tr>
                                                                        <tr><td>Start Date</td><td>:</td><td><input type="date" name="edu_strt_dt1" class="formstxt"></td></tr>
                                                                        <tr><td>End Date</td><td>:</td><td><input type="date" name="edu_end_dt1" class="formstxt"></td></tr>
                                                                        <tr><td>Other Informations</td><td>:</td><td><textarea name="edu_other1" class="formstxt" style="height:80px;"></textarea></td></tr>
                                                                        <tr><td><input type=button value="More" onclick="setVisibility('edu2', 'inline');"></td></tr>
                                                                        </table>
                                                                    </div>
                                                                    <div id="edu2"><br /><small>Leave As Blank If Not Needed.</small>
                                                                        <table>
                                                                        <tr><td>Course Name</td><td>:</td><td><input type="text" name="course2" class="formstxt"></td></tr>
                                                                        <tr><td>Institution Name</td><td>:</td><td><input type="text" name="institute2" class="formstxt"></td></tr>
                                                                        <tr><td>Start Date</td><td>:</td><td><input type="date" name="edu_strt_dt2" class="formstxt"></td></tr>
                                                                        <tr><td>End Date</td><td>:</td><td><input type="date" name="edu_end_dt2" class="formstxt"></td></tr>
                                                                        <tr><td>Other Informations</td><td>:</td><td><textarea name="edu_other2" class="formstxt" style="height:80px;"></textarea></td></tr>
                                                                        <tr><td><input type=button value="More" onclick="setVisibility('edu3', 'inline');"></td></tr>
                                                                        </table>
                                                                    </div>
                                                                    <div id="edu3"><br /><small>Leave As Blank If Not Needed.</small>
                                                                        <table>
                                                                        <tr><td>Course Name</td><td>:</td><td><input type="text" name="course3" class="formstxt"></td></tr>
                                                                        <tr><td>Institution Name</td><td>:</td><td><input type="text" name="institute3" class="formstxt"></td></tr>
                                                                        <tr><td>Start Date</td><td>:</td><td><input type="date" name="edu_strt_dt3" class="formstxt"></td></tr>
                                                                        <tr><td>End Date</td><td>:</td><td><input type="date" name="edu_end_dt3" class="formstxt"></td></tr>
                                                                        <tr><td>Other Informations</td><td>:</td><td><textarea name="edu_other3" class="formstxt" style="height:80px;"></textarea></td></tr>
                                                                        <tr><td><input type=button value="More" onclick="setVisibility('edu4', 'inline');"></td></tr>
                                                                        </table>
                                                                    </div>
                                                                    <div id="edu4"><br /><small>Leave As Blank If Not Needed.</small>
                                                                        <table>
                                                                        <tr><td>Course Name</td><td>:</td><td><input type="text" name="course4" class="formstxt"></td></tr>
                                                                        <tr><td>Institution Name</td><td>:</td><td><input type="text" name="institute4" class="formstxt"></td></tr>
                                                                        <tr><td>Start Date</td><td>:</td><td><input type="date" name="edu_strt_dt4" class="formstxt"></td></tr>
                                                                        <tr><td>End Date</td><td>:</td><td><input type="date" name="edu_end_dt4" class="formstxt"></td></tr>
                                                                        <tr><td>Other Informations</td><td>:</td><td><textarea name="edu_other4" class="formstxt" style="height:80px;"></textarea></td></tr>
                                                                        <tr><td><input type=button value="More" onclick="setVisibility('edu5', 'inline');"></td></tr>
                                                                        </table>
                                                                    </div>
                                                                    <div id="edu5"><br /><small>Leave As Blank If Not Needed.</small>
                                                                        <table>
                                                                        <tr><td>Course Name</td><td>:</td><td><input type="text" name="course5" class="formstxt"></td></tr>
                                                                        <tr><td>Institution Name</td><td>:</td><td><input type="text" name="institute5" class="formstxt"></td></tr>
                                                                        <tr><td>Start Date</td><td>:</td><td><input type="date" name="edu_strt_dt5" class="formstxt"></td></tr>
                                                                        <tr><td>End Date</td><td>:</td><td><input type="date" name="edu_end_dt5" class="formstxt"></td></tr>
                                                                        <tr><td>Other Informations</td><td>:</td><td><textarea name="edu_other5" class="formstxt" style="height:80px;"></textarea></td></tr>
                                                                        </table>
                                                                    </div>
                                                                        <hr>
                                                                    <input type=button value="Interests" onclick="setVisibility('interests', 'inline');">
                                                                    <div id="interests"><br /><small>Leave As Blank If Not Needed.</small>
                                                                        <table>
                                                                            <tr><td>Interests</td><td>:</td><td><textarea name="interests" class="formstxt" style="height:80px;"></textarea></td></tr>
                                                                        </table>
                                                                    </div>
                                                                    </b>
                                                                    
                                                                    
                                                                
                                                                <input type="submit" value="Create&#13;&#10;Resume" class="formsbtn" style="height: 75px; width: 75px; position: absolute; left: 200px;">
                                                                
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