
<?php error_reporting(0); session_start();     
        
        $em = $_GET["email"];
        
        $str = strchr($em, "@", FALSE);
        
        $str2 = strchr($str, ".", TRUE);
        
        
        
        $str3 = substr($str2, 1);
        
        
        
        if(($str3 == 'gmail') || ($str3 == 'yahoo') || ($str3 == 'hotmail'))
            {
                header('location:http://www.'.$str3.'.com');
            }
        else
            {
            	$stri='location:http://www.google.com?q='.$str3;
            	echo $stri;
                header($stri);
            }
        
        ?>
        