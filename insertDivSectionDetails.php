<?php
require_once 'db_connect.php';


$modifieddate=date('Y-m-d H:i:s');
$divText=mysql_real_escape_string($_POST['compose-textarea']);
$page=mysql_real_escape_string($_POST['page']);


$target_Path1 = "uploadImg/";
if($page=="div1"){
	$logo = $target_Path1.basename($_FILES['divimage']['name'] );
	if($logo!=$target_Path1){
	$target_Path1 = $target_Path1.basename($_FILES['divimage']['name'] );
	$ext=pathinfo($target_Path1,PATHINFO_EXTENSION);
	$target_Path1=$target_Path1.time().".".$ext;
	move_uploaded_file( $_FILES['divimage']['tmp_name'], $target_Path1 );
	$updateImage=mysql_query("update startuptv set div1='$target_Path1' where id=1");
	}
	
	$updateText=mysql_query("update startuptv set div1Text='$divText' where id=1");

}

if($page=="div2"){
	$logo = $target_Path1.basename($_FILES['divimage']['name'] );
	if($logo!=$target_Path1){
	$target_Path1 = $target_Path1.basename($_FILES['divimage']['name'] );
	$ext=pathinfo($target_Path1,PATHINFO_EXTENSION);
	$target_Path1=$target_Path1.time().".".$ext;
	move_uploaded_file( $_FILES['divimage']['tmp_name'], $target_Path1 );
	$updateImage=mysql_query("update startuptv set div2='$target_Path1' where id=1");
	}
	
	$updateText=mysql_query("update startuptv set div2Text='$divText' where id=1");

}
if($page=="div3"){
	$logo = $target_Path1.basename($_FILES['divimage']['name'] );
	if($logo!=$target_Path1){
	$target_Path1 = $target_Path1.basename($_FILES['divimage']['name'] );
	$ext=pathinfo($target_Path1,PATHINFO_EXTENSION);
	$target_Path1=$target_Path1.time().".".$ext;
	move_uploaded_file( $_FILES['divimage']['tmp_name'], $target_Path1 );
	$updateImage=mysql_query("update startuptv set div3='$target_Path1' where id=1");
	}
	
	$updateText=mysql_query("update startuptv set div3Text='$divText' where id=1");

}


echo "<script>alert('Updated Successfully');</script>";
if($updateText)
{
	
	header("Location:$page.php");
}

?>
