<?php
include 'dbconnect.php';
session_start();
$a=$_SESSION['id'];
if(isset($_POST['submit']))
{
	$n=$_POST['originator_no'];
	$d=$_POST['msg'];
	if($img==NULL)
	{
		$edit=mysqli_query($con,"UPDATE `tbl_barbershop` SET `Originator_Mobile`='$n',
		`Message`='$d' WHERE `Reg_id`='$a'");		
	}
    
	header("location:barbershop_change_msg.php?uid=$_SESSION[Reg_id]");
}
?>
