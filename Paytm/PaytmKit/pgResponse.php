<?php
session_start();
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
		require '../../php/phpmailer/phpmailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->Host='smtp.gmail.com';
		$mail->port=465;
		$mail->SMTPAuth=true;
		$mail->SMTPSecure='tls';
		$mail->Username='mvgrce17331a0564@gmail.com';
		$mail->Password='mailpassword';

		$mail->setFrom('mvgrce17331a0564@gmail.com','aadhrita2020');
		$mail->addAddress($_SESSION['email']);


		$mail->isHTML(true);
		$mail->Subject ='
		<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>aadhrita2020 Letter Head</title>
		<style type="text/css">
			/* Client-specific Styles */
			#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
			body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
			body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */
			
			/* Reset Styles */
			body{margin:0; padding:0;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table td{border-collapse:collapse;}
			#backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}
			
			/* Template Styles */
			
			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: COMMON PAGE ELEMENTS /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Page
			* @section background color
			* @tip Set the background color for your email. You may want to choose one that matches your companys branding.
			* @theme page
			*/
			body, #backgroundTable{
				/*@editable*/ background-color:#FAFAFA;
			}
			
			/**
			* @tab Page
			* @section email border
			* @tip Set the border for your email.
			*/
			#templateContainer{
				/*@editable*/ border:0;
			}
			
			/**
			* @tab Page
			* @section heading 1
			* @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
			* @style heading 1
			*/
			h1, .h1{
				/*@editable*/ color:#ff0000;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:40px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:2%;
				margin-right:0;
				margin-bottom:1%;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			
			h2, .h2{
				color:##ff0000;
				display:block;
				font-family:Arial;
				font-size:22px;
				font-weight:bold;
				line-height:100%;
				margin-top:2%;
				margin-right:0;
				margin-bottom:1%;
				margin-left:0;
				text-align:left;
			}

			
			h3, .h3{
				/*@editable*/ color:#002db3;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:18px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:2%;
				margin-right:0;
				margin-bottom:1%;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			
			h4, .h4{
				/*@editable*/ color:#808080;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:14px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:2%;
				margin-right:0;
				margin-bottom:1%;
				margin-left:0;
				/*@editable*/ text-align:left;
			}
			h6, .h6{
				color:#ff0000;
				display:block;
				font-family:Arial;
				font-size:11px;
				line-height:100%;
				margin-top:2%;
				margin-right:0;
				margin-bottom:1%;
				margin-left:0;
				text-align:center;
			}


			
			
			/* @tab Header
			* @section social bar style
			* @tip Set the background color and border for your emails footer social bar.
			*/
			#social div{
				/*@editable*/ text-align:right;
			}
			
			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: HEADER /\/\/\/\/\/\/\/\/\/\ */
			
			/**
			* @tab Header
			* @section header style
			* @tip Set the background color and border for your emails header area.
			* @theme header
			*/
			#templateHeader{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border-bottom:5px solid #505050;
			}
			
			/**
			* @tab Header
			* @section header text
			* @tip Set the styling for your emails header text. Choose a size and color that is easy to read.
			*/
			.headerContent{
				/*@editable*/ color:#ff0000;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:34px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				/*@editable*/ padding:10px;
				/*@editable*/ text-align:right;
				/*@editable*/ vertical-align:middle;
			}
			
			/**
			* @tab Header
			* @section header link
			* @tip Set the styling for your emails header links. Choose a color that helps them stand out from your text.
			*/
			
			}
			
			#headerImage{
				height:auto;
				max-width:600px !important;
			}
			
			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: MAIN BODY /\/\/\/\/\/\/\/\/\/\ */
			
			/**
			* @tab Body
			* @section body style
			* @tip Set the background color for your emails body area.
			*/
			#templateContainer, .bodyContent{
				/*@editable*/ background-color:#FDFDFD;
			}
			
			/**
			* @tab Body
			* @section body text
			* @tip Set the styling for your emails main content text. Choose a size and color that is easy to read.
			* @theme main
			*/
			.bodyContent div{
				/*@editable*/ color:#505050;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:14px;
				/*@editable*/ line-height:150%;
				/*@editable*/ text-align:justify;
			}
			
			/**
			* @tab Body
			* @section body link
			* @tip Set the styling for your email main content links. Choose a color that helps them stand out from your text.
			*/
			.bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}
			
			.bodyContent img{
				display:inline;
				height:auto;
			}
			
			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: SIDEBAR /\/\/\/\/\/\/\/\/\/\ */
			
			/**
			* @tab Sidebar
			* @section sidebar style
			* @tip Set the background color and border for your email sidebar area.
			*/
			#templateSidebar{
				/*@editable*/ background-color:#FDFDFD;
			}
			
			/**
			* @tab Sidebar
			* @section sidebar style
			* @tip Set the background color and border for your email sidebar area.
			*/
			.sidebarContent{
				/*@editable*/ border-right:1px solid #DDDDDD;
			}
			
			/**
			* @tab Sidebar
			* @section sidebar text
			* @tip Set the styling for your email sidebar text. Choose a size and color that is easy to read.
			*/
			.sidebarContent div{
				/*@editable*/ color:#505050;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:11px;
				/*@editable*/ line-height:150%;
				/*@editable*/ text-align:left;
			}
			
			/**
			* @tab Sidebar
			* @section sidebar link
			* @tip Set the styling for your email sidebar links. Choose a color that helps them stand out from your text.
			*/
			.sidebarContent div a:link, .sidebarContent div a:visited, /* Yahoo! Mail Override */ .sidebarContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}
			
			.sidebarContent img{
				display:inline;
				height:auto;
			}
			
			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: FOOTER /\/\/\/\/\/\/\/\/\/\ */
			
			/**
			* @tab Footer
			* @section footer style
			* @tip Set the background color and top border for your email footer area.
			* @theme footer
			*/
			#templateFooter{
				/*@editable*/ background-color:#FAFAFA;
				/*@editable*/ border-top:3px solid #909090;
			}
			
			/**
			* @tab Footer
			* @section footer text
			* @tip Set the styling for your email footer text. Choose a size and color that is easy to read.
			* @theme footer
			*/
			.footerContent div{
				/*@editable*/ color:#707070;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:11px;
				/*@editable*/ line-height:125%;
				/*@editable*/ text-align:left;
			}
			
			/**
			* @tab Footer
			* @section footer link
			* @tip Set the styling for your email footer links. Choose a color that helps them stand out from your text.
			*/
			.footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}
			
			.footerContent img{
				display:inline;
			}
			
			/**
			* @tab Footer
			* @section social bar style
			* @tip Set the background color and border for your email footer social bar.
			* @theme footer
			*/
			#social{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border:0;
			}
			
			/**
			* @tab Footer
			* @section social bar style
			* @tip Set the background color and border for your email footer social bar.
			*/
			#social div{
				/*@editable*/ text-align:left;
			}
			
			/**
			* @tab Footer
			* @section utility bar style
			* @tip Set the background color and border for your email footer utility bar.
			* @theme footer
			*/
			#utility{
				/*@editable*/ background-color:#FAFAFA;
				/*@editable*/ border-top:0;
			}

			/**
			* @tab Footer
			* @section utility bar style
			* @tip Set the background color and border for your email footer utility bar.
			*/
			#utility div{
				/*@editable*/ text-align:left;
			}
			
			#monkeyRewards img{
				max-width:170px !important;
			}
		</style>
	</head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<center>
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
            	<tr>
                	<td align="center" valign="top">
                        <!-- // Begin Template Preheader -->
                        <table border="0" cellpadding="10" cellspacing="0" width="600" id="templatePreheader">
                            <tr>
                                <td valign="top" class="preheaderContent">
                                
                    
                                    
                                </td>
                            </tr>
                        </table>
                        <!-- // End Template Preheader  -->
                    	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- // Begin Template Header  -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
                                        <tr>
                                        	<td class="headerContent">
                                            	<img src="./clg.png" style="max-width:180px;" id="headerImage campaign-icon"/>
                                            </td>
                                            <td class="headerContent" width="100%" style="padding-left:10px; padding-right:20px;">
                                            	<div mc:edit="Header_content">
                                                    <h2>AADHRITA 2020</h2>
                                                    <h3>Maharaj Vijayaram Gajapathi Raj<br>
                                                     College of Engineering </h3><br><br>

                                            	</div>
                                            </td>
                                            <td class="headerContent">
                                            	<img src="./ele0.png" style="max-width:180px;" id="headerImage campaign-icon"/>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Header  -->

                                   <hr></hr>
                                              <h6>   Accredited by NBA of AICTE, Graded ‘A’ by NAAC of UGC, Approved by AICTE, New Delhi, Permanently Affiliated to JNTU, Kakinada & Listed u/s 2(f) and 12(B) of the UGC ACT 1956 e-mail: aadhrita2020@gmail.com</h6>
                                                    <hr></hr>
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- // Begin Template Body  -->
                                	<table border="0" cellpadding="10" cellspacing="0" width="600" id="templateBody">
                                    	<tr>
                                        	<!-- // Begin Sidebar  -->
                                        	<td valign="top" width="180" id="templateSidebar">
                                            	<table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                	<tr>
                                                    	<td valign="top">
                                                        
                                                            <!-- // Begin Module: Standard Content -->
                                                            <table border="0" cellpadding="30" cellspacing="0" width="100%" class="sidebarContent">
                                                                <tr>
                                                                    <td valign="top" style="padding-left:10px;">
                                                                        <div mc:edit="std_content01">
                                                                            <strong><u>Chief Patron:</u><br>	
																				Sri P. Ashok Gajapathi Raju
																			</strong>
                                                                            <br />
                                                                            &nbsp;&nbsp;&nbsp;Chairman MANSAS
                                                                            <br />
                                                                            
                                                                            <strong><u>Patron:</u><br>
																			Ms. Aditi Gajapathi Raju</strong>
                                                                            <br />
                                                                            &nbsp;&nbsp;&nbsp;Member, MANSAS Trust Board<br>
                                                                            <strong><u>Chairman:</u><br>
																			Dr. KVL Raju</strong>
                                                                            <br />
                                                                           &nbsp;&nbsp;&nbsp; Correspondent, MANSAS & Principal<br>
                                                                            <strong><u>Secretary:</u><br>
																			Dr. YMC Sekhar</strong>
                                                                            <br />
                                                                            &nbsp;&nbsp;&nbsp;Vice Principal
                                                                            <br>
                                                                            <strong>
																				<u>Convener:</u><br>
																				Mr. S. Mohan Kumar</strong>
                                                                            <br />
                                                                           &nbsp;&nbsp;&nbsp;Dean – Students
                                                                           <br><br>
                                                                           <strong>
																				<u>Coordiators:</u></br>
																				Dr. G. Anjaneyulu,</strong> 

																			
                                                                            
                                                                           Professor</br>
                                                                           ✆ 9491759682
                                                                       </br>
                                                                           <strong>
																				Dr. M. Kannam Naidu,

																			</strong>
                                                                            <br />
                                                                           Associate Professor</br>
																			✆ 9866474301<br>	
																			<strong>
																				Dr. P. Sateesh, 

																			</strong>
                                                                            <br />
                                                                           Associate Professor<br>
																					✆ 9246615251<br>

																			<strong>
																				Mr. E. S. Kalyan Kumar,

																			</strong>
                                                                            <br />
                                                                           Assistant Professor</br>
																			✆ 9949110243<br>
																			<br>
																			<strong><u>Student Coordinators:</u></strong><br>
																			<strong>
																				K. E S Prasoon,

																			</strong>
                                                                            <br />
                                                                            Student President</br>
																			✆ 7095847156<br>

																			<strong>
																				A.Jeevan Kumar,

																			</strong>
                                                                            <br />
                                                                           Student Vice President</br>
																			✆ 9949110243<br>
																			<strong>
																				S. Ferojjudin,

																			</strong>
                                                                            <br />
                                                                           Technical Events</br>
																			✆ 7095070572<br>

																			<strong>
																				K. V Uttej,

																			</strong>
                                                                            <br />
                                                                           Cultural Event</br>
																			✆ 7660868666<br>

																			<strong>
																				M. Sai Naren,

																			</strong>
                                                                            <br />
                                                                           Stage & Hospatality</br>
																			✆ 8309558532<br>
																			<strong>
																				K. Nikhil,

																			</strong>
                                                                            <br />
                                                                           Press & Media</br>
																			✆ 7702710033<br>
																			<strong>
																				Saiphani Vittal Kovvada,

																			</strong>
                                                                            <br />
                                                                           Web Casting</br>
																			✆ 9182154228<br>
																			<strong>
																				Preetham Puneeth Munipalli,

																			</strong>
                                                                            <br />
                                                                           Sponsorships & Promotions</br>
																			✆ 7995385169<br>
																			<strong>
																				K. Sai Chakra Pani,

																			</strong>
                                                                            <br />
                                                                           Sponsorships & Promotions</br>
																			✆ 8886448325<br>
																			<strong>
																				Donkada Abhishek,

																			</strong>
                                                                            <br />
                                                                           Bills & Accounts</br>
																			✆ 9491809673<br>


                                                                        </div>			
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- // End Module: Standard Content  -->
                                                        
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <!-- // End Sidebar  -->
                                        	<td valign="top" class="bodyContent">
                                            
                                                <!-- // Begin Module: Standard Content  -->
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td  style="padding-left:0;">
                                                            <div valign="center" mc:edit="std_content00">
                                                            	
                                                            	<h4 class="h4">Heading 3</h4>
                                                            	'.$_SESSION["userName"].'
															</div>
														</td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Standard Content  -->
                                            
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Body  -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- // Begin Template Footer  -->
                                	<hr></hr>
                                              <h6>   Vijayaramnagar Campus, Chintalavalasa, Vizianagaram, AP – 535005</h6>
                                                    <hr></hr> 
                                        	<td valign="top" class="footerContent">
                                            
                                                <!-- // Begin Module: Standard Footer  -->
                                               
                                                <!-- // End Module: Standard Footer  -->
                                            
                                            </td>
                                        
                                    <!-- // End Template Footer  -->
                                </td>
                            </tr>
                        </table>
                        <br />
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
		';
		$mail->Body=$otp;
		$mail->send();
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

if(!isset($_SESSION['email']))
echo "<script> alert('null')</script>";
else
echo '<br/>'.$_SESSION['userName'];
?>
<?php

 echo "<br><br><button  onclick=\"window.location.href='/aadritha2.8/php/register/login.php'\">Continue</button>"
?>