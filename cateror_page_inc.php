<?php
	session_start();
?>

<html>
	<head>
		<h1 style="font-family:verdana; font-size:50px; text-align:center;">Mess Management System-NIT ROURKELA</h1>
	</head>
	<style>
		body
		{
		background-image:url('images/bg.gif');
		}
	</style>
	
	<body>
		UPDATE YOUR MENU......<br><br>
		<form method="POST" action="cateror.php" >
			MENU FOR MONDAY:<br><br>BREAKFAST:<br><input type="text" name="breakfast[]"><br>
				   LUNCH:<br><input type="text" name="lunch[]"><br>
				   SNACKS:<br><input type="text" name="snacks[]"><br>
				   DINNER:<br><input type="text" name="dinner[]"><br><br><br>
			MENU FOR TUESDAY:<br><br>BREAKFAST:<br><input type="text" name="breakfast[]"><br>
				   LUNCH:<br><input type="text" name="lunch[]"><br>
				   SNACKS:<br><input type="text" name="snacks[]"><br>
				   DINNER:<br><input type="text" name="dinner[]"><br><br><br>
			MENU FOR WEDNESDAY:<br><br>BREAKFAST:<br><input type="text" name="breakfast[]"><br>
				   LUNCH:<br><input type="text" name="lunch[]"><br>
				   SNACKS:<br><input type="text" name="snacks[]"><br>
				   DINNER:<br><input type="text" name="dinner[]"><br><br><br>
			MENU FOR THURSDAY:<br><br>BREAKFAST:<br><input type="text" name="breakfast[]"><br>
				   LUNCH:<br><input type="text" name="lunch[]"><br>
				   SNACKS:<br><input type="text" name="snacks[]"><br>
				   DINNER:<br><input type="text" name="dinner[]"><br><br><br>
			MENU FOR FRIDAY:<br><br>BREAKFAST:<br><input type="text" name="breakfast[]"><br>
				   LUNCH:<br><input type="text" name="lunch[]"><br>
				   SNACKS:<br><input type="text" name="snacks[]"><br>
				   DINNER:<br><input type="text" name="dinner[]"><br><br><br>
			MENU FOR SATURDAY:<br><br>BREAKFAST:<br><input type="text" name="breakfast[]"><br>
				   LUNCH:<br><input type="text" name="lunch[]"><br>
				   SNACKS:<br><input type="text" name="snacks[]"><br>
				   DINNER:<br><input type="text" name="dinner[]"><br><br><br>
			MENU FOR SUNDAY:<br><br>BREAKFAST:<br><input type="text" name="breakfast[]"><br>
				   LUNCH:<br><input type="text" name="lunch[]"><br>
				   SNACKS:<br><input type="text" name="snacks[]"><br>
				   DINNER:<br><input type="text" name="dinner[]"><br><br><br>
				   <input type="submit" value="submit" style="height:40px;width:125px;font-size:25px"/>
		</form>
	<a href="student_feedback.php" style="font-size:25px">student's feedback</a>	
	<br><br>
	<a href="desiredmenu_print.php" style="font-size:25px">student's Desired menu</a>
	<pre>		   
					<a href="logout.php" style="font-size:25px">Log out</a>
	</pre>
	</body>
</html>


