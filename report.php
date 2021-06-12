<?php
session_start();?>
<html>
<head><title>report</title></head>
<body>
<a href="ahomepage.html"><font color="red">>>BACK<<</font></a>
<center>
<p>
<table>
<tr>
  <th style="padding: 10px 30px"><font size="5">DISTRICT</font></th>
  <th style="padding: 10px 30px"><font size="5">NO OF COMPLAINTS</font></th>
</tr>
<?php
 $host="127.0.0.1";
		  $dbusername="root";
		  $dbpassword="";
		  $dbname="road_complaints";
		  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }  
		   $dis=array("Ahmedabad","Vadodara","Anand","Chhota Udaipur","Dahod","Kheda","Mahisagar","Panchmahal","Gandhinagar","Aravalli","Banaskantha","Mehsana","Patan","Sabarkantha","Rajkot","Amreli","Bhavnagar","Botad","Devbhoomi Dwarka","Gir Somnath","Jamnagar","Junagadh","Morbi","Porbandar","Surendranagar","Kachchh","Surat","Bharuch","Dang","Narmada","Navs","Valsad");
		   $small=10000000000000000;$large=0;
		   for($i=0;$i<=32;$i++)
		   {
			   $d=$dis[$i];
	    	  $query="SELECT * FROM complaint WHERE district='$d'";
			  $result=mysqli_query($conn,$query);
			 $num_rows = mysqli_num_rows($result);
			 if($small>$num_rows && $num_rows>0){
			 $smalld=$d;
			 $small=$num_rows;}
			 if($large<$num_rows){
			 $larged=$d;
			 $large=$num_rows;}
			 echo "<tr>"."<th>".$d."</th>"."<th>".$num_rows."</th>"."</tr>";
		   }
			  $query1="SELECT * FROM complaint";
			  $result1=mysqli_query($conn,$query1);
			  $num_rows1 = mysqli_num_rows($result1);
			  $query2="SELECT * FROM complaint WHERE status='SOLVED'";
			  $result2=mysqli_query($conn,$query2);
			  $num_rows2 = mysqli_num_rows($result2);
			  $_SESSION['total']=$num_rows1;
			  $_SESSION['solved']=$num_rows2;
			  $_SESSION['unsolved']=$num_rows1-$num_rows2;
              
?>
</table>
</p>
<p>
<b><font size="4">Total complaints:<?php echo "\t".$num_rows1;?></font></b>
</br>
<b><font size="4">Solved complaints:<?php echo "\t".$num_rows2;?></font></b>
</br>
<b><font size="4">Unsolved complaints:<?php echo "\t".$num_rows1-$num_rows2;?></font></b>
</br>
<b><font size="4">More complaints:<?php echo "\t".$larged."\t"."-".$large;?></font></b>
</br>
<b><font size="4">Less complaints:<?php echo "\t".$smalld."\t"."-".$small;?></font></b>
</p>
<a href="chart.php">pie chart</a>
</center>
</body>
</html>