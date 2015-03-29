<html>
	<style>
		#tab {
		border-spacing:10px 10px;
		border:1px solid blue;
		}
		#tab tr td {
		text-align:right;
		border:1px solid red;
		}
		body
		{
		background-image:url('images/bg.gif');
		}
	</style>
</html>

<?php
include_once 'connect.inc.php';


$query="SELECT * FROM hallcon where 1";
			$query_run=mysql_query($query);
			echo '<table id="tab">';
		?>
		<tr>
		<th>CATEROR NAME</th>
		<th>FOR WHICH HALL</th>
		</tr>
		<?php
		
		
			while($row=mysql_fetch_array($query_run))
			{
				echo '<tr><td>';
				echo $row['name'].'</td><td> '.$row['hall'];
				echo '</td></tr>';
			}
			echo '</table>';
			echo '<br><br><br>';
?>

<?php    
if(isset($query_fetch['name'])){
	$q1="delete from users where username='{$query_fetch['name']}";
	mysql_query($q1) or die(mysql_error());
	$q2="delete from selected_hall where hall_selected IN(select hall from hallcon where name='{$query_fetch['name']}')";
	mysql_query($q2) or die(mysql_error());
	$q3="delete from hallcon where name='{$query_fetch['name']}'";
	mysql_query($q3) or die(mysql_error());
	$q4="delete from hall where name='{$query_fetch['name']}' ";
	mysql_query($q4) or die(mysql_error());
	
	echo 'successfully deleted the cateror....';
	
}


$query="select name from hallcon";
if($query_run=mysql_query($query))
{
echo 'kk';
}
echo mysql_num_rows($query_run);
?>
<html>

	<body>
		<form action="#" method="POST">
			<?php
				echo 'select your option and click SUBMIT...'.'<br><br>';
				while($query_fetch=mysql_fetch_assoc($query_run)){
					echo 'Hall no-'.$r[0].'<input type="radio" name = "cateror_name" value = "{$query_fetch['name']}" />'.$query_fetch['name'];
					echo '<br><br>';
				}
				
			?>
			<input type="submit" value="submit" style="height:40px;width:125px;font-size:25px"/><br><br>
		</form>







<pre>		   
					<a href="logout.php" style="font-size:25px">Log out</a>
</pre>
	

