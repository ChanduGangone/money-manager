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


<?php

if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
  
?> 



<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>money!</title>
    <style>

.flip-card {
  float: left;
  width: 25%;
  padding: 0 50px;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
padding:100px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}

.image {
  background-image : url(aboutus.jpg);
  background-size: cover;
  background-repeat : none;
}
</style>

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
                      //is3D:true,  
                      //pieHole: 0.4  
                      'width':700,
                     'height':400
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
                      title: 'your expenses and ammount',  
                      //is3D:true,  
                      //pieHole: 0.4  
                         'width':700,
                     'height':400
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
                      title: 'your income sources',  
                      //is3D:true,  
                      //pieHole: 0.4 
                         'width':700,
                     'height':400 
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart.draw(data, options);  
           }  
           </script> 
           <style type="text/css">
           	img {
  border-radius: 50%;
}
           </style> 

  </head>
  <body>
  <nav class="navbar navbar-light bg-danger">
  <span class="navbar-brand mb-0 h1 text-light">KTM</span>
  <span class="h4 text-light">welcome:<?php echo $_SESSION['name'];?> </span>
  <!--<a href="#"><?php //echo $_SESSION['id'];?></a>-->
  </nav>
<nav>
  <div class="nav nav-tabs " id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">statistics</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">about us</a>
    <button><a href="logout.php">Logout</a></button>
  </div>
</nav>
<div class="tab-content " id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

    <div class="row ">
    <div class="col-sm">
      <h3 >Income: <span class="badge badge-secondary"><?php 
require 'dbconnection.php'; 
$query = "SELECT * FROM `itrans` where userid= '{$_SESSION['id']}' "; 
$sum=0;
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
    $sum +=  $query_executed['amount'];
   
    
    } 
      echo $sum;
} 
else
{ 
    echo "Error in execution"; 
} 
?>       </span> </h3>
    </div>
    <div class="col-sm">
       <h3>Expense: <span class="badge badge-secondary"><?php 
$query = "SELECT * FROM `etrans` where userid= '{$_SESSION['id']}' "; 
$sum=0;
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
    $sum +=  $query_executed['amount'];
   
    
    } 
      echo $sum;
} 
else
{ 
    echo "Error in execution"; 
} 
?>
      </span> </h3>
    </div>
    <div class="col-sm">
      <h3>Available: <span class="badge badge-secondary">

            <?php 

$query = "SELECT * FROM `etrans` where userid= '{$_SESSION['id']}' "; 
$sum=0;
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
    $sum +=  $query_executed['amount'];
  }
} 
else
{ 
    echo "Error in execution"; 
} 

$query2 = "SELECT * FROM `itrans` where userid= '{$_SESSION['id']}' "; 
$sum2=0;
if ($is_query_run = mysqli_query($con,$query2)) 
{ 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
    $sum2 +=  $query_executed['amount'];
    } 
      $out =$sum2 - $sum;
      echo $out;

} 

else
{ 
    echo "Error in execution"; 
} 
?>

             </span> </h3>
    </div>
  </div>
  <a href="t2.php"> <i class="fa fa-plus-circle" style="font-size:60px;color:#ff5050"></i></a>
   <div class="row ">
    <div class="col-sm">
      <h3 >Expenses</h3>
    </div>
    <div class="col-sm">
       <h3>Income</h3>
    </div>
   
  </div>

    <div class="container-fluid">
  <div class="row ">
    <div class="col">
      <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Account</th>
      <th scope="col">Ammount</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>


    <?php 
// going to use above code 

  
// printing column name above the data 

  
// sql query to fetch all the data 
$query = "SELECT * FROM `etrans` where userid= '{$_SESSION['id']}'"; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
        echo "<tr><td>". $query_executed['date']."</td>"; 
        echo "<td>". $query_executed['account']."</td>"; 
        echo "<td>". $query_executed['amount']."</td>"; 
        echo "<td>". $query_executed['category']."</td></tr>"; 
    } 
} 
else
{ 
    echo "Error in execution"; 
} 
?>
  </tbody>
</table>

    </div>
    <div class="col">
        <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Account</th>
      <th scope="col">Ammount</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>


    <?php 
