<style>
#tab {
border-spacing:10px 10px;
border:1px solid blue;
}

#tab tr td {
text-align:right;
border:1px solid red;
}
</style>


<?php
	include_once 'core.inc.php';
	include_once 'connect.inc.php';
	
	if(isset($_GET['val'])){
		if($_GET['val']==1){
			echo '<script>alert("You\'re successfully registered..")</script>';
		}
	}

	
	$student_username=getuserfield('username');
	$firstname = getuserfield('firstname');
	$surname = getuserfield('surname');
	echo '<br>';
	if(!empty($firstname)&&!empty($surname)){
	echo 'You\'re logged in,  '.$firstname.'  '.$surname.'  Welcome'.'<br><br>';
	}
		
			$query="SELECT * FROM hall where name in (select name from hallcon)";
			$query_run=mysql_query($query);
			echo '<table id="tab">';
		
		?><tr>
		<th>CATEROR NAME</th>
		<th>DAY ID</th>
		<th>BREAKFAST</th>
		<th>LUNCH</th>
		<th>SUPPER</th>
		<th>DINNER</th>
		</tr>
		<?php
		$a=0;
			while($row=mysql_fetch_array($query_run))
			{
				switch($row['dayid']){
					case 0:
						$day='monday';break;
					case 1:
						$day='tuesday';break;
					case 2:
					    $day='wednesday';break;
					case 3:
					    $day='thursday';break;
					case 4:
					    $day='friday';break;
					case 5:
					    $day='saturday';break;
					case 6:
					    $day='sunday';break;
					default:
						$day='NULL';break;
				}
				
				
				if($row[1]==0)
				echo '<tr ><td colspan="6" style="border:0px;" >&nbsp; </tr>';
				echo '<tr><td>';
				echo $row['name'].'</td><td> '.$day.'</td><td> '.$row['breakfast'].'</td><td> '.$row['lunch'].'</td><td> '.$row['snacks'].'</td><td> '.$row['dinner'];
				echo '</td></tr>';
			}
			echo '</table>';
			echo '<br><br>';
			?>
	
	
	
		

<?php    
if(isset($_POST['hallname']))
{
	$q1="delete from selected_hall where student_username='{$student_username}'";
	mysql_query($q1) or die(mysql_error());
	$q2="insert into selected_hall(student_username,hall_selected) values('{$student_username}','{$_POST['hallname']}')";
	$mysql_run_row=mysql_query($q2) or die(mysql_error());
	if($mysql_run_row){
	echo '<br><br>'.'your Selected hall is sent to the Administrator....'.'<br><br>';
	echo 'collect your coupons at hall-'.$_POST['hallname'];
	}
}

$q="select hall from hallcon";
$qr=mysql_query($q) or die(mysql_error());
$query="select name from hallcon";
$query_run=mysql_query($query) or die(mysql_error());

?>
<html>

	<body>
		<form action="#" method="POST">
			<?php
				echo 'select your option and click SUBMIT...'.'<br><br>';
				while(($r=mysql_fetch_array($qr))&&($query_fetch=mysql_fetch_array($query_run)))
				{
					echo 'Hall no-'.$r[0].'<input type="radio" name="hallname" value="'.$r[0].'"/>'.$query_fetch['name'];
					echo '<br><br>';
				}
				
			?>
			<input type="submit" value="submit" style="height:40px;width:125px;font-size:25px"/><br><br>
		</form>

	<pre>		    
					<a href="desiredmenu_inc.php" style="font-size:25px">Desired menu</a><br>
					<a href="feedback.php" style="font-size:25px">do you want to give feedback???</a><br>
					<a href="student_homepage.php" style="font-size:25px">Back to Student's page</a>
					<a href="logout.php" style="font-size:25px">Log out</a><br>
	</pre>
	</body>

	
</html>
