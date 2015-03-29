<?php
session_start();
include_once 'connect.inc.php';

$q1="delete from  desired_menu where name='{$_SESSION['username']}'";
mysql_query($q1) or die(mysql_error());

$breakfast=$_POST['breakfast'];
$lunch=$_POST['lunch'];
$snacks=$_POST['snacks'];
$dinner=$_POST['dinner'];

for ($i=0;$i<=6;$i++)
{
	$q="insert into desired_menu values('{$_SESSION['username']}','{$i}','{$breakfast[$i]}','{$lunch[$i]}','{$snacks[$i]}','{$dinner[$i]}')";
	mysql_query($q) or die(mysql_error());
}

echo 'desired Menu is updated succesfull'.'<br><br>';
echo '<a href="student_page.php">back to the student login page</a>';
echo '<script>alert("Successfully entered..")</script>';


?>

<pre>		   
					<a href="logout.php" style="font-size:25px">Log out</a>
</pre>