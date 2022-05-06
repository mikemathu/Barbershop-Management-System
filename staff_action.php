  <?php
          $var_barbershop_Name=$_POST['txt_staff_FName'];
		//   $var_staff_LName=$_POST['txt_staff_LName'];
		//   $var_Gender=$_POST['txt_staff_Gender'];
        //   $var_Housename=$_POST['txt_Housename'];
		  $var_Town=$_POST['txt_Town'];
        //   $var_District=$_POST['txt_District'];
          $var_Mobile=$_POST['txt_Mobile'];
		  $var_Email=$_POST['txt_Email'];
		  $var_days_of_operation=$_POST['days_of_operation'];
		  $var_opening_time=$_POST['opening_time'];
		  $var_closing_time=$_POST['closing_time'];
        //   $var_qualification=$_POST['qualification'];
		//   $var_specialization=$_POST['txt_specialization'];
		//   $var_university=$_POST['txt_university'];
		//   $var_Year=$_POST['txt_year'];
	    //   $var_experience=$_POST['txt_experience'];
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
		   window.location.href='staff_Add.php';</script>");
	  }
	  else
	  {
		  move_uploaded_file($_FILES["txt_Image"]["tmp_name"],"Uploads/".$_FILES["txt_Image"]["name"]);
     
      $varsql="INSERT INTO `tbl_registration`(`Username`,  `Town`, `Dis_id`,
	   `Mobile`, `Email`, `Image`, `Status`)values('$var_barbershop_Name',
	  '$var_Town','0','$var_Mobile',
	  '$var_Email','$var_Image','2')";
	  
      $varresult=mysqli_query($con,$varsql);
	  $z=mysqli_insert_id($con);
	  $varsql1=mysqli_query($con,"INSERT INTO `tbl_login`(`Username`, `Password`, `Role_id`,
	  `Reg_id`, `Status`) VALUES ('$var_Email','$p','2','$z','1')");
	  
	//    $varsql3= mysqli_query($con,"INSERT INTO `tbl_staff`(`Reg_id`, `Cat_id`, `Qualification`,
	//    `University`, `Year_of_pass`, `Experience`) VALUES
	// ('$z')");
	   $varsql3= mysqli_query($con,"INSERT INTO `tbl_staff`(`Reg_id`, `Days_of_operation`, `Opening_time`,
	   `Closing_time`) VALUES
	('$z','$var_days_of_operation','$var_opening_time','$var_closing_time')");
     
	  header("Location:admin_staff_view.php");
		}
          
  
      ?>
