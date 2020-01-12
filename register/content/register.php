<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="aadhrita Templates">
    <meta name="author" content="aadhrita">
    <meta name="keywords" content="aadhrita">

    <!-- Title Page-->
    <title>Aadhrita | Registration</title>

    <!-- Icons font CSS-->
    <link href="../vittal/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vittal/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <!-- ../vittal CSS-->
    <link href="../vittal/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vittal/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">
    <script>
    function validate() {
        var count2=0;
        var contact=document.myform.contact.value;
        var psd=document.myform.psd.value;
     	var repsd=document.myform.repsd.value;
        if(isNaN(contact)){
				alert("contact number shoud contain numbers");
				return false;
			}
         if(contact.length<10 || contact.length>10){
				alert("enter a valid mobile number");
				return false;
			}
            
            if(psd!=repsd){
				alert("password did not matched...!");
				return false;
			}
            for(i=0;i<psd.length;i++){
				if(psd[i]>='A' && psd[i]<='Z') count2++;
				
				}
			
			if(count2<1||psd.length<8){
				alert("password must contain atleast  1 capitals..! with length of 8 .!");
				return false;
			}
            if(!document.getElementById('accpt').checked){
				alert("Please accept terms and condition to proceed");
				return false;
			}
            }
        </script>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form name="myform" method="POST"  onsubmit="return validate()">
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">Full name</label>
                                    <input class="input--style-4" type="text" name="name" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">College name</label>
                                    <input class="input--style-4" type="text" name="clg" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">college Id</label>
                                    <input class="input--style-4" type="text" name="clgid" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">city</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="text" name="city" required>
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" required>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                        <div class="input-group">
                                    <label class="label">Accomidation</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">No
                                            <input type="radio" checked="checked" name="accom" required>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Yes
                                            <input type="radio" name="accom">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="contact" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Department</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>CSE</option>
                                    <option>ECE</option>
                                    <option>MECH</option>
                                    <option>CHEM</option>
                                    <option>IT</option>
                                    <option>EEE</option>
                                    <option>CIVIL</option>
                                    <option>MBA</option>
                                    <option>Others</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Year</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" required>
                                </div>
                            </div>
                            
                        </div>
                        
                            <button class="btn btn--radius-2 btn--blue" type="button">Get OTP&nbsp; <i class="fab fa-telegram-plane"></i></button>
                        <br><br>
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">Enter OTP</label>
                                    <input class="input--style-4" type="password" name="otp" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="psd" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">confirm password</label>
                                    <input class="input--style-4" type="password" name="repsd" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../vittal/jquery/jquery.min.js"></script>
    <!-- ../vittal JS-->
    <script src="../vittal/select2/select2.min.js"></script>
    <script src="../vittal/datepicker/moment.min.js"></script>
    <script src="../vittal/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</html>
<!-- end document-->