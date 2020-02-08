<?php
session_start();
require '../db/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<head>
		<title>Aadhrita | paricipant</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
		<meta name="author" content="seepana sai kiran">
		<link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../../css/navbar.css">
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
		<link rel="stylesheet" href="../../css/preloader.css">
		<style>
		 @media screen and (max-width:1166px)
  {
    .main-header .nav-links .nav-link a {
      padding:1px 0px 1px;
      }
    
  }
    
  @media screen and (max-width:1045px)
  {
    .main-header .nav-links .nav-link  {
      padding:.5rem 9px;
      }
    
  }
  @media screen and (max-width:945px)
  {
    .main-header .nav-links .nav-link  {
      padding:.5rem 7px;
      }
      .main-header .nav-links{
      font-size: .799rem;}
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
	<header class="main-header" style="font-size:16px;">
	  <div class="logo"><img   src="../../static/logo2.png"  style="height:60px;width:120px;" alt="LOGO"></img></div>
	  <input type="checkbox" class="menu-btn" id="menu-btn">
	  <label for="menu-btn" class="menu-icon"><span class="menu-icon__line"></span></label>
	  <ul class="nav-links">
	    <li class="nav-link"><a href="../../">Home</a></li>
	    <li class="nav-link"><a href="../technical/">Technical</a></li>
	    <li class="nav-link"><a href="../workshop/">WorkShops</a></li>
	    <li class="nav-link"><a href="../cultural">Culturals</a></li>
	    <li class="nav-link"><a href="../about/">About</a></li>
	    <?php
	    if (isset($_SESSION['session_email'])) {
	      echo '
	      <li class="nav-link active"><a href="../profile/">Profile</a></li>
	      <li class="nav-link"><a href="../logout/">Logout</a></li>
	      ';
	    }
	    else{
	      echo '<li class="nav-link"><a href="../login/">Register</a></li>';
	    }
	    ?>
	  </ul>
	</header>

	<body >
		<div id="car_view" style="padding-top:190px;padding-bottom:50px;visibility:hidden;background-image: linear-gradient(to right, #0F2027, #203A43,#2C5364);">
			<?php
			
			echo "
			<div>
			<p class='mx-3 my-4' style= 'color:white;font-size: 20px'>Welcome 
			".$_SESSION['session_user']." Token ID : 
			".$_SESSION['aadhrita_id']."
			</p>
			</div>
			";
			?>
			<div class="jumbotron mx-3" >
				<h3>Registerd Technical Events : </h3>
				<h4>To register for more Technical Events click.. <a class="btn btn-primary" href="../technical/"> here </a></h4>
				<?php
				$id = $_SESSION['aadhrita_id'];
				$sql = "SELECT * FROM `technicalRegistrations` WHERE `aadhritaID` = '$id'";
				$retval = mysqli_query($conn,$sql);
				
				if ($n = mysqli_num_rows($retval)) {
					for ($i=0; $i <$n ; $i++) { 
						echo "
						<div class = 'container'>
						<h5>registered for some Technical Event</h5>
						</div>
						";
					}
				}
				else{
					echo "
					<div class = 'container'>
					<h5>
					you haven't registered for any Technical Event .
					</h5>
					</div>
					";
				}
				?>
			</div>
			<div class="jumbotron mx-3">
				<h3>Registerd Sports Events : </h3>
				<h4> To register for more Sports events click.... <a class="btn btn-primary" href="../sports/"> here </a></h4>
				<?php
				$sql = "SELECT * FROM `sportsRegistrations` WHERE `aadhritaID` = '$id'";
				$retval = mysqli_query($conn,$sql);
				if ($n = mysqli_num_rows($retval)) {
					echo "
					<div class = 'container'>
					<h5>registered for some Workshop</h5>
					</div>
					";
				}
				else{
					echo "
					<div class = 'container'>
					<h5>
					you haven't registered for any workshops .
					</h5>
					</div>
					";
				}
				?>
			</div>
			<div class="jumbotron mx-3">
				<h3>Registerd Cultural Events : </h3>
				<h4>To register for more Cultural Eents click.. <a class="btn btn-primary" href="../cultural/"> here </a></h4>
				<?php
				$id = $_SESSION['aadhrita_id'];
				$sql = "SELECT * FROM `culturalRegistrations` WHERE `aadhritaID` = '$id'";
				$retval = mysqli_query($conn,$sql);
				if ($n = mysqli_num_rows($retval)) {
					echo "
					<div class = 'container'>
					<h5>registered for some Cultural Evevnt</h5>
					</div>
					";
				}
				else{
					echo "
					<div class = 'container'>
					<h5>
					you haven't registered for any Cultural Event .
					</h5>
					</div>
					";
				}
				?>
			</div>
			<div class="jumbotron mx-3">
				<h3>Registerd Workshops : </h3>
				<h4> To register for more Workshops click.... <a class="btn btn-primary" href="../workshop/"> here </a></h4>
				<?php
				$sql = "SELECT * FROM `workshopRegistrations` WHERE `aadhritaID` = '$id'";
				$retval = mysqli_query($conn,$sql);
				if ($n = mysqli_num_rows($retval)) {
					echo "
					<div class = 'container'>
					<h5>registered for some Workshop</h5>
					</div>
					";
				}
				else{
					echo "
					<div class = 'container'>
					<h5>
					you haven't registered for any workshops .
					</h5>
					</div>
					";
				}
				?>
			</div>
			<div class="jumbotron mx-3">
				<h3>Accommodation : </h3>
				<h4> To register for Accommodation.... <a class="btn btn-primary" href="#"> opt </a></h4>
				<?php
				$sql = "SELECT * FROM `registrations` WHERE `aadhritaID` = '$id'";
				$retval = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($retval);
				if ( $row['accommodation'] == "yes" ) {
					echo "
					<div class = 'container'>
					<h5>Accomodation granted .</h5>
					</div>
					";
				}
				else{
					echo "
					<div class = 'container'>
					<h5>
					you haven't opted for any Accommodation .
					</h5>
					</div>
					";
				}
				?>
			</div>
		</div>
		<footer  style="visibility:hidden;background-color: #2c292f;padding-top: 30px;min-height: 100px; font-family: 'Righteous', cursive;">
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
		<script src="../../js/jquery.min.js"></script>
		<script src='https://kit.fontawesome.com/a076d05399.js'></script> 
		<script  src="../../js/nav.js"></script>
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
	<script src="../../js/popper.min.js"></script>
</body>
<script>
      $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
        $(".main-header").css("visibility","visible");
        $("footer").css("visibility","visible");
        $(".container").css("visibility","visible");
        $("#car_view").css("visibility","visible");
      });
    </script>
</html>