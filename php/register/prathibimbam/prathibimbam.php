<?php

session_start();
require '../../db/db.php';
$tsize = $_SESSION['team_size'];
$etype = $_SESSION['event_type'];


$finalAmount = $_SESSION['finalAmount'];
$aad3id = $_SESSION['tokens'];
$email = $_SESSION['emails'];
$uname = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
<head>
<title>
    Team Registrations
</title>
<link rel="stylesheet" type="text/css" href="../../../css/bootstrap/bootstrap.min.css">
</head>
<body style="background-image: linear-gradient(to right, #0F2027, #203A43,#2C5364);">
<marquee width="70%" direction="left" style="margin-top:120px;color:white;" height="100px"><h3 >SUCCESSFULLY REGISTERED
Please Generate PDF for following data</h3>
</marquee>
<div class="container" style="padding-top: 80px;padding-bottom: 100px;">
    <div class="jumbotron">
       
            <table class="table table-striped table-dark" style="border-radius:9px;">
                <tbody>
                  <!-- Hidden Fields -->
                 

              
                <tr>
                  <td   align="center" colspan='2' ><?php echo "<h4>  AADHRITA TEAM TOKEN - ".$_SESSION['teamToken']."</h4>";?></td>
                    <td  align="center"  colspan='2'><h4>Event id : AAD3CE09</h4></th>
                
                </tr>
                <tr>
                    <th scope="col">Aadhrita ID</th>
                    <th scope="col" >Email ID</th>
                    <th scope="col" >user name</th>
                    <th scope="col">LEAD / MEMBER</th>
                </tr>
                <?php
                    for ($i=0; $i < $tsize  ; $i++) {
                        echo "<tr>";
                        echo "<td>".$aad3id[$i]."</td>";
                        echo "<td>".$email[$i]."</td>";
                        echo "<td>".$uname[$i]."</td>";
                        
                        if ($i==0) {
                            echo "<td>Lead</td>";
                        }
                        else{
                            echo "<td>Member</td>";
                        }
                        echo "</tr>";
                    }
                ?>
              
                  <td colspan="2" align="center">
                  
                    <input class="btn btn-outline-success" value="Continue" type="submit" onclick="location.href='../../profile/'">
                  </td>
                  <td  align="center">
                  <button class='btn btn-primary mr-5' type='button' id='create_pdf' value='Generate PDF'>GeneratePdf</button>
                  </td>
                </tr>

              </tbody>
            </table>
       
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script>
    (function () {
        var
        jumbotron = $('.jumbotron'),
         cache_width = jumbotron.width(),
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
                doc.save('AADHRITA2020_TEAM_REGISRATIONS.pdf');
                jumbotron.width(cache_width);
            });
        }

        // create canvas object
        function getCanvas() {
            jumbotron.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
            return html2canvas(jumbotron, {
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