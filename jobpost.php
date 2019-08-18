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

function validate_form(thisform)
{
    with(thisform)
    {
        if(validate_required(title,"Fill The Title Field")==false)
        {
            title.focus();
            return false;
        }
    }
}

function validate_required(field,message)
{
    with(field)
    {
        if(value==null||value="")
        {
            alert(message);
            return false;
        }
        else
            return true;
    }
}

   function getQueryVariable()
   {
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == "posted")
               {var up = pair[1];
                   //document.write(up);
               
               if(up == 'no')
               {
                   alert("Job Not Posted, Try Again");
               }
               else
               {
                   alert("Your Job Has Been Posted");
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
            
          <div class="navbar-up">
		    
		    
   		  </div>
          
          

			<nav class="men">
            
			</nav><!-- end nav -->
		
		</header>
				
		<div id="viewport">

							
			
			
			<section class="hero set-background" data-background="img/bg-contacts2.jpg">








				<div class="hero-parallax">

					<div class="hero-text">

						<?php
                                            
                                            $con=mysql_connect("localhost","root","root");

                                            if(!$con)
                                               	die(mysql_error());

                                            if(!mysql_select_db("jobs",$con))
                                            	die("No Database Selected");
                                            
                                            $rows = mysql_fetch_array(mysql_query("SELECT photo,company_name FROM jobs.employer WHERE email='".$_SESSION["employer"]."';"));
                                            $photo = $rows["photo"];
                                            $comp_name = $rows["company_name"];
                                            
                                            if($photo != null)
                                            {
                                                
                                                
                                               echo "<img src='photo/".$photo."'>"; 
                                               
                                               
                                            }
                                            echo "<h1><span>POST A JOB</span></h1>";
                                            
                                            
                                            
                                            
                                            
                                            
                                            ?>
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

							<h2>Post A Job <span class="line"><span></span></span></h2>

							<div class="column-1">
                        
                        	<form name="jobpost" class="jobpost" action="post.php" method="post" onsubmit="return validate_form(this)">

                                    <table>

<tr><td><label>Job Title or Designation</label></td><td><input type="text" name="title" class="formstxt"></td></tr>
<tr><td><label>Job Description</label></td><td><textarea name="description" class="formstxt" style="height:80px;"></textarea></td></tr>
<tr><td><label>Keywords</label></td><td><input type="text" name="keyword" class="formstxt"></td></tr>
					   
<tr><td><label>Work Experience</label></td><td><input type="text" name="experience" class="formstxt"></td></tr>
<tr><td><label>Annual CTC</label></td><td><input type="text" placeholder="From" name="minsalary" class="formstxt"></td><td><input type="text" placeholder="To" name="maxsalary" class="formstxt"></td></tr>
<tr><td><label>No.of Vaccancies</label></td><td><input type="text" name="vaccancies" class="formstxt"></td></tr>
<tr><td<tr><td><label>Location</label></td><td><input type="text" name="location" class="formstxt"></td></tr>
<tr><td><label>Industry</label></td><td><select name="industry" class="formsslct">
  <option value="Accessories/Apparel/Fashion Design">Accessories/Apparel/Fashion Design</option>
  <option value="Accounting/Consulting/Taxation">Accounting/Consulting/Taxation</option>
  <option value="Advertising/Event Management/PR">Advertising/Event Management/PR</option>
  <option value="Agriculture/Diary Technology">Agriculture/Diary Technology</option>
  <option value="Airelines/Hotel/Hospitality/Travel/Tourism/Restaurants">Airelines/Hotel/Hospitality/Travel/Tourism/Restaurants</option>
  <option value="Animation / Gaming">Animation / Gaming</option>
  <option value="Architectural Services / Interior Designing">Architectural Services / Interior Designing</option>
  <option value="Auto Ancillary/Automobiles/Components">Auto Ancillary/Automobiles/Components</option>
  <option value="Banking/Financial Services/Stockbrocking/Securities">Banking/Financial Services/Stockbrocking/Securities</option>
  <option value="Biotechnology/Pharmaceutical/Clinical Research">Biotechnology/Pharmaceutical/Clinical Research</option>
  <option value="Brewery/Distillery">Brewery/Distillery</option>
  <option value="Cement/Construction/Engineering/Metals/Steel/Iron">Cement/Construction/Engineering/Metals/Steel/Iron</option>
  <option value="Ceramics/Sanitaryware">Ceramics/Sanitaryware</option>
  <option value="Chemicals/Petrochemicals/Plastics">Chemicals/Petrochemicals/Plastics</option>
  <option value="Computer Hardware/Networking">Computer Hardware/Networking</option>
  <option value="Consumer FMCG/Foods/Beverages">Consumer FMCG/Foods/Beverages</option>
  <option value="Consumer Goods - Durables">Consumer Goods - Durables</option>
  <option value="Courier/Freight/Transportation/Warehousing">Courier/Freight/Transportation/Warehousing</option>
  <option value="CRM/ It Enabled Services/BPO">CRM/ It Enabled Services/BPO</option>
  <option value="Education/Training/Teaching">Education/Training/Teaching</option>
  <option value="Electricals/Switchgears">Electricals/Switchgears</option>
  <option value="Employment Firms/Recruitement Services Firms">Employment Firms/Recruitement Services Firms</option>
  <option value="Entertainment/Media/Publishing/Dotcom">Entertainment/Media/Publishing/Dotcom</option>
  <option value="Export Houses/Textiles/Merchandise">Export Houses/Textiles/Merchandise</option>
  <option value="Facility Management">Facility Management</option>
  <option value="Fertilizers/Pesticides">Fertilizers/Pesticides</option>
  <option value="Food Processing">Food Processing</option>
  <option value="Gems and Jewellery">Gems and Jewellery</option>
  <option value="Glass">Glass</option>
  <option value="Government/Defence">Government/Defence</option>
  <option value="Healthcare/Medicine">Healthcare/Medicine</option>
  <option value="Heat Ventilation/Air Conditioning">Heat Ventilation/Air Conditioning</option>
  <option value="Insurance">Insurance</option>
  <option value="KPO/Research/Analytics">KPO/Research/Analytics</option>
  <option value="Law/Legal Firms">Law/Legal Firms</option>
  <option value="Machinery/Equipment Manufacturing/Industrial Products">Machinery/Equipment Manufacturing/Industrial Products</option>
  <option value="Mining">Mining</option>
  <option value="NGO/Social Services">NGO/Social Services</option>
  <option value="Office Automation">Office Automation</option>
  <option value="Others/Engg. Services/Service Providers">Others/Engg. Services/Service Providers</option>
  <option value="Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy">Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy</option>
  <option value="Printing/Packaging">Printing/Packaging</option>
  <option value="Publishing">Publishing</option>
  <option value="Real Estate">Real Estate</option>
  <option value="Retailing">Retailing</option>
  <option value="Security/Law Enforcement">Security/Law Enforcement</option>
  <option value="Shipping/Marine">Shipping/Marine</option>
  <option value="Software Services">Software Services</option>
  <option value="Steel">Steel</option>
  <option value="Strategy/Management Consulting Firms">Strategy/Management Consulting Firms</option>
  <option value="Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-Conductor">Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-Conductor</option>
  <option value="Telecom/ISP">Telecom/ISP</option>
  <option value="Tyres">Tyres</option>
  <option value="Water Treatment/Waste Management">Water Treatment/Waste Management</option>
  <option value="Wellness/Fitness/Sports">Wellness/Fitness/Sports</option>
  </select></td></tr>
<tr><td><label>Job Role</label></td><td><input type="text" name="role" class="formstxt"></td></tr>
<tr><td><label>Qualification</label></td><td><input type="text" name="qualification" class="formstxt"></td></tr>
<tr><td><label>Date </label></td><td><label>From</label><input type="date" name="from" class="formstxt"></td><td><label>To</label><input type="date" name="expiry" class="formstxt"></td></tr>


<tr><td></td><td><input type="submit" value="Post" class="formsbtn"></td><td></td></tr>
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