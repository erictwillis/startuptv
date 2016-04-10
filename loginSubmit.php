<?php 
include('db_connect.php');
 $userName =  mysql_real_escape_string($_POST['username']);
  $pass = md5(mysql_real_escape_string($_POST['pass']));
  $sql = "select * from login where userName ='$userName' and password ='$pass'";
  $result =mysql_query($sql) or die(mysql_error());
  $total=mysql_num_rows($result);
  if($total ==1) {
		
		$admin = session_name("admin");
		session_start($admin);
		$_SESSION['email'] = $userName;
		
		//header("location:index.html");
		echo "Success";
	} else{
		echo mysql_error();
	}	
?>