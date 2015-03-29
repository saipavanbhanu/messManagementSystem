<?php
require_once 'connect.inc.php';
session_start();


if(isset($_POST['feedback'])&&!empty($_POST['feedback'])){
$q1="delete from  feed_back where username='{$_SESSION['username']}'";
mysql_query($q1) or die(mysql_error());

$query = "insert into feed_back values('','{$_SESSION['username']}','{$_POST['feedback']}')";
	mysql_query($query) or die(mysql_error());
 echo 'query succesfull'.'<br><br>';
 echo '<a href="student_page.php">back to the student login page</a>';
 
 }

?>

<html>
	
	<body>
		<form action="#" method="POST" >	
			<textarea rows="4" cols="50" name="feedback" >
			</textarea>
			<input type="submit" value="submit">
		</form>
	</body>
	<br><br><br><br>
	<pre>
								<a href="logout.php" style="font-size:25px">Log out</a><br>
	</pre>
</html>