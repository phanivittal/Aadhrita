<?php

	include '../php/db/db.php';
	$sql = "SELECT * FROM `registrations`";
	$retval = mysqli_query($conn,$sql);
	$n = mysqli_num_rows($retval);
	echo $n;
	$n = 999;
	if ($n<10) {
		$aadhritaID = "AAD3000".$n;
	}
	elseif ($n<100) {
		$aadhritaID = "AAD300".$n;
	}
	elseif ($n<1000) {
		$aadhritaID = "AAD30".$n;
	}
	else{
		$$aadhritaID = "AAD3".$n;
	}
	echo $aadhritaID;
	//$sql = "INSERT INTO `registrations` (`aadhritaID`, `name`, `collegename`, `collegeid`, `email`, `contact`, `password`, `gender`, `yos`, `city`, `pincode`, `accommodation`, `createdtime`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', current_timestamp());"
	
?>