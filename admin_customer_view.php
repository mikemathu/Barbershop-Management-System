<?php
include 'admin_header.php';
include 'dbconnect.php';
?>
<h1><font color="green">CUSTOMERS</h1> </font>
<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Status`=1");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Customers were Registered Yet!!!</font></center>";
}
else
{
?>
<table>
          <td><font size=5> 
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Status`=1");
		  $r=mysqli_num_rows($res);
		  $i=1;
		  while($row=mysqli_fetch_array($res))
		  { 
echo "<br>".$i. ".";	  
		  ?>
		 
		 <a href= "customer_view.php?uid=<?php echo $row['Reg_id'];?>"<?php echo $row['Reg_id'];?>>	  <?php echo $row['Username']; ?></a><br>
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