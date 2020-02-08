<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <link rel="icon" href="../../static/logo3.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <title>Aadhrita | About Us</title>
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/about.css"/>
  <link rel="stylesheet" href="../../css/navbar.css">
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../css/preloader.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src='https://use.fontawesome.com/8ae46bccf5.js'></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://pagecdn.io/lib/easyfonts/berkshire-swash.css" rel="stylesheet" />
  <link href="https://pagecdn.io/lib/easyfonts/raleway.css" rel="stylesheet" />
  <style>
    @font-face {
      font-family: 'aadhritaFont';
      src: url('../../css/aadfont/aadhritaFont.eot'); /* IE9 Compat Modes */
      src: url('../../css/aadfont/aadhritaFont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
           url('../../css/aadfont/aadhritaFont.woff2') format('woff2'), /* Super Modern Browsers */
           url('../../css/aadfont/aadhritaFont.woff') format('woff'), /* Pretty Modern Browsers */
           url('../../css/aadfont/aadhritaFont.ttf')  format('truetype'), /* Safari, Android, iOS */
           url('../../css/aadfont/aadhritaFont.svg#svgFontName') format('svg'); /* Legacy iOS */
    }
    .carousel-inner{
      width:100%;
      height:100%;
    }
    #demo1,#demo2,#demo3{
      width:300px;
      height:300px;
    }
    #demo1{
      position: relative;

    }
    #demo2{
      position: relative;

    }
    #demo3{
      position: relative;

    }
    .row{
      display: flex;
      align-items: center;
      justify-content: center;
    }
    @media only screen and (max-width: 600px) {
      #demo2,#demo1,#demo3{
        position:relative;
        left:5px;
      }
    }
    #car_view{
  visibility:hidden;
}
  </style>
  <div class="loader-wrapper">
  <div class="loader triangle">
    <svg viewBox="0 0 86 80">
      <polygon points="40 8 79 72 7 72"></polygon>
    </svg>
  </div>
