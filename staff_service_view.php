<?php
include 'staff_header.php';
?>
</head>
<body><br><br>
<?php
$x=$_GET['uid'];
$res1=mysqli_query($con,"select * from `tbl_category` where Cat_id in (select Cat_id from `tbl_service_category` where Cat_id='$x')");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<h1><center><font color=green>CATEGORIES</h1></font>";
	echo "<br><br><center><font color=red size=3>No Service Categories added Yet !!!</font></center>";
}
else
{
?>
<table width=75%>
<tr><th>Id</th>
<th>Category name</th>
<th>Price</th>
</tr>
<?php
include 'dbconnect.php';
$x=$_GET['uid'];
$results=mysqli_query($con,"select * from `tbl_category` where Cat_id in (select Cat_id from `tbl_service_category` where Cat_id='$x')");
$i=1;
$res=mysqli_query($con,"select * from tbl_service_category where Cat_id='$x'");
	$row1=mysqli_fetch_array($res);
	echo "<h1><font color=green><center>".$row1['Cat_name']."</h1></font><br><br>";
while($row=mysqli_fetch_array($results))
{
	
echo "<tr><td>$i</td>
	<td>$row[ser_cat_name]</td>
	<td>$row[ser_cat_price]</td>";
	$i++;
}}
?>
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
    background-color: #4CAF50;
    color: white;
}
</style>
		<?php
include 'footer.php';
?>		