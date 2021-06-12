<?php
session_start();
$Total=$_SESSION['total'];
$Solved=$_SESSION['solved'];
$Unsolved=$_SESSION['unsolved'];
$_SESSION['sol']=($Solved/$Total)*100;
$_SESSION['unsol']=($Unsolved/$Total)*100;
?>
<!DOCTYPE html>
<html>
<head>
	<title>js pie chart</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="center">
	<h1> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Complaints Analysis</h1>
	<div class="skillBox">
		<p>Solved</p>
		<p><?php echo $_SESSION['sol']; ?>% </p>
		<div class="skill">
			<div class="skil_level" style="width: <?php echo $_SESSION['sol']; ?>%"></div>
		</div>
	</div>
	
	<div class="skillBox">
		<p>Unsolved</p>
		<p><?php echo $_SESSION['unsol']; ?>%</p>
		<div class="skill">
			<div class="skil_level" style="width:<?php echo $_SESSION['unsol']; ?>%" ></div>
		</div>
	</div>
	
	<!--<div class="skillBox">
		<p>css</p>
		<p>70%</p>
		<div class="skill">
			<div class="skil_level" style="width: 70%"></div>
		</div>
	</div>
	
	<div class="skillBox">
		<p>5</p>
		<p>95%</p>
		<div class="skill">
			<div class="skil_level" style="width: 95%"></div>
		</div>
	</div>
	
	<div class="skillBox">
		<p>Ht</p>
		<p>65%</p>
		<div class="skill">
			<div class="skil_level" style="width: 65%"></div>
		</div>
	</div>-->
</div>
</body>
</html>