<?php
 $com_name=$_POST['com_name'];
   $mobile_no=$_POST['mobile_no'];
    $email=$_POST['email'];
	$date = date('Y-m-d H:i:s');
	$file=addslashes(file_get_contents($_FILES["license"]["tmp_name"]));// $pic=$_FILES['pic']['name'];
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
			  $INSERT="INSERT Into cregister(com_name,mobile_no,email,license,password,date,remarks)
			  values(?,?,?,?,?,?,?)";
			  $stmt=$conn->prepare($SELECT);
			  $stmt->bind_param("s",$email);
			  $stmt->execute();
			  $stmt->bind_result($email);
			  $stmt->store_result();
			  $rnum=$stmt->num_rows;
			  
			  if($rnum==0)
			  {
				  $query="INSERT INTO cregister(com_name,mobile_no,email,license,password,date,remarks) VALUES('$com_name' ,'$mobile_no' ,'$email' , '$file','*@','$date','no remarks')";
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
?>