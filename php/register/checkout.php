<?php 
  session_start();
  header("Pragma: no-cache");
  header("Cache-Control: no-cache");
  header("Expires: 0");
  include './phpmailer.php';
  include '../php/db/db.php';
  $_SESSION['userName']=$_POST['userName'];
  $_SESSION['collegeName']=$_POST['collegeName'];
  $_SESSION['collegeId']=$_POST['CollegeId'];
  $_SESSION['email']=$_POST['email'];
  $_SESSION['amount']=$_POST['amount'];
  $_SESSION['password']=$_POST['password'];
  $_SESSION['department']=$_POST['department'];
  $_SESSION['year']=$_POST['year'];
  $_SESSION['accommodation']=$_POST['accommodation'];
          
  if(isset($_POST)){
    $email=$_POST['email'];
    $name=$_POST['userName'];
    $clg=$_POST['collegeName'];
  }
  $amount = 300;
  $collegeid = $_POST['CollegeId'];
  $accommodation = $_POST['accommodation'];
  if ($accommodation == "YES") {
    $amount+=800;
  }
  
  if (substr($collegeid, 2,2)==33) {
    $sql = "SELECT * FROM `testdata` WHERE collegeID = '$collegeid'";
    $retval = mysqli_query($conn,$sql);
    $n = mysqli_num_rows($retval);

    if ($n=mysqli_num_rows($retval)) {
      $row = mysqli_fetch_assoc($retval);
      $amount-=100;
    }
  }

?>
<html>
<head>
  <title>AADHRITA REGISTRATION</title>
  <meta charset="utf-8">
  <meta name="author" content="seepana sai kiran" >
  <meta name="GENERATOR" content="Evrsoft First Page">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <style>
    input{
      justify-content:center;
      border-radius:8px;
    }
  </style>
  
</head>
<body>
  <h1 style="padding:20px;">AADHRITA FEST REGISTRATION</h1>
  <pre>
  </pre>
  <form name="myform" method="post" action="../Paytm/PaytmKit/pgRedirect.php" onsubmit="return validate()" autocomplete="yes">
    <table class="table table-striped table-dark">
      <tr>
        <td>
          <?php
          if (isset($_GET['msg']))
            echo "otp is wrong";
          ?>
        </td>
      </tr>
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
          <td>
            <input id="ORDER_ID" size="45"
            name="ORDER_ID" autocomplete="off"
            value="<?php echo  "AAD3RE" . rand(0000,4999)?>" readonly>
          </td>
        </tr>
        <tr hidden>
          <th scope="row">2</th>
          <td>CUSTID ::*</td>
          <td>
            <input id="CUST_ID" size="45" display="block" name="CUST_ID" autocomplete="off" value="CUST001" readonly>
          </td>

        </tr>
        <tr hidden>
          <th scope="row">3</th>
          <td>INDUSTRY_TYPE_ID ::*</td>
          <td>
            <input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="45" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly>
          </td>
        </tr>
        <tr hidden>
          <th scope="row">4</th>
          <td>Channel :*</td>
          <td>
            <input id="CHANNEL_ID" tabindex="4" maxlength="12"
            size="45" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Name</td>
          <td>
            <input title="name" tabindex="10" size="45"
            type="text" name="name"
            value="<?php echo $name?>" readonly>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>email</td>
          <td>
            <input title="email" tabindex="10" size="45"
            type="text" name="email"
            value="<?php echo $email?>" readonly>
          </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>college</td>
          <td>
            <input title="clg" tabindex="10" size="45"
            type="text" name="clg"
            value="<?php echo $clg?>" readonly>
          </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Transaction amount :</td>
          <td>
            <input title="TXN_AMOUNT" tabindex="10" size="45"
            type="text" name="TXN_AMOUNT"
            value="<?php echo $amount?>" >
          </td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Enter OTP</td>
          <td>
            <input  type="password"  size="45" name="fotp" id="iotp" required>
          </td>
        </tr>

        <tr>
          <th scope="row"></th>
          <td>

          </td>
          <td>
            <input value="CheckOut" type="submit" onclick="">
          </td>
        </tr>

      </tbody>
    </table>
  </form>
  <script>
    var count=0;
    function validate(){
      var otp=document.myform.fotp.value;
      var chotp="<?php echo $otp; ?>";

      if(count<3){
        if(chotp!=otp)
        {
          alert('OTP is wrong'+otp+" equals"+chotp);
          count++;
          return false;
        }
        else{
          return true;
        }
      }else{
        alert('goes back to register pageonly');
        return false;
      }
    }
  </script>
</body>
</html>