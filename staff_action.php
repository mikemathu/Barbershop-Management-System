  <?php
          $var_barbershop_Name=$_POST['txt_shop_Name'];
          $var_location=$_POST['txt_location'];
		  $var_specialization=$_POST['txt_specialization'];
          $var_Mobile=$_POST['txt_Mobile'];
		  $var_Email=$_POST['txt_Email'];
		  $var_days_of_operation=$_POST['days_of_operation'];
		  $var_opening_time=$_POST['opening_time'];
		  $var_closing_time=$_POST['closing_time'];
		  $var_Pwd=$_POST['txt_Pwd'];
		  $p=md5($var_Pwd);
		   $var_cPwd=$_POST['txt_cPwd'];
		  $var_Image=$_FILES["txt_Image"]["name"];
		   include 'dbconnect.php';
		  $sel1="select * from `tbl_registration` where Username='$var_barbershop_Name'";
	  $qry1=mysqli_query($con,$sel1);
	  $num=mysqli_num_rows($qry1);
	  if($num>0)
	  {
	 echo ("<script language='javascript'>window.alert('Username already exists!!Try with another..')
		   window.location.href='barbershop_add.php';</script>");
	  }
	  else
	  {
		  move_uploaded_file($_FILES["txt_Image"]["tmp_name"],"Uploads/".$_FILES["txt_Image"]["name"]);
     
      $varsql="INSERT INTO `tbl_registration`(`Username`, `Location_id`,
	   `Mobile`, `Email`, `Image`, `Status`)values('$var_barbershop_Name',
	  '$var_location','$var_Mobile',
	  '$var_Email','$var_Image','2')";
	  
      $varresult=mysqli_query($con,$varsql);
	  $z=mysqli_insert_id($con);
	  $varsql1=mysqli_query($con,"INSERT INTO `tbl_login`(`Username`, `Password`, `Role_id`,
	  `Reg_id`, `Status`) VALUES ('$var_barbershop_Name','$p','2','$z','1')");
	  
	//    $varsql3= mysqli_query($con,"INSERT INTO `tbl_staff`(`Reg_id`, `Cat_id`, `Qualification`,
	//    `University`, `Year_of_pass`, `Experience`) VALUES
	// ('$z')");
	$varsql3= mysqli_query($con,"INSERT INTO `tbl_staff`(`Reg_id`, `Cat_id`, `Days_of_operation`, `Opening_time`,
	`Closing_time`) VALUES
 ('$z','$var_specialization','$var_days_of_operation','$var_opening_time','$var_closing_time')");

	//    $varsql3= mysqli_query($con,"INSERT INTO `tbl_staff`(`Reg_id`, `Days_of_operation`, `Opening_time`,
	//    `Closing_time`) VALUES
	// ('$z','$var_days_of_operation','$var_opening_time','$var_closing_time')");
     
	  header("Location:admin_barbershop_view.php");
		}
          
  
      ?>
