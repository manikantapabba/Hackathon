<?php
 $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
   $mobile_no=$_POST['mobile_no'];
    $email=$_POST['email'];
	 $password=$_POST['password'];
	  $gender=$_POST['gender'];
	  if(!empty($first_name)||!empty($last_name)||!empty($mobile_no)||!empty($email)||!empty($password)||!empty($gender))
	  {
		  $host="localhost";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  else{
			  $SELECT="SELECT email From register Where email = ? Limit 1";
			  $INSERT="INSERT Into register(email,first_name,last_name,mobile_no,password,gender)
			  values(?,?,?,?,?,?)";
			  $stmt=$conn->prepare($SELECT);
			  $stmt->bind_param("s",$email);
			  $stmt->execute();
			  $stmt->bind_result($email);
			  $stmt->store_result();
			  $rnum=$stmt->num_rows;
			  
			  if($rnum==0)
			  {
				  $query="INSERT INTO register(email ,  first_name ,  last_name ,  mobile_no , password, gender) VALUES ('$email' , '$first_name' , '$last_name' ,'$mobile_no' ,'$password' , '$gender')";
				  $result = mysqli_query($conn,$query);
				  if(!$result)
					  echo "failed";
				  else
				  echo "you are registered successfully";
			  }
			  else
			  {
				  echo " Someone Already registered with this email";
			  }
              $stmt->close();
              $conn->close();
              header( "refresh:2;url=login.html" );			  
		  }			  
	  }
	  else
	  {
		  echo "All fields are required";
		  die();
	  }
?>