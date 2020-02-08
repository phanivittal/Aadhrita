	<?php

	session_start();
	require '../db/db.php';
    $tsize = $_SESSION['team_size'];
    $etype = $_SESSION['event_type'];

    if ($etype=="CULTURAL") {
    	$teamID = "AAD3CE" . rand(00001,99999);
    }
    elseif ($etype=="TECHNICAL") {
    	$teamID = "AAD3TE" . rand(00001,99999);
    }
    elseif ($etype=="WORKSHOP") {
    	$teamID = "AAD3WS" . rand(00001,99999);
    }

	$finalAmount = $_SESSION['finalAmount'];
	$aad3id = $_SESSION['tokens'];
	$email = $_SESSION['emails'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Team Registrations
	</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/bootstrap.min.css">
</head>
<body>
	<div class="container" style="padding-top: 100px;padding-bottom: 100px;">
		<div class="jumbotron">
			<form method="post" action="../teamPay/pgRedirect.php" autocomplete="yes">
    			<table class="table table-striped table-dark">
    				<tbody>
			      	<!-- Hidden Fields -->
			      	<tr hidden>
			          <td>CUSTID ::*</td>
			          <td>
			            <input id="CUST_ID" size="45" display="block" name="CUST_ID" autocomplete="off" value="CUST001" readonly>
			          </td>
			        </tr>

			        <tr hidden>
			          <td>INDUSTRY_TYPE_ID ::*</td>
			          <td>
			            <input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="45" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly>
			          </td>
			        </tr>

			        <tr hidden>
			          <td>Channel :*</td>
			          <td>
			            <input id="CHANNEL_ID" tabindex="4" maxlength="12"
			            size="45" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
			          </td>
			        </tr>
			        <tr>
			          <td colspan="3" align="center" ><?php echo "AADHRITA TEMPORARY TEAM TOKEN - ".$teamID;?>
			          	<input id="ORDER_ID" size="45" name="ORDER_ID" autocomplete="off"
			            value="<?php echo $teamID;?>" hidden>
			          </td>
			        </tr>
			        <tr>
			        	<th scope="col">Aadhrita ID</th>
			        	<th scope="col" >Email ID</th>
			        	<th scope="col">LEAD / MEMBER</th>
			        </tr>
			        <?php
			        	for ($i=0; $i < $tsize  ; $i++) {
			        		echo "<tr>";
			        		echo "<td>".$aad3id[$i]."</td>";
			        		echo "<td>".$email[$i]."</td>";
			        		if ($i==0) {
			        			echo "<td>Lead</td>";
			        		}
			        		else{
			        			echo "<td>Member</td>";
			        		}
			        		echo "</tr>";
			        	}
			        	print_r($aad3id[0]);
			        ?>
			        <tr>
			        	<td>Final Amount</td>
			        	<td colspan="2"><input type="text" name="TXN_AMOUNT" value="<?php echo $finalAmount; ?>" hidden ="yes" > <?php echo $finalAmount; ?></td>
			        </tr>
			          <td colspan="3" align="center">
			            <input class="btn btn-outline-success" value="CheckOut" type="submit" onclick="">
			          </td>
			        </tr>

			      </tbody>
    			</table>
  			</form>
		</div>
	</div>
</body>
</html>