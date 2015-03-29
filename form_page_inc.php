<?php 
	include_once 'connect.inc.php';
	include_once 'core.inc.php';
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$address=$_POST['address'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
	$department=$_POST['department'];
	$email=$_POST['email'];
	$telephone=$_POST['telephone'];
	$comments=$_POST['comments'];
	
	
	if(!empty($first_name)&&!empty($last_name)&&!empty($address)&&!empty($username)&&!empty($password)&&!empty($confirm_password) && !empty($department)&& !empty($email)&& !empty($telephone)&&!empty($comments)){
		if($password!=$confirm_password){
				echo 'Passwords do not match.';
				echo '<br><br><a href="formpage.html">Register Again</a>';
		}else{
			$q="insert into registration_form values('$first_name','$last_name','$username','$password','$address','$department','$email','$telephone','$comments',0)";
			mysql_query($q) or die(mysql_error());
	

			echo 'Form is submitted to the Warden <br>Wait for his approval';
			echo '<script>alert("Successfully entered..")</script>';
	
			$q="INSERT INTO `users`(`profession`, `username`, `firstname`, `surname`, `password`) VALUES ('s','$username','$first_name','$last_name','$password')";
			mysql_query($q) or die(mysql_error());
			
			echo '<br>Updated successfull in the database<br>';
			
	
			//header("location:login_new.php");
			echo '<a href="login_new.php" style="font-size:25px">Back to login page</a>';
		}
  }else{
  echo 'fill all the fields i.e., Username and Password.. <br><br>';
  }
	
	
	//$q="INSERT into registration_form values('{$_SESSION['first_name']}','{$_SESSION['last_name']}','{$_SESSION['address']}', '{$_SESSION['department']}' , '{$_SESSION['email']}' , '{$_SESSION['telephone']}' ,'{$_SESSION['comments']}' ) ";
	
?>
