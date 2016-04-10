<?php

///session_destroy();
$admin = session_name("admin");
  session_start($admin); 
 
if(isset($_SESSION['email'])) {
	unset($_SESSION['email']);
	session_destroy();
 }
header("location:index.php");
?>