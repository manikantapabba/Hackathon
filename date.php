<!--$cal_date=17-08-2012;
$date=date('Y-m-d',strtotime($cal_date));
echo $date; //gives date as 2012-08-17-->
<html>
<head><title>php</title>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		background-image: url("pic6.jpg");
		background: cover;

	}
.tab{
	height: 280px;
	width: 300px;
	background-color: #fff;
	box-decoration-break: 20%;
}
</style></head>
<body>
<a href="ahomepage.html"><font color="white">>>BACK<<</font></a>
<center>
	<form action="date.php" method="GET">
	Enter date:
	<input type="date" name="date">
	<input type="submit" value="search" >
</form>
<table>
 <tr><font color="white">
  <th style="padding: 10px 30px"> <font color=#ffffff>S.NO</font></th>
  <th style="padding: 10px 30px"><font color=#ffffff>COMPLAINT ID</font></th>
  <th style="padding: 10px 30px"><font color=#ffffff>DATE</font></th>
   <th style="padding: 10px 30px"><font color=#ffffff>DISTRICT</font></th>
   <th style="padding: 10px 30px"><font color=#ffffff>PINCODE</font></th>
    <th style="padding: 10px 20px"><font color=#ffffff>VILLAGE</font></th>
	 <th style="padding: 10px 20px"><font color=#ffffff>HIGHWAY.NO</font></th>
	 <th style="padding: 10px 30px"><font color=#ffffff>LANDMARK</font></th>
	 <th style="padding: 80px 100px"><font color=#ffffff>PICTURE</font></th>
	  <th style="padding: 20px 50px"><font color=#ffffff>DESCRIPTION</font></th>
	  <th style="padding: 20px 50px"><font color=#ffffff>REMARKS</font></th> 
	  <th style="padding: 20px 50px"><font color=#ffffff>STATUS</font></th> 
</font>
</tr>
<?php 
$pi = $_GET['date'];
$Date=date('Y-m-d',strtotime($pi));
 $host="127.0.0.1";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  $query="SELECT * FROM complaint WHERE date='$Date'";
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
			  echo "No complaints are reported on the given date.";
		  }	
?>

</table><br/><br/><br/><hr/><hr/><br/>
<form method="POST" action="remarks.php"> 
<font color="white"> Enter complaint id:</font><br/><br/>
<input type="text" name="complaint_id" style="border-radius: 15px; padding: 10px;"required><br/>
<font color="white"> Enter remarks: </font><br/><br/>
 <textarea rows="12" cols="45" name="remarks" style="border-radius: 15px;" required> </textarea><br/>
 <center><input type="submit" value="submit"></center>
 </form>
</center>
</body>
</html>