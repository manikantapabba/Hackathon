<html>
<head><title>cremarks.php</title></head>
<body>
<center>
<?php
         $id=$_POST['id'];
		 $remarks=$_POST['remarks'];
		 $password=$_POST['password'];
		  $host="localhost";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  else{
			  if($password!='')
			 $query="UPDATE cregister SET remarks='$remarks',password='$password' WHERE id='$id'";
		     else
				 $query="UPDATE cregister SET remarks='$remarks' WHERE id='$id'";
		     $result=mysqli_query($conn,$query);
			  if(!$result)
					  echo "failed";
				  else{
			         echo "you have successfully gave remarks";
				  }
				 
			/* $query2="SELECT mobile_no FROM cregister WHERE s.no='$id'";
			 $result2=mysqli_query($conn,$query2);
			  $row=mysqli_fetch_assoc($result2);
		     $mobile_no= $row['mobile_no'];

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
*/

		  }			  
?>
<a href="ahomepage.html">>>homepage<<</a>
</center>
</body>
</html>