</div>
</head>
  <header class="main-header" style="font-size:16px;">
  <div class="logo"><img   src="../../static/logo2.png"  style="height:60px;width:120px;" alt="LOGO"></img></div>
  <input type="checkbox" class="menu-btn" id="menu-btn">
  <label for="menu-btn" class="menu-icon"><span class="menu-icon__line"></span></label>
  <ul class="nav-links">
    <li class="nav-link"><a href="../../">Home</a></li>
    <li class="nav-link"><a href="../technical/">Technical</a></li>
    <li class="nav-link"><a href="../workshop/">WorkShops</a></li>
    <li class="nav-link"><a href="../cultural">Culturals</a></li>
    <li class="nav-link"><a href="../sports/">Sports</a></li>
    <li class="nav-link active"><a href="#">About</a></li>
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
<body>
<div id="car_view" style="visibility : hidden;">
  <div class="container-fluid">
    <div class="row">
      <div class=" col auto">
        <div class="video-holder">
          <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="embed-responsive-item" id="myvideo">
           <source src="../../static/images/about/liked.mp4" type="video/mp4">
           </video>
         </div>
       </div>
     </div>

     <div class="jumbotron text-center hoverable p-4">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 offset-md-1 mx-3 my-3">

          <!-- Featured image -->
          <div class="view overlay">
            <img src="../../static/images/about/Aadhrita.jpeg" class="img-fluid" alt="Sample image for first version of blog listing">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-7 text-md-left ml-3 mt-3">

          <!-- Excerpt -->


          <h1 style="font-family: aadhritaFont; font-size: 90px; "><b>About Aadhrita</b></h1>
          <br>
          <h3 style="font-family:Raleway "><b>AADHRITA is a manifestation that proves that the college welcomes distinct forms of art along with academics. The event has experienced a long wait but is now ready for a comeback in its superlative form. AADHRITA aims at adding flavors to the monotonous routine by tapping into the deepest interests of the young minds. This would awaken the sleeping hearts and fill them with new energy and fervor. It is home to bountiful talent in arts, music, dance, photography and other engaging fields. It is synonymous to a great opportunity for each and every one to dust off and showcase their artistic brilliance.</b></h3>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>

    <br>
    
    <h1 style="font-family:Acme,cursive; color: white; margin-bottom: 30px"><center>Core Team<br> </center></h1>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team">
            <div class="picture">
              <img class="img-fluid" src="../../static/images/about/prasoon.jpg">
            </div>
            <div class="team-content">
              <h3 class="name">K E S Prasoon</h3>
              <h4 class="title">Student President</h4>
            </div>
            <ul class="social">
              <li><a href="tel:+917095847156" class="fa fa-phone" aria-hidden="true"></a></li>
              <li><a href="mailto:prasoonkarimelli@gmail.com" class="fas fa-envelope" aria-hidden="true"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team">
            <div class="picture">
              <img class="img-fluid" src="../../static/images/about/jeevan.jpg">
            </div>
            <div class="team-content">
              <h3 class="name">A Jeevan Kumar</h3>
              <h4 class="title">Student vice president</h4>
            </div>
            <ul class="social">
              <li><a href="tel:+919949110243" class="fa fa-phone" aria-hidden="true"></a></li>
              <li><a href="mailto:avugaddijeevan.1947@gmail.com" class="fas fa-envelope" aria-hidden="true"></a></li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team">
            <div class="picture">
              <img class="img-fluid" src="../../static/images/about/feroz.jpg">
            </div>
            <div class="team-content">
              <h3 class="name">S Ferojuddin</h3>
              <h4 class="title">Technical Secretary</h4>
            </div>
            <ul class="social">
              <li><a href="tel:+917095070572" class="fa fa-phone" aria-hidden="true"></a></li>
              <li><a href="mailto:" class="fas fa-envelope" aria-hidden="true"></a></li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team">
            <div class="picture">
              <img class="img-fluid" src="../../static/images/about/utej.jpg">
            </div>
            <div class="team-content">

              <h3 class="name">Uttej Kona</h3>
              <h4 class="title">Cultural secertary</h4>
            </div>
            <ul class="social">
              <li><a href="tel:+917660868666" class="fa fa-phone" aria-hidden="true"></a></li>
              <li><a href="mailto:" class="fas fa-envelope" aria-hidden="true"></a></li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team">
            <div class="picture">
              <img class="img-fluid" src="../static/logo.png" alt="not formal">
            </div>
            <div class="team-content">
              <h3 class="name">T Gopi</h3>
              <h4 class="title">Sports Secertary</h4>
            </div>
            <ul class="social">
              <li><a href="tel:+918309558532" class="fa fa-phone" aria-hidden="true"></a></li>
              <li><a href="mailto:" class="fas fa-envelope" aria-hidden="true"></a></li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team">
            <div class="picture">
              <img class="img-fluid" src="../../static/images/about/narren.jpg">
            </div>
            <div class="team-content">
              <h3 class="name">M Sai Naren</h3>
              <h4 class="title">Stage ands Hospitality</h4>
            </div>
            <ul class="social">
              <li><a href="tel:+918309558532" class="fa fa-phone" aria-hidden="true"></a></li>
              <li><a href="mailto:" class="fas fa-envelope" aria-hidden="true"></a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team">
            <div class="picture">
              <img class="img-fluid" src="../../static/images/about/vittal.jpeg">
            </div>
            <div class="team-content">
              <h3 class="name">K S P Vittal</h3>
              <h4 class="title">Web casting</h4>
            </div>
            <ul class="social">
              <li><a href="tel:+91918215228" class="fa fa-phone" aria-hidden="true"></a></li>
              <li><a href="mailto:vittalkovvada650@gmail.com" class="fas fa-envelope" aria-hidden="true"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team">
            <div class="picture">
              <img class="img-fluid" src="../../static/images/about/nikhil.jpg">
            </div>
            <div class="team-content">
              <h3 class="name">K Nikhil</h3>
              <h4 class="title">Press and media</h4>
            </div>
            <ul class="social">
              <li><a href="tel:+917702710033" class="fa fa-phone" aria-hidden="true"></a></li>
              <li><a href="mailto:" class="fas fa-envelope" aria-hidden="true"></a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team">
            <div class="picture">
              <img class="img-fluid" src="../../static/images/about/chakra.jpg">
            </div>
            <div class="team-content">
              <h3 class="name">K Sai ChakraPani</h3>
                <h4 class="title">Accommodations</h4>
            </div>
            <ul class="social">
              <li><a href="tel:+918886448325" class="fa fa-phone" aria-hidden="true"></a></li>
              <li><a href="mailto:" class="fas fa-envelope" aria-hidden="true"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team">
            <div class="picture">
              <img class="img-fluid" src="../../static/images/about/preetham.jpg">
            </div>
            <div class="team-content">
              <h3 class="name">M P Preetham</h3>
              <h4 class="title">Promotions and Sponserships</h4>
            </div>
            <ul class="social">
              <li><a href="tel:+917995385169" class="fa fa-phone" aria-hidden="true"></a></li>
              <li><a href="mailto:" class="fas fa-envelope" aria-hidden="true"></a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="our-team">
            <div class="picture">
              <img class="img-fluid" src="../../static/images/about/abhishek.jpg">
            </div>
            <div class="team-content">
              <h3 class="name">D Abhisheik</h3>
              <h4 class="title">Finance Management</h4>
            </div>
            <ul class="social">
              <li><a href="tel:+919491809673" class="fa fa-phone" aria-hidden="true"></a></li>
              <li><a href="mailto:" class="fas fa-envelope" aria-hidden="true"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
      <footer style="background-color: #2c292f;padding-top: 30px;min-height: 100px; font-family: 'Righteous', cursive;visibility:hidden;">
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
    <script src="../../js/nav.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> 
    <script  src="../../js/common.js"></script>
    <script src="../../js/popper.min.js"></script>
</body>
<script>
      $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
        $(".main-header").css("visibility","visible");
        $("footer").css("visibility","visible");
        $(".demo-cont").css("visibility","visible");
        $("#car_view").css("visibility","visible");
      });
    </script>
</html>