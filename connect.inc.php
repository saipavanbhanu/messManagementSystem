<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='project';

if(!mysql_connect($mysql_host, $mysql_user,  $mysql_pass)||!mysql_select_db($mysql_db)){
die(mysql_error());
}
?>
<h1 style="font-family:verdana; font-size:50px; text-align:center;">Hostel Management System-NIT ROURKELA</h1>
<style>
body
{
background-image:url('images/bg.gif');
}
</style>