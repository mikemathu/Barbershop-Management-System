
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
						<!-- <a href="index.html"><img src="images/New/Adjusted/Thelogo7.png" /></a> -->
						<a href="index.html"><img src="images/New/Adjusted/Thelogo7.png" alt="" style="float:left; margin-left:100px;" /></a>

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
<ul>
<?php session_start();
include 'dbconnect.php';

if(!isset($_SESSION['Reg_id']))
	{
		// header("location:login.php");
	}
	?>
   <li ><a href='index.php'><span>Home</span></a></li>         
		 
    <li><a href='login.php'><span>Login</span></a></li>
	
   <li ><a href='Customer_Add.php'><span>Register</span></a> </li>
 
   <li><a href='services.php'><span>Services</span></a></li>
    <li > <a href='about.php'><span>About Us</span></a></li>
</ul>
</div>
</div>
</div>
<div class="strip"> </div>



 <div class="main">
    <div class="content" style="    padding: 106px 0;">
    
    	 <div class="wrap">
          
    	 	<div>
				
				<div class="grid span_2_of_3">
				</div>