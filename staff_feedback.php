<?php
include 'staff_header.php';
include 'dbconnect.php';
$uname=$_SESSION['username'];
$sel="select `Reg_id` from `tbl_registration` Where `Email`='$uname'";
$qry=mysqli_query($con,$sel);
$ans=mysqli_fetch_array($qry); 
?>
<html>
<head>
<h1>  <font color="green"><center>FEEDBACK</h1></font>
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

<center><form name="staffFeedback.php" action="staff_fee_action.php" method="post" onSubmit="return validate()">
<body>
      <table>
          <tr>
          <td><b>Feedback_date</b></td>
          <td><input type="text" name="txt_Feedback_Date" id="txt_Feedback_Date" value="<?php echo date("Y/m/d") ?>"readonly="readonly"></td>
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
		 <tr><td> <b><a href="staff_feedback_show.php">Show Feedbacks</a></b></tr></td>
</table>
</body>
</html>
  

<?php
include "footer.php";
?>