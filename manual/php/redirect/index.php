<?php
	session_start();
	include '../db.php';
	$name = $_POST['username'];
	$password = $_POST['password'];
	echo "<br>".$name."<br>".$password;
	$sql = "SELECT * FROM `manualadmin` WHERE `adminID` = '$name' AND `adminpassword` = '$password' ";
	$retval = mysqli_query($conn,$sql);
	$n = mysqli_num_rows($retval);
	if ($n == 1) {
		$_SESSION['user']=$name;
		header("Location:../landing/");
	}
	else{
		header("Location:../error/");
	}

?>