<?php
session_start();
include '../db/db.php';
$_SESSION['team_size'] = $_POST['tsize'];
$tsize = $_POST['tsize'];
$etype = $_SESSION['event_type'];
$eventID = $_SESSION['eventId'];
$x = 0;
?>

<!DOCTYPE html>
<html>
<head>
 <title>Team Registration</title>
 <meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">

 <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
 <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
 <link rel="stylesheet" href="../../css/navbar.css">
</head>
<body>

	<header class="main-header">
    <div class="logo"><a href="#">LOGO</a></div>
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon">
      <span class="menu-icon__line"></span>
    </label>
    <ul class="nav-links">
      <li class="nav-link"><a href="../../">Home</a></li>
      <li class="nav-link"><a href="../workshop/">WorkShops</a></li>
      <li class="nav-link"><a href="../cultural/">Culturals</a></li>
      <li class="nav-link"><a href="../technical/">Technical</a></li>
      <li class="nav-link"><a href="../about/">About</a></li>
      <?php
      if (isset($_SESSION['session_email'])) {  
        echo '
        <li class="nav-link"><a href="#">Profile</a></li>
        <li class="nav-link"><a href="../logout/">Logout</a></li>
        ';
      }
      else{
        echo '
        <li class="nav-link"><a href="../register/">Register</a></li>
        ';
      }
      ?>
    </ul>
  </header>
  <div class="container" style="padding-top: 120px;" >


    <?php
    // Registering participants data
    $aad3id = [$_POST['tlid']];
    $email = [$_POST['tlemail']];
    $uname = array();

    // Total database values
    $aad3ids=array();
    $emails=array();
    $unames = array();


    if ($x == 0) {
      for( $i = 1 ; $i < $tsize ; $i++ ) {
        array_push($aad3id,$_POST["aad3id".$i]);
        array_push($email,$_POST["memberEmail".$i]);
      }

      $sql="select name, email , aadhritaID from registrations";
      $registrationsResult = mysqli_query($conn,$sql);

      while($row = mysqli_fetch_assoc($registrationsResult)) {
        array_push($aad3ids,$row['aadhritaID']);
        array_push($emails,$row['email']);
        array_push($unames,$row['name']);
      }

      $n =sizeof($aad3ids);

      for($i=0;$i< $tsize;$i++) {
        $valid = 0;
        $valid1 = 0;
        $valid2 = 0;
        for ($j=0; $j < $n ; $j++) {
          if ($aad3id[$i] == $aad3ids[$j]) {
            $valid = 1;
            array_push($uname,$unames[$j]);
             //sfor checking same emails data
            if (($email[$i] == $emails[$j])) {
             $valid2 = 1;
           }
         }
         if ($email[$i] == $emails[$j]){
          $valid1 = 1;
        }

      }
      if ($x==0) {
        echo "

        <div>
        </br></br></br></br></br></br></br></br>
        </div>

        ";
      }
      if ($valid != 1) {
        echo "

        <h4>The AADHRITA ID <b>".$aad3id[$i]."</b> is not Registered. Please enter Registered AADHRITA ID</h4>
        <br>
        ";
      }
      else{
        $x = $x+1;
      }
      if ($valid1 != 1) {
        echo "
        <h4>The email id <b>".$email[$i]."</b> for the aadhrita token <b>".$aad3id[$i]."
        </b> is not Registered. Please enter Registered emaild id</h4>
        <br>
        ";
      }
      else{
        $x = $x+1;
      }
      if ($valid2 != 1) {
        echo "
        <h4>The email id <b>".$email[$i]."</b> is not Registered for the aadhrita token <b>".$aad3id[$i]."
        </b> . Please enter Registered emaild id</h4>
        <br>
        ";
      }
      else{
        $x = $x+1;
      }
    }
    echo "
    <div>
    </br></br></br></br></br></br></br></br>
    </div>
    ";

  }

  if ($x == 3*$tsize) {
    $sql = "SELECT `efee` FROM `events` WHERE `eid` = '$eventID'";
    $retval = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($retval);
    $amount = $row['efee'];
    $finalAmount = (int)$amount;
    $_SESSION['finalAmount']= $finalAmount;
    $_SESSION['tokens'] = $aad3id;
    $_SESSION['emails'] = $email;
    $_SESSION['uname'] = $uname;
    
     if (($etype == "CULTURAL")&&($_SESSION['eventId'] == "AAD3CE09")) {
      $aad3id = $_SESSION['tokens'];

      $users = $_SESSION['emails'];
  
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
            $teamToken = $_SESSION['eventId'].'0'.$n;
          }
          else{
            $teamToken =$_SESSION['eventId'].$n;
          }
          
          $_SESSION['teamToken']=$teamToken;
      $_SESSION['event_type'] = "CULTURAL";
      for( $j = 0 ; $j < $tsize ; $j++ ){
        if ($j==0) {
          $sql2="insert into culturalregistrations values('$teamToken','AAD3CE09','$aad3id[$j]','$uname[$j]','$users[$j]','lead','$tsize')";
        }
        else{
          $sql2="insert into culturalregistrations values('$teamToken','AAD3CE09','$aad3id[$j]','$uname[$j]','$users[$j]','member','$tsize')";
        }
        if(mysqli_query($conn,$sql2)){
        header("Location:./prathibimbam/prathibimbam.php?id='.urlencode(utf8_encode($eventID)).'");
        }else{
          header("Location:../soon/query.php?id='.urlencode(utf8_encode($eventID)).'");
        }

      }
    }
    elseif($etype == "CULTURAL") {
      $_SESSION['event_type'] = "CULTURAL";
      header("Location:./teamPayment.php");
    }
    elseif (($etype == "TECHNICAL")&&($_SESSION['eventId'] == "AAD3TE01")) {
      $aad3id = $_SESSION['tokens'];

      $users = $_SESSION['emails'];
  
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
            $teamToken = $_SESSION['eventId'].'0'.$n;
          }
          else{
            $teamToken =$_SESSION['eventId'].$n;
          }
          
          $_SESSION['teamToken']=$teamToken;
      $_SESSION['event_type'] = "TECHNICAL";
      for( $j = 0 ; $j < $tsize ; $j++ ){
        if ($j==0) {
          $sql2="insert into technicalregistrations values('$teamToken','AAD3TE01','$aad3id[$j]','$uname[$j]','$users[$j]','lead','$tsize')";
        }
        else{
          $sql2="insert into technicalregistrations values('$teamToken','AAD3TE01','$aad3id[$j]','$uname[$j]','$users[$j]','member','$tsize')";
        }
        if(mysqli_query($conn,$sql2)){
        header("Location:./paperpresentation/paperpresentation.php?id='.urlencode(utf8_encode($eventID)).'");
        }else{
          header("Location:../soon/query.php?id='.urlencode(utf8_encode($eventID)).'");
        }

      }
    }
    elseif ($etype == "TECHNICAL") {

      $_SESSION['event_type'] = "TECHNICAL";
      header("Location:./teamPayment.php");
    }
    elseif ($etype == "WORKSHOP") {

      $_SESSION['event_type'] = "WORKSHOP";
      header("Location:./teamPayment.php");
    }

  }
  ?>
