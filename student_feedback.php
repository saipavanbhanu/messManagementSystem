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


$query="SELECT * FROM feed_back where 1";
			$query_run=mysql_query($query);
			echo '<table id="tab">';
		?>
		<tr>
		<th>STUDENT NAME</th>
		<th>FEEDBACK</th>
		</tr>
		<?php
		
		
			while($row=mysql_fetch_array($query_run))
			{
				echo '<tr><td>';
				echo $row['username'].'</td><td> '.$row['matter'];
				echo '</td></tr>';
			}
			echo '</table>';
			echo '<br><br>';
?>

<pre>		   
					<a href="logout.php" style="font-size:25px">Log out</a>
</pre>
	

