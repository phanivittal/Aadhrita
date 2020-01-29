	<?php
	session_start();
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	// following files need to be included
	require_once("./lib/config_paytm.php");
	require_once("./lib/encdec_paytm.php");
	include '../../db/db.php';
	$paytmChecksum = "";
	$paramList = array();
	$isValidChecksum = "FALSE";

	$paramList = $_POST;
	$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

	//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.

	$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

	$params = array();

	if (isset($_POST) && count($_POST)>0 ){
		foreach($_POST as $paramName => $paramValue) {
			echo "<br/>" . $paramName . " = " . $paramValue;
			array_push($params, $paramValue);
		}
	print_r($params);
	}
	$user = $_SESSION['userName'];
	$email = $_SESSION['email'];
	if($isValidChecksum == "TRUE") {
		echo "<b>Checksum matched and following are the transaction details:</b><br/>";
		if ($_POST["STATUS"] == "TXN_SUCCESS") {
			echo "<b>Transaction status is success</b><br/>";
			$sql ="INSERT INTO `transactionsData` (`paytmTransactionID`, `bankTransactionID`, `transactionDate`, `transactionAmount`, `transactionStatus`, `aadhritaID`, `userName`, `emailID`) VALUES ('$params[2]', '$params[11]', '$params[6]', '$params[3]', '$params[8]', '$params[0]', '$user', '$email')";
				$res = mysqli_query($conn,$sql);
				if ($res) {
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
					$sql = "INSERT INTO `registrations` (`aadhritaID`, `name`, `collegename`, `collegeid`, `email`, `contact`, `password`, `gender`, `yos`, `city`, `pincode`, `accommodation`, `createdtime`) VALUES ('$aadhritaID', '', '', '', '', '', '', '', '', '', '', '', current_timestamp());";
					$retval = mysqli_query($conn,$sql);
					if ($retval) {
						require '../phpmailer/phpmailer/PHPMailerAutoload.php';
						$mail = new PHPMailer;
						$mail->isSMTP();
						$mail->Host='smtp.gmail.com';
						$mail->port=465;
						$mail->SMTPAuth=true;
						$mail->SMTPSecure='tls';
						$mail->Username='mvgrce17331a0564@gmail.com';
						$mail->Password='mailpassword';

						$mail->setFrom('mvgrce17331a0564@gmail.com','aadhrita2020');
						$mail->addAddress($_POST['email']);


						$mail->isHTML(true);
						$mail->Subject =' Sucessful registration of aadhrita2020 ';
						$mail->Body='<h3> AADHRITA2020 token : '.$otp.'</h3>';
						$mail->send();
					}
				}
			}
			else {
				echo "<b>Transaction status is failure</b>" . "<br/>";
				$sql ="INSERT INTO `failedTransactionsData`(`transactionMail`,`token`, `status`, `responseCode`, `responseMessage`, `transactionAmount`, `transactionTime`) VALUES ('$email','$params[0]','$params[4]','$params[5]','$params[6]','$params[2]',CURRENT_TIMESTAMP)";
				$res = mysqli_query($conn,$sql);
				if ($res) {
					echo "sucesfully inserted failed data";
				}
			}
	}
	else {
		echo "<b>Checksum mismatched.</b>";
		//Process transaction as suspicious.
	}

	if(!isset($_SESSION['email']))
		echo "<script> alert('null')</script>";
	else
		echo '<br/>'.$_SESSION['userName'];
	echo "<br><br><button  onclick=\"window.location.href='../../login/'\">Continue</button>";
?>