<?php
include 'customer_header.php';
include 'dbconnect.php';
$uname=$_SESSION['username'];
$sel="select `Reg_id` from `tbl_registration` Where `Email`='$uname'";
$qry=mysqli_query($con,$sel);
$ans=mysqli_fetch_array($qry); 
$y=$_GET['uid'];
?>
<html>
<head><center><font color="green">
<h1>FEEDBACKS</h1></font>
</head>
<script type="text/javascript">
function validate()
{
 var  dvar1 = document.getElementById("txt_Feedback_Date");
if(dvar1.value=="")
{
 alert("Enter Feedback_Date...");
dvar1.focus();
return false;
}
 var  dvar3 = document.getElementById("txt_Feedback");
if(dvar3.value=="")
{
 alert("Enter Feedback...");
dvar3.focus();
return false;
}
}
</script>
<script type="text/javascript" src="calender/js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="calender/js/jquery-ui-1.8.14.custom.min.js"></script>
<link type="text/css" href="calender/css/redmond/jquery-ui-1.8.14.custom.css" rel="stylesheet" />
<script>
//  calender *****
$(function()
{
$('#txt_Feedback_Date').datepicker({
dateFormat: 'yy-mm-dd',
inline: true
});

		
});
//**********************
</script>

<form name="Feedback.php" action="feedback_action.php" method="post" onSubmit="return validate()">
<body>
      <table>
      <tr>

      <?php

            $res1=mysqli_query($con,"select * from `tbl_appointment` where `App_id`='$y' ");
            $row1=mysqli_fetch_array($res1);
            if(!empty($row1))
            {

                echo "
                <td><input type='hidden'   name='barbershop_id' id='barbershop_id' value=$row1[Barbershop_id] readonly='readonly'></td>
                ";
   
               
            }
           

               //         <td><b>Barbershop ID</b></td>
        //   <td><input type='text'   name='text_barbershop_id' id='text_barbershop_id' value='$row1[App_id] 'readonly='readonly'></td>

        ?>
        
          <!-- <td><b>App_ID</b></td> -->
          <td><input type="hidden"    name="application_id" id="application_id" value="<?php echo $y ?>"readonly="readonly"></td>
          </tr>

          <tr>
          <td><b>Feedback_date</b></td>
          <td><input type="text"  name="txt_Feedback_Date" id="txt_Feedback_Date" value="<?php echo date("Y/m/d") ?>"readonly="readonly"></td>
          </tr>
          <tr>
          <td><b>Feedback</b></td>
          <td>
		  <textarea name="txt_Feedback" id="txt_Feedback" required></textarea>
		  <!--<input type="text" name="txt_Feedback" id="txt_Feedback" value=""> --></td>
          </tr>
          <tr>
          <td></td>
          <td><input type="submit" name="cmd" id="cmd" value="Save"></td>
          </tr>
		  <tr><td><b><a href="feedback_show.php">Show Feedbacks</a></b></tr></td>
</table>
</body>
</html>
  

<?php
include "footer.php";
?>