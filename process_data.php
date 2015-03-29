<?php
	if(isset($_POST['approve'])) {
		include_once 'core.inc.php';
		include_once 'connect.inc.php';
		print_r($_POST['approve']);
		$ar=$_POST['approve'];
		foreach($ar as $x) {
			$qr="update `registration_form` set status=1 where username ='{$x}'";
			$qr_r=mysql_query($qr) or die(mysql_error());
		}
		foreach($ar as $x)
		{
		    $q="select * from registration_form where username = '{$x}' ";
			$q_r=mysql_query($q);
			$row=mysql_fetch_array($q_r);
			
			$firstname=$row['firstname'];
			$surname=$row['lastname'];
			$username=$row['username'];
			$address=$row['address'];
			$department=$row['department'];
			$email=$row['email'];
			$telephone=$row['telephone'];
			$time=$username.date('_mdy');
			
			$qe="INSERT INTO `central_table`(`firstname`, `surname`, `username`, `address`, `department`, `email`, `telephone`, `room_no`, `fee_details`) VALUES ('{$firstname}','{$surname}','{$username}','{$address}','{$department}','{$email}','{$telephone}',0,12500)";	
			$q_er=mysql_query($qe);
			
			$qd="DELETE FROM `registration_form` WHERE username= '{$username}'  ";
			$q_dr=mysql_query($qd);
			
			$qf="INSERT INTO `fees`(`username`, `hostel_fees`, `late_fees`, `establishment_fees`, `mess_fees`, `other_fee`, `transaction_no`) 
			VALUES ('{$username}',2500,0,2500,12000,500,'{$time}')";
			
			$qf_r=mysql_query($qf);
			
			
			
		}	
			
			
		header('Location: administrator.php');
	}
?>