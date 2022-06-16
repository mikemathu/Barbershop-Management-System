<?php
include 'dbconnect.php';
		//change status to 2 in database
	$kid=$_GET['uid'];
  session_start();

// echo $kid;
	$res1=mysqli_query($con,"select * from tbl_appointment where App_id='$kid'");
	$res=mysqli_query($con,"UPDATE `tbl_appointment` SET `Status`='2' WHERE App_id='$kid'");
  header("location:barbershop_appointment_status.php?uid=$_SESSION[Reg_id]");

// <!--Handles sms SMS -->

  require 'vendor/autoload.php';
  if(isset($_POST['submit'])){

//Handles sms
    $recipient = $_POST['recipient'];
    $sms = $_POST['sms'];	

    // $messageBird = new \MessageBird\Client('Live_API_Key');
    $messageBird = new \MessageBird\Client('VavcRD0v5crmAjc7QuWEnp1LB');
    $message =  new \MessageBird\Objects\Message();
    try{

  //////////////////////  //   
    $kid =$_GET['uid'];
    $_SESSION['id']=$kid;
    $select_details = "SELECT * FROM `tbl_barbershop` WHERE `Reg_id` = '$kid'";
    $result = mysqli_query($con , $select_details);
    while($row =mysqli_fetch_array($result))
    {
      $res=mysqli_query($con,"select Password from tbl_login where Reg_id='$kid'");
      $row2=mysqli_fetch_array($res);
            
            $Originator_No = $row['Originator_Mobile'];


        // $message->originator = '+254751724544';
        $message->originator = $Originator_No;
}


// ///////////////////////////

        $message->recipients = [$recipient];
        $message->body = $sms;
        $response = $messageBird->messages->create($message);
    }
    catch(Exception $e) {echo $e;}
}
?>


<div class="response-container">
    <h1>SMS Status</h1>
    <p>
        <?php
        if($response){
          echo "<style>
          form{
            display:none;
        }
        .response-container{
        display:block;
        }
          </style>
          ";
          $res = $response->recipients->items[0]->recipient;
          $status = $response->recipients->items[0]->status;
          echo "<b> From: <b/> $response->originator <br>";  
          echo "<b> To: <b/> $res <br>";
          echo "<b> SMS: <b/> $response->body <br>";
          echo "<b> Status: <b/> $status <br>";

        }
        ?>
    </p>
</div>