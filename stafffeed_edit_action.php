<?php
include 'dbconnect.php';
	$n=$_POST['feed']; 
	
		$edit=mysqli_query($con,"UPDATE `tbl_feedback` SET `Feed_msg`='$n'");
	
	header("location:barbershop_feedback_show.php");

?>