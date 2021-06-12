<html>
<head><title>php</title></head>
<body>
<a href="ahomepage.html"><font color="red">>>BACK<<</font></a>
<center>
	<form action="pin.php" method="GET">
	Enter PinCode:
	<input type="text" name="pin">
	<input type="submit" value="search" >
</form>
<table>
 <tr>
  <th style="padding: 10px 30px"> <font color="red">S.NO</font></th>
  <th style="padding: 10px 30px"><font color="red">COMPLAINT ID</font></th>
  <th style="padding: 10px 30px"><font color="red">DATE</font></th>
   <th style="padding: 10px 30px"><font color="red">DISTRICT</font></th>
   <th style="padding: 10px 30px"><font color="red">PINCODE</font></th>
    <th style="padding: 10px 20px"><font color="red">VILLAGE</font></th>
	 <th style="padding: 10px 20px"><font color="red">HIGHWAY.NO</font></th>
	 <th style="padding: 10px 30px"><font color="red">LANDMARK</font></th>
	 <th style="padding: 80px 100px"><font color="red">PICTURE</font></th>
	  <th style="padding: 20px 50px"><font color="red">DESCRIPTION</font></th>
	  <th style="padding: 20px 50px"><font color="red">REMARKS</font></th> 
	  <th style="padding: 20px 50px"><font color="red">STATUS</font></th> 
</tr>
<?php 
$pi = $_GET['pin'];
 $host="127.0.0.1";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  $query="SELECT * FROM complaint WHERE pin='$pi'";
			  $result=mysqli_query($conn,$query);
			  $i=1;
	      if($result->num_rows >= 1)
		  {
			            // output data of each row
			 while($row = $result->fetch_assoc()) 
			 {
			   echo "<tr>"."<th>"."<font color='#ffffff'>".$i."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['complaint_id']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['date']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['district']."</font>"."</th>"."<th>"."<font color='#ffffff'>". $row['pin']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['village']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['hi_no']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['l_m']."</font>"."</th>"."<th>".'<img src="data:image;base64,'.base64_encode($row['pic']).'"alt="Image" style="width:300px;height:200px;">'."</th>"."<th>"."<font color='#ffffff'>".$row['des']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['remarks']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['status']."</font>"."</th>"."</tr>";
		        $i++;
	         }		
		  }
		  else
		  {
			  echo "This pincode doesnot have any previous complaints";
		  }	
?>

</table><br/><br/><br/><hr/><hr/><br/>
<form method="POST" action="remarks.php"> 
Enter complaint id:<br/>
<input type="text" name="complaint_id" required><br/>
Enter remarks:<br/>
 <textarea rows="12" cols="45" name="remarks" required> </textarea><br/>
 <center><input type="submit" value="submit"></center>
 </form>
</center>
</body>
</html>