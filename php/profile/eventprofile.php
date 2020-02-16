<?php
session_start();
require '../db/db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<head>
		<title>Aadhrita | paricipant</title>
	
		<meta name="author" content="seepana sai kiran">
		<link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../../css/navbar.css">
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
		<link rel="stylesheet" href="../../css/preloader.css">
		<style>

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
	    <li class="nav-link "><a href="../sports/">sports</a></li>
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

    <div id="car_view" style="padding-top:120px;padding-bottom:500px;visibility:hidden;background-image: linear-gradient(to right, #0F2027, #203A43,#2C5364);" >
<?php
$row=array();
$str=$_GET["id"];
echo "<div class='jumbotron form mx-3' style='margin-top:120px;;max-width: none;  width:auto;'>";
$row=(explode("L",$str));

switch ($row[0]) {
    case 'T':
        $sql = "SELECT * FROM `technicalregistrations` WHERE `aadhritaID` = '$row[1]' group by teamToken" ;
                    $retval = mysqli_query($conn,$sql);
                   
					while ($values=mysqli_fetch_assoc($retval)) {
                       $eid= $values['eventID'];
                       $teamid=$values['teamToken'];
                        $sql1 = "SELECT ename FROM `events` WHERE `eid` = '$eid'";
                        $retval1 = mysqli_query($conn,$sql1);
                        $values1=mysqli_fetch_assoc($retval1);
                        $sql10= "SELECT  * FROM `technicalregistrations` WHERE teamToken='$teamid'";
                        $retval10 = mysqli_query($conn,$sql10);
                        echo '<table class="table table-striped table-dark" style="border-radius:10px">
                        <tr>
                        <td>Aadhrita Team Token</td>
                        <td>Aadhrita ID</td>
                        <td>Email ID</td>
                        <td>Event ID</td>
                        <td>Event Name</td>
                        </tr>';
                        while($values0=mysqli_fetch_assoc($retval10)){
                        echo '
                                <tr>
                                <td>
                                '.$values0["teamToken"].'
                                </td>
                                <td>
                                '.$values0["aadhritaID"].'
                                </td>
                                <td>
                                '.$values0["email"].'
                                </td>
                                <td>
                                '.$values0["eventID"].'
                                </td>
                                <td>
                                '.$values1["ename"].'
                                </td>
                                </tr>
                                ';
                        }
                        echo '</table>';
              
          }
        break;
    case 'C':
        $sql_c = "SELECT * FROM `culturalregistrations` WHERE `aadhritaID` = '$row[1]' group by teamToken" ;
                    $retval_c = mysqli_query($conn,$sql_c);
                  
                    while ($values=mysqli_fetch_assoc($retval_c)) {
                      $eid= $values['eventID'];
                      $teamid=$values['teamToken'];
                       $sql1 = "SELECT ename FROM `events` WHERE `eid` = '$eid'";
                       $retval1 = mysqli_query($conn,$sql1);
                       $values1=mysqli_fetch_assoc($retval1);
                       $sql10= "SELECT  * FROM `culturalregistrations` WHERE teamToken='$teamid'";
                       $retval10 = mysqli_query($conn,$sql10);
                       echo '<table class="table table-striped table-dark" style="border-radius:10px">
                       <tr>
                       <td>Aadhrita Team Token</td>
                       <td>Aadhrita ID</td>
                       <td>Email ID</td>
                       <td>Event ID</td>
                       <td>Event Name</td>
                       </tr>';
                       while($values0=mysqli_fetch_assoc($retval10)){
                       echo '
                               <tr>
                               <td>
                               '.$values0["teamToken"].'
                               </td>
                               <td>
                               '.$values0["aadhritaID"].'
                               </td>
                               <td>
                               '.$values0["email"].'
                               </td>
                               <td>
                               '.$values0["eventID"].'
                               </td>
                               <td>
                               '.$values1["ename"].'
                               </td>
                               </tr>
                               ';
                       }
                       echo '</table>';
             
         }
        break;
    case 'S':
        $prevteam_s="AAD0000";
        $sql_s = "SELECT * FROM `sportsregistrations` WHERE `aadhritaID` = '$row[1]' group by teamToken" ;
                    $retval_s = mysqli_query($conn,$sql_s);
                    while ($values=mysqli_fetch_assoc($retval_s)) {
                      $eid= $values['eventID'];
                      $teamid=$values['teamToken'];
                       $sql1 = "SELECT ename FROM `events` WHERE `eid` = '$eid'";
                       $retval1 = mysqli_query($conn,$sql1);
                       $values1=mysqli_fetch_assoc($retval1);
                       $sql10= "SELECT  * FROM `sportsregistrations` WHERE teamToken='$teamid'";
                       $retval10 = mysqli_query($conn,$sql10);
                       echo '<table class="table table-striped table-dark" style="border-radius:10px">
                       <tr>
                       <td>Aadhrita Team Token</td>
                       <td>Aadhrita ID</td>
                       <td>Email ID</td>
                       <td>Event ID</td>
                       <td>Event Name</td>
                       </tr>';
                       while($values0=mysqli_fetch_assoc($retval10)){
                       echo '
                               <tr>
                               <td>
                               '.$values0["teamToken"].'
                               </td>
                               <td>
                               '.$values0["aadhritaID"].'
                               </td>
                               <td>
                               '.$values0["email"].'
                               </td>
                               <td>
                               '.$values0["eventID"].'
                               </td>
                               <td>
                               '.$values1["ename"].'
                               </td>
                               </tr>
                               ';
                       }
                       echo '</table>';
             
         }
        break;
    case 'W':
        $prevteam_w="AAD0000";
        $sql_w = "SELECT * FROM `workshopregistrations` WHERE `aadhritaID` = '$row[1]' group by teamToken" ;
                    $retval_w = mysqli_query($conn,$sql_w);
                   
                    while ($values=mysqli_fetch_assoc($retval_w)) {
                      $eid= $values['eventID'];
                      $teamid=$values['teamToken'];
                       $sql1 = "SELECT ename FROM `events` WHERE `eid` = '$eid'";
                       $retval1 = mysqli_query($conn,$sql1);
                       $values1=mysqli_fetch_assoc($retval1);
                       $sql10= "SELECT  * FROM `workshopregistrations` WHERE teamToken='$teamid'";
                       $retval10 = mysqli_query($conn,$sql10);
                       echo '<table class="table table-striped table-dark" style="border-radius:10px">
                       <tr>
                       <td>Aadhrita Team Token</td>
                       <td>Aadhrita ID</td>
                       <td>Email ID</td>
                       <td>Event ID</td>
                       <td>Event Name</td>
                       </tr>';
                       while($values0=mysqli_fetch_assoc($retval10)){
                       echo '
                               <tr>
                               <td>
                               '.$values0["teamToken"].'
                               </td>
                               <td>
                               '.$values0["aadhritaID"].'
                               </td>
                               <td>
                               '.$values0["email"].'
                               </td>
                               <td>
                               '.$values0["eventID"].'
                               </td>
                               <td>
                               '.$values1["ename"].'
                               </td>
                               </tr>
                               ';
                       }
                       echo '</table>';
             
         }
        break;
}
echo '</div>';
?>	<button type="button" class="btn btn-primary  col-auto mx-5 my-5" id="create_pdf"  value="Generate PDF">Download Receipt</button>
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
        $(".form").css("visibility","visible");
        $("#car_view").css("visibility","visible");
      });
    </script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>

	<script>
    (function () {
        var
         form = $('.form'),
         cache_width = form.width(),
         a4 = [595.28, 841.89]; // for a4 size paper width and height

        $('#create_pdf').on('click', function () {
            $('body').scrollTop(0);
            createPDF();
        });
        //create pdf
        function createPDF() {
            getCanvas().then(function (canvas) {
                var
                 img = canvas.toDataURL("image/png"),
                 doc = new jsPDF({
                     unit: 'px',
                     format: 'a4'
                 });
                doc.addImage(img, 'JPEG', 20, 20);
                doc.save('Receipt.pdf');
                form.width(cache_width);
            });
        }

        // create canvas object
        function getCanvas() {
            form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
            return html2canvas(form, {
                imageTimeout: 2000,
                removeContainer: true
            });
        }

    }());
