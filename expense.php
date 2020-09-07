<?php 
session_start();
require 'dbconnection.php'; 
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
      $out =$sum - $sum2;
      echo $out;

} 
else
{ 
    echo "Error in execution"; 
} 
?>


 



  
 
