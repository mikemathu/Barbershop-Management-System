<?php
include 'dbconnect.php';
	$n=$_POST['feed']; 
	$uid=$_POST['uid'];
	
		$edit=mysqli_query($con,"UPDATE `tbl_feedback` SET `Feed_msg`='$n' WHERE `Feed_id` = '$uid' ");
	
	header("location:feedback_show.php");

?>