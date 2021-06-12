<html>
<head><title>php</title>
<style>
body {
  background-image: url('img0.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style></head>
<body>
<a href="ahomepage.html"><font color="white">>>BACK<<</font></a>
<center>
<form  method="GET" action = "district.php">
<font size="5" color="#ffffff">District:</font>
           <select name="district">
  <option value="Districts">Districts</option>
  <option value="Amreli">Amreli</option>
  <option value="Ahmedabad">Ahmedabad</option>
  <option value="Vadodara">Vadodara</option>
  <option value="Anand">Anand</option>
  <option value="Chhota Udaipur">Chhota Udaipur</option>
  <option value="Dahod">Dahod</option>
  <option value="Kheda">Kheda</option>
  <option value="Mahisagar">Mahisagar</option>
  <option value="Panchmahal">Panchmahal</option>
  <option value="Gandhinagar">Gandhinagar</option>
  <option value="Banaskantha">Banaskantha</option>
  <option value="Aravalli">Aravalli</option>
  <option value="Rajkot">Rajkot</option>
  <option value="sabarkantha">sabarkantha</option>
  <option value="Patan">Patan</option>
  <option value="Mehsana">Mehsana</option>
  <option value="Valsad">Valsad</option>
  <option value="Tapi">Tapi</option>
  <option value="Navsari">Navsari</option>
  <option value="Narmada">Narmada</option>
  <option value="Dang">Dang</option>
  <option value="Bharuch">Bharuch</option>
  <option value="Surat">Surat</option>
  <option value="Kachchh">Kachchh</option>
  <option value="Surendranagar">Surendranagar</option>
  <option value="Porbandar">Porbandar</option>
  <option value="Morbi">Morbi</option>
  <option value="Junagadh">Junagadh</option>
  <option value="Jamnagar">Jamnagar</option>
  <option value="Gir Somnath">Gir Somnath</option>
  <option value="Devbhoomi Dwarka">Devbhoomi Dwarka</option>
  <option value="Botad">Botad</option>
  <option value="Bhavnagar">Bhavnagar</option>
  
</select>
 <input type="submit" value="search">
</form>
<table>
 <tr>
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
</tr>
<?php
$district = $_GET["district"];
 $host="127.0.0.1";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  $query="SELECT * FROM complaint WHERE district='$district'";
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
			  echo "This district doesn't have any previous complaints";
		  }
?>
<br/>
</table>
<form method="POST" action="remarks.php"><br/><br/><hr/>
Enter complaint id:<br/><br/>
<input type="text" name="complaint_id" required><br/><br/>
Enter remarks:<br/><br/>
 <textarea rows="12" cols="45" name="remarks" required> </textarea><br/><br/>
 <center><input type="submit" value="submit"></center>
 </form>
</center>
</body>
</html>