<?php
	
	include_once("db_connect.php");
	// Change timezone
	date_default_timezone_set('asia/kolkata');
	
	$btnText=mysql_real_escape_string($_POST['btntext']);
	$currentHost=mysql_real_escape_string($_POST['currentHost']);
	$bio=mysql_real_escape_string($_POST['bio']);
	$topics=mysql_real_escape_string($_POST['topics']);
	$createdDate = date('Y-m-d H:i:s');
	
	$update=mysql_query("update startuptv set btnText='$btnText',currentHost='$currentHost',bio='$bio',topic='$topics',modifiedDate='$createdDate' where id=1");
	if($update){
		echo "Success";
	}
	
?>