<?php 
session_start(); 

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
  <title>MVGR | workshop </title>
 <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="../../css/workshopcs.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="stylesheet" href="../../css/card.css">
  <link rel="stylesheet" href="../../css/carousel_ext.css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

  <style>
   body h3 {
    font-family: 'Kaushan Script', cursive;
    font-size: 2em;
    font-weight: 400;
}
  </style>

</head>
<body  style="background: linear-gradient(90deg, #fc6076 360px, #ff9a44 100%);">

<header class="main-header" style="font-size:16px;">
  <div class="logo"><img   src="../../static/logo2.png"  style="height:50px;width:40px;" alt="LOGO"></img></div>
  <input type="checkbox" class="menu-btn" id="menu-btn">
  <label for="menu-btn" class="menu-icon"><span class="menu-icon__line"></span></label>
  <ul class="nav-links">
    <li class="nav-link"><a href="../../">Home</a></li>
    <li class="nav-link"><a href="../technical/">Technical</a></li>
    <li class="nav-link active"><a href="../workshop/">WorkShops</a></li>
    <li class="nav-link"><a href="../cultural">Culturals</a></li>
    <li class="nav-link"><a href="../about/">About</a></li>
    <?php
    if (isset($_SESSION['session_email'])) {
      echo '
      <li class="nav-link"><a href="../profile/">Profile</a></li>
      <li class="nav-link"><a href="./logout/">Logout</a></li>
      ';
    }
    else{
      echo '<li class="nav-link"><a href="../login/">Register</a></li>';
    }
    ?>
  </ul>
</header>
  <!-- partial:index.partial.php -->
<!-- 
Please note, that you can apply .m--global-blending-active to .fnc-slider 
to enable blend-mode for all background-images or apply .m--blend-bg-active
to some specific slides (.fnc-slide). It's disabled by default in this demo,
because it requires specific images, where more than 50% of bg is transparent or monotone
-->
<!-- <div class="demo-cont">
  <div class="fnc-slider example-slider">
    <div class="fnc-slider__slides">
      <div class="fnc-slide m--blend-green m--active-slide">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h3 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Data Science </span>
              </div>
            </h3>
            <button type="button" class="fnc-slide__action-btn">
              Workshop
              <span data-text="Workshop">Workshop</Canvas></span>
            </button>
          </div>
        </div>
      </div>
      <div class="fnc-slide m--blend-dark">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h3 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>IEEE Wie</span>
              </div>
              
            </h3>
            <button type="button" class="fnc-slide__action-btn">
              Workshop
              <span data-text="Workshop">Workshop</span>
            </button>
          </div>
        </div>
      </div>
      <div class="fnc-slide m--blend-red">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h3 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>IEEE- STEP</span>
              </div>
              
            </h3>
            <button type="button" class="fnc-slide__action-btn">
              Workshop
              <span data-text="Workshop">Workshop</span>
            </button>
          </div>
        </div>
      </div>
              
    </div>

    <nav class="fnc-nav">
      <div class="fnc-nav__bgs">
        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
        <div class="fnc-nav__bg m--navbg-dark"></div>
        <div class="fnc-nav__bg m--navbg-red"></div>
        
      </div>
      <div class="fnc-nav__controls">
        <button class="fnc-nav__control">
          Data Science
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          IEEE Wie
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          IEEE -STEP
          <span class="fnc-nav__control-progress"></span>
        </button>
        
      </div>
    </nav>
  </div>
  <div class="demo-cont__credits">
  <div class="demo-cont__credits-close"></div>
  <h2 class="demo-cont__credits-heading">Workshops</h2>
  <img src="#.jpg" alt="" class="demo-cont__Culturals-img" />
  <h3 class="demo-cont__credits-name">Music pervades everyday life! Aadritha 2020 offers never before opportunities to inspire, impress, entertain and express your art in the form of music and dance.  Come and join us in  celebrations of this age old art form.</h3>

  <div class="colorful-switch">
    <input type="checkbox" class="colorful-switch__checkbox js-activate-global-blending" id="colorful-switch-cb" />
    <label class="colorful-switch__label" for="colorful-switch-cb">
      <span class="colorful-switch__bg"></span>
      <span class="colorful-switch__dot"></span>
      <span class="colorful-switch__on">
        <span class="colorful-switch__on__inner"></span>
      </span>
      <span class="colorful-switch__off"></span>
    </label>
  </div>
</div>
</div> -->

  <body  style="background-image: linear-gradient(-225deg, #69EACB 0%, #EACCF8 48%, #6654F1 100%);">
    <div class="container">
      <div class="row" >
        <?php
          require '../db/db.php';
          $sql = "SELECT * FROM `events` where etype = 'WORKSHOP'";
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
              <div class="card-front">
                <img class="label" src="'.$row['images'].'" viewBox="100 100 0 0"  width="100%">
                <div class="text1">
                  <div class="text-content">
                    <h2 class="title">'.$row['ename'].'</h2>
                    <div class="body-text">'.$row['etagline'].'</div>
                    <button  onclick="$(`'.$y.'`).toggleClass(`expand`)" class="btn btn-outline-primary ">Description</button>
                  </div>
                  <svg class="chevron"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="30"><path d="M5 30L50 5l45 25" fill="none" stroke="#000" stroke-width="5"/></svg>
                </div>
              </div>
              <div class="card-back"  >
                <div class="card-body" >
                  <i onclick="$(`'.$y.'`).toggleClass(`expand`)" class="fas fa-arrow-circle-left fa-2x text-primary"></i><br>
                  <h3 align:center>'.$row['ename'].'</h3>
                  <p> '.$row['edescription'].'</p>
                  <div class="container">
                    <p> For Rules <a href="'.$row['pdfs'].'">click here</a></p>
                  </div>
                  <div class="container mt-3">
                    <a type="button" class="btn btn-info" href="../php/register/re_registrations.php?id='.urlencode(utf8_encode($eid)).'"  >Register</a>
                  </div>
                </div>
              </div>
            </div>';
          }
        ?>
      </div>
      <div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
      <div class="container">
          <marquee> <h3>Workshops Section will be opened soon. </h3> </marquee>
        </div>
      </div>
      <div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
      <footer style="background-color: #2c292f;padding-top: 30px;min-height: 100px; font-family: 'Righteous', cursive;">
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
                <a target="_blank" href="https://www.facebook.com/aadhrita.mvgr"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
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
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="../../js/jquery.min.js"></script>
    <script  src="../../js/common.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script type="text/javascript" src="../../js/nav.js"></script>
    <script>
      const header = document.querySelector('.main-header');
      window.addEventListener('scroll', () => {
        const scrollPos = window.scrollY;
        if(scrollPos > 10){
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
      })
    </script>

</body>
</html>