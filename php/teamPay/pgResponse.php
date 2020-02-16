<!DOCTYPE html>
<html>
<head>
	<title>Final Checkout</title>
	<meta name="author" content="SEEPANA SAIKIRAN" >
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css">
</head>
<body style="background-image: linear-gradient(to right, #0F2027, #203A43,#2C5364);">

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
	$parnames = array();

	if (isset($_POST) && count($_POST)>0 ){
		foreach($_POST as $paramName => $paramValue) {
			array_push($params, $paramValue);
			array_push($parnames, $paramName);
		}
	}
	$users = $_SESSION['emails'];
	$aad3id = $_SESSION['tokens'];
	$uname = $_SESSION['uname'];
	$aadhritaID = $aad3id[0];
	$user = $uname[0];
	$email = $users[0];
	$tsize = $_SESSION['team_size'];
	$eventId = $_SESSION["eventId"];
	if($isValidChecksum == "TRUE") {
		echo "
		<div class = 'container' style = ' padding-top: 100px; ' >
		<div class = 'jumbotron'>
		";
		if ($_POST["STATUS"] == "TXN_SUCCESS") {

			if ( $_SESSION['event_type'] == 'TECHNICAL' ) {

				$sql = "SELECT `teamToken` FROM `technicalregistrations`";
				$retval = mysqli_query( $conn , $sql ) ;
				$rows = mysqli_num_rows($retval);
				if ($rows == 0) {
					$n = 1;
				}
				else{
					while ($row = mysqli_fetch_assoc($retval)) {
						$n = substr($row['teamToken'], 8,2)+1 ;
					}
				}
				if ($n<10) {
					$teamToken = $eventId.'0'.$n;
				}
				else{
					$teamToken = $eventId.$n;
				}
			}

			elseif ( $_SESSION['event_type'] == 'CULTURAL' ) {
				$sql = "SELECT `teamToken` FROM `culturalregistrations`";
				$retval = mysqli_query( $conn , $sql ) ;
				$rows = mysqli_num_rows($retval);
				if ($rows == 0) {
					$n = 1;
				}
				else{
					while ($row = mysqli_fetch_assoc($retval)) {
						$n = substr($row['teamToken'], 8,2)+1 ;
					}
				}
				if ($n<10) {
					$teamToken = $eventId.'0'.$n;
				}
				else{
					$teamToken = $eventId.$n;
				}
			}
			elseif ( $_SESSION['event_type'] == 'WORKSHOP' ) {
				$sql = "SELECT `teamToken` FROM `workshopregistrations`";
				$retval = mysqli_query( $conn , $sql ) ;
				$rows = mysqli_num_rows($retval);
				if ($rows == 0) {
					$n = 1;
				}
				else{
					while ($row = mysqli_fetch_assoc($retval)) {
						$n = substr($row['teamToken'], 8,2)+1 ;
					}
				}
				if ($n<10) {
					$teamToken = $eventId.'0'.$n;
				}
				else{
					$teamToken = $eventId.$n;
				}
			}


				if ($params[2]=='Txn Success') { 
				$sql ="INSERT INTO `transactionsdata` (`paytmTransactionID`, `bankTransactionID`, `transactionDate`, `transactionAmount`, `transactionStatus`, `aadhritaID`, `userName`, `emailID`) VALUES ('$params[7]', '$params[11]', '$params[12]', '$params[8]', '$params[10]', '$aadhritaID', '$user', '$email')";
				echo '
				<table class="table table-striped table-dark">
					<tr>
						<th>Field</th>
						<th>Value</th>
					</tr>
					<tr>
						<td> Bank Transaction ID </td>
						<td> '.$params[11].' </td>
					</tr>
					<tr>
						<td> Date of Transaction </td>
						<td> '.$params[12].' </td>
					</tr>
					<tr>
						<td> Amount of Transaction </td>
						<td> '.$params[8].' </td>
					</tr>
					<tr>
						<td> Status </td>
						<td> '.$params[10].' </td>
					</tr>
					<tr>
						<td> AADHRITA Token </td>
						<td> '.$aadhritaID.' </td>
					</tr>
					<tr>
						<td> Event ID  </td>
						<td> '.$eventId.' </td>
					</tr>
					<tr>
						<td> Team Token </td>
						<td> '.$teamToken.' </td>
					</tr>
				';
			}
			else{
				$sql ="INSERT INTO `transactionsdata` (`paytmTransactionID`, `bankTransactionID`, `transactionDate`, `transactionAmount`, `transactionStatus`, `aadhritaID`, `userName`, `emailID`) VALUES ('$params[2]', '$params[11]', '$params[6]', '$params[3]', '$params[7]', '$aadhritaID', '$user', '$email')";
				echo '
				<table class="table table-striped table-dark">
					<tr>
						<th>Field</th>
						<th>Value</th>
					</tr>
					<tr>
						<td> Bank Transaction ID </td>
						<td> '.$params[11].' </td>
					</tr>
					<tr>
						<td> Date of Transaction </td>
						<td> '.$params[6].' </td>
					</tr>
					<tr>
						<td> Amount of Transaction </td>
						<td> '.$params[3].' </td>
					</tr>
					<tr>
						<td> Status </td>
						<td> '.$params[7].' </td>
					</tr>
					<tr>
						<td> AADHRITA Token </td>
						<td> '.$aadhritaID.' </td>
					</tr>
					<tr>
						<td> Event ID  </td>
						<td> '.$eventId.' </td>
					</tr>
					<tr>
						<td> Team Token </td>
						<td> '.$teamToken.' </td>
					</tr>
					
				';
			}

				$res = mysqli_query($conn,$sql);

				if ($res) {
					if ( $_SESSION['event_type'] == 'TECHNICAL' ) {

						for( $j = 0 ; $j < $tsize ; $j++ ){
							if ($j==0) {
								$sql2="insert into technicalregistrations values('$teamToken','$eventId','$aad3id[$j]','$uname[$j]','$users[$j]','lead','$tsize')";
							}
							else{
								$sql2="insert into technicalregistrations values('$teamToken','$eventId','$aad3id[$j]','$uname[$j]','$users[$j]','member','$tsize')";
							}
							if(!mysqli_query($conn,$sql2)){
								echo '
								<tr>
									<td colspan = "2">
										<center><b>Transaction status is Error</b><br/></center>
									</td>
								</tr>
								';
							}
						}
					}
					elseif ( $_SESSION['event_type'] == 'CULTURAL' ) {

						for( $j = 0 ; $j < $tsize ; $j++ ){
							if ($j==0) {
								$sql2="insert into culturalregistrations values('$teamToken','$eventId','$aad3id[$j]','$uname[$j]','$users[$j]','lead','$tsize')";
							}
							else{
								$sql2="insert into culturalregistrations values('$teamToken','$eventId','$aad3id[$j]','$uname[$j]','$users[$j]','member','$tsize')";
							}
							if(!mysqli_query($conn,$sql2)){
								echo '
								<tr>
									<td colspan = "2">
										<center><b>Transaction status is Error</b><br/></center>
									</td>
								</tr>
								';
							}
						}
					}
					elseif ( $_SESSION['event_type'] == 'WORKSHOP' ) {

						for( $j = 0 ; $j < $tsize ; $j++ ){
							if ($j==0) {
								$sql2="insert into workshopregistrations values('$teamToken','$eventId','$aad3id[$j]','$uname[$j]','$users[$j]','lead','$tsize')";
							}
							else{
								$sql2="insert into workshopregistrations values('$teamToken','$eventId','$aad3id[$j]','$uname[$j]','$users[$j]','member','$tsize')";
							}
							if(!mysqli_query($conn,$sql2)){
								echo '
								<tr>
									<td colspan = "2">
										<center><b>Transaction status is Error</b><br/></center>
									</td>
								</tr>
								';
							}
						}
					}
				}

			}
			else {
				echo "
				<tr>
					<td colspan = '2'>
						<center><b>Transaction status is Failure</b><br/></center>
					</td>
				</tr>
				";
			}
		}
		else {
			echo "
			<tr>
				<td colspan = '2'>
					<center><b>Checksum mismatched.</b></center>
				</td>
			</tr>
			";
		//Process transaction as suspicious.
		}

		echo "
			<tr>
				<td colspan = '2'>
					<center>
					<button class='btn btn-outline-success mr-5' type='button' id='create_pdf' value='Generate PDF'>GeneratePdf</button>
						<button class='btn btn-outline-success ml-5 ' name='profile' onclick='location.href=`../profile/`'>Profile</button>
					</center>
				</td>
			</tr>
		</table>
		</div>
		</div>
		";


