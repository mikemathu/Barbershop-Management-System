<?php
include 'barbershop_header.php';
?>








				<h1><font color="Green"><center>APPOINTMENT REQUESTS</h1></font>
				<?php
$kid=$_GET['uid'];
 //echo $kid;
// $r=mysqli_query($con,"Select * from `tbl_barbershop` where `Reg_id`='$kid'");
// $r=mysqli_query($con,"Select * from `tbl_barbershop` where `Reg_id`=$kid");
// $r1=mysqli_fetch_array($r);
//  $x=$r1['Cat_id'];
// $x=1;
 //echo $x;
// $res1=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Cat_id`='$x' and `Status`='1'");
$res1=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Barbershop_id`='$kid' and `Status`='1'");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Appointments Yet !!!</font></center>";
}
else
{
?>
<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>CUSTOMER NAME</th>
<th>SERVICE</th>
<th>DATE</th>
<th>TIME</th>
<th>BARBERSHOP NAME</th>
<th>STATUS</th>
<th>SERVICE STATUS</th>
<th></th></tr>
<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
// echo $kid;
$r=mysqli_query($con,"Select * from `tbl_barbershop` where `Reg_id`='$kid'");
$r1=mysqli_fetch_array($r);
$a=$_SESSION['Reg_id'];
// $x=$r1['Cat_id'];
$res=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Barbershop_id`='$kid' and `Status`='1' and `Barbershop_id`='$kid'");
	$i=1;



	while($row=mysqli_fetch_array($res))
	{
		$a=$row['ser_cat_id'];
		$b=$row['Reg_no'];
		$c=$row['Barbershop_id'];
	$res1=mysqli_query($con,"SELECT * FROM `tbl_category` WHERE `ser_cat_id`='$a'");
	$row1=mysqli_fetch_array($res1);
	$res2=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id`='$b'");
	$row2=mysqli_fetch_array($res2);
	$res3=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id`='$c'");
	$row3=mysqli_fetch_array($res3);
	?>
	<tr><td><center><?php echo $i?></td>
	<td><center><?php echo $row2['Username'];?></td>
<td><center><?php echo $row1['ser_cat_name'];?></td>
<td><center><?php echo $row['Date'];?></td>
<td><center><?php echo $row['Time'];?></td>
<td><center><?php echo $row3['Username'];?></td>
<?php
$s=$row['Status'];


if($s==1)
{
?>
<td><center><font color="green"><b><?php echo "Requested";?></b></td>
<?php
}
else if($s==0)
{
?><td><center><font color="green"><b><?php echo "Approved";?></b></td><?php }?>

<?php
include 'dbconnect.php';
$kid =$_GET['uid'];
$_SESSION['id']=$kid;
$select_details = "SELECT * FROM `tbl_barbershop` WHERE `Reg_id` = '$kid'";
$result = mysqli_query($con , $select_details);
while($row =mysqli_fetch_array($result))
{
?>



<form action="barbershop_appoint_service.php" method="POST">
	<input type="hidden" name="recipient" id="recipient" value="<?php echo $row['Originator_Mobile'];?>" >






	<textarea name="sms" id="sms" cols="30" rows="10" style="display:none;" ><?php echo $row['Message'];?></textarea>



<?php
}
?>
	

<!-- <td> <center>

<a  

href="barbershop_appoint_service.php?uid=<?php //echo $row['App_id'];?>"
onclick="return confirm('Serviced this customer??')"

>
<img src="images/DeleteRed.png" width="24px">
<!-- <input type="submit" name="submi" value="confirm"  

onclick="return confirm('Serviced this customer??')" 

>
</a>



</td> -->


<td><center><a href="barbershop_appoint_service.php?uid=<?php echo $row['App_id'];?>" onclick="return confirm('Serviced this customer??')"><img src="images/symbol_check.png" width="30px"></a></td>
</form>






<?php
$i++;
}}
?>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>







