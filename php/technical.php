<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
  <title>MVGR | Technical</title>
 <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/technical_car.css"/>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="../css/card.css">
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
  </style>
</head>

<header class="main-header_nav" style="font-size:15px;">
<div class="logo">
       <img  onclick="window.location.href='../index.php'" src="../static/logo2.png"  style="height:50px;width:40px;" alt="LOGO"></img>
    </div>
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon">
    <span class="menu-icon__line"></span>
    </label>
  
    <ul class="nav-links">
      <li class="nav-link">
        <a href="../index.php">Home</a>
      </li>
     
      <li class="nav-link">
        <a href="./workshop.php">WorkShops</a>
      </li>
      <li class="nav-link">
        <a href="./cultural.php">Culturals</a>
      </li>
    
    <li class="nav-link">
      <a href="#"  class="active">Technical</a>
    </li>
    <li class="nav-link">
      <a href="./about.php">About</a>
    </li>
    <?php
		        if (isset($_SESSION['session_email'])) {
              echo '
              <li class="nav-link"><a href="./register/content/profile.php">Profile</a></li>
              <li class="nav-link"><a href="./register/logout.php">Logout</a></li>
              ';
		        }
		        else{
		            echo '<li class="nav-link"><a href="./register/login.php">Register</a></li>';
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
<body style="background: linear-gradient(90deg, #B09FEE 500px, #5DE8F8 100%);">
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
      <input type="radio" id="banner12" class="sec-1-input" name="banner">
      <input type="radio" id="banner13" class="sec-1-input" name="banner">
      <input type="radio" id="banner14" class="sec-1-input" name="banner">
      <input type="radio" id="banner15" class="sec-1-input" name="banner">
      <input type="radio" id="banner16" class="sec-1-input" name="banner">
      <input type="radio" id="banner17" class="sec-1-input" name="banner">
      <input type="radio" id="banner18" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>Paper<br>Presentation</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a  href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Circuitrix</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-3" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Witricity</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-4" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>Embedded<br>Programming</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-5" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Hovercraft</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-6" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>CADathon</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-7" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>Water<br>Rocket</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-8" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>Hydraulic<br>Crane</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-9" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Instridge</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-10" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>Code<br>Champs</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-11" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>Hackathon</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-12" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>TS<br>Software</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-13" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>TS<br>Industrial</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
       
        <div id="top-banner-14" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>Business<br>Quiz</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-15" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>Business<br>Quiz</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-16" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>Business<br>Plan</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-17" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>&nbsp;<br>HR Event</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
        <div id="top-banner-18" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Welcome to</h2>
            <h1>Finance<br>Event</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#section-2">Technical</a></div>
          </div>
        </div>
      </div>
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span>01</span> Paper Presentation</label>
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span>02</span> Circuitrix</label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span>03</span> Witricity</label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span>04</span> Embedded Programming</label>
          <label for="banner5"><span class="progressbar"><span class="progressbar-fill"></span></span><span>05</span> Hovercraft</label>
          <label for="banner6"><span class="progressbar"><span class="progressbar-fill"></span></span><span>06</span> CADathon</label>
          <label for="banner7"><span class="progressbar"><span class="progressbar-fill"></span></span><span>07</span> Water Rocket</label>
          <label for="banner8"><span class="progressbar"><span class="progressbar-fill"></span></span><span>08</span> Hydraulic<br>Crane</label>
          <label for="banner9"><span class="progressbar"><span class="progressbar-fill"></span></span><span>09</span> Instridge</label>
          <label for="banner10"><span class="progressbar"><span class="progressbar-fill"></span></span><span>10</span> Code Champs</label>
          <label for="banner11"><span class="progressbar"><span class="progressbar-fill"></span></span><span>11</span> Hackathon</label>
          <label for="banner12"><span class="progressbar"><span class="progressbar-fill"></span></span><span>12</span> TS Software</label>
          <label for="banner13"><span class="progressbar"><span class="progressbar-fill"></span></span><span>13</span> TS Industrial</label>
          <label for="banner14"><span class="progressbar"><span class="progressbar-fill"></span></span><span>14</span> Marketing Event</label>
          <label for="banner15"><span class="progressbar"><span class="progressbar-fill"></span></span><span>15</span> Business Quiz</label>
          <label for="banner16"><span class="progressbar"><span class="progressbar-fill"></span></span><span>16</span> Business Plan</label>
          <label for="banner17"><span class="progressbar"><span class="progressbar-fill"></span></span><span>17</span> HR Event</label>
          <label for="banner18"><span class="progressbar"><span class="progressbar-fill"></span></span><span>18</span> Finance Event</label>
        </div>
      </nav>
    </div>
    <section class="text-center" id="section-2" style="height:30vh;bakground-color:#fff;">  
    <br><br>

<h3 >About</h3>
  <br>  
  <h2>Mvgr technical Events </h2>
  
  <h5>It's the perfect time for tech-enthusiasts to glue their eyes to computer screens and show-off their skills. </h5>
</section> 
  <div class="container">
    <div class="row" >
      <?php
          require './db/db.php';
          $sql = "SELECT * FROM `events` where etype = 'TECHNICAL'";
          $retval = mysqli_query($conn,$sql);
          $n = mysqli_num_rows($retval);
          for ($i=1; $i <= $n ; $i++) {
            $x="card".$i;
            $y="#card".$i;
            $row = mysqli_fetch_assoc($retval);
            $eid = $row['eid'];
            echo '
            <div class="card card-flip col-auto mx-auto my-3" onmouseover="this.classList.toggle(`expanded`)"
            onmouseout="this.classList.toggle(`expanded`)" id="'.$x.'" style="max-width: 20rem;min-height:29rem;" >
              <div class="card-front" >
                <img class="label" src="'.$row['images'].'" viewBox="100 100 0 0"  width="100%">
                <div class="text1">
                  <div class="text-content">
                    <h3 class="title">'.$row['ename'].'</h3>
                    <div class="body-text">'.$row['etagline'].'</div>
                    <button  onclick="$(`'.$y.'`).toggleClass(`expand`)" class="btn btn-outline-primary ">Description</button>
                  </div>
                  <svg class="chevron"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="30"><path d="M5 30L50 5l45 25" fill="none" stroke="#000" stroke-width="5"/></svg>
                </div>
              </div>
              <div class="card-back"   >
                <div class="card-body" >
                  <i onclick="$(`'.$y.'`).toggleClass(`expand`)" class="fas fa-arrow-circle-left fa-2x text-primary"></i><br>
                  <h3 align:center>'.$row['ename'].'</h3>
                  
                  <p> '.$row['edescription'].'</p>
                  <div class="container">
                    <p> For Rules <a href="'.$row['pdfs'].'">click here</a></p>
                  </div>
                  <div class="container mt-3">
                    <a type="button" class="btn btn-info" href="../php/register/teamRegistrations.php?id='.urlencode(utf8_encode($eid)).'">Register</a>
                  </div>
                </div>
              </div>
            </div>';
          }
        ?>
    </div>
    </div> 
    <footer  style="background-color: #2c292f;padding-top: 30px;min-height: 100px; font-family: 'Righteous', cursive;">
    <div class="container" >
      <div class="row">
        <div class="col-md-4 text-white text-center text-md-left ">
          <div class="py-0 my-4" >
            <h4 class="my-3 text-warning">Address</h4>
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
              <p><i class="fa fa-envelope  mx-auto my-3" >&nbsp;</i><a style="color:#50d8af;" href="mailto:aadhrita2020@gmail.com">aadhrita2020@gmail.com</a></p>
            </div>
           
          </div>
        </div>
     
      
        <div class="col-md-4 text-center text-md-left">
          <h4 class="my-3 text-warning">Quicklinks</h4>
          <p class="footer-links font-weight-bold">
            <a class="text" style="color:#50d8af;" href="#">Home |</a>
            <a class="text" style="color:#50d8af;" href="#">Workshops |</a>
            <a class="text"style="color: #50d8af;" href="#">Technical |</a>
            <a class="text"style="color: #50d8af;" href="#">Culturals |</a>
            <a class="text"style="color: #50d8af;" href="#">Register |</a>
            <a class="text" style="color:#50d8af;" href="#">About</a>
          </p>
          <div class="py-1">
            <h4 class="my-3 text-warning">Follow us on</h4>
            <a target="blank" href="https://www.facebook.com/Aadhrita-MVGR-104600827715856/"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
            <a target="blank" href="https://www.instagram.com/aadhrita2020/"><i class="fab fa-instagram fa-2x text-danger mx-6"></i></a>
            <a target="blank" href="https://twitter.com/MVGRCEA"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
            <a target="blank" href="https://www.youtube.com/channel/UCF4345SfdBnl5R73kmIfICw"><i class="fab fa-youtube fa-2x text-danger mx-6"></i></a>
          </div>
        </div>
       
        <div class="col-md-4">
          <h4 class="my-3 text-warning text-center text-md-left">Map</h4>
          <div class="py-2">
            <iframe width="230"
                    height="230"
                    frameborder="2" style="border:0;width:100%;height:auto;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3793.245677096944!2d83.40339111442094!3d18.06017798767875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3be4c4081c8dbb%3A0x1c634bbcd67ea3bf!2sMaharaj%20Vijayaram%20Gajapathi%20Raj%20College%20of%20Engineering%20(Autonomous)!5e0!3m2!1sen!2sin!4v1577787304518!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
 
              <div class="foot" style="width: 100%;color: azure;background-color:dimgrey;height: 80px;margin-bottom: 0">
              <p align="center" style="padding-top: 20px;">Copyright &copy;2020,MVGR</p>
          </div>
          </footer>

<!-- partial -->
  
  <script src="../js/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script> 
 
  <script src="../js/popper.min.js"></script>
  <script  src="../js/technical_script.js"></script>
  <script src='../js/jquery.min.js'></script>
<script src='https://use.fontawesome.com/8ae46bccf5.js'></script>
</body>
</html>