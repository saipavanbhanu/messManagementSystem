<?php
session_start();
if($_SESSION['profession']==s){
header('location: student_page.php?val=1');
}
else if($_SESSION['profession']==c){
header('location: addhall.php?val=2');
}else{
header('location: administrator.php');
}

?>