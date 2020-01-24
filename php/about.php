<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <title>MVGR | About Us</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/about.css"/>
  <link rel="stylesheet" href="../css/navbar.css">
  <script src="../js/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link href="https://fonts.googleapis.com/css?family=Acme|Calistoga|Cinzel|Courgette|Galada|Great+Vibes|Lobster|Marck+Script|Pacifico|Playball&display=swap" rel="stylesheet">
  <style>
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
  </style>
</head>
<header class="main-header">
  <div class="logo">
   <img  onclick="window.location.href='./index.php'" src="../static/logo1.png" style="height:50px;width:40px;" alt="LOGO">
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
    <a href="./technical.php">Technical</a>
  </li>
  <li class="nav-link">
    <a href="#" class="active">About</a>
  </li>
  <?php
  if (isset($_SESSION['session_email'])) {
    echo '
    <li class="nav-link"><a href="./register/content/profile.php">Profile</a></li>
    <li class="nav-link"><a href="./register/logout.php">Logout</a></li>';
  }
  else{
    echo '<li class="nav-link"><a href="./register/login.php">Register</a></li>';
  }
  ?>

</ul>
</header>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class=" col auto">
        <div class="video-holder">
          <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="embed-responsive-item" id="myvideo">
           <source src="../static/images/about_images/liked.mp4" type="video/mp4">
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
            <img src="../images/about_images/Aadhrita.jpeg" class="img-fluid" alt="Sample image for first version of blog listing">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-7 text-md-left ml-3 mt-3">

          <!-- Excerpt -->


          <h1 style="font-family:Cinzel,cursive;"><b>About AADHRITA</b></h1>
          <br>
          <h3 style="font-family:Marck Script,sans-serif;"><b>AADHRITA is a manifestation that proves that the college welcomes distinct forms of art along with academics. The event has experienced a long wait but is now ready for a comeback in its superlative form. AADHRITA aims at adding flavors to the monotonous routine by tapping into the deepest interests of the young minds. This would awaken the sleeping hearts and fill them with new energy and fervor. It is home to bountiful talent in arts, music, dance, photography and other engaging fields. It is synonymous to a great opportunity for each and every one to dust off and showcase their artistic brilliance.</b></h3>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>

    <br>
    <h1 style="font-family:Acme,cursive;"><center>Core Committee</center></h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-auto mx-4 my-4">
          <div id="demo1" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo1" data-slide-to="0" class="active"></li>
              <li data-target="#demo1" data-slide-to="1"></li>

            </ul>
            <div class="carousel-inner" width="300" height="300">
              <div class="carousel-item active">
                <div class="box15">
                  <img src="../images/about_images/prasoon.jpeg" alt="" width="300" height="300">
                  <div class="box-content">
                    <h3 class="title"><center>Student President<br>K.Prasoon</center></h3>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="box15">
                  <img src="../images/about_images/jeevan.jpeg" alt="" width="300" height="300">
                  <div class="box-content">
                    <h3 class="title"><center>Student General Secertary<br>A.Jeevan Kumar</center></h3>
                  </div>
                </div>
              </div>

              <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo1" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>

          </div>
        </div>
        <div class="col-auto mx-4 my-4 ">
          <div id="demo2" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo2" data-slide-to="0" class="active"></li>
              <li data-target="#demo2" data-slide-to="1"></li>
              <li data-target="#demo2" data-slide-to="2"></li>
              <li data-target="#demo2" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner" width="300" height="300">
              <div class="carousel-item active">
                <div class="box15">
                  <img src="../images/about_images/vittal.jpeg" alt="" width="300" height="300">
                  <div class="box-content">
                    <h3 class="title"><center>Web casting<br>K.Vittal</center></h3>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="box15">
                  <img src="../images/about_images/nikhil.jpeg" alt="" width="300" height="300">
                  <div class="box-content">
                    <h3 class="title"><center>Press and media<br>Nikhil</center></h3>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="box15">
                  <img src="../images/about_images/utej.jpeg" alt="" width="300" height="300">
                  <div class="box-content">
                    <h3 class="title"><center>Cultural secertary<br>Uttej</center></h3>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="box15">
                  <img src="../images/about_images/chakra.jpeg" alt="" width="300" height="300">
                  <div class="box-content">
                    <h3 class="title"><center>Registration,transport and Accomadations<br>Chakra Pani</center></h3>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo2" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>

          </div>
        </div>
        <div class="col-auto mx-4 my-4  ">
          <div id="demo3" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo3" data-slide-to="0" class="active"></li>
              <li data-target="#demo3" data-slide-to="1"></li>
              <li data-target="#demo3" data-slide-to="2"></li>
              <li data-target="#demo3" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner" width="300" height="300">
              <div class="carousel-item active">
                <div class="box15">
                  <img src="../images/about_images/preetham.jpeg" alt="" width="300" height="300">
                  <div class="box-content">
                    <h3 class="title"><center>Promotions,Sponserships<br>Preetham</center></h3>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="box15">
                  <img src="../images/about_images/narren.jpeg" alt="" width="300" height="300">
                  <div class="box-content">
                    <h3 class="title"><center>Stage and Hospitality<br>Nareen</center></h3>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="box15">
                  <img src="../images/about_images/feroz.jpeg" alt="" width="300" height="300">
                  <div class="box-content">
                    <h3 class="title"><center>Technical Secretary<br>Feroz</center></h3>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="box15">
                  <img src="../images/about_images/abhishek.jpeg" alt="" width="300" height="300">
                  <div class="box-content">
                    <h3 class="title"><center>Finance Management<br>Abhisheik</center></h3>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#demo3" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo3" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
        </div>
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
              <iframe width="230px"
              height="230px"
              frameborder="2" style="border:0;width:100%;height:auto;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3793.245677096944!2d83.40339111442094!3d18.06017798767875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3be4c4081c8dbb%3A0x1c634bbcd67ea3bf!2sMaharaj%20Vijayaram%20Gajapathi%20Raj%20College%20of%20Engineering%20(Autonomous)!5e0!3m2!1sen!2sin!4v1577787304518!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="foot" style="width: 100%;color: azure;background-color:dimgrey;height: 80px;margin-bottom: 0">
        <p align="center" style="padding-top: 20px;">Copyright &copy;2020,MVGR</p>
      </div>
    </footer>
  </div>
  <script src="../js/nav.js"></script>
  <script src="../js/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script> 
  <script  src="../js/common.js"></script>
  <script src="../js/popper.min.js"></script>
</body>
</html>