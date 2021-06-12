<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$servername = "127.0.0.1";
$username = "root";
$dbpassword = "";
$dbname = "road_complaints";
$conn =mysqli_connect($servername, $username, $dbpassword, $dbname);
// Check connection
if (!$conn) {
   echo "failed";
}
else
{
$query="SELECT * FROM cregister WHERE email='$email' AND password='$password'";
	if($result=mysqli_query($conn,$query))
	{
		if(mysqli_num_rows($result)>0)
		{
			echo 'logged in successfully, PLEASE WAIT WHILE WE REDIRECT YOU TO HOMEPAGE...  Welcome : ';
		$_SESSION['Email']=$email;
        header( "refresh:2;url=chomepage.php" );			
		}
		else{
		echo "login failed, Due to authentication failure.";
			
			echo "PLEASE TRY AGAIN AS WE REDIRECT YOU TO LOGIN PAGE";
			header( "refresh:2;url=clogin.html" );	
			
	    }
	}
}
?>