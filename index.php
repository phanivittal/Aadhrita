<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aadhrita | Home </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Oleo+Script" rel="stylesheet">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/navbar.css">
  <link href="js/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
  <link href="css/home_css/style.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
</head>


<header class="main-header" style="font-size:16px;">
  <div class="logo">
   <img   src="./static/logo2.png"  style="height:50px;width:40px;" alt="LOGO"></img>
 </div>
 <input type="checkbox" class="menu-btn" id="menu-btn">
 <label for="menu-btn" class="menu-icon">
  <span class="menu-icon__line"></span>
</label>

<ul class="nav-links">
  <li class="nav-link">
    <a href="#" class="active">Home</a>
  </li>

  <li class="nav-link">
    <a href="./php/workshop.php">WorkShops</a>
  </li>
  <li class="nav-link">
    <a href="./php/cultural.php">Culturals</a>
  </li>

  <li class="nav-link">
    <a href="./php/technical.php">Technical</a>
  </li>
  <li class="nav-link">
   <a href="./php/about.php">About</a>
 </li>
 <?php
 if (isset($_SESSION['session_email'])) {
  echo '
  <li class="nav-link"><a href="./register/content/profile.php">Profile</a></li>
  <li class="nav-link"><a href="./register/logout.php">Logout</a></li>
  ';
}
else{
  echo '<li class="nav-link"><a href="./php/register/login.php">Register</a></li>';
}
?>

