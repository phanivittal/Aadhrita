	<?php
	session_start();
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	// following files need to be included
	require_once("./lib/config_paytm.php");
	require_once("./lib/encdec_paytm.php");
	include '../db/db.php';
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
	$users = $_SESSION['emails'];
	$aad3ids = $_SESSION['tokens'];
	$aadhritaID = $aad3ids[0];
	$user = $_SESSION['session_user'];
	$email = $users[0];
	$tsize = $_SESSION['tsize'];
	$eventId = $_SESSION["eventId"];

	if($isValidChecksum == "TRUE") {
		echo "<b>Checksum matched and following are the transaction details:</b><br/>";
		if ($_POST["STATUS"] == "TXN_SUCCESS") {
			echo "<b>Transaction status is success</b><br/>";
			$sql ="INSERT INTO `transactionsData` (`paytmTransactionID`, `bankTransactionID`, `transactionDate`, `transactionAmount`, `transactionStatus`, `aadhritaID`, `userName`, `emailID`) VALUES ('$params[2]', '$params[11]', '$params[6]', '$params[3]', '$params[8]', '$aadhritaID', '$user', '$email')";
			$res = mysqli_query($conn,$sql);

			if ($res) {
				if ( $_SESSION['event_type'] == 'TECHNICAL' ) {
					$sql = "SELECT `teamToken` FROM `technicalregistrations`";
					$retval = mysqli_query( $conn , $sql ) ;
					$n = mysqli_num_rows()+1;
					$teamToken = $eventId.$min;
					for( $j = 0 ; $j < $tsize ; $j++ ){
						if ($j==0) {
							$sql2="insert into technicalregistrations values('$teamToken','$eventId','$aad3id[$j]','defined','$email[$j]','lead','$tsize')";
						}
						else{
							$sql2="insert into technicalregistrations values('$teamToken','$eventId','$aad3id[$j]','defined','$email[$j]','member','$tsize')";
						}
						if(!mysqli_query($conn,$sql2)){
							echo 'error';
						}
						else{
							echo 'updated';
						}
					}
				}
				elseif ( $_SESSION['event_type'] == 'CULTURAL' ) {
					$sql = "SELECT `teamToken` FROM `technicalregistrations`";
					$retval = mysqli_query( $conn , $sql ) ;
					$n = mysqli_num_rows($retval)+1;
					$teamToken = $eventId.$min;
					for( $j = 0 ; $j < $tsize ; $j++ ){
						if ($j==0) {
							$sql2="insert into technicalregistrations values('$teamToken','$eventId','$aad3id[$j]','defined','$email[$j]','lead','$tsize')";
						}
						else{
							$sql2="insert into technicalregistrations values('$teamToken','$eventId','$aad3id[$j]','defined','$email[$j]','member','$tsize')";
						}
						if(!mysqli_query($conn,$sql2)){
							echo 'error';
						}
						else{
							echo 'updated';
						}
					}
				}
				elseif ( $_SESSION['event_type'] == 'WORKSHOP' ) {
					$sql = "SELECT `teamToken` FROM `technicalregistrations`";
					$retval = mysqli_query( $conn , $sql ) ;
					$n = mysqli_num_rows()+1;
					$teamToken = $eventId.$min;
					for( $j = 0 ; $j < $tsize ; $j++ ){
						if ($j==0) {
							$sql2="insert into technicalregistrations values('$teamToken','$eventId','$aad3id[$j]','defined','$email[$j]','lead','$tsize')";
						}
						else{
							$sql2="insert into technicalregistrations values('$teamToken','$eventId','$aad3id[$j]','defined','$email[$j]','member','$tsize')";
						}
						if(!mysqli_query($conn,$sql2)){
							echo 'error';
						}
						else{
							echo 'updated';
						}
					}s
				}
			}

		}
		else {
			echo "<b>Transaction status is Failure</b><br/>";
		}
	}
	else {
		echo "<b>Checksum mismatched.</b>";
		//Process transaction as suspicious.
	}

	if(!isset($_SESSION['session_user']))
		echo "<script> alert('null')</script>";
	else
		echo '<br/>'.$_SESSION['session_user'];
	echo "<br><br><button  onclick=\"window.location.href='../../login/'\">Continue</button>";


// session_unset();
// session_destroy();
?>