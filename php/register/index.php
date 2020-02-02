<?php
session_start();
session_unset();
session_destroy();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8">
        <meta name="author" content="K Sai Phani Vittal">
    <meta name="keywords" content="aadhrita">

    <!-- Title Page-->
    <title>Aadhrita | Registration</title>

    <!-- Icons font CSS-->
    <link href="../../css/register/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    
    <!-- Font special for pages-->
    <link href="../../css/register/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <!-- ../css/register_css CSS-->
    <link href="../../css/register/select2/select2.min.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="../../css/register/main.css" rel="stylesheet" media="all">
    <script>
        function validate() {
            var count2=0;
            var contact=document.myform.contact.value;
            var password=document.myform.password.value;
            var repassword=document.myform.repassword.value;
            if(isNaN(contact)){
               alert("contact number shoud contain numbers");
               return false;
           }
           if(contact.length<10 || contact.length>10){
               alert("enter a valid mobile number");
               return false;
           }

           if(password!=repassword){
               alert("password did not matched...!");
               return false;
           }
           for(i=0;i<password.length;i++){
               if(password[i]>='A' && password[i]<='Z'){
                count2++;
            }
        }
       //  if(count2<1||password.length<8){
       //     alert("password must contain atleast  1 capitals..! with length of 8 .!");
       //     return false;
       // }
       if(!document.getElementById('accept').checked){
           alert("Please accept terms and condition to proceed");
           return false;
       }
   }
</script>
</head>

<body style="background-image:linear-gradient(to right, #0F2027, #203A43,#2C5364);">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form name="myform" method="POST" action="checkout.php" onsubmit="return validate()" autocomplete="yes">
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">Full name</label>
                                    <input class="input--style-4" type="text" name="userName" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">College name</label>
                                    <input class="input--style-4" type="text" name="collegeName" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">college Id</label>
                                    <input class="input--style-4" type="text" name="CollegeId" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email"  name="email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="contact" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Pincode </label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="text" name="pincode" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
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
                            <div class="input-group">
                                <label class="label">Accommodation</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">No
                                        <input type="radio" checked="checked" name="accommodation" value="NO" required>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Yes
                                        <input type="radio" name="accommodation" value="YES" required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Department</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="department" required>
                                    <option disabled="disabled" selected="selected" value="">Choose option</option>
                                    <option value="CSE">CSE</option>
                                    <option value="ECE">ECE</option>
                                    <option value="MECH">MECH</option>
                                    <option value="CHEM">CHEM</option>
                                    <option value="IT">IT</option>
                                    <option value="EEE">EEE</option>
                                    <option value="CIVIL">CIVIL</option>
                                    <option value="MBA">MBA</option>
                                    <option value="Others">Others</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Year</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="year" required>
                                    <option disabled="disabled" selected="selected" value="">Choose option</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-1" style="width:100%">
                                <div class="input-group">
                                    <label class="label">confirm password</label>
                                    <input class="input--style-4" type="password" name="repassword" required>
                                </div>
                            </div>
                            <!-- <div class="row row-space">
                                <div class="col-1" style="width:100%">
                                    <div class="form-group">
                                        <label style="color:blue; font-size: 20px; "> Click here to read Terms and Conditions </label>
                                        <p>I have read the rules & accept. </p>
                                        <input type="checkbox" name="accept" id="accept" style="float: left;" required>
                                    </div>
                                </div>
                            </div> -->
                            <select name="amount" style="display:none">
                                <option value="1"></option>
                            </select>
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery JS-->
        <script src="../../js/jquery.min.js"></script>
        <!-- ../css/register_css JS-->
        <script src="../../js/register/select2/select2.min.js"></script>


        <!-- Main JS-->
        <script src="../../js/register/global.js"></script>

    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </html>
<!-- end document-->