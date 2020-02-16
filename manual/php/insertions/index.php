<?php
	session_start();
	include '../db.php';
	$name = $_POST['userName'];
	$collegename = $_POST ['collegeName'];
	$collegeid = $_POST ['CollegeId'];
	$email = $_POST ['email'];
	$contact = $_POST ['contact'];
	$pincode = $_POST ['pincode'];
	$department = $_POST ['department'];
	$gender = $_POST ['gender'];
	$yos = $_POST ['year'];
	$accommodation = $_POST ['accommodation'];
	$password = $_POST ['password'];
	$mid = $_POST ['token'];
	$register = $_SESSION['user'];
	$collegeid = strtoupper($collegeid);
	$mid = strtoupper($mid);
	$sql = "SELECT * FROM `passes` WHERE aadhritaID = '$mid'";
	$retval = mysqli_query($conn,$sql);
	$n = mysqli_num_rows($retval);

	// $size = 10;
	// $characters = '012345efghijwxyzABCDEFklmnopq#rstuvGHIJKL6789abcdMNOPQRSTUVWXYZ@';
	// $password = '';
	// for ($i = 0; $i < $size; $i++) {
	//   $index = rand(0, strlen($characters) - 1);
	//   $password .= $characters[$index];
	// }

	$_SESSION['pmail'] = $email;
	$_SESSION['ppass'] = $password;
	$_SESSION['ptoken'] = $mid;


	$availability = array();
	if ($n == 1) {

		$row = mysqli_fetch_array($retval);

		if ($row['availability']=="YES") {
			$amount = 300;
			if ($accommodation == "YES") {
				$amount+=600;
			} 
			if ($collegename=='MVGR') {
				$amount-=100;
			}

			$_SESSION['amountpaid'] = $amount;

			$sql = "UPDATE `passes` SET `availability`='NO',`givenby`='$register',`amount`='$amount',`time`=CURRENT_TIMESTAMP WHERE `aadhritaID` ='$mid'";
			$retval = mysqli_query($conn,$sql);
			if ($retval) {

				$td1 = "Updated";
				$sql = "INSERT INTO `registrations`(`aadhritaID`, `name`, `collegename`, `collegeid`, `email`, `contact`, `password`, `gender`, `yos`, `department`, `pincode`, `accommodation`, `registeredby`, `createdtime`) VALUES ('$mid','$name','$collegename','$collegeid','$email','$contact','$password','$gender','$yos','$department','$pincode','$accommodation','$register',CURRENT_TIMESTAMP)";
				$retval = mysqli_query($conn,$sql);
				if ($retval) {
				 	
				 	$td2 = "Updated";
				}
				else{
					$td2 = "failed to Update";
				}
				$con=mysqli_connect('localhost','aadhrita','After8years','aadhrita');
                    $sql = "INSERT INTO registrations 
                     (`aadhritaID`, name, collegename, collegeid, email, contact, password, gender, yos, department, pincode, accommodation, `createdtime`) VALUES 
                     ('$mid','$name','$collegename','$collegeid','$email','$contact','$password','$gender','$yos','$department','$pincode','$accommodation',current_timestamp());";
     
     $retval1 = mysqli_query($con,$sql);

    if($retval1)
    {
     echo "<script>alert('inserted in to main database');</script>";
    }
    else{
     echo "<script>alert('Failed to inserted in to main database');</script>";
    }
			}
			else{
				$msg = "Failed updating passes";
			}
		}
		else{
			$msg = "Token already Assigned by ".$row['givenby']." on ".$row['time'];
		}
	}
	else{
		$msg = "Enter valid Token number";
	}
	$sql = "SELECT * FROM `passes` WHERE givenby = '$register'";
	$retval = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($retval);
					
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	<meta name="author" content="SAIKIRAN SEEPANA" >
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css">
</head>
<body>
	<div class="container" style="padding-top: 100px;">
		<div class="jumbotron" >
			<h2 style="color: red;" >
			<?php
			if (isset($msg)) {
				echo $msg;
			}

			else{
				echo '
				</h2>
				<table class="table table-striped table-dark">
					<thead>
						<tr>
							<th>label</th>
							<th>message</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Passes data</td>
							<td>'.$td1.'</td>
						</tr>
						<tr>
							<td>Registrations data</td>
							<td>'.$td2.'</td>
						</tr>
						<tr>
							<td>Amount to be collected</td>
							<td>'.$amount.'</td>
						</tr>
						<tr>
							<td>Registrations done by you</td>
							<td>'.$num.'</td>
						</tr>
					</tbody>
				</table>

				';
			}
			?>
			<center>
				<button type="button" class="btn btn-primary" onclick="location.href='./mailer.php';" >Done</button>
			</center>
			<!-- <div class="form-group">
				<div>
					<table class="table table-striped table-dark">
						<thead>
							<td>
								<a href="../register/" class="btn btn-primary" style="float: left;">Back</a>
							</td>
							<td>
								<a href="../landing/" class="btn btn-primary" style="float: right;">Home</a>
							</td>
						</thead>
					</table>
					
					
				</div>
			</div> -->
		</div>
	</div>
</body>
</html>