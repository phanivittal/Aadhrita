<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
  <title>MVGR | Register</title>
 <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>  
  <script src="../../js/popper.min.js"></script>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="../../css/register_css/register.css">
 
</head>
<body style=" background: linear-gradient(to top right, #fc2c77 0%, #6c4079 100%);">
  <header class="main-header">
  <div class="logo">
       <img  onclick="window.location.href='../../index.php'" src="../../static/logo.png" style="height:50px;width:30px;" alt="LOGO"></img>
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
        <a href="../workshop.php">WorkShops</a>
      </li>
      <li class="nav-link">
        <a href="../cultural.php">Culturals</a>
      </li>
    
    <li class="nav-link">
      <a href="../technical.php">Technical</a>
    </li>
    <li class="nav-link">
      <a href="../about.php">About</a>
    </li>
    <?php
		        if (isset($_SESSION['session_email'])) {
              echo '<li class="nav-link"><a href="./register/logout.php">Logout</a></li>
              <li class="nav-link"><a href="./content/profile.php">Profile</a></li>';
		        }
		        else{
		            echo '<li class="nav-link"><a href="#">Register</a></li>';
		        }
		    ?>
  
  </ul>
  </header>
  

<div id="content" >
<form action="./content/validateuser.php" method="POST" enctype="multipart/form-data" >
	    	<div class="container">
				<div class="jumbotron">
					<div>
						<?php
							if (isset($_GET['msg'])) {
								$msg= $_GET['msg'];
								echo "<h3 style = 'color:red' >".$msg."</h3>";
							}
						?>
					</div><br>
					<h3>Login with the given credentials</h3>
					<div class="form-group">
						<label>username :</label> <i class="fas fa-user"></i>
						<input type="text" class="form-control" name="userName">
					</div>
					<div class="form-group">
						<label>password :</label> <i class="fas fa-lock"></i>
						<input type="password" class="form-control" name="password">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" name="submit" value="submit">
						<label>not a user register</label><br><br><button type="button" class="btn  btn-outline-danger" onclick="location.href='./content/register.php';">register</button>
					</div>
				</div>
			</div>
	    </form>

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
 <script  src="../../js/register_js/register.js"></script>
</body >
</html>