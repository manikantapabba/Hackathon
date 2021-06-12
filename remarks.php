<html>
<head><title>remarks.php</title></head>
<body>
<center>
<?php
         $complaint_id=$_POST['complaint_id'];
		 $remarks=$_POST['remarks'];
		  $host="localhost";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  else{
			 $query="UPDATE complaint SET remarks='$remarks' WHERE complaint_id='$complaint_id'";
		     $result=mysqli_query($conn,$query);
			  if(!$result)
					  echo "failed";
				  else{
			         echo "you have successfully gave remarks";
				  }
			 $query1="SELECT email FROM complaint WHERE complaint_id='$complaint_id'";
			 $result1=mysqli_query($conn,$query1);
			  $row=mysqli_fetch_assoc($result1);
		     $email= $row['email'];
			 $query2="SELECT mobile_no FROM register WHERE email='$email'";
			 $result2=mysqli_query($conn,$query2);
			  $row=mysqli_fetch_assoc($result2);
		     $mobile_no= $row['mobile_no'];
			
/*//post
$url="https://www.sms4india.com/api/v1/sendCampaign";
$message = urlencode($remarks);// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=1ML9SPMA29O0FOOQOQBSDT7K453AUWXO&secret=O53W7HCA0GCPSR23&usetype=prod&phone=$mobile_no&senderid=SMSIND&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result3 = curl_exec($curl);
curl_close($curl);
echo $result3;
echo $mobile_no;*/

	// Authorisation details.
	$username = "p.manikanta681@gmail.com";
	$hash = "3c6ad9c99609142621ccc93a717150bea19aa47f2e02fccc1b557b7df0f234dd";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $mobile_no; // A single number or a comma-seperated list of numbers
	$message = $remarks;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);


		  }			  
?>
<a href="ahomepage.html">>>homepage<<</a>
</center>
</body>
</html>