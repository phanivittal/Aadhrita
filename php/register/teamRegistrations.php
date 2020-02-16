<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <link rel="icon" href="../../static/logo3.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <title>Aadhrita | Team Registrations</title>
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  
  <link rel="stylesheet" href="../../css/navbar.css">
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../css/preloader.css">


	
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
    <li class="nav-link"><a href="../about/">About</a></li>
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
<?php
	$sid = $_GET['id'];
		if($sid=='AAD3CE01'){
			header('Location:cultural/Dhvaniprata/Dhvanipratateamregistrations.php?id=AAD3CE01');
		}
		elseif($sid=='AAD3CE13'){
			header('Location:cultural/Shresta_Group/Shresta_Groupteamregistrations.php?id=AAD3CE13');
		}
?>
	<body >
	<div id="card" style="background-image: linear-gradient(to right, #0F2027, #203A43,#2C5364);padding:90px 10px;visibility:hidden; margin-top:0px;width:100%" >
	<div class="container jumbotron" >
		<?php
			if (isset($_SESSION['session_email'])) {
				include '../db/db.php';
				$sid = $_GET['id'];
				$id = utf8_decode(urldecode($sid));
				$_SESSION['eventId'] = $id;
				$sql = "SELECT * FROM `events` WHERE `eid` = '$id'";
				$retval = mysqli_query($conn,$sql);
				if ($retval) {
					$row = mysqli_fetch_assoc($retval);
					$_SESSION['tsize'] = $row['eteam_size'];
					$_SESSION['event_type'] = $row['etype'];
					echo "<h2>You are registering for an ".$row['etype']." Event - ".$row['ename']."</h2><br/>";
					echo "<h3>Allowed team size is : ".$row['eteam_size']."</h3><br>";
				}
			}
			else{
				$id =  $_GET['id'];
				header("Location:../login/?msg=First Login to Register for the event. ");
			}
		?>
		
		<form method="POST" enctype="multipart/form-data" action="./validateTeamRegistration.php">
			<div class="form-group">
				<label>Enter Team Lead AADHRITA ID :</label>
				<input type="text" class="form-control" name="tlid">
			</div>
			<div class="form-group">
				<label>Enter Team Lead Email ID :</label>
				<input type="text" class="form-control" name="tlemail">
			</div>
			<div class="form-group">
				<label>Enter Team size :</label>
				<input type="text" id="tsize" class="form-control" name="tsize">
			</div>
			<div id="container">
				
			</div>
			<div class="form-group" >
				<button type="button" class="btn btn-primary" onclick="populate()">Enter</button>
			</div>
			<div class="form-group" id="popbtn">
				
			</div>
		</form>
	</div>
	</div>
	<footer  style="background-color: #2c292f;padding-top: 30px;min-height: 100px; font-family: 'Righteous', cursive;visibility:hidden">
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
  
	
	<script>

		// Script for populating input fields

		function populate() {
			var tsize = parseInt(document.getElementById("tsize").value);
			var container = document.getElementById("container");
			while (container.hasChildNodes()) {
				container.removeChild(container.lastChild);
	        }
	        var x= 0;
	        if (<?php
	        	$size =$_SESSION['tsize'];
	        	if (strlen($size)>3) {
	        		$l = substr($size,0,2);
	        		$h = substr($size,3);
	        		echo $l."<=tsize&&tsize<=".$h;
	        	}
	        	else{
	        		$s = substr($size,0,2);
	        		echo "tsize==".$s;
	        	}
	        	?>){
	        	x = 1;
	        	for (i=1;i<tsize;i++) {
	        		var text2 = document.createTextNode("Enter AADHRITA ID of member "+i);
	         		var div2 = document.createElement("div");
	        		var input2 = document.createElement("input");
	        		div2.className = "form-group";
	           		input2.type = "text";
		            input2.name = "aad3id"+i;
		            input2.className = "form-control";
		            input2.required = "yes";
		            div2.appendChild(text2);
		            div2.appendChild(input2);
		            container.appendChild(div2);
	        		var text1 = document.createTextNode("Enter Email ID of member "+i);
	         		var div1 = document.createElement("div");
	        		var input1 = document.createElement("input");
	        		div1.className = "form-group";
	           		input1.type = "text";
		            input1.name = "memberEmail"+i;
		            // input1.pattern = '^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$';
		            input1.className = "form-control";
		            input1.required = "yes";
		            div1.appendChild(text1);
		            div1.appendChild(input1);
		            container.appendChild(div1);
	        	}
	        	var div2 = document.getElementById("popbtn");
	        	while (div2.hasChildNodes()) {
					div2.removeChild(div2.lastChild);
		        }
	        	var submit = document.createElement("input");
	        	submit.name = "submit";
		        submit.className = "btn btn-primary mt-2";
		        submit.value = "submit";
		        submit.type = "submit";
		        div2.appendChild(submit);
	        }
	        else{
	        	alert("Enter allowed team size only");
	        }
		}
	
      $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
        $(".main-header").css("visibility","visible");
        $("footer").css("visibility","visible");
        $("#card").css("visibility","visible");
       
      });
   
	</script>

</body>
<script src="../../js/nav.js"></script>
    <script src="../../js/jquery.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="../../js/popper.min.js"></script>
</html>