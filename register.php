<?php
require_once 'core.inc.php';
require_once 'connect.inc.php';
//require_once 'register.inc.html';


if(!loggedin()){
	
	if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['confirm_password'])
	&&isset($_POST['firstname'])&&isset($_POST['surname'])&&isset($_POST['profession'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$firstname = $_POST['firstname'];
		$surname = $_POST['surname'];
		$profession = $_POST['profession'];
		if(!empty($username)&&!empty($password)&&!empty($confirm_password)&&!empty($firstname)&&!empty($surname)&&!empty($profession)){
			
			if($password!=$confirm_password){
				echo 'Passwords do not match.';
				echo '<br><br><a href="register.html">Back to the register page</a>';
			}else{
				$query="SELECT username FROM users WHERE username='{$username}'";
				$query_run=mysql_query($query) or die(mysql_error());
				
				if(mysql_num_rows($query_run)==1){
				echo 'The username  '.$username.' already exists.';
				echo '<br><br><a href="register.html">Back to register page</a>';
				}else{
						$query = "INSERT INTO users VALUES('','{$profession}','{$username}','{$firstname}','{$surname}','{$password}')";
						if($query_run = mysql_query($query) or die(mysql_error())){
							$_SESSION['username']=$username;
							$_SESSION['profession']=$profession;
							echo 'succesfully registered...';
							echo '<br><br><a href="loginform.php">Back to loginform page</a>';
							}else {
							echo 'Sorry, we could not register you at this time . try again later. ';
							echo '<br><br><a href="register.html">Back to register page</a>';
						}						
					}
			}
	    }else{
		echo 'All fields are required...';
		echo '<br><br><a href="register.html">Back to register page</a>';
		}
}else if(loggedin()){
		echo 'You\'re already registered and logged in.';
 }}
?>