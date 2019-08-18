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
            
       

            
            </a>
            </div>
			
			<div class="logo-mobile"><a href="index.php"><img src="img/icon-logomark.png" alt="logo"/></a></div>
			<div class="logo"><a href="index.php"><img src="img/logo.png" alt="logo"/></a></div>
            
          
          
          

			<nav class="men">
            
				<a href="javascript:PS.toggleMenu();"><span></span></a>
			</nav><!-- end nav -->
		
		</header>
				
		<div id="viewport">

							
			
			
			<section class="hero set-background" data-background="img/bg-contacts2.jpg">








				<div class="hero-parallax">

					<div class="hero-text">

                                            <h1>Jobs&nbsp;<span>By Category</span></h1>
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

							<h2>Categories <span class="line"><span></span></span></h2>

							<div class="column-1">
                                                            
                                                            <?php
                                            
                                            $con=mysql_connect("localhost","root","root");

                                            if(!$con)
                                               	die(mysql_error());

                                            if(!mysql_select_db("jobs",$con))
                                            	die("No Database Selected");
                                            
                                            echo "<table> "
                                                    . "<tr><td><a href='display.php?category=Accessories/Apparel/Fashion Design'>Accessories/Apparel/Fashion Design</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Accounting/Consulting/Taxation'>Accounting/Consulting/Taxation</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Advertising/Event Management/PR'>Advertising/Event Management/PR</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Agriculture/Diary Technology'>Agriculture/Diary Technology</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Airelines/Hotel/Hospitality/Travel/Tourism/Restaurants'>Airelines/Hotel/Hospitality/Travel/Tourism/Restaurants</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Animation / Gaming'>Animation / Gaming</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Architectural Services / Interior Designing'>Architectural Services / Interior Designing</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Auto Ancillary/Automobiles/Components'>Auto Ancillary/Automobiles/Components</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Banking/Financial Services/Stockbrocking/Securities'>Banking/Financial Services/Stockbrocking/Securities</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Biotechnology/Pharmaceutical/Clinical Research'>Biotechnology/Pharmaceutical/Clinical Research</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Brewery/Distillery'>Brewery/Distillery</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Cement/Construction/Engineering/Metals/Steel/Iron'>Cement/Construction/Engineering/Metals/Steel/Iron</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Ceramics/Sanitaryware'>Ceramics/Sanitaryware</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Chemicals/Petrochemicals/Plastics'>Chemicals/Petrochemicals/Plastics</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Computer Hardware/Networking'>Computer Hardware/Networking</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Consumer FMCG/Foods/Beverages'>Consumer FMCG/Foods/Beverages</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Consumer Goods - Durables'>Consumer Goods - Durables</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Courier/Freight/Transportation/Warehousing'>Courier/Freight/Transportation/Warehousing</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=CRM/ It Enabled Services/BPO'>CRM/ It Enabled Services/BPO</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Education/Training/Teaching'>Education/Training/Teaching</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Electricals/Switchgears'>Electricals/Switchgears</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Employment Firms/Recruitement Services Firms'>Employment Firms/Recruitement Services Firms</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Entertainment/Media/Publishing/Dotcom'>Entertainment/Media/Publishing/Dotcom</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Export Houses/Textiles/Merchandise'>Export Houses/Textiles/Merchandise</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Facility Management'>Facility Management</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Fertilizers/Pesticides'>Fertilizers/Pesticides</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Food Processing'>Food Processing</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Gems and Jewellery'>Gems and Jewellery</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Glass'>Glass</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Government/Defence'>Government/Defence</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Healthcare/Medicine'>Healthcare/Medicine</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Heat Ventilation/Air Conditioning'>Heat Ventilation/Air Conditioning</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Insurance'>Insurance</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=KPO/Research/Analytics'>KPO/Research/Analytics</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Law/Legal Firms'>Law/Legal Firms</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Machinery/Equipment Manufacturing/Industrial Products'>Machinery/Equipment Manufacturing/Industrial Products</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Mining'>Mining</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=NGO/Social Services'>NGO/Social Services</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Office Automation'>Office Automation</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Others/Engg. Services/Service Providers'>Others/Engg. Services/Service Providers</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy'>Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Printing/Packaging'>Printing/Packaging</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Publishing'>Publishing</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Real Estate'>Real Estate</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Retailing'>Retailing</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Security/Law Enforcement'>Security/Law Enforcement</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Shipping/Marine'>Shipping/Marine</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Software Services'>Software Services</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Steel'>Steel</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Strategy/Management Consulting Firms'>Strategy/Management Consulting Firms</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-Conductor'>Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-Conductor</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Telecom/ISP'>Telecom/ISP</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Tyres'>Tyres</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Water Treatment/Waste Management'>Water Treatment/Waste Management</a></td></tr>"
                                                    . "<tr><td><a href='display.php?category=Wellness/Fitness/Sports'>Wellness/Fitness/Sports</a></td></tr>"
                                                    
                                                    . "</table>";
                                            
                                            
                                            
                                            
                                            
                                            
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