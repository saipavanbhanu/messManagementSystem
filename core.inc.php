<?php
ob_start();
session_start();
//print_r($_SESSION);
$current_file = $_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER'])){
	$http_referer = $_SERVER['HTTP_REFERER'];
}
function loggedin(){
	if(isset($_SESSION['username'])&&!empty($_SESSION['username'])){
		return true;
	}else {
		return false;
	}
}

function getuserfield($field){

$query="SELECT {$field} FROM users WHERE username='{$_SESSION['username']}'";

if($query_run = mysql_query($query) or die(mysql_error())){
  if($query_result = mysql_fetch_array($query_run)){
     return $query_result["{$field}"];
  }
}


}
 ?> 