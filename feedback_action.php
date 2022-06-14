<?php
include 'dbconnect.php';
if(isset($_POST['cmd']))
{
	session_start();
$kid =$_SESSION['Reg_id'];
$var_Feedback_Date=$_POST['txt_Feedback_Date'];
$var_Feedback=$_POST['txt_Feedback'];  
$var_barbershop_id = $_POST['barbershop_id'];
$var_application_id=$_POST['application_id']; 
// $var_application_id=700; 
		  //$z=$_SESSION['Reg_id'];
$varsql="insert into `tbl_feedback` (`App_id`,`Reg_id`,`Barbershop_id`, `Date`,`Feed_msg`,`status`) values('$var_application_id','$kid',   
'$var_barbershop_id','$var_Feedback_Date','$var_Feedback','1')";
$varresult=mysqli_query($con,$varsql);
header("Location:feedback_show.php");
}
?>