// session_unset();
// session_destroy();
		?>

	</body>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script>
    (function () {
        var
        jumbotron = $('.jumbotron'),
         cache_width = jumbotron.width(),
         a4 = [595.28, 841.89]; // for a4 size paper width and height

        $('#create_pdf').on('click', function () {
            $('body').scrollTop(0);
            createPDF();
        });
        //create pdf
        function createPDF() {
            getCanvas().then(function (canvas) {
                var
                 img = canvas.toDataURL("image/png"),
                 doc = new jsPDF({
                     unit: 'px',
                     format: 'a4'
                 });
                doc.addImage(img, 'JPEG', 20, 20);
                doc.save('AADHRITA2020_TEAM_REGISRATIONS.pdf');
                jumbotron.width(cache_width);
            });
        }

        // create canvas object
        function getCanvas() {
            jumbotron.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
            return html2canvas(jumbotron, {
                imageTimeout: 2000,
                removeContainer: true
            });
        }

    }());
</script>
<script>
    /*
 * jQuery helper plugin for examples and tests
 */
    (function ($) {
        $.fn.html2canvas = function (options) {
            var date = new Date(),
            $message = null,
            timeoutTimer = false,
            timer = date.getTime();
            html2canvas.logging = options && options.logging;
            html2canvas.Preload(this[0], $.extend({
                complete: function (images) {
                    var queue = html2canvas.Parse(this[0], images, options),
                    $canvas = $(html2canvas.Renderer(queue, options)),
                    finishTime = new Date();

                    $canvas.css({ position: 'absolute', left: 0, top: 0 }).appendTo(document.body);
                    $canvas.siblings().toggle();

                    $(window).click(function () {
                        if (!$canvas.is(':visible')) {
                            $canvas.toggle().siblings().toggle();
                            throwMessage("Canvas Render visible");
                        } else {
                            $canvas.siblings().toggle();
                            $canvas.toggle();
                            throwMessage("Canvas Render hidden");
                        }
                    });
                    throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);
                }
            }, options));

            function throwMessage(msg, duration) {
                window.clearTimeout(timeoutTimer);
                timeoutTimer = window.setTimeout(function () {
                    $message.fadeOut(function () {
                        $message.remove();
                    });
                }, duration || 2000);
                if ($message)
                    $message.remove();
                $message = $('<div ></div>').html(msg).css({
                    margin: 0,
                    padding: 10,
                    background: "#000",
                    opacity: 0.7,
                    position: "fixed",
                    top: 10,
                    right: 10,
                    fontFamily: 'Tahoma',
                    color: '#fff',
                    fontSize: 12,
                    borderRadius: 12,
                    width: 'auto',
                    height: 'auto',
                    textAlign: 'center',
                    textDecoration: 'none'
                }).hide().fadeIn().appendTo('body');
            }
        };
    })(jQuery);

</script>
</html>