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
	<title>Tokens List</title>
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
						<th>Aadhrita Token</th>
						<th>Aadhrita Token</th>
						<th>Aadhrita Token</th>
					</tr>
				</thead>
				<tbody>
					<?php

					include '../db.php';
					$sql = "SELECT `aadhritaID` FROM `passes` WHERE `availability` = 'YES'";
					$retval = mysqli_query($conn,$sql);
					$i=1;
					while ($row = mysqli_fetch_assoc($retval)) {
						if ($i==1) {
							echo "<tr>";
						}
						echo '
						<td>'.$row["aadhritaID"].'</td>
						';
						$i++;
						if ($i==5) {
							echo "</tr>";
							$i=1;
						}

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