<!DOCTYPE html>
<html>
<head>
	<title>Final checkout</title>
	<meta name="author" content="SEEPANA SAIKIRAN" >
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap/bootstrap.min.css">
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
			array_push($params, $paramValue);
		}
	}
    
	$user = $_SESSION['userName'];
	$email = $_SESSION['email'];
	if($isValidChecksum == "TRUE") {
		echo "
		<div class = 'container'>
	<div class = 'jumbotron' style = 'margin:60px 10px;padding:10px;'>
		";
		echo "<h3>Please Download PDF of the following details:</h3><br/>";
		if ($_POST["STATUS"] == "TXN_SUCCESS") {
			$sql = "SELECT * FROM `registrations`";
			$retval = mysqli_query($conn,$sql);
			$n = mysqli_num_rows($retval);
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
				$aadhritaID = "AAD3".$n;
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
						<td> '.$params[12].' </td>
					</tr>
					<tr>
						<td> Status </td>
						<td> '.$params[8].' </td>
					</tr>
					<tr>
						<td> AADHRITA Token </td>
						<td> '.$aadhritaID.' </td>
					</tr>
					<tr>
						<td> User Name  </td>
						<td> '.$_SESSION['userName'].' </td>
					</tr>
					<tr>
						<td> College ID </td>
						<td> '.$_SESSION['collegeId'].' </td>
					</tr>
					<tr>
						<td> Password </td>
						<td> '.$_SESSION['password'].' </td>
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
						<td> User Name  </td>
						<td> '.$_SESSION['userName'].' </td>
					</tr>
					<tr>
						<td> College ID </td>
						<td> '.$_SESSION['collegeId'].' </td>
					</tr>
					<tr>
						<td> Password </td>
						<td> '.$_SESSION['password'].' </td>
					</tr>
				';
			}
				$res = mysqli_query($conn,$sql);
				if ($res) { 
					$name = $_SESSION['userName'];
					$collegename = $_SESSION['collegeName'];
					$collegeid = $_SESSION['collegeId'];
					$email = $_SESSION['email'];
					$contact = $_SESSION['contact']; 
					$password = $_SESSION['password'];
					$department = $_SESSION['department'];
					$gender = $_SESSION['gender'];
					$yos = $_SESSION['year'];
					$pincode = $_SESSION['pincode'];
					$accommodation = $_SESSION['accommodation'];
					$sql = "INSERT INTO `registrations` 
					(`aadhritaID`, `name`, `collegename`, `collegeid`, `email`, `contact`, `password`, `gender`, `yos`, `department`, `pincode`, `accommodation`, `createdtime`) VALUES 
					('$aadhritaID', '$name', '$collegename', '$collegeid', '$email', '$contact', '$password', '$gender', '$yos', '$department', '$pincode', '$accommodation', current_timestamp());";
					$retval = mysqli_query($conn,$sql);

				}
				else{
					echo "
					<tr>
						<td colspan = '2'><center> Refreshing the page may cause errors </center></td>

					";
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
		echo "
			<tr>
				<td colspan = '2'>
					<center>
					<button class='btn btn-outline-success mr-5' id='create_pdf' value='Generate PDF'>Generate pdf</button>
						<button class='btn btn-outline-success ml-5' name='profile' onclick='location.href=`../../login/`'>Login</button>
					
						
					</center>
				</td>
			</tr>
			
		</table>
		<div>
		</div>
		
		";
	}
	else {
		echo "<b>Checksum mismatched.</b>";
		//Process transaction as suspicious.
	}


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
                doc.save('AADHRITA2020_REGISRATION.pdf');
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
