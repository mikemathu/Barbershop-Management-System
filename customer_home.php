<?php
include 'customer_header.php';
?>
<h1><font color="green">USER PROFILE</h1></font></fieldset>
<?php

$kid =$_GET['uid'];
$sel = "SELECT * FROM `tbl_registration` WHERE `Reg_id` = '$kid'";
$result = mysqli_query($con , $sel);
$row =mysqli_fetch_array($result);
$d=$row['Location_id'];
$sel1 = "SELECT * FROM `tbl_location` where `Location_id`='$d'";
$result1 = mysqli_query($con , $sel1);
$row1 =mysqli_fetch_array($result1);
?>

<div><table><font size="4">
<img src="images/<?php echo $row['Image'];?>" alt="" height="300" width="250" style="padding-right: 418px; margin-bottom: -252px; padding-left: 500px; margin-top: -173px;">
<tr><td><b>NAME &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Username'];?></td></tr>
<tr><td><b>LOCATION &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row1['Location_name'];?></b></td></tr>
<tr><td><b>PHONE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Mobile'];?></b></td></tr>
<tr><td><b>EMAIL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Email'];?></b></td></tr></font></div>
</table>
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
    background-color: #6ea522;
    color: white;
}
</style>