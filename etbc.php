<?php session_start();
require_once('dbconnection.php');
if(isset($_POST['submit'])) {
echo $_SESSION['id'] ;

	$fname=$_POST['account'];
	$lname=$_POST['category'];
	$amm=$_POST['ammount'];
	$msg=mysqli_query($con,"insert into etrans(userid,date,account,amount,category) values(".$_SESSION['id'].",curdate(),'$fname','$amm','$lname',)");
if($msg)
{
	echo "<script>alert('Register successfully');</script>";
}
}
?>
