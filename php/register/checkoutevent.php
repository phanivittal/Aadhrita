<?php 
  session_start();
  require '../db/db.php';
  
  if(isset($_POST)){
    $email=$_SESSION['spemails'][0];  
  }

  $id = $_SESSION['eventId'];
  $uname = $_SESSION['uname'];
$sql="select ename,efee from events where eid='$id'";
$row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
  $amount = $row['efee'];
  $ename=$row['ename'];
?>
<html>
<head>
  <title>AADHRITA REGISTRATION</title>
  <meta charset="utf-8">
  
  <meta name="GENERATOR" content="Evrsoft First Page">
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <style>
    input{
      justify-content:center;
      border-radius:8px;
    }
  </style>
  
</head>
<?php
              if (isset($_GET['msg']))
                if($_GET['msg']=="SPORTS"){
                  $PATH=" ../Paytm/PaytmKit/sports/sportspgRedirect.php";
                }
                elseif($_GET['msg']=="CULTURAL" && $_GET['id']=="AAD3CE01"){
                  $PATH=" ../Paytm/PaytmKit/cultural/Dhvanipratapa/DhvanipratapapgRedirect.php";
                }
                elseif($_GET['msg']=="CULTURAL" && $_GET['id']=="AAD3CE13"){
                  $PATH=" ../Paytm/PaytmKit/cultural/Shresta_Group/Shresta_GrouppgRedirect.php";
                }
              ?>
 
<body>
  <h3 style="padding-top:90px;"><center> AADHRITA SPORTS EVENT  REGISTRATION </center></h3>
  <pre>
  </pre>
  <form name="myform" method="post" action="<?php echo $PATH; ?>" onsubmit="return validate()" autocomplete="yes">
    <div class="container">
      <div class="jumbotron">
        <table class="table table-striped table-dark">
          <tr>
            <td colspan="3">
              
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
              <td> ORDER TOKEN</td>
              <td>
                <input id="ORDER_ID" size="45"
                name="ORDER_ID" autocomplete="off"
                value="<?php echo  "AAD3SR" . rand(00000001,99999999)?>" readonly>
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
              <th scope="row">3</th>
              <td>Email</td>
              <td>
                <input title="email" tabindex="10" size="45"
                type="text" name="email"
                value="<?php echo $email?>" readonly>
              </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Event Name</td>
              <td>
                <input title="ename" tabindex="10" size="45"
                type="text" name="ename"
                value="<?php echo $ename?>" readonly>
              </td>
            </tr>
            <div hidden="yes" >
              <input title="TXN_AMOUNT" tabindex="10" size="45" readonly type="text" name="TXN_AMOUNT" value="<?php echo $amount?>" >
            </div>
            
            <tr>
              <th scope="row">5</th>
              <td>Team Transaction Amount :</td>
              <td>
                <?php echo $amount?>
              </td>
            </tr>
            
              <th scope="row"></th>
              <td>

              </td>
              <td>
                <input value="CheckOut" class="btn btn-outline-success" type="submit" onclick="">
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
        
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