</div>
<footer  style="background-color: #2c292f;padding-top: 30px;min-height: 100px; font-family: 'Righteous', cursive;">
  <div class="container" >
    <div class="row">
     <div class="col-md-4 text-center text-md-left">
      <h4 class="my-3 text-warning">Quicklinks</h4>
      <p class="footer-links font-weight-bold">
        <a class="text" style="color:#50d8af;" href="../../">Home |</a>
        <a class="text"style="color: #50d8af;" href="../technical/">Technical |</a>
        <a class="text" style="color:#50d8af;" href="../workshop/">Workshops |</a>
        <a class="text"style="color: #50d8af;" href="../cultural/">Culturals |</a>
        <a class="text"style="color: #50d8af;" href="../login/">Register |</a>
        <a class="text" style="color:#50d8af;" href="../about/">About</a>
      </p>
      <div class="py-1">
        <h4 class="my-3 text-warning">Follow us on</h4>
        <a target="_blank" href="https://www.facebook.com/Aadhrita-2020-104961254324994/"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
        <a target="_blank" href="https://www.instagram.com/aadhrita2020/"><i class="fab fa-instagram fa-2x text-danger mx-6"></i></a>
        <a target="_blank" href="https://twitter.com/aadhrita2020"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
        <a target="_blank" href="https://www.youtube.com/channel/UCF4345SfdBnl5R73kmIfICw"><i class="fab fa-youtube fa-2x text-danger mx-6"></i></a>
      </div>
    </div>    
    <div class="col-md-4 text-white text-center text-md-left ">
      <h4 class="my-3 text-warning">Contact details</h4>  
      <div class="py-0 my-4">
        <div>

        </div>
        <div>
          <ul>
            <li class="fa fa-phone  mx-auto my-3 "><a style="color:#50d8af;" href="tel:+917095847156">&nbsp Prasoon : +917095847156 </a></li>
            <!-- <li class="fa fa-phone  mx-auto my-3 "><a style="color:#50d8af;" href="tel:+919949110243">&nbsp Jeevan : +919949110243 </a></li> -->
            <li class="fa fa-envelope  mx-auto my-3 "><a style="color:#50d8af;" href="mailto:aadhrita2020@gmail.com">&nbsp aadhrita2020@gmail.com </a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <h4 class="my-3 text-warning text-center text-md-left">Address & Map</h4>
      <p class="text-white text-center text-md-left"> <i class="fa fa-map-marker mx-auto  "></i>
        MVGR College of Engineering(A),
        Vijayaram Nagar campus, Chintalavalasa,
      Vizianagaram, Andhra Pradesh 535005</p></i>       
      <div class="py-2">
        <iframe width="230"
        height="230"
        frameborder="2" style="border:0;width:100%;height:auto;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3793.245677096944!2d83.40339111442094!3d18.06017798767875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3be4c4081c8dbb%3A0x1c634bbcd67ea3bf!2sMaharaj%20Vijayaram%20Gajapathi%20Raj%20College%20of%20Engineering%20(Autonomous)!5e0!3m2!1sen!2sin!4v1577787304518!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</div>
<div class="foot" style="width: 100%;color: azure;background-color:dimgrey;height: 80px;margin-bottom: 0">
  <p align="center" style="padding-top: 20px;">Copyright &copy;2020, AadhritaWebteam</p>
</div>
</footer>
<script src="../js/jquery.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script> 
<script  src="../js/common.js"></script>
<script src="../js/popper.min.js"></script>
</body>
</html>