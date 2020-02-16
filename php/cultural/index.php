<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
  <title>Aadhrita | Cultural</title>
  <link rel="icon" href="../../static/logo3.png">
 <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/cultural_car.css"/>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="../../css/card.css">
  <link rel="stylesheet" href="../../css/preloader.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link rel='stylesheet' href='https://dl.dropboxusercontent.com/u/69747888/MoGo%20carousel/font-awesome.min.css'>
  <style>
   body h3 {
    font-family: 'Kaushan Script', cursive;
    font-size: 1.5em;
    font-weight: 400;
}

html {
  scroll-behavior: smooth;
}
  </style>
</head>
<div class="loader-wrapper">
  <div class="loader triangle">
    <svg viewBox="0 0 86 80">
      <polygon points="40 8 79 72 7 72"></polygon>
    </svg>
  </div>
</div>
<header class="main-header_nav" style="font-size:15px;">
<div class="logo">
       <img  onclick="window.location.href='../../index.php'" src="../../static/logo2.png"  style="height:60px;width:120px;" alt="LOGO"></img>
    </div>
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon">
    <span class="menu-icon__line"></span>
    </label>
  
    <ul class="nav-links">
      <li class="nav-link">
        <a href="../../index.php">Home</a>
      </li>
     <li class="nav-link">
      <a href="../technical/">Technical</a>
    </li>
      <li class="nav-link">
        <a href="../workshop/">WorkShops</a>
      </li>
      <li class="nav-link active">
        <a href="#">Culturals</a>
      </li>
    
      <li class="nav-link "><a href="../sports/">sports</a></li>
    <li class="nav-link">
      <a href="../about/">About</a>
    </li>
    <?php
      if (isset($_SESSION['session_email'])) {
        echo '
        <li class="nav-link"><a href="../profile/">Profile</a></li>
        <li class="nav-link"><a href="../logout/">Logout</a></li>
        ';
      }
      else{
        echo '<li class="nav-link"><a href="../login/">Register</a></li>';
      }
      ?>
  </ul>
  </header>
