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
            var email = document.employee_registration_form.email.value;
            var password = document.employee_registration_form.password.value;
            var confirm_password = document.employee_registration_form.confirm_password.value;
            var name = document.employee_registration_form.name.value;
            var address = document.employee_registration_form.address.value;
            var country = document.employee_registration_form.country.value;
            var state = document.employee_registration_form.state.value;
            var city = document.employee_registration_form.city.value;
            var mobile = document.employee_registration_form.mobile.value;
            var experience = document.employee_registration_form.experience.value;
            var key_skills = document.employee_registration_form.key_skills.value;
            var professional_background = document.employee_registration_form.professional_background.value;
            var education = document.employee_registration_form.education.value;
            var education_other = document.employee_registration_form.education_other.value;
            var terms = document.employee_registration_form.accept_terms;
            
            


                if ((email == null || email == "") || (password == null || password == "") || (confirm_password == null || confirm_password == "") || (name == null || name == "") || (address == null || address == "") || (country == null || country == "") || (state == null || state == "") || (city == null || city == "") || (mobile == null || mobile == "") || (experience == null || experience == "") || (key_skills == null || key_skills == "") || (professional_background == null || professional_background == "") || (education == null || education == "") || (education_other == null || education_other == ""))
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
                var password = document.employee_registration_form.password.value;
                var confirm_password = document.employee_registration_form.confirm_password.value;
                
                
                
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
                var password = document.employee_registration_form.password.value;
                var confirm_password = document.employee_registration_form.confirm_password.value;
                
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
                
                var terms = document.employee_registration_form.accept_terms;
                
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
                        
                        	  <form enctype="multipart/form-data"  name="employee_registration_form" action="employee_registration_action.php" method="post" onsubmit="return validateForm();">
                                      <table border="0">

            <td>Email</td><td><input type="email" name="email" class="formstxt"/></td></tr>
                                      <tr><td>Password</td><td><input type="password" name="password" onblur="return passwordLength();" class="formstxt"/></td></tr><tr><td><span id="pswdlength"></span></td></tr>
            <tr><td>Confirm Password</td><td><input type="password" name="confirm_password" onblur="return passwordCheck();" class="formstxt"/></td></tr><tr><td><span id="pswd"></span></td></tr>

            <tr><th>Personal Informations</th></tr>
            <tr><td>Name</td><td><input type="text" name="name" class="formstxt"/></td></tr>
            <tr><td>Address</td><td><input type="text" name="address" class="formstxt"/></td></tr>


            <tr><th>Contact Informations</th></tr>
            <tr><th>Location</th></tr>
            <tr><td>Country</td><td><input type="text" name="country" class="formstxt"/></td></tr>
            <tr><td>State/Province</td><td><input type="text" name="state" class="formstxt"/></td></tr>
            <tr><td>City</td><td><input type="text" name="city" class="formstxt"/></td></tr>
            <tr><td>Mobile</td><td><input type="text" name="mobile" class="formstxt"/></td></tr>

            <tr><th>Current Employment Details</th></tr>
            <tr><td>Experience</td><td><input type="text" name="experience" class="formstxt"/></td></tr>
            <tr><td>Key Skills</td><td><input type="text" name="key_skills" class="formstxt"/></td></tr>
            <tr><td>Professional Background</td><td><input type="text" name="professional_background" class="formstxt"/></td></tr>

            <tr><th>Educational Background</th></tr>
            <br/>
                <tr><td>Basic Education	</td><td>
                <select name="education" class="formsslct">
                    <option value="no">Not Pursuing Graduation</option>
                    <option value="ba">B.A</option>
                    <option value="barch">B.Arch</option>
                    <option value="bca">BCA</option>
                    <option value="bba">B.B.A</option>
                    <option value="bcom">B.Com</option>
                    <option value="bed">B.Ed</option>
                    <option value="bds">BDS</option>
                    <option value="bhm">BHM</option>
                    <option value="bpharma">B.Pharma</option>
                    <option value="bsc">B.Sc</option>
                    <option value="btech">B.Tech/B.E.</option>
                    <option value="llb">LLB</option>
                    <option value="mbbs">MBBS</option>
                    <option value="diploma">Diploma</option>
                    <option value="bvsc">BVSC</option>
                    <option value="other">Other</option>
                </select></td></tr>
            
            <tr><td>Others</td><td>
                <input type="text" name="education_other" class="formstxt"/></td></tr>

            
            <tr><th>Upload Resume</th></tr>
            <tr><td><input name="resume" type="file" accept=".pdf"/></td></tr>

            
            <tr><td><input type="checkbox" name="accept_terms" />I Accept The&nbsp;<a href="termsandconditions.php">Terms And Conditions</a>.</td><td><span id="accepts"></span></td></tr>    
                                      

            <tr><td></td><td><input type="submit" value="Submit" class="formsbtn" onclick="return termcon();"/></td><td></td></tr>
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