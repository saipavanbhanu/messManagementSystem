<style>
#tab {
border-spacing:10px 5px;
border:1px solid red;
}

#tab tr td {
text-align:right;
border:1px solid red;
}
</style>
<?php
include_once 'connect.inc.php';


$query="SELECT * FROM menu_hall2";
$query_run=mysql_query($query);
echo '<table id="tab">';?>
<tr>
<th>DAY</th>
<th>BREAKFAST</th>
<th>LUNCH</th>
<th>SUPPER</th>
<th>DINNER</th>
</tr>
<?php
while($row=mysql_fetch_array($query_run))
{
	echo '<tr><td>';
	echo $row['day'].'</td><td> '.$row['breakfast'].'</td><td> '.$row['lunch'].'</td><td> '.$row['snacks'].'</td><td> '.$row['dinner'];
	echo '</td></tr>';
}
echo '</table>';

?>