<?php
include_once 'core.inc.php';
include_once 'connect.inc.php';

$firstname = getuserfield('firstname');
$surname = getuserfield('surname');
echo '<br>';

if(!empty($firstname)&&!empty($surname)){
 echo 'You\'re logged in,'.$firstname.' '.$surname.' Welcome'.'<br><br>';
 echo '<br><br><br><br><br><br>';
 
 $query="INSERT INTO menu_hall4 VALUES('','Monday','{$_POST['breakfast'][0]}','{$_POST['lunch'][0]}','{$_POST['snacks'][0]}','{$_POST['dinner'][0]}')";
 $query_run=mysql_query($query);  
 
 $query="INSERT INTO menu_hall4 VALUES('','tuesday','{$_POST['breakfast'][1]}','{$_POST['lunch'][1]}','{$_POST['snacks'][1]}','{$_POST['dinner'][1]}')";
 $query_run=mysql_query($query);
 
 $query="INSERT INTO menu_hall4 VALUES('','wednesday',{$_POST['breakfast'][2]}','{$_POST['lunch'][2]}','{$_POST['snacks'][2]}','{$_POST['dinner'][2]}')";
 $query_run=mysql_query($query);
 
 $query="INSERT INTO menu_hall4 VALUES('','thursday','{$_POST['breakfast'][3]}','{$_POST['lunch'][3]}','{$_POST['snacks'][3]}','{$_POST['dinner'][3]}')";
 $query_run=mysql_query($query);
  
 $query="INSERT INTO menu_hall4 VALUES('','friday','{$_POST['breakfast'][4]}','{$_POST['lunch'][4]}','{$_POST['snacks'][4]}','{$_POST['dinner'][4]}')";
 $query_run=mysql_query($query);
 
 $query="INSERT INTO menu_hall4 VALUES('','saturday','{$_POST['breakfast'][5]}','{$_POST['lunch'][5]}','{$_POST['snacks'][5]}','{$_POST['dinner'][5]}')";
 $query_run=mysql_query($query);
 
 $query="INSERT INTO menu_hall4 VALUES('','sunday','{$_POST['breakfast'][6]}','{$_POST['lunch'][6]}','{$_POST['snacks'][6]}','{$_POST['dinner'][6]}')";
 $query_run=mysql_query($query);
 
 echo '<br><br>'.'successfully entered...'.'<br><br>';
 
 }
 
?>

<html>


<a href="logout.php">Log out</a>';
	

</html>

