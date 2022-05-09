<?php
include 'barbershop_header.php';
?>
<h1><center><font color="green">STAFF PROFILE</h1></font></fieldset>
<?php
include 'dbconnect.php';

$kid =$_GET['uid'];
$sel = mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id` = '$kid'");
$row =mysqli_fetch_array($sel);
$a=$row['Location_id'];
$sel1 = mysqli_query($con,"SELECT * FROM `tbl_location` where `Location_id`='$a'");
$row1 =mysqli_fetch_array($sel1);
$sel2 = mysqli_query($con,"SELECT * FROM `tbl_barbershop` where `Reg_id`='$kid'");
$row3=mysqli_fetch_array($sel2);
$result4=mysqli_query($con,"select Cat_name from tbl_service_category");
$row4=mysqli_fetch_array($result4);
?><center>
<table><font size="4">
<!-- <img src="images/<?php //echo $row['Image'];?>" alt="" height="200" width="250" style="padding-right: 418px; margin-bottom: -330px; padding-left: 500px; margin-top: -600px;"> -->
<tr><td><b>NAME:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Username'];?>&nbsp </b></td></tr>
<tr><td><b>LOCATION:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row1['Location_name'];?></b></td></tr>
<tr><td><b>PHONE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Mobile'];?></b></td></tr>
<tr><td><b>EMAIL:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Email'];?></b></td></tr>
<tr><td><b>SPECIALIZATION:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row4['Cat_name'];?></b></td></tr>
</font></div></table>
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
	<?php
	include 'footer.php';
	
	?>