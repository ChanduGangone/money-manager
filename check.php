<?php
session_start();

require_once('dbconnection.php');

	$msg=mysqli_query($con,"insert into account(userid,Account,Ammount) values(".$_SESSION['id'].",'bank',5000)");
echo $_SESSION['id'] ;
?>
	