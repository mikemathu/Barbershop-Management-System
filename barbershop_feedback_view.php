<?php
include 'barbershop_header.php';
?>
				<h1><font color="Green"><center>CUSTOMER FEEDBACK</h1></font>

<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>CUSTOMER NAME</th>
<th>DATE</th>
<th>SERVICE</th>
<th>COMMENT</th>
<th></th>
</tr>
<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$r=mysqli_query($con,"Select * from `tbl_feedback` where `Barbershop_id`=$kid");

	$i=1;	
	while($row=mysqli_fetch_array($r))
	{
		$a=$row['Reg_id'];
		$b=$row['Barbershop_id'];
		$c=$row['App_id'];
        // echo $c;
	$res1=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id`='$a'");
	$row1=mysqli_fetch_array($res1);
	$res2=mysqli_query($con,"SELECT * FROM `tbl_appointment` WHERE `App_id`='$c'");
	$row2=mysqli_fetch_array($res2);
    $d=$row2['ser_cat_id'];
        //  echo $d;

	$res3=mysqli_query($con,"SELECT * FROM `tbl_category` WHERE `ser_cat_id`='$d'");
	$row3=mysqli_fetch_array($res3);
	?>
	<tr><td><center><?php echo $i?></td>
	<td><center><?php echo $row1['Username'];?></td>
<td><center><?php echo $row['Date'];?></td>
<td><center><?php echo $row3['ser_cat_name'];?></td>
<td><center><?php echo $row['Feed_msg'];?></td>

<?php }?>
<td><center>
    <a href="barbershop_appoint_service.php?uid=<?php //echo $row['App_id'];?>" onclick="return confirm('Serviced this customer??')"></a>
</td>
<?php
$i++;

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
