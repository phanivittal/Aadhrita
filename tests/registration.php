<?php

	include '../php/db/db.php';
	$sql = "INSERT INTO `registrations` (`aadhritaID`, `name`, `collegename`, `collegeid`, `email`, `contact`, `password`, `gender`, `yos`, `city`, `pincode`, `accommodation`, `createdtime`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', current_timestamp());";
	$retval = mysqli_query($conn,$sql);
	if ($retval) {
		echo "string";
	}
?>
