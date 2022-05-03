
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Free Reflection Salon & span Website Template | Home :: w3layouts</title>
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
						<a href="index.html"><img src="images/47.png" alt="" /></a>
					</div>
			    <div class="call">
			    	<p><img src="images/45.png" alt="" />Call US: 111-234-56789</p>
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
	// {
	// 	header("location:customer_Add.php");
	// }
	?>
   <li ><a href='index.php'><span>Home</span></a></li>         
		 
    <li class='has-sub'><a href='#'><span>Login</span></a>
      <ul>
		 <li ><a href='barbershop_login.php'><span>Barbershop</span></a></li>
		 <li ><a href='customer_login.php'><span>Customer</span></a></li>
      </ul>
   </li>
	
   <li class='has-sub'><a href='#'><span>Register</span></a>
      <ul>
         <li ><a href='barbershop_Add.php'><span>Barbershop</span></a> </li>
         <li ><a href='Customer_Add.php'><span>Customer</span></a></li> 
      </ul>
   </li>
 
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