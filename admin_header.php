<!--A  W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>The Barbers Arena | Home   </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.min.js"></script> 
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script type='text/javascript' src='menu_jquery.js'></script>
    <link rel='stylesheet' type='text/css' href='styles.css' />
    <link rel='stylesheet' type='text/css' href='table.css' />
	<link rel='stylesheet' type='text/css' href='bootstrap.css' />
</head>
<body>
	<div class="header">
		<div class="header_top">
			<div class="wrap">
			 <div class="logo">
						<a href="index.html"><img src="images/New/Adjusted/Thelogo7.png" /></a>
					</div>
			    <div class="call">
			    	<p><img src="images/45.png" alt="" />Call US: 0711-222-333</p>
			    </div>
			  			 
			<div class="clear"></div>
  		</div>
  	  </div>
	<div class="header_bottom">
		<div class="wrap">
	     	<div id='cssmenu'>
			<?php session_start();
include 'dbconnect.php';

if(!isset($_SESSION['Reg_id']))
	{
		header("location:login.php");
	}
	?>
<ul>

   <li ><a href='admin_home.php'><span>Home</span></a></li>
   <li ><a href='admin_app_aprove.php'><span>Appointments</span></a></li>
   <li ><a href='admin_feedback_view.php'><span>Feedbacks</span></a></li>


   <li class='has-sub'><a href='#'><span>Services</span></a>
      <ul>
         <li ><a href='add_service.php'><span>Add Services</span></a></li>
		 <li ><a href='add_category.php'><span>Add Service Categories</span></a></li>
      </ul>
   </li>
	 <li class='has-sub'><a href='#'><span>BarberShops</span></a>
      <ul>
         <li ><a href='barbershop_add.php'><span>Add Barbershop</span></a> </li>
         <li ><a href='admin_barbershop_view.php'><span>View Barbershops</span></a></li>
		  <!-- <li ><a href='leave_approval.php'><span>Leave Requests</span></a></li> -->
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Customers</span></a>
      <ul>
         <li ><a href='admin_customer_view.php'><span>Customer Details</span></a> </li>
		   <!-- <li ><a href='schedules.php'><span>Schedules Done</span></a></li> -->
		     <!-- <li ><a href='transactions.php'><span>Transactions</span></a></li> -->
		    
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Profile</span></a>
      <ul>
         <li ><a href='change_password.php'><span>Change Password</span></a> </li>
          <li><a href='logout.php'><span>Logout</span></a></li> 
      </ul>
   </li>
  
</div>
</div>
</div>
<div class="strip"> </div>
<h4 style="text-align: center;">ADMIN DASHBOARD</h3>
 <div class="main">
    <div class="content">
    
    	 <div class="wrap">
          
    	 	<div class="image group">
				
				<div class="grid span_2_of_3">