<?php
session_start();
require '../db/db.php';
if (isset($_POST['submit'])) {
	$userName = mysqli_escape_string($conn,$_POST["userName"]);
	$password = mysqli_escape_string($conn,$_POST["password"]);
	$_SESSION['session_password']= $password;
	$sql = "SELECT * FROM `registrations` WHERE `email` = '$userName'";
	$retval = mysqli_query($conn,$sql);
	$n = mysqli_num_rows($retval);
	if ($n==0) {
		header("Location:./index.php?msg=Invalid user Id and Password . Please do register");
	}
		if ($_POST["userName"]=="" || $_POST["password"]=="" ){
		    header("Location:./index.php?msg=Invalid user Id and Password . Please do register");
		}
	elseif ($n==1) {
		$row = mysqli_fetch_assoc($retval); 
		if ($row['email']==$userName&&$row['password']==$password) {
			$_SESSION['session_user'] = $row['name'];
			$_SESSION['session_email'] = $row['email'];
			$_SESSION['aadhrita_id'] = $row['aadhritaID'];
			header("Location:../profile/");
		}
		else{
			header("Location:./index.php?msg=Invalid Password Please Enter Valid Password");
		}
	}
}
?>