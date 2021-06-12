<?php
session_start();?>
<html>
<head><title>complaint.php</title></head>
<body>
<center>
<?php
$email=$_SESSION['Email'];
// $date=$_POST['date'];
 $date = date('Y-m-d H:i:s');
  $district=$_POST['district'];
   $pin=$_POST['pin'];
    $village=$_POST['village'];
	 $hi_no=$_POST['hi_no'];
	  $l_m=$_POST['l_m'];
	 $file=addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));// $pic=$_FILES['pic']['name'];
	  $des=$_POST['des'];
    //Process the image that is uploaded by the user
		  $host="localhost";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  else{
			 $query="INSERT Into complaint(email,date,district,pin,village,hi_no,l_m,pic,des,remarks,status) values('$email','$date','$district','$pin','$village','$hi_no','$l_m','$file','$des','NO REMARKS','NOT SOLVED')";
		     $result=mysqli_query($conn,$query);
			  if(!$result)
					  echo "failed";
			  else
				  {//move_uploaded_file($_FILES['pic']['tmp_name'],"pictures/$pic");
		        $_SESSION['District']=$district;
	            $_SESSION['Village']=$village;
		  echo "you have successfully complained";
		  }	
		  }		  
?>
<br/>
<br/>
<a href="basedon.php">PREVIOUS COMPLAINTS ON THIS RELATED AREAS</a>
<br/><br/>
<a href="user-map.php">MARK LOCATION(it helps to find uneven road for travellers).</a>
<br/><br/>
<a href="homepage.php"><b>>>HOMEPAGE<<</b></a>
<br/><br/>
<a href="complaint.html"><b>>>BACK<<</b></a>
</center>
</body>
</html>