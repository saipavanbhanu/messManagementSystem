<?php
//session_start();
require_once 'connect.inc.php';
require_once 'core.inc.php'; 


if(loggedin()){
	if($_SESSION['profession']=='s'){
	header('Location: student_homepage.php');
	}else if($_SESSION['profession']=='c'){
	
			$q="select hall from hallcon where name='{$_SESSION['username']}'    ";
			$qr=mysql_query($q) or die(mysql_error());
			if(mysql_num_rows($qr)==0)
			{
				header("location:addhall.php");
				exit;
			}
			else
			header('Location: cateror_page_inc.php');
	}else
	header('location: administrator.php');

	}
	
?>