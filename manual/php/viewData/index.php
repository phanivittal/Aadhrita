<?php
	session_start();
    if (!isset($_SESSION['user'])) {
        header("Location:../error/");
    }
    $user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrations Data</title>
	<meta name="author" content="SAIKIRAN SEEPANA" >
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css">
</head>
<body>
	<div class="container" style="padding-top: 100px;">
		<div class="jumbotron">
			<table class="table table-striped table-dark">
				<thead>
					<tr>
						<th>Aadhrita Token</th>
						<th>Name</th>
						<th>College</th>
						<th>emailID</th>
						<th>Token assigner</th>
					</tr>
				</thead>
				<tbody>
					<?php

					include '../db.php';
					$sql = "SELECT `aadhritaID`, `name`, `collegename`, `email` FROM `registrations` WHERE `registeredby` ='$user'";
					$retval = mysqli_query($conn,$sql);
					while ($row = mysqli_fetch_assoc($retval)) {
						echo '
							<tr>
								<td>'.$row['aadhritaID'].'</td>
								<td>'.$row['name'].'</td>
								<td>'.$row['collegename'].'</td>
								<td>'.$row['email'].'</td>
								<td>'.$user.'</td>
							</tr>
						';
					}
					?>
				</tbody>
			</table>
			<div style="padding-top: 20px;">
				<center>
					<button type="button" class="btn btn-primary" onclick="location.href='../landing/';" >back</button>
				</center>
			</div>
		</div>
	</div>

</body>
</html>