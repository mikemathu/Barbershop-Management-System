
<?php
include 'customer_header.php';
include 'dbconnect.php';
?>
<?php
$uname=$_SESSION['username'];
//echo $uname;

$query = "select * from tbl_registration where Username='$uname'";
// $query = "select * from tbl_registration where Email='$uname'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
//echo $row['Reg_id'];

include 'dbconnect.php';
$sel="select Reg_id,Username from tbl_registration Where Username='$uname'";
// $sel="select Reg_id,Username from tbl_registration Where Email='$uname'";
$qry=mysqli_query($con,$sel);
$ans=mysqli_fetch_array($qry);
$custid=$ans['Reg_id'];
$custname=$ans['Username'];

$uid=$_GET['uid'];

// echo $uid;
?>
<html>
<head><center>
<h1><font color="green"> SERVICE BOOKING</h1></font>
</head>
<script type="text/javascript">
function validate()
{
 var  dvar1 = document.getElementById("txt_Booking_date");
if(dvar1.value=="")
{
 alert("Enter Booking_date...");
dvar1.focus();
return false;
}
 var  dvar2 = document.getElementById("slb_Customer_id");
if(dvar2.value=="")
{
 alert("Select Customer Name ...");
dvar2.focus();
return false;
}
 var  dvar3 = document.getElementById("slb_Package_id");
if(dvar3.value=="")
{
 alert("Select Package Name ...");
dvar3.focus();
return false;
}
 var  dvar4 = document.getElementById("txt_Amount");
if(dvar4.value=="")
{
 alert("Enter Amount...");
dvar4.focus();
return false;
}

}
</script>
<script type="text/javascript" src="calender/js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="calender/js/jquery-ui-1.8.14.custom.min.js"></script>
<link type="text/css" href="calender/css/redmond/jquery-ui-1.8.14.custom.css" rel="stylesheet" />
<script type="text/javascript">
$(document).ready(function()
{
$("#slb_Package_id").change(function()
{
 alert($(this).val());
$.post('Package_booking_Add_jqry.php',{id: $(this).val()}, function(data)
{
 alert(data);
 $("#txt_Amount").val(data);
});
});
});
</script>
<link href="jquery.timepicker.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 <script type="text/javascript" src="jquery.timepicker.js"></script>
  <script type="text/javascript" src="jquery.timepicker.min.css"></script> <script type="text/javascript" src="jquery.timepicker.min.js"></script>
 <script>$(function(){$('#time').timepicker();});</script>
 

<form name="Package_booking_Add.php" action="appointment_booking_action.php" method="post" onSubmit="return validate()">
<body>
      <table>
      <tr>
          <td><input type="hidden" name="appointment_reg_no" id="appointment_reg_no" value="<?php echo  $row['Reg_id'];?>"readonly="readonly"></td>
          </tr>
      <tr> <td>Name</td><td><input type="text" name="slb_Customer_id" id="slb_Customer_id" value="<?php echo $custname; ?>" readonly="readonly">
          <tr>
          <td><b>Date</b></td>
          <td><input type="text" name="txt_Booking_date" id="txt_Booking_date" value="<?php echo date("Y/m/d") ?>" readonly="readonly"></td>
          </tr>
          <!--<tr>
          <td><b>Customer</b></td>
          <td><select  name="slb_Customer_id"  id="slb_Customer_id">
     <?php
      
      $var="select * from tbl_registration";
      $result=mysqli_query($con,$var);
        while($row=mysqli_fetch_array($result))
          { ?>
           <option value="<?php echo $row['Reg_id']; ?>"><?php echo $row['F_name']; ?></option>
          <?php } ?>
          </select>
          </td>
          </tr>-->
         <?php
    //   $kid=$_GET['uid'];
    //   $var="select * from tbl_category where ser_cat_id='$kid'";
    //   $var="select * from tbl_category";
    //   $result=mysqli_query($con,$var);
        // while($row1=mysqli_fetch_array($result))
        //   { 
	//   $x=$row1['Cat_id'];
	  //$_SESSION['Cat_id']=$x;?>
	<tr>


    <td><b>Services</b></td> 
                <td><select name="service">
            <option>--Select--</option>
            
            <?php
        
              $res1=mysqli_query($con,"SELECT * FROM `tbl_category`");
              $row2=mysqli_fetch_array($res1);

              foreach($res1 as $roww){
                
                // echo $row["Username"];
                 ?>               

             
              <!-- <form action="appointment_booking_action.php" method="POST" > -->
                 <option value = <?php echo $roww['ser_cat_id'];?>>    <?php echo $roww['ser_cat_name']; ?></option>
                 <!-- <input type="text" name=""  value=" <?php echo $row2['Username']; ?>" readonly > -->
              <!-- </form> -->

<?php
}
        
?>
</td>





          <!-- <td><b>Service</b></td>
          <td><input type="text" name="service" id="service" value="<?php //echo $row1['ser_cat_name'];?>"readonly="readonly"></td> -->
          </tr>
          <!-- <tr>
             <td><b>Amount</b></td>
            <td><input type="text" name="txt_Amount" id="txt_Amount" value="<?php //echo $row1['ser_cat_price'];?>"></td> 
          </tr> -->
          <tr>
            <td><b>Appoinment_date</b></td>
            <td><input type="date" name="txt_Appoinment_Date" id="txt_Appoinment_Date" value="<?php echo date("Y-m-d")?>" min="<?php echo date("Y-m-d")?>" required></td>
          </tr>
          
          <tr>
            <td><b>Appoinment_time</b></td>
            <td><input type="time" name="time" id="time"    required/></td></tr>
        
            <td><b>Barbershop </b></td> 
                
                    
            <!-- <option>--Select--</option> -->
            
            <?php
        
              $res1=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Reg_id`=$uid");
              $row2=mysqli_fetch_array($res1);

            //   foreach($res1 as $roww){
                
                // echo $row["Username"];
                 ?>

<td>
  <form action="appointment_booking_action.php" method="POST" >
    <input type="text" name=""  value=" <?php echo $row2['Username']; ?>" readonly >
    <input type="hidden" name="berbershop_name"  value=" <?php echo $row2['Reg_id']; ?>" readonly >
  </form>
</td>
                 

             

                 <!-- <option value = <?php ///echo $row2['Reg_id'];?>>    <?php //echo $row2['Username']; ?></option> -->

<?php
// }
        
?>
            

<!-- <option value = <?php //echo $row['Reg_id'];?>>	  <?php //echo $row['Username']; ?></option> -->
           
   







		  <?php
	
	//    $res1=mysqli_query($con,"SELECT * FROM `tbl_barbershop` where `Cat_id`='$x' ");
	// 	 while($row2=mysqli_fetch_array($res1))
	// 	  {  
	//   $y=$row2['Reg_id'];
	//    $res=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Reg_id`='$y'");
	// 	  $row3=mysqli_fetch_array($res);
	   
		  ?>
		  <!-- <option value = <?php //echo $row3['Reg_id'];?>>	  <?php //echo $row3['Username']; ?></option> -->
		  <?php
		//   }
		  ?>
		
    
          </tr>
          </tr>
		  
		  <?php
		//   }
		  ?>
          <tr>
          <td></td>
          <td><input type="submit" name="cmd" id="cmd" value="Book"></td>
          </tr>
</table>
</body>
</html>
<?php
include "footer.php";
?>
 