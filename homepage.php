<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>ROAD</title>
		<style type="text/css">
			body{
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(pic7.jpg);
			background-size: cover;
			}
			p{
				font-size: 20px;
				color: white;
			}
			h1{
				font-size: 50px;
				color: white;
			}
		</style>
	</head>
	<body>
	    <a href="login.html"><font color="white">>>LOGOUT<<</font></a>
		<br/> <h1 align="center">USER DETAILS</h1><br/>
		<p align="center">
			<b>NAME:<?php
			 $host="127.0.0.1";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  else{
		      $gmail=$_SESSION['Email'];
			  $query="SELECT first_name FROM register WHERE email='$gmail'";
			  $result=mysqli_query($conn,$query);
			  $row=mysqli_fetch_assoc($result);
		  echo $row['first_name'];
		  }
			  ?>
		   
			</b><br/> <br/>
			<b>PHONE NUMBER:
<?php
			 $host="127.0.0.1";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  else{
		      $gmail=$_SESSION['Email'];
			  $query="SELECT mobile_no FROM register WHERE email='$gmail'";
			  $result=mysqli_query($conn,$query);
			  $row=mysqli_fetch_assoc($result);
		  echo $row['mobile_no'];}
			  ?>			</b><br/> <br/>
			<b>G-MAIL: <?php
			 $host="127.0.0.1";
		  $dbusername="root";
		  
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  else{
		      $gmail=$_SESSION['Email'];
		  echo $gmail;}
			  ?></b><br/> <br/>
			<b>GENDER: <?php
			 $host="127.0.0.1";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  else{
		      $gmail=$_SESSION['Email'];
			  $query="SELECT gender FROM register WHERE email='$gmail'";
			  $result=mysqli_query($conn,$query);
			  $row=mysqli_fetch_assoc($result);
		  echo $row['gender'];}
			  ?></b>
		</p><br/><br/>
		<center>
			<a href="complaint.html"><font size='6' color=#ffffff>COMPLAINT</font></a><br><br/>
			<a href="prevcomp.php"><font size='6' color=#ffffff>PREVIOUS COMPLAINTS</font></a><br/><br/><br/>
			<a href="user-map.php"><font size='4' color=#ffffff>google map</font></a>
		</center>
		<!--<center>
			<input type="submit" name="Complaint" value="Complaint" ><br/><br/>
			<form action="complaint.html" method="POST"></form>
			<input type="submit" name="Previous Complaints" value="Previous Complaints" ><br/>
			<form action="prevcomp.php" method="POST"></form></br>  
		</center>-->
	</body>
</html>