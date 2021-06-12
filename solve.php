<?php
session_start();
$complaint_id=$_POST['complaint_id'];
$email=$_SESSION['Email'];
 $host="localhost";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  else{
			  $query="UPDATE complaint SET status='SOLVED' WHERE complaint_id='$complaint_id' AND email='$email'";
		     $result=mysqli_query($conn,$query);
			  if(!$result)
					  echo "failed";
				  else
				  {
					  echo "you have successfully gave status";
                  }					  
				 
		  }			  
?>
<html>
<head><title>solve.php</title></head>
<body>
<center>
<a href="homepage.php">>>homepage</a>
</center>
</body>
</html>