</ul>
</header>
<body>
  <section id="intro">
    <div class="intro-container wow fadeIn">

      <h1 class="mb-4 pb-0 title">Aadhrita&nbsp;&nbsp;&nbsp;2020</h1>
      <p1>‘Aadhrita12’ aims in bringing together budding engineers <br>across the corners of the country to take part in it <br>thereby providing them a platform to brainstorm on developments in their disciplines.</p1>
      <h2 class="mb-4">&nbsp;<br>Venue</h2>
      <p class="mb-4 pb-10"><span> 20-24 Feb, MVGR College of Engineering, Vizianagaram</span></p>
      <a href="https://www.youtube.com/watch?v=mhzo7D3XsPs" class="venobox play-btn mb-4" data-vbtype="video"
      data-autoplay="true"></a>
      <a class="about-btn">Register for the Event</a>
    </div>
  </section>
  <main id="main">
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>We conducted this Fest 8 years ago in the name of Aadhrita-20 and it was one of the very successful fests at that time.
              Unlike other colleges we don't conduct this fest yearly in order to maintain the quality and effectiveness.
              Now, again we are back with great work and planning huge events that are highly attractive.
            It is expected that the participation alone for various events would be surely greater than 2000 from various number of colleges.</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>MVGR College of Engineering, Vizianagaram</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Monday to Thursday<br>20-24 Feb</p>
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
                <img src="static/images/home/edm1.jpeg" alt="">
              </div>
              <div class="blog-slider__content">
                <h class="mb-4 pb-0">Event HighLights</h>
                <span class="blog-slider__code">20 FEB 2020</span>
                <div class="blog-slider__title">EDM NIGHT</div>
                <center><div class="blog-slider__title">"Let the strings and beats sparkle you up"</div></center>
                <div class="blog-slider__text">
                  A classic chance for everyone to sync their moves with the loud music and step out of the conventional routine.
                EDM night is the perfect time for one and all to let go of all worries and twist, twirl and sway.</div>

              </div>
            </div>
            <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                <img src="static/images/home/cultural.jpeg" alt="">
              </div>
              <div class="blog-slider__content">
                <h>Event HighLights</h>
                <span class="blog-slider__code">21 FEB 2019</span>
                <div class="blog-slider__title">CULTURAL NIGHT</div>
                <center><div class="blog-slider__title">"let the moon shine bright rock and roll tonight"</div></center>
                <div class="blog-slider__text">
                  A night dedicated only to people with strings and sticks in their hands and swiftness in their feet.
                  Cultural night is an unparalleled opportunity for the young minds to dust off and showcase their treasured passion.
                  This joyous experience would help students discover their long lost talents.
                </div>

              </div>
            </div>

            <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                <img src="static/images/home/trea.jpeg" alt="">
              </div>
              <div class="blog-slider__content">
                <h>Event HighLights</h>
                <span class="blog-slider__code">22 FEB 2019</span>
                <div class="blog-slider__title">TREASURE HUNT</div>
                <center><div class="blog-slider__title">"Treasure is the aim, battle against time to win the chase"</div></center>
                <div class="blog-slider__text">
                  The world of fantasy would come true for a little while. Treasure hunt would let the tales of brave pirates in
                  the sea and treasures in disguise flow through the veins of youngsters.
                  This expedition is going to be an ecstasy.
                </div>
              </div>
            </div>
            <div class="blog-slider__pagination"></div>
          </div>
        </div></section>
      </section>
      <section id="schedule" class="section-with-bg">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h2>Event Schedule</h2>
            <p>Here is our event schedule</p>
          </div>

          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active my-2 " href="#day-1" role="tab" data-toggle="tab">Day 1</a>
            </li>
            <li class="nav-item my-2">
              <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>
            </li>
            <li class="nav-item my-2">
              <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>
            </li>
          </ul>

          <h3 class="sub-heading">Events  Starting at</h3>

          <div class="tab-content row justify-content-center pl-2">
            <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
              <div class="row schedule-item">
                <div class="col-md-2"><time>09:00 AM - 11:00 AM</time></div>
                <div class="col-md-10">
                  <h4>Inaugration</h4>
                  <p></p>
                </div>
              </div>
              <div class="row schedule-item">
                <div class="col-md-10">
                  <h2>CULTURALS</h2>
                </div>
              </div>
              <div class="row schedule-item">
                <div class="col-md-2"><time>11:00 AM - 12:00 PM</time></div>
                <div class="col-md-10">
                  <h4>Classical and Western dance <span>(Selections)</span></h4>
                  <p>Venue : Substage.</p><br>
                  <h4>Semi-Classical dance <span>(Selections)</span></h4>
                  <p>Venue : ECE dept Seminar hall.</p>
                </div>
              </div>
              <div class="row schedule-item">
                <div class="col-md-2"><time>11:00 AM </time></div>
                <div class="col-md-10">
                  <h4>Short Film <span></span></h4>
                  <p>Venue : Central Library.</p>
                  <br>
                  <h4>Singing <span>(Round-1)</span></h4>
                  <p>Venue : CSE dept Seminar hall.</p>
                </div>
              </div>
              <div class="row schedule-item">
                <div class="col-md-10">
                  <h2>TECHNICAL EVENTS</h2>
                </div>
              </div>
              <div class="row schedule-item">
                <div class="col-md-2"><time>11:00 AM - 04:00 PM</time></div>
                <div class="col-md-10">
                  <h4>Paper Presentation <span></span></h4>
                  <p>Venue : Mech.</p>
                  <h4>Hover Craft <span></span></h4>
                  <p>Venue : ECE dept Center Ground</p>
                  <h4>Circuitrix <span></span></h4>
                  <p>Venue : EDC & PDC Lab (ECE dept).</p>
                  <h4>B-Plan <span></span></h4>
                  <p>Venue : MBA dept Seminar hall.</p>
                  <h4>Marketing Event <span></span></h4>
                  <p>Venue : LH-4 (MBA dept).</p>
                  <h4>Code Champs <span></span></h4>
                  <p>Venue : Godel & Codd Lab (CSE dept).</p>
                  <h4>Cadathon <span></span></h4>
                  <p>Venue : Cad Lab (Mech dept) & Ecad Lab (ECE dept).</p>
                  <h4>Instridge <span></span></h4>
                  <p>Venue : Civil backside.</p>
                </div>
              </div>
              <div class="row schedule-item">
                <div class="col-md-10">
                  <h2>TALKS</h2>
                </div>
              </div>
              <div class="row schedule-item">
                <div class="col-md-2"><time>01:30 PM - 03:00 PM</time></div>
                <div class="col-md-10">
                  <h4>Philosophy of OPEN SOURCE <span></span></h4>
                  <p>Venue : Admin Seminar Hall.</p>
                </div>
              </div>
              <div class="row schedule-item">
                <div class="col-md-2"><time>06:00 PM</time></div>
                <div class="col-md-10">
                  <h2>EDM Nights</h2>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="col-lg-9 tab-pane fade" id="day-2">
             <div class="row schedule-item">
               <div class="col-md-10">
                 <h2>CULTURALS</h2>
               </div>
             </div>
             <div class="row schedule-item">
               <div class="col-md-2"><time>10:00 AM</time></div>
               <div class="col-md-10">
                 <h4>Dance <span>(Selections)</span></h4>
                 <p>Venue : ECE dept Seminar Seminar hall.</p>
                 <h4>Rock-Band <span>(Selections)</span></h4>
                 <p>Venue : Main Stage.</p>
                 <h4>Singing <span>(Round-2)</span></h4>
                 <p>Venue : Main Stage.</p>
               </div>
             </div>
             <div class="row schedule-item">
               <div class="col-md-10">
                 <h2>TECHNICAL EVENTS</h2>
               </div>
             </div>
             <div class="row schedule-item">
               <div class="col-md-2"><time>09:00 AM - 04:00 PM</time></div>
               <div class="col-md-10">
                 <h4>Hydraulic Crane <span></span></h4>
                 <p>Venue : Civil dept ground.</p>
                 <h4>Water Rocket <span></span></h4>
                 <p>Venue : Canteen back ground.</p>
                 <h4>HR Event <span></span></h4>
                 <p>Venue : LH-1 MBA dept.</p>
                 <h4>Finance-Event <span></span></h4>
                 <p>Venue : LH-3 MBA dept.</p>
                 <h4>Hackathon <span></span></h4>
                 <p>Venue : Godel Lab CSE dept.</p>
                 <h4>Embedded Programming <span></span></h4>
                 <p>Venue :EEE.</p>
                 <h4>Witricity <span></span></h4>
                 <p>Venue : Control System Lab (EEE dept).</p>
                 <h4>Tech Solutions Software <span></span></h4>
                 <p>Venue : Richie Lab & GCC Lab (IT dept).</p>
                 <h4>Tech Solutions Industrial <span></span></h4>
                 <p>Venue : Mech dept Seminar hall.</p>
               </div>
             </div>
             <div class="row schedule-item">
               <div class="col-md-2"><time>06:00 PM</time></div>
               <div class="col-md-10">
                 <h2>Cultural Night</h2>
               </div>
             </div>
           </div>
           <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
             <div class="row schedule-item">
               <div class="col-md-2"><time>06:00 PM</time></div>
               <div class="col-md-10">
                 <h2>Validatory and Performances of winners</h2>
               </div>
             </div>
           </div>

         </div>

       </div>

     </section>
     <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Gallery</h2>
          <p>Gallery </p>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="static/images/home/portfolio/1.jpg" class="portfolio-popup">
                <img src="static/images/home/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="static/images/home/portfolio/2.jpg" class="portfolio-popup">
                <img src="static/images/home/portfolio/2.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="static/images/home/portfolio/3.jpg" class="portfolio-popup">
                <img src="static/images/home/portfolio/3.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="static/images/home/portfolio/4.jpg" class="portfolio-popup">
                <img src="static/images/home/portfolio/4.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="static/images/home/portfolio/5.jpg" class="portfolio-popup">
                <img src="static/images/home/portfolio/5.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="static/images/home/portfolio/6.jpg" class="portfolio-popup">
                <img src="static/images/home/portfolio/6.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="static/images/home/portfolio/7.jpg" class="portfolio-popup">
                <img src="static/images/home/portfolio/7.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="static/images/home/portfolio/8.jpg" class="portfolio-popup">
                <img src="static/images/home/portfolio/8.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>
    <section id="supporters" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>
        <div class="row no-gutters supporters-wrap clearfix">
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="static/images/home/supporters/1.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="static/images/home/supporters/2.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="static/images/home/supporters/3.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="static/images/home/supporters/4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="static/images/home/supporters/5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="static/images/home/supporters/6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="static/images/home/supporters/7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="static/images/home/supporters/8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section>
  </main>
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

  <script src="js/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script> 

  <script src="js/jquery-migrate.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/wow/wow.min.js"></script>
  <script src="js/owlcarousel/owl.carousel.min.js"></script>
  <script src="js/home_js/swipe.js"></script>
  <script src="js/home_js/main.js"></script>
  
</body>
</html>
