<?php //error_reporting(0);
session_start(); ?>
<?php
$con=mysql_connect("localhost","root","root");

if(!$con)
	die(mysql_error());

if(!mysql_select_db("jobs",$con))
	die("No Database Selected");



$id_job = $_GET["idjob"];


$result_keyword = mysql_query("SELECT keyword FROM jobs.job WHERE idjob='".$id_job."';");
$row_keyword = mysql_fetch_array($result_keyword);
$keyword_job = $row_keyword["keyword"];
$array_keyword_job = explode(",",$keyword_job);
array_map('trim', $array_keyword_job);
for($i=0;$i<count($array_keyword_job);$i++)
{
   $i_th_value = $array_keyword_job[$i];
   
   $result_match_keyword = mysql_query("SELECT iduser FROM jobs.employee WHERE key_skills REGEXP '[[:<:]]".$i_th_value."[[:>:]]';");
   
   while($row_match_keyword = mysql_fetch_array($result_match_keyword))
   {
       
       $iduser_matched = $row_match_keyword["iduser"];
       
       //echo $iduser_matched."hi<br />";
       //$result_allready_messages = mysql_query("SELECT idmessage FROM jobs.messages_posted_employee WHERE iduser='".$iduser_matched."';");
       //$row_allready_messages = mysql_fetch_array($result_allready_messages);
       //if($row_allready_messages != null)
       //{
           
           $id_message = date('Y-m-d H:i:s');
           //$id_message++;
           $message = "Click Here To View Your Matching Job";
           //echo $message;
           $insert = "INSERT INTO jobs.messages_posted_employee (iduser,idmessage,message,idjob) VALUES ('".$iduser_matched."','".$id_message."','".$message."','".$id_job."');";
           mysql_query($insert);
           
       /*}
       else
       {
        $idmessage = 1;
        $message = "<a href='display.php?idjob=".$id_job."'>Click Here To View Your Matching Job</a>";
        $insert = "INSERT INTO jobs.messages_posted_employee (iduser,idmessage,message) VALUES('".$iduser_matched."',".$idmessage.",'".$message."');";
           if(mysql_query($insert))
           {
               echo "inserted<br />";
               
           }
           else
           {
               echo "not inserted <br />".mysql_error();
           }*/
       //}
   }
}




?>