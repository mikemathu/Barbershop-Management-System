<?php
include 'customer_header.php';
include 'dbconnect.php';
$kid =$_GET['uid'];
$_SESSION['id']=$kid;
$select_details = "SELECT * FROM `tbl_registration` WHERE `Reg_id` = '$kid'";
$result = mysqli_query($con , $select_details);
while($row =mysqli_fetch_array($result))
{
		$res=mysqli_query($con,"select Password from tbl_login where Reg_id='$kid'");
	$row2=mysqli_fetch_array($res);
?>
<div><br><h1><b><font color="green">EDIT PROFILE</font></b></h1>
<body>
<form action="edit_action.php" method="post" enctype="multipart/form-data">
<table><font size="4">
<img src="Uploads/<?php echo $row['Image'];?>" alt="" height="300" width="250" style="padding-right: 418px; margin-bottom: -344px; padding-left: 500px; margin-top: -173px;">
<tr><td><b>USERNAME:&nbsp&nbsp&nbsp <input type="text" name="username" value="<?php echo $row['Username'];?>"></b></td></tr>		 
<tr><td><b>LOCATION: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b>
          <select name="location">
		  <option>--Select--</option>
		  <?php
		 
		  $res=mysqli_query($con,"SELECT * FROM `tbl_district`");
		  $r=mysqli_num_rows($res);
		  while($row1=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row1['Location_id'];?>>	  <?php echo $row1['Location_name']; ?></option>
		  <?php
		  }
		  ?>
		</select></td>
          </tr>
<tr><td><b>PHONE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="phone" value="<?php echo $row['Mobile'];?>"></b></td></tr>
<tr><td><b>EMAIL:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="email" value="<?php echo $row['Email'];?>"></b></td></tr>
<tr><td><b>PHOTO: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="Image" value="<?php echo $row['Image'];?>"></b></td></tr>
<tr><td>    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" name="submit" value="UPDATE"/></td></tr>
</table></div>
</form>
</body>
</html>
<?php
}
?>