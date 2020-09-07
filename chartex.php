<?php  
session_start();
 $connect = mysqli_connect("localhost", "root", "", "ktm");  
 $cquery = "SELECT * FROM `account` where userid= '{$_SESSION['id']}' ";  
  $cquery2 = "SELECT * FROM `ecategory` where userid= '{$_SESSION['id']}' ";
   $cquery3 = "SELECT * FROM `icategory` where userid= '{$_SESSION['id']}' ";
 $cresult = mysqli_query($connect, $cquery);  
  $cresult2 = mysqli_query($connect, $cquery2); 
  $cresult3 = mysqli_query($connect, $cquery3); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['account', 'ammount'],  
                          <?php  
                          while($row = mysqli_fetch_array($cresult))  
                          {  
                               echo "['".$row["Account"]."', ".$row["Ammount"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'your accounts and ammount',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Ecategory', 'Ammount'],  
                          <?php  
                          while($row = mysqli_fetch_array($cresult2))  
                          {  
                               echo "['".$row["Ecategory"]."', ".$row["Ammount"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'your accounts and ammount',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           </script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['icategary', 'Ammount'],  
                          <?php  
                          while($row = mysqli_fetch_array($cresult3))  
                          {  
                               echo "['".$row["icategary"]."', ".$row["Ammount"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'your accounts and ammount',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Make Simple Pie Chart by Google Chart API with PHP Mysql</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
                <div id="piechart2" style="width: 450px; height: 500px;"></div>
                 <div id="piechart3" style="width: 450px; height: 500px;"></div>
           </div>  
      </body>  
 </html> 