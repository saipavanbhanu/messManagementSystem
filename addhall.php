<?php
session_start();

include_once 'connect.inc.php';

if(isset($_GET['val']))
{
if($_GET['val']==2)
{
echo '<script>alert("You\'re successfully registered..")</script>';
}
}


if(isset($_GET['val'])){
	if($_GET['val']==1){
		echo '<script>alert("enter another hall no...")</script>';
	}
}

if(isset($_POST['hall']))
{
	$query="select hall from hallcon where hall='{$_POST['hall']}'";
	$query_run = mysql_query($query) or die(mysql_error()) ;
	$set = mysql_num_rows($query_run);
		if($set==0){
		$q="insert into hallcon values ('{$_SESSION['username']}','{$_POST['hall']}')";
		echo $q;
		mysql_query($q) or die(mysql_error());
		header("location:cateror_page_inc.php");
		}else {
		header("location:addhall.php?val=1");
		}
}
?>
<form action="addhall.php" method="post" >
HALL NO:<input type="text" name="hall" />
<input type="submit" value="okay" />
</form>
<pre>		   
					<a href="logout.php" style="font-size:25px">Log out</a>
</pre>	