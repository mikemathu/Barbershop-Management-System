<?php
include 'admin_header.php';
?>
				
				<html>
<body background="images/1440x900.jpg">
<h1><font color="green">STAFF PROFILE</h1></font>
<form action="#" method="post" enctype="multipart/form-data">
<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$result=mysqli_query($con,"select * from tbl_registration where Reg_id='$kid'");
$i=1;
while($row=mysqli_fetch_array($result))
{
	$kid=$row['Reg_id'];
	$result1=mysqli_query($con,"select * from tbl_staff where Reg_id='$kid'");
$row1=mysqli_fetch_array($result1);
$d=$row['Location_id'];
$result2=mysqli_query($con,"select Location_name from tbl_district where Location_id='$d'");
$row2=mysqli_fetch_array($result2);
// $c=$row1['Cat_id'];
// $result3=mysqli_query($con,"select * from `tbl_service_category` where `Cat_id`='$c'");
// $row3=mysqli_fetch_array($result3);
	?>
	<table border=2 width=10%>
<img src="uploads/<?php echo $row['Image'];?>" alt="" height="281" width="246"     style="padding-left: 430px; margin-bottom: -325px;"/>
<tr><td>Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Username'];?> </td></tr>


<!-- <tr><td>Location:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php //echo $row['Location_id'];?></td></tr> -->
<tr><td>Location:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row2['Location_name'];?></td></tr>
<tr><td>Mobile:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Mobile'];?></td></tr>
<tr><td>Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Email'];?></td></tr>
<td><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="delete_staff.php?uid=<?php echo $row['Reg_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/DeleteRed.png" style="width:54px"></td></tr>
<td><a href="admin_barbershop_view.php?>"><img src="images/fleche.png" width="35px" style=" padding-left: 370px;">Back To Previous Page</td></tr></a>
<?php
				$i++;
}
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