<!-- partial:index.partial.html -->
<!-- 
Please note, that you can apply .m--global-blending-active to .fnc-slider 
to enable blend-mode for all background-images or apply .m--blend-bg-active
to some specific slides (.fnc-slide). It's disabled by default in this demo,
because it requires specific images, where more than 50% of bg is transparent or monotone
-->
<body>
<section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <input type="radio" id="banner5" class="sec-1-input" name="banner">
      <input type="radio" id="banner6" class="sec-1-input" name="banner">
      <input type="radio" id="banner7" class="sec-1-input" name="banner">
      <input type="radio" id="banner8" class="sec-1-input" name="banner">
      <input type="radio" id="banner9" class="sec-1-input" name="banner">
      <input type="radio" id="banner10" class="sec-1-input" name="banner">
      <input type="radio" id="banner11" class="sec-1-input" name="banner">
     
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Dhvanipratapa</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a  href="#section-2">Culturals</a></div>
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Tridhara</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Culturals</a></div>
          </div>
        </div>
        <div id="top-banner-3" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Kalakruthi</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Culturals</a></div>
          </div>
        </div>
        <div id="top-banner-4" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Chitralahari</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Culturals</a></div>
          </div>
        </div>
        <div id="top-banner-5" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Swarasruthi</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Culturals</a></div>
          </div>
        </div>
        <div id="top-banner-6" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Anveshana</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Culturals</a></div>
          </div>
        </div>
        <div id="top-banner-7" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Abhivyakthi</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Culturals</a></div>
          </div>
        </div>
        <div id="top-banner-8" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Shresta</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Culturals</a></div>
          </div>
        </div>
        <div id="top-banner-9" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Prathibimbam</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Culturals</a></div>
          </div>
        </div>
        <div id="top-banner-10" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Chitrakruthya</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Culturals</a></div>
          </div>
        </div>
        <div id="top-banner-11" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Beat Box/Rap</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Culturals</a></div>
          </div>
        </div>
      
      </div>
      <nav>
        <div class="controls">
          <label for="banner1" onclick="setTimeout(function(){ $(`#card1`).toggleClass(`expand`) }, 100);location.href='#card1'"><span class="progressbar"><span class="progressbar-fill"></span></span><span>01</span>Dhvanipratapa</label>
          <label for="banner2" onclick="setTimeout(function(){ $(`#card2`).toggleClass(`expand`) }, 200);location.href='#card2'"><span class="progressbar"><span class="progressbar-fill"></span></span><span>02</span>Tridhara</label>
          <label for="banner3" onclick="setTimeout(function(){ $(`#card3`).toggleClass(`expand`) }, 400);location.href='#card3'"><span class="progressbar"><span class="progressbar-fill"></span></span><span>03</span>Kalakruthi</label>
          <label for="banner4" onclick="setTimeout(function(){ $(`#card4`).toggleClass(`expand`) }, 500);location.href='#card4'"><span class="progressbar"><span class="progressbar-fill"></span></span><span>04</span>Chitralahari</label>
          <label for="banner5" onclick="setTimeout(function(){ $(`#card5`).toggleClass(`expand`) }, 600);location.href='#card5'"><span class="progressbar"><span class="progressbar-fill"></span></span><span>05</span>Swarasruthi</label>
          <label for="banner6" onclick="setTimeout(function(){ $(`#card6`).toggleClass(`expand`) }, 900);location.href='#card6'"><span class="progressbar"><span class="progressbar-fill"></span></span><span>06</span>Anveshana</label>
          <label for="banner7" onclick="setTimeout(function(){ $(`#card7`).toggleClass(`expand`) }, 1000);location.href='#card7'"><span class="progressbar"><span class="progressbar-fill"></span></span><span>07</span>Abhivyakti</label>
          <label for="banner8" onclick="setTimeout(function(){ $(`#card8`).toggleClass(`expand`) }, 1100);location.href='#card8'"><span class="progressbar"><span class="progressbar-fill"></span></span><span>08</span>Shresta</label>
          <label for="banner9" onclick="setTimeout(function(){ $(`#card9`).toggleClass(`expand`) }, 1200);location.href='#card9'"><span class="progressbar"><span class="progressbar-fill"></span></span><span>09</span>Prathibimbam</label>
          <label for="banner10" onclick="setTimeout(function(){ $(`#card10`).toggleClass(`expand`) },1300);location.href='#card10'"><span class="progressbar"><span class="progressbar-fill"></span></span><span>10</span>Chitrakruthya</label>
          <label for="banner11" onclick="setTimeout(function(){ $(`#card11`).toggleClass(`expand`) },1400);location.href='#card11';"><span class="progressbar"><span class="progressbar-fill"></span></span><span>11</span>Beat Box / Rap</label>
         
        </div>
      </nav>
    </div>
    <section class="text-center " id="section-2" style="color:#fff;height:auto;background-image: linear-gradient(to right, #0F2027, #203A43,#2C5364);">  
    <br><br>

  <h3 style="font-size: 35px;" >About</h3>
  <h2>Mvgr Cultural Events </h2>
  
  <h5 style="font-size: 19px;" >Music pervades everyday life! Aadritha 2020 offers never before opportunities to inspire, impress, entertain and express your art in the form of music and dance.  Come and join us in  celebrations of this age old art form.  </h5>
 