// going to use above code 

  
// printing column name above the data 

  
// sql query to fetch all the data 
$query = "SELECT * FROM `itrans` where userid= '{$_SESSION['id']}' "; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
        echo "<tr><td>". $query_executed['date']."</td>"; 
        echo "<td>". $query_executed['account']."</td>"; 
        echo "<td>". $query_executed['amount']."</td>"; 
        echo "<td>". $query_executed['category']."</td></tr>"; 
    } 
} 
else
{ 
    echo "Error in execution"; 
} 
?>
  </tbody>
</table>

    </div>
   </div>
 </div>

</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="row ">
    <div class="col-sm">
      <h3 >Income: <span class="badge badge-secondary"><?php 
$query = "SELECT * FROM `etrans` where userid= '{$_SESSION['id']}' "; 
$sum=0;
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
    $sum +=  $query_executed['amount'];
   
    
    } 
      echo $sum;
} 
else
{ 
    echo "Error in execution"; 
} 
?>     </span> </h3>
    </div>
    <div class="col-sm">
       <h3>Expense: <span class="badge badge-secondary"><?php 
$query = "SELECT * FROM `etrans` where userid= '{$_SESSION['id']}' "; 
$sum=0;
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
    $sum +=  $query_executed['amount'];
   
    
    } 
      echo $sum;
} 
else
{ 
    echo "Error in execution"; 
} 
?>   </span> </h3>
    </div>
    <div class="col-sm">
      <h3>Total: <span class="badge badge-secondary">
        <?php 

$query = "SELECT * FROM `etrans` where userid= '{$_SESSION['id']}' "; 
$sum=0;
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
    $sum +=  $query_executed['amount'];
  }
} 
else
{ 
    echo "Error in execution"; 
} 

$query2 = "SELECT * FROM `itrans` where userid= '{$_SESSION['id']}' "; 
$sum2=0;
if ($is_query_run = mysqli_query($con,$query2)) 
{ 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
    $sum2 +=  $query_executed['amount'];
    } 
      $out =$sum2 - $sum;
      echo $out;

} 
else
{ 
    echo "Error in execution"; 
} 
?>
            </span> </h3>
    </div>
  </div>
  <a href="t2.php"> <i class="fa fa-plus-circle" style="font-size:60px;color:#ff5050"></i></a>
<div class="card-deck">
<div class="card border-success mb-3" >
  <div class="card-header bg-transparent border-success">Income</div>
  <div class="card-body text-success">
     <div id="piechart3" style="width: 750px; height: 300px;"></div>
  </div>
  
</div>
<div class="card border-success mb-3" >
  <div class="card-header bg-transparent border-success">Expense</div>
  <div class="card-body text-success">
     <div id="piechart2" ></div>
  </div>
  
</div>
<div class="card border-success mb-3">
  <div class="card-header bg-transparent border-success">Accounts</div>
  <div class="card-body text-success">
     <div id="piechart" ></div>
  </div>
  
</div>
</div>

  </div>
<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    
 <div>
  <h1 style="font-size:50px;" class="w3-center w3-blue">About Us </h1>

 
<ul>
<li>  MONEY MANAGER - the  financial planning, review, expense tracking, and personal asset management site!
Money Manager makes managing personal finances as easy as pie! Now easily record your personal and business financial transactions, generate spending reports, review your daily, weekly and monthly financial data and manage your assets with Money Manager's spending tracker and budget planner.</li><br>

<li>Money Management
1. The act or practice of an investment advisory firm making investment decisions on behalf of a client. Money management often opens up more potential investment vehicles up to the client. Another advantage is that, theoretically, money managers have more knowledge and experience in making appropriate investment decisions than the client. This is also called investment management.<br>

2. The act or practice of handling one's personal finances. Money management involves paying the bills, making investments, and paying taxes.</li><br>

<li>This Money Management  project is changing the way financial challenges are solved.</li>
</ul>
<div class="row">

	<div class="col-4">
		</div>

<div class=" flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="chandu.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back" style="width:300px;height:300px;">
      <p><b>Chandrakant S gangone</b></p> 

      <p>t.y b.tech</p> 

      <p>2017bcs009@sggs.ac.in</p>
       <p>contact no : 7219040474</p>
      
    </div>
  </div>
</div>
</div>

</div>

  </div>
</div>





 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	$('.carousel').carousel({
  interval: 2000
})
    </script>
  </body>
</html>

<?php } ?>