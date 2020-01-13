<?php
    session_start();
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
    if(isset($_POST['amount'])&&isset($_POST['email'])&&isset($_POST['name'])&&isset($_POST['clg'])){
        $amount=$_POST['amount'];
        $email=$_POST['email'];
        $name=$_POST['name'];
        $clg=$_POST['clg'];
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<style>
    input{
        justify-content:center;
        border-radius:8px;
    }
    </style>
</head>
<body>
	<h1>Merchant Check Out Page</h1>
	<pre>
	</pre>
    <form method="post" action="../../Paytm/PaytmKit/pgRedirect.php">
    
    
    
    
    
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Label</th>
      <th scope="col">Value</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>AADHRITA TOKEN</td>
      <td><input id="ORDER_ID" size="45"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "AAD3RE" . rand(0000,4999)?>" readonly></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>CUSTID ::*</td>
      <td><input id="CUST_ID" size="45" name="CUST_ID" autocomplete="off" value="CUST001" readonly></td>
 
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>INDUSTRY_TYPE_ID ::*</td>
      <td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="45" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Channel  ::*</td>
      <td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="45" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Name</td>
      <td><input title="name" tabindex="10" size="45"
						type="text" name="name"
						value="<?php echo $name?>" readonly></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>email</td>
      <td><input title="email" tabindex="10" size="45"
						type="text" name="email"
						value="<?php echo $email?>" readonly></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>college</td>
      <td><input title="clg" tabindex="10" size="45"
						type="text" name="clg"
						value="<?php echo $clg?>" readonly></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>txnAmount*</td>
      <td><input title="TXN_AMOUNT" tabindex="10" size="45"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $amount?>" readonly></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td><input value="CheckOut" type="submit"	onclick=""></td>
    </tr>
  </tbody>
</table>
    
		* - Mandatory Fields
	</form>
</body>
</html>