</script>
<script>
    /*
 * jQuery helper plugin for examples and tests
 */
    (function ($) {
        $.fn.html2canvas = function (options) {
            var date = new Date(),
            $message = null,
            timeoutTimer = false,
            timer = date.getTime();
            html2canvas.logging = options && options.logging;
            html2canvas.Preload(this[0], $.extend({
                complete: function (images) {
                    var queue = html2canvas.Parse(this[0], images, options),
                    $canvas = $(html2canvas.Renderer(queue, options)),
                    finishTime = new Date();

                    $canvas.css({ position: 'absolute', left: 0, top: 0 }).appendTo(document.body);
                    $canvas.siblings().toggle();

                    $(window).click(function () {
                        if (!$canvas.is(':visible')) {
                            $canvas.toggle().siblings().toggle();
                            throwMessage("Canvas Render visible");
                        } else {
                            $canvas.siblings().toggle();
                            $canvas.toggle();
                            throwMessage("Canvas Render hidden");
                        }
                    });
                    throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);
                }
            }, options));

            function throwMessage(msg, duration) {
                window.clearTimeout(timeoutTimer);
                timeoutTimer = window.setTimeout(function () {
                    $message.fadeOut(function () {
                        $message.remove();
                    });
                }, duration || 2000);
                if ($message)
                    $message.remove();
                $message = $('<div ></div>').html(msg).css({
                    margin: 0,
                    padding: 10,
                    background: "#000",
                    opacity: 0.7,
                    position: "fixed",
                    top: 10,
                    right: 10,
                    fontFamily: 'Tahoma',
                    color: '#fff',
                    fontSize: 12,
                    borderRadius: 12,
                    width: 'auto',
                    height: 'auto',
                    textAlign: 'center',
                    textDecoration: 'none'
                }).hide().fadeIn().appendTo('body');
            }
        };
    })(jQuery);

</script>
</html>