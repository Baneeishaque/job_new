<?php


$con=mysql_connect("localhost","root","root");

if(!$con)
	die(mysql_error());

if(!mysql_select_db("jobs",$con))
	die("No Database Selected");

echo $_FILES['photo']['name'];

/*$str = 'hello';
$encripted = md5($str);
echo $encripted;
$st = 'hello';
$encript = md5($st);
echo "<br />".$encript;

/*$date = date('Y-m-d H:i:s');
echo $date."<br />";
$ndate = '2015-01-21 27:07:47';
if($date > $ndate)
{
    echo "<br />Yes";
}
else
{
    echo "<br />No";
}

//$n=2;
//mysql_query("INSERT INTO jobs.messages_posted_employee (iduser,idmessage,message) VALUES ('3',".$n.",'1');");


/*$str = "Hello , world. , It's ,a ,beautiful, day.";
$my_array = explode(",",$str);

print_r ($my_array);
array_map('trim', $my_array);

echo $my_array[1].$my_array[2];
/*for($i=0;$i<count($my_array);$i++)
{
echo "<br />".$my_array[$i];
}

/*$str = "hi  morning";
if(strpos($str, 'good'))
{
    echo 'yes!!!!!!';
}
else
    echo 'no :-(';






/*$ar = array();
$i = 0;
$result = mysql_query("SELECT iduser FROM jobs.employee;");
$row1 = mysql_fetch_array($result);


while($row = mysql_fetch_assoc($result))
{
    echo $row[$i];
    $i++;
    $ar[] = $row;
    //echo $data[0];
    
}



//print_r($ar);

/*$length = count($data);
$j = 0;
for($j=0;$j<=count($data);$j++)
{
    echo $data[$j];
}
*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Simple drop down</title>

    <style type="text/css">
      #button {  /* Box in the button */
        display: block;
        width: 190px;
      }

      #button a {
        text-decoration: none;  /* Remove the underline from the links. */
      }

      #button ul {
        list-style-type: none;  /* Remove the bullets from the list */
      }

      #button .top {
        background-color: #DDD;  /* The button background */
      }

      #button ul li.item {
        display: none;  /* By default, do not display the items (which contains the links) */
      }  

      #button ul:hover .item {  /* When the user hovers over the button (or any of the links) */
        display: block;
        border: 1px solid black;
        background-color: #EDC;
      }
    </style>
  </head>
  <body>
    <div id="button">
      <ul>
        <li class="top">OtherOverflow Sites</li>
        <li class="item"><a href="http://serverfault.com/">Visit serverfault</a></li>
        <li class="item"><a href="http://superuser.com/">Visit superuser</a></li>
        <li class="item"><a href="http://doctype.com/">Visit doctype</a></li>
      </ul>
    </div>
  </body>
</html>