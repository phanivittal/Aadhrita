<?php
session_start();
include './php/db/db.php';
$sql = "SELECT * FROM `viewCount`";
$retval = mysqli_query($conn,$sql);
$count = 0;
$updated = 0;
if ($retval) {
  $row = mysqli_fetch_assoc($retval);
  $count1= $row['count']."<br>";
  $count = (int)$count1;
  $updated =  $count+1 ;
  $sql = "UPDATE `viewCount` SET `count`='$updated' WHERE count = '$count'";
  $retval = mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="./static/logo1.png">
  <title>Aadhrita</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Oleo+Script" rel="stylesheet">
  <link href="./css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/navbar.css">
  <link href="./js/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="css/preloader.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
  <link href="./css/home/style.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  
  <style type="text/css">
    @font-face {
      font-family: 'aadhritaFont';
      src: url('./css/aadfont/aadhritaFont.eot'); /* IE9 Compat Modes */
      src: url('./css/aadfont/aadhritaFont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
           url('./css/aadfont/aadhritaFont.woff2') format('woff2'), /* Super Modern Browsers */
           url('./css/aadfont/aadhritaFont.woff') format('woff'), /* Pretty Modern Browsers */
           url('./css/aadfont/aadhritaFont.ttf')  format('truetype'), /* Safari, Android, iOS */
           url('./css/aadfont/aadhritaFont.svg#svgFontName') format('svg'); /* Legacy iOS */
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

<body>
<header class="main-header" style="font-size:16px;">
  <div class="logo"><img   src="static/logo2.png"  style="height:60px;width:120px;" alt="LOGO"></img></div>
  <input type="checkbox" class="menu-btn" id="menu-btn">
  <label for="menu-btn" class="menu-icon"><span class="menu-icon__line"></span></label>
  <ul class="nav-links">
    <li class="nav-link active"><a href="#">Home</a></li>
    <li class="nav-link"><a href="./php/technical/">Technical</a></li>
    <li class="nav-link"><a href="./php/workshop/">WorkShops</a></li>
    <li class="nav-link"><a href="./php/cultural">Culturals</a></li>
    <li class="nav-link"><a href="./php/sports/">sports</a></li>
    <li class="nav-link"><a href="./php/about/">About</a></li>
    <?php
    if (isset($_SESSION['session_email'])) {
      echo '
      <li class="nav-link"><a href="./php/profile/">Profile</a></li>
      <li class="nav-link"><a href="./php/logout/">Logout</a></li>
      ';
    }
    else{
      echo '<li class="nav-link"><a href="./php/login/">Register</a></li>';
    }
    ?>
  </ul>
</header>
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0 title" style="font-family: aadhritaFont;">Aadhrita&nbsp;&nbsp;&nbsp;2020</h1>
      <p1>Aadhrita2020 aims in bringing together budding engineers <br>across the corners of the country to take part in it <br>thereby providing them a platform to brainstorm on developments in their disciplines.</p1>
      <h2 class="mb-4">&nbsp;<br>Venue</h2>
      <p class="mb-4 pb-10"><span> 20,21,22 Feb, MVGR College of Engineering, Vizianagaram</span></p>
      <a href="https://www.youtube.com/channel/UCF4345SfdBnl5R73kmIfICw" target="__blank" class="venobox play-btn mb-4" data-vbtype="video"
      data-autoplay="true"></a>
      <a class="about-btn" style="cursor: pointer;"  onclick ="location.href=`php/login/`">Register for the Event</a>
    </div>
  </section>
  <main id="main">
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>A nationwide fest, AADHRITA is around the corner and is already sending sparks into the January air. AADHRITA was brought into picture for the first time in the year 2008 and was a grand success back then. It was started with a hope to bring together colleges from across the country and encourage students to participate and nourish their talents on a phenomenal platform. This year, we are proud to host this event after eight years with that very same hope. AADHRITA returns with a grand entrance on the 20th, 21st and 22nd of February, 2020.</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>MVGR College of Engineering, Vizianagaram</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>20,21,22 February</p>
          </div>
        </div>
      </div>
    </section>
    <section id="aboutbg">
      <section id="aboutEvent">
        <div class="blog-slider">
          <div class="blog-slider__wrp swiper-wrapper">

            <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                <img src="./static/images/home/highlights/culturalni8.png" alt="Cultural Night">
              </div>
              <div class="blog-slider__content">
                <h1><b style="color: #8b98ff;">EVENT HIGHLIGHTS</b></h1>
                <span class="blog-slider__code"></span>
                <div class="blog-slider__title">Cultural Night</div>
                <div class="blog-slider__text">
                  MVGR's rich cultural heritage has witnessed a metamorphosis over many generations and now as a part of it Cultural Night is going to happen on 21st February 2020 on the occasion of Aadhrita which celebrate culture, creativity and fun all around. Let's come and enjoy the music, live performances and food.
                  So get excited for Aadhrita's cultural night which is a perfect balance of everything.
                </div>
              </div>
            </div>
            <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                <img src="./static/images/home/highlights/bobands.png" alt="Musical Beasts">
              </div>
              <div class="blog-slider__content">
                <h1><b  style="color: #8b98ff;">EVENT HIGHLIGHTS</b></h1>
                <span class="blog-slider__code"></span>
                <div class="blog-slider__title">Musical Beasts</div>
                <div class="blog-slider__text">
                  Music beasts is the talk of the music community and is known for its rock and melodious performances. They have made their presence felt and heard as loud as thunder. They specialize in cover songs and fusion of 90's with latest music. After wowing audiences in Vizag youth festival, IEEE Hyderabad, GMRIT, Vignan and in the most recent Vizianagaram Utsav and now they return to perform at Aadhrita. You don't want to miss their invigorative performance.
                </div>
              </div>
            </div>
            <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                <img src="./static/images/home/highlights/edm1.jpeg" alt="EDM Night">
              </div>
              <div class="blog-slider__content">
                <h1><b  style="color: #8b98ff;">EVENT HIGHLIGHTS</b></h1>
                <span class="blog-slider__code"></span>
                <div class="blog-slider__title">EDM Night</div>
                <div class="blog-slider__text">
                  Want to refuel your mind? Then dive into our EDM paradise, when bringing the best fusion
                  of technology, music, fun and entertainment. Gear up for the sensational night of music, Dance and EDM.
                  Put your hands in the air and fire up for an unforgettable experience with your friends because this night is still young!

                </div>

              </div>
            </div>
            <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                <img src="./static/images/home/highlights/validating.png" alt="Validatory Function">
              </div>
              <div class="blog-slider__content">
                <h1><b  style="color: #8b98ff;">EVENT HIGHLIGHTS</b></h1>
                <span class="blog-slider__code"></span>
                <div class="blog-slider__title">Validatory Function</div>
                <div class="blog-slider__text">
                  Finally Aadhrita's elites, endowed with talent can allure the audience with their performances. Wanna know how? Aadhrita provides a glorious oppurtunity for all the winners of Swarasruthi, Dvaniprathapa, Abhivyakthi, Shresta and Thridhara to perform once again on the stage in the presence of honourable chief guests and get a chance to receive applauds from the virtuous on the event of closing ceremony which is on February 22.

                </div>
              </div>
            </div>
            <!-- <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                <img src="./static/images/home/highlights/cultural.jpg" alt="">
              </div>
              <div class="blog-slider__content">
                <h1><b  style="color: #8b98ff;">EVENT HIGHLIGHTS</b></h1>
                <span class="blog-slider__code"></span>
                <div class="blog-slider__title">Philosophy of OPEN SOURCE</div>
                <div class="blog-slider__text">


                </div>
              </div>
            </div>
            <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                <img src="../static/images/home/highlights/cultural.jpg" alt="">
              </div>
              <div class="blog-slider__content">
                <h1><b  style="color: #8b98ff;">EVENT HIGHLIGHTS</b></h1>
                <span class="blog-slider__code"></span>
                <div class="blog-slider__title">Talk 2</div>
                <div class="blog-slider__text">


                </div>
              </div>
            </div>
            <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                <img src="./static/images/home/highlights/cultural.jpg" alt="">
              </div>
              <div class="blog-slider__content">
                <h1><b  style="color: #8b98ff;">EVENT HIGHLIGHTS</b></h1>
                <span class="blog-slider__code"></span>
                <div class="blog-slider__title">Talk 3</div>
                <div class="blog-slider__text">


                </div>
              </div>
            </div>
 -->
            <div class="blog-slider__pagination"></div>
          </div>
        </div>
      </section>
    </section>
  </main>
  <footer  class="footer" style="background-color: #2c292f;padding-top: 30px;min-height: 100px; font-family: 'Righteous', cursive;">
    <div class="container" >
      <div class="row">
               <div class="col-md-4 text-center text-md-left">
          <h4 class="my-3 text-warning">Quicklinks</h4>
          <p class="footer-links font-weight-bold">
            <a class="text" style="color:#50d8af;" href="#">Home |</a>
            <a class="text"style="color: #50d8af;" href="./php/technical/">Technical |</a>
            <a class="text" style="color:#50d8af;" href="./php/workshop/">Workshops |</a>
            <a class="text"style="color: #50d8af;" href="./php/cultural/">Culturals |</a>
            <a class="text"style="color: #50d8af;" href="./php/register/">Register |</a>
            <a class="text" style="color:#50d8af;" href="./php/about/">About</a>
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

  <script src="js/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/wow/wow.min.js"></script>
  <script src="js/owlcarousel/owl.carousel.min.js"></script>
  <script src="js/home/swipe.js"></script>
  <script src="js/home/main.js"></script>
<script>
  $(window).on("load",function(){
    $(".loader-wrapper").fadeOut("slow");
    $("#intro").fadeIn("slow");
    $(".main-header").css("visibility","visible");
    $("#main").css("visibility","visible");
    $(".footer").fadeIn("slow");
  });
</script>
</body>
</html>
