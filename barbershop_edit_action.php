<?php
include 'dbconnect.php';
session_start();
$a=$_SESSION['id'];
if(isset($_POST['submit']))
{
	$n=$_POST['name'];
	$d=$_POST['location'];
	$p=$_POST['phone'];
	$em=$_POST['email'];
	$pwd=$_POST['pwd'];
	$img=$_FILES['Image']['name'];
	if($img==NULL)
	{
		// $edit=mysqli_query($con,"UPDATE `tbl_registration` SET `Username`='$n',`Gender`='$g',`House_name`='$e',
		// `City`='$c',`Location_id`='$d',`Mobile`='$p',`Email`='$em' WHERE `Reg_id`='$a'");
		$edit=mysqli_query($con,"UPDATE `tbl_registration` SET `Username`='$n',
		`Location_id`='$d',`Mobile`='$p',`Email`='$em' WHERE `Reg_id`='$a'");
		// $edit1=mysqli_query($con,"UPDATE `tbl_login` SET `username`='$n',`Password`='$pwd' WHERE `Reg_id`='$a'");
		$edit1=mysqli_query($con,"UPDATE `tbl_login` SET `Username`='$n', WHERE `Reg_id`='$a'");
	}
	else
	{
			move_uploaded_file($_FILES['Image']['tmp_name'],"Uploads/".$_FILES['Image']['name']);
			$edit=mysqli_query($con,"UPDATE `tbl_registration` SET `Username`='$n',`Location_id`='$d',`Mobile`='$p',`Email`='$em',`Image`='$img' WHERE `Reg_id`='$a'");
			$edit1=mysqli_query($con,"UPDATE `tbl_login` SET `Username`='$n', WHERE `Reg_id`='$a'");
			
	}
	header("location:barbershop_home.php?uid=$_SESSION[Reg_id]");
}
?>
