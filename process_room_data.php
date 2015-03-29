<?php
    if(isset($_POST['select'])) {
		include_once 'core.inc.php';
		include_once 'connect.inc.php';
		$ar=$_POST['select'];
		echo $ar;
		$username=$_SESSION['username'];
		$student_username=getuserfield('username');
		$firstname = getuserfield('firstname');
		$surname = getuserfield('surname');
		
		$q5="select * from central_table where username='{$username}' ";
		$q5_r=mysql_query($q5);
		$row2=mysql_fetch_array($q5_r);
		
		if($row2['room_no']=='0'){
		
			$q="update central_table set room_no='{$ar}' where username='{$username}'";
			$q_r=mysql_query($q);
			
			$q2="select * from rooms where room_no =  '{$ar}'  ";
			$q2_r=mysql_query($q2);
			$row=mysql_fetch_array($q2_r);
			
			if($row['status'] == 0 ){
				$q3="update rooms set student1='$firstname.' '.$surname' where room_no = '{$ar}' ";
				$q3_r=mysql_query($q3);
			}else{
				$q4="update rooms set student2='$firstname.' '.$surname' where room_no = '{$ar}' ";
				$q4_r=mysql_query($q4);
			}
			$qr="update rooms set status=status+1 where room_no='{$ar}'";
			$qr_r=mysql_query($qr);
			header('location: student_homepage.php');
		}else{
			header('location: student_homepage.php?value=2');
		}	
	}

?>