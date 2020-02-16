	
<html>
<head>
  <title>AADHRITA | SPORTS REGISTRATION</title>
  <meta charset="utf-8">
  <meta name="author" content="SAI PHANI VITTAL" >
  <link rel="stylesheet" href="../../../../css/bootstrap/bootstrap.min.css">
  <style>
    input{
      justify-content:center;
      border-radius:8px;
  }
</style>

</head>
<body style="background-image: linear-gradient(to right, #0F2027, #203A43,#2C5364);">
    <form class="form">
        <?php
        session_start();
        header("Pragma: no-cache");
        header("Cache-Control: no-cache");
        header("Expires: 0");
	// following files need to be included
        require_once("../lib/config_paytm.php");
        require_once("../lib/encdec_paytm.php");
        include '../../../db/db.php';
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
	if($isValidChecksum == "TRUE") {

        $id=$_SESSION['eventId'];
        $sql = "SELECT * FROM `events` WHERE `eid` = '$id'";
        $retval = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($retval);
        $tsize=$_SESSION['team_size'];
        $user = $_SESSION['session_user'];
        $email = $_SESSION['session_email'];
        $aadhritaID = $_SESSION['aadhrita_id'] ;
        if($row['etype'] == "SPORTS" && $_POST["STATUS"] == "TXN_SUCCESS" ) {
            echo "
            <div class = 'container' style = ' padding-top: 100px; ' >
            <div class = 'jumbotron'>
            ";

            $eventId = $_SESSION["eventId"];
            $sql = "SELECT `teamToken` FROM `sportsregistrations`";
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
            $j = 0;
            $aad3id=$_SESSION['phn'];
            $emails=$_SESSION['spemails'];
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
                if(mysqli_query($conn,$sql)){
                    echo "dta inserted in transactions";

                }else{
                    echo "dta  not inserted in transactions";

                }
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
            for( $j = 0 ; $j < $tsize ; $j++ ){
               if ($j==0) {
                 $sql2="insert into sportsregistrations values('$teamToken','$eventId','$aad3id[$j]','$emails[$j]','lead','$tsize')";
             }
             else{
                 $sql2="insert into sportsregistrations values('$teamToken','$eventId','$aad3id[$j]','$emails[$j]','member','$tsize')";
             }
             if(mysqli_query($conn,$sql2)){
          }

      }

  }
  else {
                echo "<b>Transaction status is failure</b>" . "<br/>";
                $sql ="INSERT INTO `failedTransactionsData`(`transactionMail`,`token`, `status`, `responseCode`, `responseMessage`, `transactionAmount`, `transactionTime`) VALUES ('$email','$params[0]','$params[4]','$params[6]','$params[7]','$params[8]',CURRENT_TIMESTAMP)";
                $res = mysqli_query($conn,$sql);
                if ($res) {
                    echo "
                    <tr>
                        <td colspan = '2'>
                            <center> If amount deducted contact prasoon</center>
                        </td>
                    </tr>
                    ";
                }
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
}

?>
<?php

echo "
<tr>
<td colspan = '2'>
<center>
<button class='btn btn-outline-success mr-5' id='create_pdf'  Type='button' value='Generate PDF'>Generate pdf</button>
						<button class='btn btn-outline-success ml-5' Type='button' name='profile' onclick='location.href=`../../../profile/`'>Profile</button>
     
</center>
</td>
</tr>
</table>
</div>
</div>
";

?>
</form>
</body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script>
    (function () {
        var jumbotron = $('.jumbotron'),
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
                doc.save('AADHRITA2020_SPORTS_REGISRATION.pdf');
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
