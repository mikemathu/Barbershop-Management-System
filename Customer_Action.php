  <?php
 
          $var_Customer_UserName=$_POST['txt_Customer_UserName'];
          $var_Location=$_POST['txt_Location'];
          $var_Mobile=$_POST['Mobile'];
          $var_Email=$_POST['txt_Email'];
		  $var_Pwd=$_POST['txt_Pwd'];
		  $pwd=md5($var_Pwd);
		  $var_cPwd=$_POST['txt_cPwd'];
		 
		  $var_Image=$_FILES["txt_Image"]["name"];
		   include 'dbconnect.php';
		 $sel1="select * from `tbl_registration` where Email='$var_Email'";
	  $qry1=mysqli_query($con,$sel1);
	  $num=mysqli_num_rows($qry1);
	  if($num>0)
	  {
	 echo ("<script language='javascript'>window.alert('Email already exists!!Try with another..')
		   window.location.href='Customer_Add.php';</script>");
	  }
	  else
	  {
		  move_uploaded_file($_FILES["txt_Image"]["tmp_name"],"Uploads/".$_FILES["txt_Image"]["name"]);
     
      $varsql="INSERT INTO `tbl_registration`(`Username`, 
	  `Location_id`, `Mobile`, `Email`, `Image`, `Status`)values('$var_Customer_UserName','$var_Location','$var_Mobile',
	  '$var_Email','$var_Image','1')";
      $varresult=mysqli_query($con,$varsql);
	  $z=mysqli_insert_id($con);
	  $varsql1=mysqli_query($con,"INSERT INTO `tbl_login`(`Username`, `Password`, `Role_id`,
	  `Reg_id`, `Status`) VALUES ('$var_Customer_UserName','$pwd','1','$z','1')");
    header("Location:login.php");
		
	  }
      ?>
