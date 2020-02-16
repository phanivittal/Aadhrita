<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
 <title>Team Registration</title>
 <meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
 <link rel="stylesheet" href="../../../../../../css/bootstrap/bootstrap.min.css"/>
 <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

</head>
<body style="background-image: linear-gradient(to right, #0F2027, #203A43,#2C5364);" >
 
  <?php
    require '../../../db/db.php';
    $_SESSION['team_size'] = $_POST['tsize'];    $ts=$_SESSION['team_size'];
  
    $id = $_SESSION['eventId'];
    $tsize = $_POST['tsize'];
    $etype = $_SESSION['event_type'];
    echo "<br><br><h2 style='color:white;'><center>$etype</center><br><br></h2>";
    $aad3id = [$_POST['tlid']];
    $tempid =$_POST['tlid'];
    $email =$eml= [$_POST['tlemail']];
    $aad3ids=array();
    $emails=array();
   $uname=array();
   $uname=[$_POST['tlid']];
    for( $i = 1 ; $i < $tsize ; $i++ ) {
      array_push($uname,$_POST["uname".$i]);
      array_push($aad3id,$_POST["aad3id".$i]);
      array_push($email,$_POST["memberEmail".$i]);
    }
   
    $sql="select email , aadhritaID from registrations";
    $res=mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($res)) {
      array_push($aad3ids,$row['aadhritaID']);
      array_push($emails,$row['email']);
    }
    $sql="select email from registrations where aadhritaID='$tempid'";
    $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
  
    $cemail=$row['email'];
    if($eml[0]!=$cemail){
    echo '<div class="jumbotron" style="margin:10px 20px 20px;">';
    
   
    print_r($eml);
     print_r($cemail);
     
      
        echo "<h4>". "$eml[0] " ."the email id  is not matched with entered aadhrita id ". "$tempid<h4>"."<br>";
      
    
       echo "Go back and enter again! ah valid emailID";
      echo "<br><br><button class='btn btn-outline-warning' onclick='location.href=`./Shresta_Groupteamregistrations.php?id=".urlencode(utf8_encode($id))."`';>goback</button>";
      echo '</div>';
  }else{
    $_SESSION['phn']=$aad3id;
    $_SESSION['spemails']=$email;
    $_SESSION['uname']=$uname;
    $sql1="select name from registrations where aadhritaID='$aad3id[0]'";
    $row=mysqli_fetch_Assoc(mysqli_query($conn,$sql1));
    $name=$row['name'];
   echo '<div class="container" style="background-color:white;border-radius:9px;padding:30px 0px">
   <h3>&nbsp; &nbsp; Team Lead :&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;'.$name.'</h3>
   <table class="table" style="border-radius:9px;">
     <thead class=" thead-dark">
       <tr>
         <th scope="col">S.NO</th>
         <th scope="col">UserName</th>
         <th scope="col">email id</th>
         <th scope="col">Mobilenumber</th>
        
       </tr>
     </thead> <tbody>
   ';

     for($i=1;$i< $tsize;$i++) {
      
     echo '
       <tr>
         <th scope="row">'.$i.'</th>
         <td>'.$uname[$i].'</td>
         <td>'.$email[$i].'</td>
         <td>'.$aad3id[$i].'</td>
       </tr> 
     ';

     }
    echo '   </tbody> </table>';
 
 echo "<button class='btn btn-outline-primary ml-5' onclick='location.href=`../../checkoutevent.php?msg=".$etype."&id=". $id."`';>Paynow</button>";
   echo '</div>';
  
  }
  ?>
  </body>
  <footer style="background-color: #2c292f;margin-top: 10vh;padding-top:30px;min-height: 100px; font-family: 'Righteous', cursive;">
        <div class="container" >
          <div class="row">
                   <div class="col-md-4 text-center text-md-left">
              <h4 class="my-3 text-warning">Quicklinks</h4>
              <p class="footer-links font-weight-bold">
                <a class="text" style="color:#50d8af;" href="../../../../../../">Home |</a>
                <a class="text"style="color: #50d8af;" href="../../../technical/">Technical |</a>
                <a class="text" style="color:#50d8af;" href="../../../workshop/">Workshops |</a>
                <a class="text"style="color: #50d8af;" href="../../../cultural/">Culturals |</a>
                <a class="text"style="color: #50d8af;" href="../../../login/">Register |</a>
                <a class="text" style="color:#50d8af;" href="../../../about/">About</a>
              </p>
              <div class="py-1">
                <h4 class="my-3 text-warning">Follow us on</h4>
                <a target="_blank" href="https://www.facebook.com/Aadhrita-2020-104961254324994/"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
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
  <script src="../../../../../../js/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script> 

  <script src="../../../../../../js/popper.min.js"></script>

</html>