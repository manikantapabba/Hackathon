<?php 
session_start();?>
<html>
 <head>
  <title>based on area</title>
  <style type="text/css">
  body {
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(pic2.jpg);
    background-size: cover;
   }
   p{
    font-size: 20px;
    color:white;
   }
   h1{
    font-size:30px;
    color:white;
   }
 </style>
 </head>
 <body>
 <a href="complaint.html"><b><font color="white">>>GO BACK<<</font><b></a>
  <center>
  <div>
  <b><font size="5">PREVIOUS COMPLAINTS BASED ON DISTRICT</font></b>
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
        $district= $_SESSION['District'];
	    $village = $_SESSION['Village'];
		  $host="127.0.0.1";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  $query="SELECT * FROM complaint WHERE district='$district'";
			  $result=mysqli_query($conn,$query);$i=1;
	      if($result->num_rows >= 1)
		  {
             // output data of each row
			 while($row = $result->fetch_assoc()) 
			 {
				  echo "<tr>"."<th>"."<font color='#ffffff'>".$i."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['complaint_id']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['date']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['district']."</font>"."</th>"."<th>"."<font color='#ffffff'>". $row['pin']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['village']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['hi_no']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['l_m']."</font>"."</th>"."<th>".'<img src="data:image;base64,'.base64_encode($row['pic']).'"alt="Image" style="width:300px;height:200px;">'."</th>"."<th>"."<font color='#ffffff'>".$row['des']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['remarks']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['status']."</font>"."</th>"."</tr>";
		        $i++;
			   /*echo "<br>";
		       echo "DATE:\t\t".$row['date']."<br>";
			   //echo "DISTRICT:\t\t".$row['district']."<br>";
			   echo "PINCODE:\t\t".$row['pin']."<br>";
			   echo "VILLAGE:\t\t".$row['village']."<br>";
			   echo "HIGHWAY NO:\t\t".$row['hi_no']."<br>";
			   echo "LAND MARK:\t\t".$row['l_m']."<br>";
			   echo "PICTURE:\t\t".$row['pic']."<br>";
			   echo "DESCRIPTION:\t\t".$row['des']."<br>";*/
	         }		
		  }
		  else
		  {
			  echo "This district doesn't have any previous complaints";
		  }
		  ?>
		  </table>
		  </div>
		  <hr/>
		  <div>
		  <b><font size="5">PREVIOUS COMPLAINTS BASED ON VILLAGE</font></b>
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
		  $district= $_SESSION['District'];
	    $village = $_SESSION['Village'];
		  $host="127.0.0.1";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }
		  $query="SELECT * FROM complaint WHERE village='$village'";
			  $result=mysqli_query($conn,$query);$i=1;
	      if($result->num_rows >= 1)
		  {
             // output data of each row
			 while($row = $result->fetch_assoc()) 
			 {
				 	 echo "<tr>"."<th>"."<font color='#ffffff'>".$i."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['complaint_id']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['date']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['district']."</font>"."</th>"."<th>"."<font color='#ffffff'>". $row['pin']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['village']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['hi_no']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['l_m']."</font>"."</th>"."<th>".'<img src="data:image;base64,'.base64_encode($row['pic']).'"alt="Image" style="width:300px;height:200px;">'."</th>"."<th>"."<font color='#ffffff'>".$row['des']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['remarks']."</font>"."</th>"."<th>"."<font color='#ffffff'>".$row['status']."</font>"."</th>"."</tr>";
		        $i++;
			   /*echo "<br>";
		       echo "DATE:\t\t".$row['date']."<br>";
			   //echo "DISTRICT:\t\t".$row['district']."<br>";
			   //echo "PINCODE:\t\t".$row['pin']."<br>";
			   //echo "VILLAGE:\t\t".$row['village']."<br>";
			   echo "HIGHWAY NO:\t\t".$row['hi_no']."<br>";
			   echo "LAND MARK:\t\t".$row['l_m']."<br>";
			   echo "PICTURE:\t\t".$row['pic']."<br>";
			   echo "DESCRIPTION:\t\t".$row['des']."<br>";*/
	         }		
		  }
		  else
		  {
			  echo "This village doesn't have any previous complaints";
		  }
	 ?> 
    </table>
	</div>
    </center>	
	</body>
</html>