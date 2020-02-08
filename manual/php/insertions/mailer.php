<?php
session_start();

// require '../phpmailer/phpmailer/PHPMailerAutoload.php';
// $mail = new PHPMailer;
// $mail->isSMTP();
// $mail->Host='smtp.gmail.com';
// $mail->port=465;
// $mail->SMTPAuth=true;
// $mail->SMTPSecure='tls';
// $mail->Username='mvgrce17331a0564@gmail.com';
// $mail->Password='mailpassword';
// $mail->setFrom('mvgrce17331a0564@gmail.com','aadhrita2020');
// $to = 'saikiranseepana@gmail.com';
// $mail->addAddress($to);
// $mail->isHTML(true);
// $mail->Subject ='aadhrita2020 registration success';
// $mail->Body='<h3>welcome</h3>';
// $mail->send();

	// $to = $_SESSION['pmail'];
	// $subject = "AADHRITA2020 Registration ";
	// $message = "
	// <h2>The LOGIN ID FOR THE EVENT IS : ".$_SESSION['ptoken']."</h2></br>
	// <h2>The PASSWORD FOR THE EVENT IS : ".$_SESSION['ppass']."</h2></br>
	// <h2>THE AMOUNT PAID TO THE VOLUNTEERS IS : ".$_SESSION['amountpaid']."</h2></br> ";

	// // Always set content-type when sending HTML email
	// $headers = "MIME-Version: 1.0" . "\r\n";
	// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// // More headers
	// $headers .= 'From: <aadhrita2020@aadhrita.org>' . "\r\n";
	// $headers .= 'Cc: aadhritaweb2020@gmail.com' . "\r\n";

	// mail($to,$subject,$message,$headers);

?>
<!DOCTYPE html>
<html>
<head>
	<title>aadhrita</title>
	<meta name="author" content="SAIKIRAN SEEPANA" >
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="form-group">
				<div>
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<td>Name</td>
								<td>Details</td>
							</tr>
							
						</thead>
						<tbody>
							<tr>
								<td>AADHRITA Token</td>
								<td><?php echo $_SESSION['ptoken']; ?></td>
							</tr>
							<tr>
								<td>Amount Paid</td>
								<td><?php echo $_SESSION['amountpaid']; ?></td>
							</tr>
							<td>
								<a href="../register/" class="btn btn-primary" >Back</a>
							</td>
							<td>
								<a href="../landing/" class="btn btn-primary" >Home</a>
							</td>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>