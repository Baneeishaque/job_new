
<?php //error_reporting(0);
session_start(); ?>
<?php
$con=mysql_connect("localhost","root","root");

if(!$con)
	die(mysql_error());

if(!mysql_select_db("jobs",$con))
	die("No Database Selected");

$result_id_employer = mysql_query("SELECT idemployer FROM jobs.employer WHERE email='".$_SESSION["employer"]."';");
            $row_id_employer = mysql_fetch_array($result_id_employer);
            $result_max_id = mysql_query("SELECT max(idjob) FROM jobs.job WHERE idemployer='".$row_id_employer["idemployer"]."';");
            $row_max_id = mysql_fetch_array($result_max_id);
            $result_keyword = mysql_query("SELECT keyword FROM jobs.job WHERE idjob='".$row_max_id["max(idjob)"]."';");
            $row_keyword = mysql_fetch_array($result_keyword);
            $keyword_job = $row_keyword["keyword"];
            
            $array_keyword_job = explode(",",$keyword_job);
            array_map('trim', $array_keyword_job);
            for($i=0;$i<count($array_keyword_job);$i++)
            {
                
                $result_check_keyword = mysql_query("SELECT iduser FROM jobs.employee WHERE key_skills REGEXP '[[:<:]]".$array_keyword_job[$i]."[[:>:]]';");
                //echo $array_keyword_job[$i]."<br />";
                if($result_check_keyword)
                {
                    
                    $row_check_keyword = mysql_fetch_array($result_check_keyword);
                    echo $row_check_keyword["iduser"];
                    
                    $result_check_iduser = mysql_query("SELECT iduser FROM jobs.messages_posted_employee WHERE iduser='".$row_check_keyword["iduser"]."';");
                    if($result_check_iduser)
                    {
                        
                        $result_max_idmessage = mysql_query("SELECT max(idmessage) FROM jobs.messages_posted_employee WHERE iduser='".$row_check_keyword["iduser"]."';");
                        $row_max_idmessage = mysql_fetch_array($result_max_idmessage);
                        
                        $max_idmessage = (int)$row_max_idmessage["max(idmessage)"];
                        if ($max_idmessage == null)
                        {
                            $max_idmessage = 0;
                        }
                        $max_idmessage++;
                        
                        $message = "<a href='display.php?idjob=".$row_max_id["max(idjob)"]."'>Click Here To View Your Matching Job</a>";
                        $check_keyword = $row_check_keyword["iduser"];
                        
                        $insert = mysql_query("INSERT INTO jobs.messages_posted_employee (iduser,idmessage,message) VALUES ('".$check_keyword."',".$max_idmessage.",'".$message."');");
                        //echo $check_keyword;
                        if($insert)
                        {
                        echo $row_check_keyword["iduser"];
                        }
                        
                        
                    }
                    else
                    {
                        $idmessage = 1;
                        $message = "<a href='display.php?idjob=".$row_max_id["max(idjob)"]."'>Click Here To View Your Matching Job</a>";
                        mysql_query("INSERT INTO jobs.messages_posted_employee (iduser,idmessage,message) VALUES ('".$row_check_keyword["iduser"]."',".$idmessage.",'".$message."');");
                        
                    }
                }
                
                
            }
            
            
        
        ?>