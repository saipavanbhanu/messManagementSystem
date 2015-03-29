<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
			echo 'INVALID USERNAME OR PASSWORD....';
		}else if($query_num_rows==1){
			//echo $user_id = mysql_result($query_run,0,'id');
			$_SESSION['username']=$username;
			$_SESSION['profession']=$_POST['profession'];
			header('Location: loginform.php');
		}
	}	
  }else{
  echo 'fill all the fields i.e., Username and Password.. <br><br>';
  }

  }
?>
<html>
    <head>
        <title>Hostel Management system - NIT ROURKELA </title>
        
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h3',{ textShadow: '1px 1px #000'});
			Cufon.replace('.back');
		</script>
    </head>
    <body>
		<div class="wrapper">
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
					<form action="register.html" method="POST" class="register">
						<h3>Register</h3>
						<div class="column">
							<div>
								<label>First Name:</label>
								<input type="text" />
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Last Name:</label>
								<input type="text" />
								<span class="error">This is an error</span>
							</div>
							
						</div>
						<div class="column">
							<div>
								<label>Username:</label>
								<input type="text"/>
								<span class="error">This is an error</span>
							</div>
							
							<div>
								<label>Password:</label>
								<input type="password"/>
								<span class="error">This is an error</span>
							</div>
							
						</div>
						<div class="bottom">
							<div class="remember">
								<input type="checkbox" />
								<span>Send me updates</span>
							</div>
							<button type="submit">Register</button>
							<a href="index.html" rel="login" class="linkform">You have an account already? Log in here</a>
							<div class="clear"></div>
						</div>
					</form>
					<form action="#" method="POST" class="login active">
						<h3>Login</h3>
						<div>
							<label>Username:</label>
							<input type="text" name="username"/>
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Password: </label>
							<input type="password" name="password"/>
							<span class="error">This is an error</span>
						</div>
						<div align="center">
							<select name="profession" style="height:40px;width:285px;font-size:20px">
								<option value="s">Student</option>
								<option value="c">Cateror</option>
								<option value="a">Administrator</option>
								
							</select>
						</div>
						
						<div class="bottom">
							<button type="submit">Login</button>
							<a href="formpage.html">You don't have an account yet? Register here</a>
							<div class="clear"></div>
						</div>
					</form>
				</div>
				<div class="clear"></div>
			</div>			
		</div>
		

		<!-- The JavaScript -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
					//the form wrapper (includes all forms)
				var $form_wrapper	= $('#form_wrapper'),
					//the current form is the one with class active
					$currentForm	= $form_wrapper.children('form.active'),
					//the change form links
					$linkform		= $form_wrapper.find('.linkform');
						
				//get width and height of each form and store them for later						
				$form_wrapper.children('form').each(function(i){
					var $theForm	= $(this);
					//solve the inline display none problem when using fadeIn fadeOut
					if(!$theForm.hasClass('active'))
						$theForm.hide();
					$theForm.data({
						width	: $theForm.width(),
						height	: $theForm.height()
					});
				});
				
				//set width and height of wrapper (same of current form)
				setWrapperWidth();
				
				/*
				clicking a link (change form event) in the form
				makes the current form hide.
				The wrapper animates its width and height to the 
				width and height of the new current form.
				After the animation, the new form is shown
				*/
				$linkform.bind('click',function(e){
					var $link	= $(this);
					var target	= $link.attr('rel');
					$currentForm.fadeOut(400,function(){
						//remove class active from current form
						$currentForm.removeClass('active');
						//new current form
						$currentForm= $form_wrapper.children('form.'+target);
						//animate the wrapper
						$form_wrapper.stop()
									 .animate({
										width	: $currentForm.data('width') + 'px',
										height	: $currentForm.data('height') + 'px'
									 },500,function(){
										//new form gets class active
										$currentForm.addClass('active');
										//show the new form
										$currentForm.fadeIn(400);
									 });
					});
					e.preventDefault();
				});
				
				function setWrapperWidth(){
					$form_wrapper.css({
						width	: $currentForm.data('width') + 'px',
						height	: $currentForm.data('height') + 'px'
					});
				}
				
				/*
				for the demo we disabled the submit buttons
				if you submit the form, you need to check the 
				which form was submited, and give the class active 
				to the form you want to show
				*/
				$form_wrapper.find('input[type="submit"]')
							 .click(function(e){
								e.preventDefault();
							 });	
			});
        </script>
    </body>
</html>