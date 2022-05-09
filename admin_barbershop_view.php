<?php
include 'admin_header.php';
include 'dbconnect.php';
?>
<h1><font color="green">BARBERSHOPS</h1></font>
	<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Status`=2");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Barbershops Are Added Yet!!!</font></center>";
}
else
{
?>
<table>
          <td><font size=5>
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Status`=2");
		  $r=mysqli_num_rows($res);
		  $i=1;
		  while($row=mysqli_fetch_array($res))
		  {  
	  echo "<br>".$i. ". ";
		  ?>
		  
		 <a href= "view_barbershop.php?uid=<?php echo $row['Reg_id'];?>"<?php echo $row['Reg_id'];?>>UserName:	  <?php echo $row['Username']; ?>&nbsp <br><br> Mobile:<?php echo $row['Mobile']; ?></a><br>
		  <?php
		  $i++;
}}
		  ?></a>
		  </td>
          </tr></table>
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