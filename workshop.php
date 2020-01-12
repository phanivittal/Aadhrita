<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
  <title>MVGR | WORKSHOPS</title>
 <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/workshopcs.css"/>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="./css/carousel_ext.css">
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/card.css">
</head>

  <header class="main-header">
    <div class="logo">
      <a href="./index.html">LOGO</a>
    </div>
  
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon">
      <span class="menu-icon__line"></span>
    </label>
  
    <ul class="nav-links">
      <li class="nav-link">
        <a href="./index.html">Home</a>
      </li>
     
      <li class="nav-link">
        <a href="#">WorkShops</a>
      </li>
      <li class="nav-link">
        <a href="./cultural.html">Culturals</a>
      </li>
    
    <li class="nav-link">
      <a href="./technical.html">Technical</a>
    </li>
  
    <li class="nav-link">
      <a href="./register/register.html">Register</a>
    </li>
    <li class="nav-link">
      <a href="/about.html">About</a>
    </li>
  </ul>
  </header>
<!-- partial:index.partial.html -->
<!-- 
Please note, that you can apply .m--global-blending-active to .fnc-slider 
to enable blend-mode for all background-images or apply .m--blend-bg-active
to some specific slides (.fnc-slide). It's disabled by default in this demo,
because it requires specific images, where more than 50% of bg is transparent or monotone
-->
<div class="demo-cont">
  <!-- slider start -->
  <div class="fnc-slider example-slider">
    <div class="fnc-slider__slides">
      <!-- slide start -->
      <div class="fnc-slide m--blend-green m--active-slide">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h3 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Data Science</span>
              </div>
            </h3>
            <button type="button" class="fnc-slide__action-btn">
              Workshop
              <span data-text="Workshop">Workshop</Canvas></span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-dark">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h3 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Solar Vehicle</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Design</span>
              </div>
            </h3>
            <button type="button" class="fnc-slide__action-btn">
              Workshop
              <span data-text="Workshop">Workshop</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-red">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h3 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Epannet</span>
              </div>
              
            </h3>
            <button type="button" class="fnc-slide__action-btn">
              Workshop
              <span data-text="Workshop">Workshop</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-blue">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h3 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Stock Market</span>
              </div>
              
            </h3>
            <button type="button" class="fnc-slide__action-btn">
              Workshop
              <span data-text="Workshop">Workshop</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
         <!-- slide start -->
         <div class="fnc-slide m--blend-grey">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h3 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span>IOT</span>
                </div>
                
              </h3>
              <button type="button" class="fnc-slide__action-btn">
                Workshop
                <span data-text="Workshop">Workshop</span>
              </button>
            </div>
          </div>
        </div>
        <!-- slide end -->
              
    </div>

    <nav class="fnc-nav">
      <div class="fnc-nav__bgs">
        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
        <div class="fnc-nav__bg m--navbg-dark"></div>
        <div class="fnc-nav__bg m--navbg-red"></div>
        <div class="fnc-nav__bg m--navbg-blue"></div>
        <div class="fnc-nav__bg m--navbg-grey"></div>
        
      </div>
      <div class="fnc-nav__controls">
        <button class="fnc-nav__control">
          Data Science
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          Solar Vehicle Design
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          Epannet
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
         Stock Market
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
         IOT
          <span class="fnc-nav__control-progress"></span>
        </button>        
      </div>
    </nav>
  </div>
  <!-- slider end -->
  <div class="demo-cont__credits">
    <div class="demo-cont__credits-close"></div>
    <h2 class="demo-cont__credits-heading">MVGR CULTURALS</h2>
    
    <p class="demo-cont__credits-heading"></p>
    
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
</div>
</div>

<body  style="background-image: linear-gradient(-225deg, #69EACB 0%, #EACCF8 48%, #6654F1 100%);">
<div class="container-fluid">
<div class="row" > 
<?php 
    require 'db.php';
    for($i=0;$i<5;$i++)
    {
        $sql="select ename,tagline,image,phone1,phone2,name1,name2,edesc,eventdesc2 from events where etype='WORK' and eid='AAD3WS00".$i."'" ;
        $res=mysqli_query($conn,$sql); 
        $row=mysqli_fetch_assoc($res);      
        $x="card".$i;
        $y="#card".$i;
        echo '
        <div  class="card card-flip col-auto mx-auto my-3"    onmouseover="this.classList.toggle(\'expanded\')"  onmouseout="this.classList.toggle(\'expanded\')" id='.$x.' style="max-width: 20rem;" >
                            
                                <div class="card-front">
                                          <img class="label" src="data:image;base64,'.base64_encode($row['image']).'" alt="nanbu" viewBox="100 100 0 0"  width="100%">
                                          <div class="text1">
                                            <div class="text-content">
                                              <p class="title" style="font-size:26px;">'.$row['ename'].'<p>
                                              <div class="body-text">'.$row['tagline'].'</div>
                                                 <button  onclick="$(\''.$y.'\').toggleClass(\'expand\')" class="btn btn-outline-primary ">Get_More</button>
                                            </div>
                                            <svg class="chevron"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="30"><path d="M5 30L50 5l45 25" fill="none" stroke="#000" stroke-width="5"/></svg>
                                            </div>
                                            </div>
                            
                                            <div class="card-back">
                                            <div class="card-body" >
                                               <i class="fas fa-arrow-circle-left fa-2x text-primary" onclick="$(\''.$y.'\').toggleClass(\'expand\')" ></i>                                    
                                               <h2 align:center>'.$row['eventdesc2'].'</h2><br>
                                                <h6>'.$row['edesc'].'</h6><br>                                   
                                           <a class="btn btn-primary" href="aad.pdf" role="button" id="file">Download</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                           <a type="button" class="btn btn-info"  href="registration.html"  >register</a>
                                           
                                           </div>
                                </div>
                           
            </div>';
    }
    ?>
    </div>
    </div>


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
          <iframe width="230"
          height="230"
          frameborder="2" style="border:0;width:100%;height:auto;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3793.245677096944!2d83.40339111442094!3d18.06017798767875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3be4c4081c8dbb%3A0x1c634bbcd67ea3bf!2sMaharaj%20Vijayaram%20Gajapathi%20Raj%20College%20of%20Engineering%20(Autonomous)!5e0!3m2!1sen!2sin!4v1577787304518!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
  
        
             

<!-- partial -->
  <script  src="./js/classical.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script> 
  <script  src="./js/common.js"></script>
  <script src="./js/popper.min.js"></script>

</body>
</html>