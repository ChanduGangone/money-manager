<?php session_start();
require_once('dbconnection.php');
if(isset($_POST['submit'])) {
   $userid=$_SESSION['id'];
	$fname=$_POST['account'];
	$lname=$_POST['category'];//INSERT INTO `etrans`(`userid`, `date`, `account`, `amount`, `category`) VALUES 
	$amm=$_POST['ammount'];
	$msg=mysqli_query($con,"insert into etrans(userid,date,account,amount,category)values('$userid',CURDATE(),'$fname','$amm','$lname')");
if($msg)
{
	echo "<script>alert('transaction added!!');</script>";
}
else
{
echo "<script>alert('Registed ?? nyahhh!!');</script>";	
}
$result = mysqli_query($con, "SELECT * FROM `account` where userid= '{$_SESSION['id']}' and Account = '$fname'");
$row = mysqli_fetch_assoc($result);
$update= $row['Ammount'];
$update=$update-$amm;
$msg2=mysqli_query($con,"UPDATE `account` SET `Ammount`='$update' WHERE userid= '{$_SESSION['id']}' and Account = '$fname'");

//UPDATE `account` SET `Ammount`='$newamount' WHERE userid= '{$_SESSION['id']}' and Account = '$fname'"; 
$result = mysqli_query($con, "SELECT * FROM `ecategory` where userid= '{$_SESSION['id']}' and Ecategory = '$lname'");
$row = mysqli_fetch_assoc($result);
$update2= $row['Ammount'];
$update2=$update2+$amm;
$msg3=mysqli_query($con,"UPDATE `ecategory` SET `Ammount`='$update2' WHERE userid= '{$_SESSION['id']}' and Ecategory = '$lname'");
}
?>
<?php 
require_once('dbconnection.php');
if(isset($_POST['submit2'])) {
   $userid=$_SESSION['id'];
  $fname=$_POST['account'];
  $lname=$_POST['category'];//INSERT INTO `etrans`(`userid`, `date`, `account`, `amount`, `category`) VALUES 
  $amm=$_POST['ammount'];
  $msg=mysqli_query($con,"insert into itrans(userid,date,account,amount,category)values('$userid',CURDATE(),'$fname','$amm','$lname')");
if($msg)
{ echo "<script>alert('transaction added!!');</script>";
}
else
{echo "<script>alert('Registed ?? nyahhh!!');</script>"; 
}
$result = mysqli_query($con, "SELECT * FROM `account` where userid= '{$_SESSION['id']}' and Account = '$fname'");
$row = mysqli_fetch_assoc($result);
$update= $row['Ammount'];
$update=$update+$amm;
$msg2=mysqli_query($con,"UPDATE `account` SET `Ammount`='$update' WHERE userid= '{$_SESSION['id']}' and Account = '$fname'");
//UPDATE `account` SET `Ammount`='$newamount' WHERE userid= '{$_SESSION['id']}' and Account = '$fname'"; 
$result1 = mysqli_query($con, "SELECT * FROM `icategory` where userid= '{$_SESSION['id']}' and icategary = '$lname'");
$row = mysqli_fetch_assoc($result1);
$update2= $row['Ammount'];
$update2=$update2+$amm;
$msg3=mysqli_query($con,"UPDATE `icategory` SET `Ammount`='$update2' WHERE userid= '{$_SESSION['id']}' and icategary = '$lname'");

}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
      <div class="row">


    <div class="col bg-danger text-white">
         <h3> expense transaction</h3>

      <form method="post" action="">
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">account</label>
    <select class="form-control" id="exampleFormControlSelect1" name="account">
       <?php 
// going to use above code 
require 'dbconnection.php'; 
$query = "SELECT * FROM `account` where userid= '{$_SESSION['id']}'"; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
    
        echo "<option value=". $query_executed['Account'].">". $query_executed['Account']."</option>"; 
      
    } 
} 
else
{ 
    echo "Error in execution"; 
} 
?>
        </select>
        <a href="addaccount.php"><button type="button" class="btn btn-info">add new account</button></a>
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">category</label>
      <select class="form-control" id="exampleFormControlSelect1" name="category">
       <?php 
// going to use above code 
require 'dbconnection.php'; 

// sql query to fetch all the data 
$query = "SELECT * FROM `ecategory` where userid= '{$_SESSION['id']}'"; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
       
        echo "<option value=". $query_executed['Ecategory'].">". $query_executed['Ecategory']."</option>"; 
      
    } 
} 
else
{ 
    echo "Error in execution"; 
} 
?>
        </select>
         <a href="addexpense.php"><button type="button" class="btn btn-info">add new category</button></a>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">ammount</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ammount" name="ammount">
  </div>

    <input type="submit" name="submit"  value="DONE!" >
</form>
    </div>





    <div class="col bg-info text-white">
      <h3> income transactions</h3>
     <form method="post" action="">
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">account</label>
    <select class="form-control" id="exampleFormControlSelect1" name="account">
       <?php 
// going to use above code 
require 'dbconnection.php'; 
  
// printing column name above the data 
//Code for Registration 


  
// sql query to fetch all the data 
$query = "SELECT * FROM `account` where userid= '{$_SESSION['id']}' "; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
    
        echo "<option value=". $query_executed['Account'].">". $query_executed['Account']."</option>"; 
      
    } 
} 
else
{ 
    echo "Error in execution"; 
} 
?>
        </select>
        <a href="addaccount.php"><button type="button" class="btn btn-info">add new account</button></a>
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">category</label>
      <select class="form-control" id="exampleFormControlSelect1" name="category">
       <?php 
// going to use above code 
require 'dbconnection.php'; 

// sql query to fetch all the data 
$query = "SELECT * FROM `icategory` where userid= '{$_SESSION['id']}'"; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysqli_query($con,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
       
        echo "<option value=". $query_executed['icategary'].">". $query_executed['icategary']."</option>"; 
      
    } 
} 
else
{ 
    echo "Error in execution"; 
} 
?>
        </select>
         <a href="addincome.php"><button type="button" class="btn btn-info">add income category</button></a>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">ammount</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ammount" name="ammount">
  </div>

    <input type="submit" name="submit2"  value="DONE!" >
</form>
    </div>
  </div>

    
</div>
    

    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>