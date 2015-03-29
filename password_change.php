<?php
	include_once 'core.inc.php';
	include_once 'connect.inc.php';
	$student_username=getuserfield('username');
	$firstname = getuserfield('firstname');
	$surname = getuserfield('surname');
	
	$password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	
	$query="select username from users where password = '{$password}' ";
	$query_run=mysql_query($query);
	if(mysql_num_rows($query_run)){
		
		$query2="update users set password = '{$new_password}' where username= '{$student_username}'  ";
		$query2_run=mysql_query($query2) or die(mysql_error());
		echo '<script>alert("Your password is succesfully updated..")</script>';
		
	}else{
		echo 'Password does not match please try again';
		echo '<a href="password_change.php">Try again</a>  ';
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

<form name="htmlform" method="post" action="#">
<table width="450px">
</tr>

<tr>
<br><br>
 <td valign="top">
  <label for="old_password">Old Password *</label>
 </td>
 <td valign="top">
  <input  type="password" name="old_password" maxlength="50" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="new_password">New Password *</label>
 </td>
 <td valign="top">
  <input  type="password" name="new_password" maxlength="50" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="confirm_password">Confirm Password *</label>
 </td>
 <td valign="top">
  <input  type="password" name="confirm_password" maxlength="50" size="30">
 </td>
</tr>




<tr>
<td colspan="2" style="text-align:center">
  <!-- We are grateful to you for keeping this link in place. thank you. -->
  <br><br>
  <input type="submit" value="Submit">   ( <a href="http://www.freecontactform.com/html_form.php">HTML Form</a> )
 </td>
</tr>
</table>
</form>
<h2>&nbsp;</h2>
</div>

<div id="left"> 

<h3>Do you want to edit?? :</h3>
<ul>
<li><a href="room_selection.php">Room selection</a></li> 
<li><a href="#">Inventory selection</a></li> 
<li><a href="fee_details.php">fee details</a></li> 
<li><a href="student_page.php">Mess</a></li>
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