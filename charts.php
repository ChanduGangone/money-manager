<?php
session_start(); 
require 'dbconnection.php'; 
$query = "SELECT * FROM `account` where userid= '{$_SESSION['id']}'"; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    $dataPoints = array( 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
        array("label"=>$query_executed['Account'] "y"=> $query_executed['Account']),
    
      
    } 
  array("label"=>"Commercial", "y"=>100))
} 
else
{ 
    echo "Error in execution"; 
} 
?>

 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
  theme: "light2",
  animationEnabled: true,
  title: {
    text: "World Energy Consumption by Sector - 2012"
  },
  data: [{
    type: "pie",
    indexLabel: "{y}",
    yValueFormatString: "#,##0.00\"%\"",
    indexLabelPlacement: "inside",
    indexLabelFontColor: "#36454F",
    indexLabelFontSize: 18,
    indexLabelFontWeight: "bolder",
    showInLegend: true,
    legendText: "{label}",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>