<?php
include 'dbconnect.php';
session_start();
$a=$_SESSION['id'];
if(isset($_POST['submit']))
{
	$n=$_POST['name'];
	$g=$_POST['gen'];
	$e=$_POST['house'];
	$c=$_POST['city'];
	$d=$_POST['district'];
	$p=$_POST['phone'];
	$em=$_POST['email'];
	$pwd=$_POST['pwd'];
	$img=$_FILES['Image']['name'];
	if($img==NULL)
	{
		$edit=mysqli_query($con,"UPDATE `tbl_registration` SET `F_name`='$n',`Gender`='$g',`House_name`='$e',
		`City`='$c',`Location_id`='$d',`Mobile`='$p',`Email`='$em' WHERE `Reg_id`='$a'");
		$edit1=mysqli_query($con,"UPDATE `tbl_login` SET `username`='$em',`Password`='$pwd' WHERE `Reg_id`='$a'");
	}
	else
	{
			move_uploaded_file($_FILES['Image']['tmp_name'],"Uploads/".$_FILES['Image']['name']);
			$edit=mysqli_query($con,"UPDATE `tbl_registration` SET `F_name`='$n',`Gender`='$g',`House_name`='$e',
			`City`='$c',`Location_id`='$d',`Mobile`='$p',`Email`='$em',`Image`='$img' WHERE `Reg_id`='$a'");
			$edit1=mysqli_query($con,"UPDATE `tbl_login` SET `username`='$em',`Password`='$pwd' WHERE `Reg_id`='$a'");
			
	}
	header("location:staff_home.php?uid=$_SESSION[Reg_id]");
}
?>
