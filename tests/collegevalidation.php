<?php

	include '../php/db/db.php';
	$amount = 300;
	$collegeid = '15331A05E8';
	$accommodation = "YES";
	if ($accommodation == "YES") {
		$amount+=800;
	}
	
	if (substr($collegeid, 2,2)==33) {
		$sql = "SELECT * FROM `testdata` WHERE collegeID = '$collegeid'";
		$retval = mysqli_query($conn,$sql);
		$n = mysqli_num_rows($retval);

		if ($n=mysqli_num_rows($retval)) {
			$row = mysqli_fetch_assoc($retval);
			$amount-=100;
		}
	}
	echo $amount;
?>