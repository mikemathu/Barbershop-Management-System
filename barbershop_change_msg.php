<?php
include 'barbershop_header.php';
?>
				<?php
include 'dbconnect.php';
$kid =$_GET['uid'];
$_SESSION['id']=$kid;
$select_details = "SELECT * FROM `tbl_barbershop` WHERE `Reg_id` = '$kid'";
$result = mysqli_query($con , $select_details);
while($row =mysqli_fetch_array($result))
{
	$res=mysqli_query($con,"select Password from tbl_login where Reg_id='$kid'");
	$row2=mysqli_fetch_array($res);
?>
<div><br><h1><b><center><font color="green">EDIT MESSAGE</font></b></h1>
<body>
<form action="barbershop_msg_action.php" method="post" enctype="multipart/form-data">
<table><font size="4">
<tr><td><b>Originator No. <input type="text" name="originator_no" value="<?php echo $row['Originator_Mobile'];?>"></b></td></tr>
<tr><td><b>Message:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea type="text" name="msg" style="height:180px; width:250px; "  ><?php echo $row['Message'];?></textarea></b></td></tr>


</font>

<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input onclick="return confirm('Want to update the No. and the message?')"
 type="submit" name="submit" value="UPDATE"/></td></tr>
</table></div>
</form>
</body>
</html>
<?php
}
?>
<?php
	include 'footer.php';
	
	?>