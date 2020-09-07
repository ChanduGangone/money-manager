<?php session_start();
require_once('dbconnection.php');
if(isset($_POST['submit'])) {
   $userid=$_SESSION['id'];
  $lname=$_POST['icategory'];//INSERT INTO `etrans`(`userid`, `date`, `account`, `amount`, `category`) VALUES 
  $amm=0;
  $msg=mysqli_query($con,"insert into icategory(userid,icategary,Ammount)values('$userid','$lname','$amm')");
if($msg)
{
  echo "<script>alert('transaction added!!');</script>";
}
else
{
echo "<script>alert('Registed ?? nyahhh!!');</script>"; 
}
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

      <p > <a href="t2.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">transactions</a></p>
      <div class="card-deck">
     
    <div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header"><h3>income category</h3></div>
  <div class="card-body text-success">
    <h5 class="card-title">complete ur transaction from here!</h5>
  <form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">category name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="icategory" placeholder="Enter category">
   <!--aria-describedby="emailHelp"-->
  </div>
  <button type="submit" name="submit"class="btn btn-primary">Submit</button>
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