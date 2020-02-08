<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		header("Location:../error/");
	}
	if(isset($_POST['type'])){
		$_SESSION['rtype'] = $_POST['type'];
		header('Location:../register/');
	}
	$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
	<meta name="author" content="SAIKIRAN SEEPANA" >
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css">
</head>
<body>
	<div class="container" style="padding-top: 100px;">
		<form method="POST" >
			<button type="button" class="btn btn-primary" onclick="location.href='../../';" style="float: right;" >logout</button>
			<div class="jumbotron">
				<div>
					<p style="float: right; font-size: 24px; ">Welcome : <?php 
					echo $user;

					include '../db.php';
					$sql = "SELECT aadhritaID FROM `registrations`";
					$retval= mysqli_query($conn,$sql);
					$n = mysqli_num_rows($retval);	
					echo "<h5>Total number of Registrations : ".$n;
					$sql = "SELECT aadhritaID FROM `registrations` where `registeredby`='$user'";
					$retval= mysqli_query($conn,$sql);
					$n = mysqli_num_rows($retval);	
					echo "<h5>Number of Registrations done : ".$n;
					?></p>
				</div>
				<br><br>
				<div class="form-group">
					<label style="font-size: 22px;"> Select Registration Type :</label>
					<select name="type" class="form-control" required>
						<option disabled="disabled" selected="selected" value="">Choose option</option>
						<option value="MVGR">MVGR</option>
						<option value="OTHERS">OTHERS</option>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" name="submit" value="submit">
				</div>
			</div>
		</form>
		<div class="row">
			<div class="col-6">
				<div class="jumbotron">
					<form method="POST" action="../viewData/">
						<div class="form-group">
							<h5>To view Tokens assigned by you : </h5>
							<button type="submit" class="btn btn-primary"  >View</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-6">
				<div class="jumbotron">
					<div class="form-group">
						<h5> To see the available Manual Tokens :</h5>
						<button type="button" class="btn btn-primary" onclick="location.href='../tokenList/';" >List</button>
					</div>
				</div>
			</div>
		</div>
				
		
	</div>
</body>
</html>