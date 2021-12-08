<h2>Grafik Pembelian</h2>

<?php
 $koneksi = mysqli_connect('localhost','root','','admin');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Fahima.mee</title>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Tanggal','Harga'],
 <?php 
      $query = "SELECT * FROM pembelian";

       $exec = mysqli_query($koneksi,$query);
       while($row = mysqli_fetch_array($exec)){

       echo "['".$row['tanggal_pembelian']."',".$row['total_pembelian']."],";
       }
       ?> 
 
 ]);

 var options = {
 title: '',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
 chart.draw(data,options);
 }
  
    </script>

</head>
<body>
 <div class="container-fluid">
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
 </div>

</body>
</html>