</section>
<div  id="car_view" style="background-image: linear-gradient(to right, #0F2027, #203A43,#2C5364); ">
<div class="container">
  <div class="row" >
    <?php
    require '../db/db.php';
    $sql = "SELECT * FROM `events` where etype = 'CULTURAL'";
    $retval = mysqli_query($conn,$sql);
    $n = mysqli_num_rows($retval);
    for ($i=1; $i <= $n ; $i++) {
      $x="card".$i;
      $y="#card".$i;
      $row = mysqli_fetch_assoc($retval);
      $eid = $row['eid'];
      
     
        $route = '<a type="button" class="btn btn-info" href="../register/teamRegistrations.php?id='.urlencode(utf8_encode($eid)).'">Register</a>';
      
      echo '
      <div class="card card-flip col-auto mx-auto my-3" onmouseover="this.classList.toggle(`expanded`)"
      onmouseout="this.classList.toggle(`expanded`)" id="'.$x.'" style="max-width: 20rem;min-height:29rem;" >
      <div class="card-front">
      <img class="label" src="'.$row['images'].'" viewBox="100 100 0 0"  width="100%">
      <h3 class="title">'.$row['ename'].'</h3>
      <div class="text1">
      <div class="text-content">
      
      <div class="body-text">'.$row['etagline'].'</div>
      <button  onclick="$(`'.$y.'`).toggleClass(`expand`)" class="btn btn-outline-primary ">Description</button>
      </div>
      <svg class="chevron"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="30"><path d="M5 30L50 5l45 25" fill="none" stroke="#000" stroke-width="5"/></svg>
      </div>
      </div>
      <div class="card-back"  >
      <div class="card-body" >
      <i onclick="$(`'.$y.'`).toggleClass(`expand`)" class="fas fa-arrow-left fa-2x"></i><br>
      <h3 align:center>'.$row['ename'].'</h3>
      <p> '.$row['edescription'].'</p>
      <div class="container">
      <p> For Rules <a href="'.$row['pdfs'].'" target ="__blank" >click here</a></p>
      </div>
      <div class="container mt-3">
      '.$route.'
      </div>
      </div>
      </div>
      </div>';
    }
    ?>
  </div>
</div>
    </div>
    <footer  style="background-color: #2c292f;padding-top: 30px;min-height: 100px; font-family: 'Righteous', cursive;">
        <div class="container" >
          <div class="row">
            <div class="col-md-4 text-center text-md-left">
              <h4 class="my-3 text-warning">Quicklinks</h4>
              <p class="footer-links font-weight-bold">
                <a class="text" style="color:#50d8af;" href="../../">Home |</a>
                <a class="text"style="color: #50d8af;" href="#">Technical |</a>
                <a class="text" style="color:#50d8af;" href="./workshop.php">Workshops |</a>
                
                <a class="text"style="color: #50d8af;" href="./cultural.php">Culturals |</a>
                <!-- <a class="text"style="color: #50d8af;" href="./register/login.php">Register |</a> -->
                <a class="text" style="color:#50d8af;" href="./about.php">About</a>
              </p>
              <div class="py-1">
                <h4 class="my-3 text-warning">Follow us on</h4>
                <a target="_blank" href="https://www.facebook.com/Aadhrita-MVGR-104600827715856/"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
                <a target="_blank" href="https://www.instagram.com/aadhrita2020/"><i class="fab fa-instagram fa-2x text-danger mx-6"></i></a>
                <a target="_blank" href="https://twitter.com/MVGRCEA"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
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
                    <li class="fa fa-phone  mx-auto my-3 "><a style="color:#50d8af;" href="tel:+919949110243">&nbsp Jeevan : +919949110243 </a></li>
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
<!-- partial -->
  
  <script src="../../js/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script> 
 
  <script src="../../js/popper.min.js"></script>
  <script  src="../../js/technical_script.js"></script>
 
  <script src='../../js/jquery.min.js'></script>
<script src='https://use.fontawesome.com/8ae46bccf5.js'></script>

</body>
<script>
      $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
        $(".main-header_nav").css("visibility","visible");
        $(".footer").fadeIn("slow");
        $(".car_view").css("visibility","visible");
        $("#section-1").css("visibility","visible");
      });
    </script>
</html>