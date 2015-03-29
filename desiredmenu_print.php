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
include_once 'connect.inc.php';

$query="SELECT * FROM desired_menu where 1";
$query_run=mysql_query($query);

echo '<table id="tab">';
		
		?><tr>
		<th>STUDENT NAME</th>
		<th>DAY</th>
		<th>BREAKFAST</th>
		<th>LUNCH</th>
		<th>SUPPER</th>
		<th>DINNER</th>
		</tr>
		<?php
		
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

<pre>		   
					<a href="logout.php" style="font-size:25px">Log out</a>
</pre>
