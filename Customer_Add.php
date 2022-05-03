<?php
include "index_header.php";
  include 'dbconnect.php';
?>
<html>
<head>
    <h1><font color="green">     CUSTOMER REGISTRATION</h1></font>
</head>
    <body>
<form name="Customer_Add.php" action="Customer_Action.php" method="post" onSubmit="return validate()" enctype="multipart/form-data">
      <table>
          <tr>
          <td><b>Username</b></td>
          <td><input type="text" name="txt_Customer_UserName" id="txt_Customer_UserName" placeholder="Enter User name..." value="" required onchange='Validate();'></td>
          </tr>
          <tr>
		  <script>		
function Validate() 
{
    var val = document.getElementById('txt_Customer_UserName').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('txt_Customer_UserName').value = "";
        return false;
    }

    return true;
}
</script>

          <td><b>District</b></td>
          <td><select name="txt_District">
		  <option>--Select--</option>
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_district`");
		  $r=mysqli_num_rows($res);
		  while($row=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row['Dis_id'];?>>	  <?php echo $row['Dis_name']; ?></option>
		  <?php
		  }
		  ?>
		</select></td>
          </tr>
		  <tr>
          <td><b>Town</b></td>
          <td><input type="text" name="txt_Town" id="txt_Town" value="" placeholder="Enter Town..." required onchange='Validtown();' ></td>
          </tr>
          <tr>
		  	  	  <script>		
function Validtown() 
{
    var val = document.getElementById('"txt_City').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('"txt_City').value = "";
        return false;
    }

    return true;
}
</script>
          <td><b>Mobile</b></td>
          <td><input type="text" name="Mobile" id="Mobile" maxlength='10' value="" placeholder="Enter Mobile number..." required onchange='Validat();' ></td>
          </tr>
		           <tr>
				   <script>		
function Validat() 
{
    var val = document.getElementById('Mobile').value;

    // if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    if (!val.match(/^[0-9][0-9]{1,9}$/)) 
    {
        alert('Only Numbers are allowed and must contain 10 number');
	
		
		            document.getElementById('Mobile').value = "";
        return false;
    }

    return true;
}

</script>

          <td><b>Email</b></td>
          <td><input type="email" name="txt_Email" id="txt_Email" value="" placeholder="Enter Email id..."required onchange='Validata();'></td>
          </tr>
		   
		         <tr>
				 <script>		
function Validata() 
{
    var val = document.getElementById('txt_Email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        alert('Enter a Valid Email');
		
		     document.getElementById('txt_Email').value = "";
        return false;
    }

    return true;
}

</script>
		
          <td><b>Password</b></td>
          <td><input type="password" name="txt_Pwd" id="txt_Pwd" value="" placeholder="Enter Password..."required onchange='Validp();'></td>
          </tr>
		         <tr>
             <tr>
			 </span>
<script>		
function Validp() 
{
    var val = document.getElementById('txt_Pwd').value;

    if (!val.match(/^[A-Za-z0-9!-*]{6,8}$/)) 
    {
        alert('Password should contain atleast a character and a Number with length atleast 6 and atmost 8');
		
		     document.getElementById('txt_Pwd').value = "";
        return false;
    }

    return true;
}

</script>
<span>
          <td><b>Confirm Password</b></td>
          <td><input type="password" name="txt_cPwd" id="txt_cPwd" value="" placeholder="Retype Password.."required onchange='check();'></td>
          </tr>
		         <tr>
		           <tr>
				   <span id="message" ></span></span>
<script>
	function check(){
			if(document.getElementById("txt_cPwd").value!=document.getElementById("txt_Pwd").value)
			{
				document.getElementById("message").style.color='red';
				document.getElementById("message");
				alert('Passwords does not Match');
				
		            document.getElementById('txt_cPwd').value = "";
            }
		else{
			document.getElementById("message").style.color='green';
			document.getElementById("message");
		}
			}
	</script>
          <td><b>Upload Your Photo</b></td>
          <td><input type="file" name="txt_Image" id="txt_Image"  placeholder="pic path" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG"  onChange="load_image(this.id,this.value)"></td>
          </tr>
          <td></td>
		  <script type="text/javascript">
function load_image(id,ext)
{
   if(validateExtension(ext) == false)
   {
      alert("Upload only JPEG or JPG or PNG format ");
      
      document.getElementById("txt_Image").value = "";
	  document.getElementById("file").focus();
	  
      return;
   }
}

function validateExtension(v)
{
      var allowedExtensions = new Array("jpg","JPG","jpeg","JPEG","png","PNG");
      for(var ct=0;ct<allowedExtensions.length;ct++)
      {
          sample = v.lastIndexOf(allowedExtensions[ct]);
          if(sample != -1){return true;}
      }
      return false;
}
</script>
          <td><input type="submit" name="cmd" id="cmd" value="Save"></td>
          </tr>
</table>
</body>
</html>
<?php
include "footer.php";
?>