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
    
            function validateForm(){
            var email = document.Employer_registration.email.value;
            var password = document.Employer_registration.password.value;
            var confirm_password = document.Employer_registration.confirm_password.value;
            var company = document.Employer_registration.company.value;
            var company_type = document.Employer_registration.company_type.value;
            var industry_type = document.Employer_registration.industry_type.value;
            var address = document.Employer_registration.address.value;
            var address2 = document.Employer_registration.address2.value;
            var address3 = document.Employer_registration.address3.value;
            var country = document.Employer_registration.country.value;
            var state = document.Employer_registration.state.value;
            var pincode = document.Employer_registration.pincode.value;
            var contact_number = document.Employer_registration.contact_number.value;
            var contact_person = document.Employer_registration.contact_person.value;
            var current_employer = document.Employer_registration.current_employer.value;
            var designation = document.Employer_registration.designation.value;
            var role = document.Employer_registration.role.value;
            


                if ((email == null || email == "") || (password == null || password == "") || (confirm_password == null || confirm_password == "") || (company == null || company == "") || (company_type == null || company_type == "") || (industry_type == null || industry_type == "") || (address == null || address == "") || (address2 == null || address2 == "") || (address3 == null || address3 == "") || (country == null || country == "") || (state == null || state == "") || (pincode == null || pincode == "") || (contact_number == null || contact_number == "") || (contact_person == null || contact_person == "") || (current_employer == null || current_employer == "") || (designation == null || designation == "") || (role == null || role == ""))
                {
                    alert("Blank field are not accepted!");
                    
                    return false;
                }
                if(password != confirm_password)
                    {
                        document.getElementById("pswd").innerHTML="<font color='red'>Passwords Are Not Matching</font>";
                        
                        
                        return false;
                    }
                    else
                    {
                        document.getElementById("pswd").innerHTML="";
                        
                        
                         
                    }
                if(password.length < 8)
                    {
                        document.getElementById("pswdlength").innerHTML="<font color='red'>Password Must Contain Atleast 8 Characters</font>";
                        
                        return false;
                    }
                    else
                    {
                        document.getElementById("pswdlenth").innerHTML="";
                        
                        
                          
                    }
                return;

            }
            
            function passwordCheck()
            {
                var password = document.Employer_registration.password.value;
                var confirm_password = document.Employer_registration.confirm_password.value;
                
                    if(password != confirm_password)
                    {
                        
                        
                        document.getElementById("pswd").innerHTML="<font color='red'>Passwords Are Not Matching</font>";
                        
                        return false;
                    }
                    else
                    {
                        document.getElementById("pswd").innerHTML="";
                        
                        
                          
                    }
                    return;
            }
            
            function passwordLength()
            {
                var password = document.Employer_registration.password.value;
                var confirm_password = document.Employer_registration.confirm_password.value;
                
                if(password.length < 8)
                    {
                        document.getElementById("pswdlength").innerHTML="<font color='red'>Password Must Contain Atleast 8 Characters</font>";
                        
                        return false;
                    }
                    else
                    {
                        document.getElementById("pswdlength").innerHTML="";
                        
                        
                         
                    }
                    return;
            }
            
            function termcon()
            {
                
                var terms = document.Employer_registration.accept_terms;
                
                if(terms.checked)
                {
                    document.getElementById("accepts").innerHTML="";
                }
                else
                {
                    document.getElementById("accepts").innerHTML="<font color='red'>Accept Terms And Conditions</font>";
                        
                        return false;
                }
                return;
            }
            
            
            function getQueryVariable()
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == "email")
               {var up = pair[1];
                   //document.write(up);
               
               if(up == 'exists')
               {
                   alert("Email Already Exists");
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
                        
                        	 <form enctype="multipart/form-data" name="Employer_registration"  action="employer_registration_action.php" method="post" onsubmit="return validateForm();">
                                     <table border="0">
            <tr><td><label>Email</label></td><td><input type="email" name="email" class="formstxt"/></td></tr>
            <tr><td><label>Password</label></td><td><input type="password" name="password" onblur="return passwordLength();" class="formstxt"/></td></tr><tr><td><span id="pswdlength"></span></td></tr>
                                     <tr><td><label>Confirm Password</label></td><td><input type="password" name="confirm_password" onblur="return passwordCheck();" class="formstxt"/></td></tr><tr><td><span id="pswd"></span></td></tr>
            <tr><td><label>Company Name</label></td><td><input type="text" name="company" class="formstxt"/></td></tr>
            <tr><td><label>Company Type</label></td><td><select name="company_type" class="formsslct">

                <option value="company">Company</option>
                <option value="consultant">Consultant</option>

            </select></td></tr>
            <tr><td><label>Industry Type</label></td><td><select name="industry_type" class="formsslct">
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
            <tr><td><label>Address</label></td><td><textarea name="address" class="formstxt" style="height:80px;"></textarea></td></tr>
            <tr><td><label>Country</label></td><td><input type="text" name="country" class="formstxt"/></td></tr>
            <tr><td><label>State/Province</label></td><td><input type="text" name="state" class="formstxt"/></td></tr>
            <tr><td><label>City</label></td><td><input type="text" name="city" class="formstxt"/></td></tr>
            <tr><td><label>Pin</label></td><td><input type="text" size="6" name="pincode" class="formstxt"/></td></tr>
            <tr><td><label>Contact Number</label></td><td><input type="tel" name="contact_number" class="formstxt"/></td></tr>
            <tr><td><label>Contact Person</label></td><td><input type="text" name="contact_person" class="formstxt"/></td></tr>

            <tr><td><label>Current Employer</label></td><td><input type="text" name="current_employer" class="formstxt"/></td></tr>       
<tr><td><label>Current Designation</label></td><td><input type="text" name="designation" class="formstxt"/></td></tr>
<tr><td>Upload Photo</td><td><input type="file" name="photo" accept=".jpg,.jpeg,.png"/></td></tr>

<tr><td><label>Role In Hiring</label></td><td>

		<select name="role" class="formsslct">
        <option value="client">I Hire For My Client</option>
        <option value="company">I Hire For My Company</option>
        <option value="Team">I Hire For My Team</option>
        <option value="other">Other</option>
        </select></td></tr>

<tr><td><input type="checkbox" name="accept_terms" />I Accept The&nbsp;<a href="termsandconditions.php">Terms And Conditions</a>.</td><td><span id="accepts"></span></td></tr>    
             
                                     
            
<tr><td></td><td><input type="submit" value="Submit" class="formsbtn" onclick="return termcon();"></td><td></td></tr>
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