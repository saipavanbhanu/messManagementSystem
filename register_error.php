<?php

if(isset($_GET['val'])){
	if($_GET['val']==1){
		echo '<script>alert("Passwords do not match...")</script>';
	}
}
if(isset($_GET['val'])){
	if($_GET['val']==2){
		echo '<script>alert("All fields are required...")</script>';
	}
}

header("location: register.html");
?>