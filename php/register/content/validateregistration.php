<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
 <title>Team Registration</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
 <meta name="author" content=" seepana sai kiran">
 <link rel="stylesheet" href="../css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../css/workshopcs.css"/>
 <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
 <link rel="stylesheet" href="../css/carousel_ext.css">
 <link rel="stylesheet" href="../css/navbar.css">
 <link rel="stylesheet" href="../css/card.css">
</head>
<body>

	<header class="main-header">
    <div class="logo"><a href="#">LOGO</a></div>
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon">
      <span class="menu-icon__line"></span>
    </label>
    <ul class="nav-links">
      <li class="nav-link"><a href="../index.php">Home</a></li>
      <li class="nav-link"><a href="./workshop.php">WorkShops</a></li>
      <li class="nav-link"><a href="./cultural.php">Culturals</a></li>
      <li class="nav-link"><a href="./technical.php">Technical</a></li>
      <li class="nav-link"><a href="./about.php">About</a></li>
      <?php
      if (isset($_SESSION['session_email'])) {  
        echo '
        <li class="nav-link"><a href="#">Profile</a></li>
        <li class="nav-link"><a href="../logout.php">Logout</a></li>
        ';
      }
      else{
        echo '
        <li class="nav-link"><a href="./register/login.php">Register</a></li>
        ';
      }
      ?>
    </ul>
  </header>
  <?php
  require './php/db/db.php';
  $_SESSION['team_size'] = $_POST['tsize'];
  $tsize = $_POST['tsize'];
  $etype = $_SESSION['event_type'];
  
  $aad3id = [$_POST['tlid']];
  $email = [$_POST['tlemail']];
  $aad3ids=array();
  $emails=array();

  for( $i = 1 ; $i < $tsize ; $i++ ) {
    array_push($aad3id,$_POST["aad3id".$i]);
    array_push($email,$_POST["memberEmail".$i]);
  }
   // print_r($aad3id);
   // print_r($email);
  $sql="select email , aadhritaID from registrations";
  $res=mysqli_query($conn,$sql);

  while($row = mysqli_fetch_assoc($res)) {
    array_push($aad3ids,$row['aadhritaID']);
    array_push($emails,$row['email']);
  }

  //print_r($aad3ids);
  //print_r($email);
  $result =sizeof(array_diff($aad3id, $aad3ids));
  $result1 =sizeof(array_diff($email, $emails));
  //echo var_dump($result);
  if($result != 0){
    for($i=0;$i<$result;$i++) {
      echo array_diff($aad3id, $aad3ids)[$i].' is not registered to aadritha <br/>';
    }
  }
  elseif ($result1 != 0) {
    for($i=0;$i<$result1;$i++)
    {
      echo array_diff($email, $emails)[$i].' is not registered aadritha mailID <br/>';
    }
  }
  else {
    $id = $_SESSION['eventId'];
    $sql = "SELECT * FROM `events` WHERE `eid` = '$id'";
    $retval = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($retval);

    if ($row['etype'] == "CULTURAL") {
      $sql1="select name, aadhritaID from registrations";
      $res1=mysqli_query($conn,$sql1);
      $sno=array();
      $names=array();

      while($row=mysqli_fetch_assoc($res1)){
        $x = $row['aadhritaID'];
        $sno[]=substr($x,4,6);
        $names[]=$row['name'];
        $aadhritaToken[]=$row['aadhritaID'];
      }

      $min=min($sno);
      $eventId = $_SESSION["eventId"];
      $un = $_SESSION['session_user'];

      $j = 0;
      for( $j = 0 ; $j < $tsize ; $j++ ){
        $teamToken = $eventId.$min;
        if ($j==0) {
          $sql2="insert into culturalRegistrations values('$teamToken','$eventId','$aadhritaToken[$j]','$names[$j]','$email[$j]','lead')";
        }
        else{
          $sql2="insert into culturalRegistrations values('$teamToken','$eventId','$aadhritaToken[$j]','$names[$j]','$email[$j]','member')";
        }
        if(!mysqli_query($conn,$sql2)){
          echo 'error';
        }
        else{
          echo 'updated';
        }
      }
    }
    elseif ($row['etype'] == "TECHNICAL") {
      $sql1="select name, aadhritaID from registrations";
      $res1=mysqli_query($conn,$sql1);
      $sno=array();
      $names=array();

      while($row=mysqli_fetch_assoc($res1)){
        $x = $row['aadhritaID'];
        $sno[]=substr($x,4,6);
        $names[]=$row['name'];
        $aadhritaToken[]=$row['aadhritaID'];
      }

      $min=min($sno);
      $eventId = $_SESSION["eventId"];
      $un = $_SESSION['session_user'];

      $j = 0;
      for( $j = 0 ; $j < $tsize ; $j++ ){
        $teamToken = $eventId.$min;
        if ($j==0) {
          $sql2="insert into technicalRegistrations values('$teamToken','$eventId','$aadhritaToken[$j]','$names[$j]','$email[$j]','lead')";
        }
        else{
          $sql2="insert into technicalRegistrations values('$teamToken','$eventId','$aadhritaToken[$j]','$names[$j]','$email[$j]','member')";
        }
        if(!mysqli_query($conn,$sql2)){
          echo 'error';
        }
        else{
          echo 'updated';
        }
      }
    }
  }
  ?>
  <footer  style="background-color: #2c292f;padding-top: 30px;min-height: 280;">
    <div class="container">
      <div class="row">
        <div class="col-md-3 text-center ">
          <h4 class="my-3 text-white">About<br><span class="mx-auto my-3  text-warning ">MVGR College of Engineering</span></h4>
          <ul style="color:aliceblue">
            <li>Alumini</li>
            <li>Events</li>
            <li>News & Events</li>
            <li>Gallery</li>
            <li>Press & Media</li>
          </ul>
        </div>
        <div class="col-md-3">
          <div class="py-5">
            <iframe width="230" height="230" frameborder="2" style="border:0;width:100%;height:auto;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3793.245677096944!2d83.40339111442094!3d18.06017798767875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3be4c4081c8dbb%3A0x1c634bbcd67ea3bf!2sMaharaj%20Vijayaram%20Gajapathi%20Raj%20College%20of%20Engineering%20(Autonomous) !5e0!3m2!1sen!2sin!4v1577787304518!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="col-md-3 text-white text-center text-md-left">
          <div class="py-0 my-4" >
            <div>
              <p class="text-white text-center text-md-left"> <i class="fa fa-map-marker mx-auto  "></i>
                MVGR College of Engineering(A),
                Vijayaram Nagar campus, Chintalavalasa,
              Vizianagaram, Andhra Pradesh 535005</p></i>
            </div>
            <div>
              <p><i class="fa fa-phone  mx-auto my-3 "></i> Contact: 08922 241732,<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 08922 241039</p>
            </div>
            
            <div>
              <p><i class="fa fa-envelope  mx-auto my-3"></i><a href="mailto:office@mvgrce.com">office@mvgrce.com</a></p>
            </div>
            <p class="footer-links font-weight-bold">
              <a class="text-white" href="#">Home |</a>
              <a class="text-white" href="#">Blog |</a>
              <a class="text-white" href="#">About |</a>
              <a class="text-white" href="#">Contact</a>
            </p><br>
          </div>
        </div>
        <div class="col-md-3 text-center">
          <h5 class="my-3 text-white">Quicklinks</h5>
          <ul class="text-warning my-2">
            <li>Commities</li>
            <li>Contact</li>
            <li>Grievances</li>
            <li>Directory</li>
            <li>Downloads Section</li>
          </ul>
          <div class="py-1">
            <a target="blank" href="https://www.facebook.com/pages/category/Event/Aadhritha-2020-108177254021540/"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
            <a target="blank" href="https://www.instagram.com/aadhrita2020/"><i class="fab fa-instagram fa-2x text-danger mx-6"></i></a>
            <a target="blank" href="https://twitter.com/MVGRCEA"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
            <a target="blank" href="https://www.youtube.com/results?search_query=mvgr+"><i class="fab fa-youtube fa-2x text-danger mx-6"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="foot" style="width: 100%;color: azure;background-color:dimgrey;height: 80px;margin-bottom: 0">
      <p align="center" style="padding-top: 20px;">Copyright &copy;2020,MVGR</p>
    </div>
  </footer>
  <script src="../js/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script> 
  <script  src="../js/common.js"></script>
  <script src="../js/popper.min.js"></script>
</body>
</html>