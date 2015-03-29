<?php
	include_once 'core.inc.php';
	include_once 'connect.inc.php';
	$username=getuserfield('username');
	$firstname = getuserfield('firstname');
	$surname = getuserfield('surname');
	
	if(isset($_GET['value'])){
		if($_GET['value']==2){
			echo '<script>alert("Sorry you have already selected the room number")</script>';
		}
	}
	
	
	//echo $username.'<br>';
	
	$q="SELECT  * FROM  central_table WHERE firstname  =  '{$firstname}'  ";
	//$qe="SELECT  * FROM registration_form WHERE firstname  =  '{$firstname}'  ";
	//$qs="select * from central_table where username = '{$username}'";
	
	
	//$query_run=mysql_query($q) or die(mysql_error());
	$query_run=mysql_query($q) ;
	//$query1_run=mysql_query($qe);
	$nor=mysql_num_rows($query_run);
	$row=mysql_fetch_array($query_run);
	//$row1=mysql_fetch_array($query1_run);
	
	
	echo '<br>';
	if(!empty($firstname)&&!empty($surname)){
	echo 'You\'re logged in,  '.$firstname.'  '.$surname.'  Welcome'.'<br><br>';
	}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flower</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>

<div id="wrap">

<div id="header">
<h1><a href="#"><?php
echo 'Welcome '.$firstname.' '.$surname;
?></a></h1>
</div>

<div id="right">

<?php
if($nor){
	echo '<table width="400" border="1">
	  <caption>
		Your Details
	  </caption>
	  <tr>
		<th scope="row">First Name *</th>
		<td>'; echo  $row['firstname'];  echo '</td>
	  </tr>
	  <tr>
		<th scope="row">Last Name *</th>
		<td>'; echo  $row['surname'];  echo '</td>
	  </tr>
	  <tr>
		<th scope="row">Address *</th>
		<td>'; echo  $row['address'];  echo '</td>
	  </tr>
	  <tr>
		<th scope="row">Username *</th>
		<td>'; echo  $row['username'];  echo '</td>
	  </tr>
	  <tr>
		<th scope="row">department *</th>
		<td>'; echo  $row['department'];  echo '</td>
	  </tr>
	  <tr>
		<th scope="row">Email Address *</th>
		<td>'; echo  $row['email'];  echo '</td>
	  </tr>
	  <tr>
		<th scope="row">Room number</th>
		<td>'; 
		if($row['room_no']!=0)
		echo  $row['room_no'];
        else
        echo 'Room not yet selected';
		echo '</td>
	  
	  </tr>
	  <tr>
		<th scope="row">Telephone Number</th>
		<td>';echo  $row['telephone']; echo '</td>
	  </tr>
	</table>';
}
?>

<tr>
 <td colspan="2" style="text-align:center">
  <!-- We are grateful to you for keeping this link in place. thank you. -->
  <input type="submit" value="Submit">   ( <a href="http://www.freecontactform.com/html_form.php">HTML Form</a> )
 </td>
</tr>
</table>
</form>
<h2>&nbsp;</h2>
</div>

<div id="left"> 

<h3>Things to do :</h3>
<ul>
<?php
if($nor)
{
	echo '<li><a href="room_selection.php">Room selection</a></li> 
	<li><a href="#">Inventory selection</a></li> 
	<li><a href="fee_details.php">fee details</a></li>
	<li><a href="student_page.php">Mess</a></li>';
}
?>
</ul>

<h3>Archives</h3>
<ul>
<li><a href="password_change.php">Password Change</a></li> 
<li><a href="logout.php">Log out</a></li> 
</ul>

</div>
<div style="clear: both;"> </div>

<div id="footer">
Designed by <a href="http://www.free-css-templates.com/">Free CSS Templates</a>, Thanks to <a href="http://www.openwebdesign.org/">Web Design Firm</a>
</div>
</div>



</body>
</html>