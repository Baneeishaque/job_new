<!DOCTYPE html>
<html>
    
    

	

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
		<link rel="stylesheet" href="css/main_index.css" />
                

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
            
            

		
	
    
   
            
    
     
		<header class="header">
                    
                   
                    
            <div class="now">
                
                
            
            </div>
			
			<div class="logo-mobile"><a href="index.php"><img src="img/icon-logomark.png" alt="logo"/></a></div>
			<div class="logo"><a href="index.php"><img src="img/logo.png" alt="logo"/></a></div>
            
          
          
          

			<nav class="men">
            
				
			</nav><!-- end nav -->
                        
                
		
		</header><!-- end header -->
                
       
        
        			
                                    
				
		<div id="viewport">

				         			
			
			
                    <section class="hero set-background" data-background="img/bg-contacts2.jpg" style="height: 800px;">








				<div class="hero-parallax">
                                   
                                            <div class="hero-text">
                                                
                                                <?php
                                                
$con=mysql_connect("localhost","root","root");

if(!$con)
	die(mysql_error());

if(!mysql_select_db("jobs",$con))
	die("No Database Selected");


if((mysql_query("UPDATE jobs.employee SET password='".md5($_POST["password"])."' WHERE email='".$_GET["email"]."';")))
{
    echo "<h1>Password <span>Reset</span> Completed</h1>";
}
else
{
   echo "<h1>Cannot <span>Reset</span> Password</h1>"; 
}
                                                
                                                
                                                ?>

						<h1>Password <span>Reset</span></h1>
                        <br />
                        
                        


                                            </div><!-- end .hero-text -->

					
				</div><!-- end .hero-parallax -->

				
                                
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