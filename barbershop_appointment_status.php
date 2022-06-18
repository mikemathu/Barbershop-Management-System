<?php
include 'barbershop_header.php';
require 'vendor/autoload.php';

if(isset($_POST['submit'])){  
  //SMS API by Message bird
	  $recipient = $_POST['recipient'];
	  $sms = $_POST['sms'];	
	  $messageBird = new \MessageBird\Client('E4X8bNIGo1lpi6rvIjSQ2nzxR'); //Live
	  $message =  new \MessageBird\Objects\Message();
	  try{    
			$message->originator = $recipient;
			$message->recipients = [$recipient];
			$message->body = $sms;
			$response = $messageBird->messages->create($message);
	  }
	  catch(Exception $e) {echo $e;}

	//Changes status in database
	$app_id=$_POST['app_id'];
	$res1=mysqli_query($con,"select * from tbl_appointment where App_id='$app_id'");
	$res=mysqli_query($con,"UPDATE `tbl_appointment` SET `Status`='2' WHERE App_id='$app_id'");
	header("location:barbershop_appointment_status.php?uid=$_SESSION[Reg_id]");
}

?>

<h1><font color="Green"><center>APPOINTMENT REQUESTS</h1></font>
<?php
	$kid=$_GET['uid'];
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
			<th></th>
		</tr>
	<?php
		include 'dbconnect.php';
		$kid=$_GET['uid'];
		$r=mysqli_query($con,"Select * from `tbl_barbershop` where `Reg_id`='$kid'");
		$r1=mysqli_fetch_array($r);
		$a=$_SESSION['Reg_id'];
		$res=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Barbershop_id`='$kid' and `Status`='1' and `Barbershop_id`='$kid'");
		$i=1;

	while($row=mysqli_fetch_array($res))
	{
		$app_id = $row['App_id'];
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
?>
	<td><center><font color="green"><b><?php echo "Approved";?></b></td><?php }?>

<?php
	include 'dbconnect.php';
	$kid =$_GET['uid'];
	$_SESSION['id']=$kid;
	$select_details = "SELECT * FROM `tbl_barbershop` WHERE `Reg_id` = '$kid'";
	$result = mysqli_query($con , $select_details);
	while($row =mysqli_fetch_array($result))
	{
?>

<td>
	<form action="barbershop_appointment_status.php" method="POST">
		<input type="hidden"  name="recipient" id="recipient" value="<?php echo $row['Originator_Mobile'];?>" >
		<textarea name="sms" id="sms" cols="30" rows="10" style="display:none;"  ><?php echo $row['Message'];?></textarea>
		<center>
		<input type="hidden" name="app_id" id="app_id" value="<?php echo $app_id;?>" >	
		<input type="submit" Value="Confirm" name="submit" id="submit" onclick="return confirm('Serviced this customer??')">
	</form>
</td>

<?php
$i++;
}}}
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










