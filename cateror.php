<?php
session_start();
include_once 'connect.inc.php';
//$q1="delete from  hall where name='{$_SESSION['username']}'";
//mysql_query($q1) or die(mysql_error());
$breakfast=$_POST['breakfast'];
$lunch=$_POST['lunch'];
$snacks=$_POST['snacks'];
$dinner=$_POST['dinner'];

for ($i=0;$i<=6;$i++)
{
	if(isset($breakfast[$i])){
		$q="update hall set breakfast='{$breakfast[$i]}'  where name = '{$_SESSION['username']}' and dayid='{$i}'";
		$q_r=mysql_query($q);
	}
	if(isset($lunch[$i])){
		$q="update hall set lunch='{$lunch[$i]}'  where name = '{$_SESSION['username']}' and dayid='{$i}'  ";
		$q_r=mysql_query($q);
	}if(isset($snacks[$i])){
		$q="update hall set snacks='{$snacks[$i]}'  where name = '{$_SESSION['username']}' and dayid='{$i}'";
		$q_r=mysql_query($q);
	}if(isset($dinner[$i])){
		$q="update hall set dinner='{$dinner[$i]}'  where name = '{$_SESSION['username']}' and dayid='{$i}' ";
		$q_r=mysql_query($q);
	}
	
	
	//$q="insert into hall values('{$_SESSION['username']}','{$i}','{$breakfast[$i]}','{$lunch[$i]}','{$snacks[$i]}','{$dinner[$i]}')";
	//mysql_query($q) or die(mysql_error());

	
	
	}
echo 'Menu is updated succesfull';
echo '<script>alert("Successfully entered..")</script>';


?>
<br><br>
<a href="student_feedback.php" style="font-size:25px">student's feedback</a>
<br><br>
<a href="desiredmenu_print.php" style="font-size:25px">student's Desired menu</a>
<pre>		   
					<a href="logout.php" style="font-size:25px">Log out</a>
</pre>