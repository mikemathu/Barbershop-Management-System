<?php
 include 'dbconnect.php';
//  date_default_timezone_set('asia/kolkata'); 
 date_default_timezone_set('africa/nairobi'); 
 session_start();
 $ii=0;
 $f=0;
 $username = $_SESSION['username'];

	  $appointment_reg_no=$_POST['appointment_reg_no'];
	  $service=$_POST['service'];
	  $sql=mysqli_query($con,"select * from tbl_category where ser_cat_name='$service'" );
	  $row=mysqli_fetch_array($sql);
	  $b=$row['ser_cat_id'];
	  $_SESSION['ser_cat_id']=$b;
	  $c=$row['Cat_id'];
	  $date=$_POST['txt_Appoinment_Date'];
	  $time=$_POST['time'];

	  $s=$_POST['txt_staff'];
	   	
	// $at="10:00"; 
	$at="08:00"; 
	$bt="20:00";
	// $bt="10:00";
	$ct=date("H:i");
	$cd=date("Y-m-d");
if(($time>=$at)&&($time<=$bt)) //is time selected between 08:00 am and 20:00hrs?
{
	if((($date==$cd)&&($time>$ct))||($date!=$cd)) //is the difference btween time selected within the specified 20 minutes interval?
{			
$resu=mysqli_query($con,"select * from `tbl_appointment` where `Barbershop_id`='$s' and `Date`='$date' and `Status`!='5'");
while($rw=mysqli_fetch_array($resu))
{
$f=1; 
$ti=$time;
$a1=strtotime("-20 minutes",strtotime($ti));
$a2=date("H:i",$a1);
$b1=strtotime("+20 minutes",strtotime($ti));
$b2=date("H:i",$b1);
 	
	  $sel1="select * from `tbl_appointment` where `Time` BETWEEN '$a2' AND '$b2'";
	  $qry1=mysqli_query($con,$sel1);
	  $num=mysqli_num_rows($qry1);
	  if($num>0)
	  {
	 echo ("<script language='javascript'>window.alert('Already booked in this time..Try another time..')
		   window.location.href='appointment_add.php?uid=$_SESSION[ser_cat_id]';</script>");
	  }
	  else
	  {
	  $sql=mysqli_query($con,"select * from tbl_appointment where Date='$date' and `Barbershop_id`='$s'" );
	  while($row=mysqli_fetch_array($sql))
		{
		  $ii++;
		}
		if($ii>2)
		{
			echo ("<script language='javascript'>window.alert('Appointment is full for the date:.$date')
		   window.location.href='appointment_add.php?uid=$_SESSION[ser_cat_id]'</script>");
			break;			
		}
		else
		{

	 $sql=mysqli_query($con,"INSERT INTO `tbl_appointment`(`Reg_no`, `ser_cat_id`, `Cat_id`,`Date`,`Time`,`Barbershop_id`,`Status`) 
	  VALUES ('$appointment_reg_no','$b','$c','$date','$time','$s',1)");
	 if($sql)
	  {
		   echo ("<script language='javascript'>window.alert('Service Booked!!')
		   window.location.href='appointment_status.php';</script>");
	  }
	  else
	  {
		   echo ("<script language='javascript'>window.alert('Booking Failed.Try Again!!')
		   window.location.href='appointment_status.php';</script>");
	  }
}
}
}
if($f==0)
{

	$sql=mysqli_query($con,"INSERT INTO `tbl_appointment`(`Reg_no`, `ser_cat_id`, `Cat_id`,`Date`,`Time`,`Barbershop_id`,`Status`) 
	  VALUES ('$appointment_reg_no','$b','$c','$date','$time','$s',1)");
if($sql)
	  {
		   echo ("<script language='javascript'>window.alert('Service Booked!!')
		   window.location.href='appointment_status.php';</script>");
	  }
	  else
	  {
		   echo ("<script language='javascript'>window.alert('Booking Failed.Try Again!!')
		   window.location.href='appointment_status.php';</script>");
	  }
	  
	  }   
}
else
{
	?>
<center><h2><script language='javascript'>window.alert('Sorry,the time you selected already passed!!')
		   window.location.href='appointment_add.php?uid=<?php echo $_SESSION['ser_cat_id'];?>'</script></h2>
<?php 
}
}
else
{ 	
?>
<center><h2><script language='javascript'>window.alert('Sorry, Appointment time is from 08:00am - 8:00pm!!')
		   window.location.href='appointment_add.php?uid=<?php echo $_SESSION['ser_cat_id'];?>'</script></h2>
<?php 
}
?>