<?php
require_once 'connect.inc.php';
require_once 'core.inc.php'; 


if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['profession'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $profession=$_POST['profession'];
  
  if(!empty($username)&&!empty($password)&&!empty($profession)){
  
	$query = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}' AND profession='{$profession}'";
    if($query_run = mysql_query($query)){
		$query_num_rows = mysql_num_rows($query_run);
		if($query_num_rows==0){
			echo 'Invalid username or password';
		}else if($query_num_rows==1){
			//echo $user_id = mysql_result($query_run,0,'id');
			$_SESSION['user_id']=$username;
			$_SESSION['profession']=$_POST['profession'];
			header('Location: loginform.php');
		}
	}	
  }else{
  echo 'fill all the fields i.e., Username and Password.. <br><br>';
  }

  }
?>

<form >
Username:<input type="text" name="username"><br>
Password:<input type="password" name="password"><br><br>
<select name="profession">
	<option value="s">Student</option>
	<option value="c">Cateror</option>
</select>


<input type="submit" value="Log in"><br><br>
<a href="register.php">Not Register yet???</a><br>
</form>
