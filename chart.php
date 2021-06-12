<?php
session_start();
//$Total=$_SESSION['total'];
//$Solved=$_SESSION['solved'];
//$Unsolved=$_SESSION['unsolved'];
//$_SESSION['sol']=($Solved/$Total)*100;
//$_SESSION['unsol']=($Unsolved/$Total)*100;
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
 
      function drawChart() {
 
        var data = google.visualization.arrayToDataTable([
          ['Task', 'No of complaints'],
          ['solved',  <?php echo $_SESSION['solved'];?>],
          ['unsolved',  <?php echo $_SESSION['unsolved'];?>],
          /*['Eat',  2],
          ['Watch TV', 2],
          ['Sleep',    7]*/
        ]);
 
        var options = {
          title: 'ROAD COMPLAINTS'
        };
 
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
 
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <a href="report.php"><font color="red">>>BACK<<</font></a>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>