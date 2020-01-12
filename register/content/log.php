<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="aadhrita Templates">
    <meta name="author" content="aadhrita">
    <meta name="keywords" content="aadhrita">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../../css/bootstrap.min.css">

<!-- jQuery library -->
<script src="../../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../../js/bootstrap.min.js"></script>
    <!-- Title Page-->
    <title>Aadhrita | Registration</title>
    <!-- Icons font CSS-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <!-- ../vittal CSS-->
    

    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">
  
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form name="myform" method="POST"  onsubmit="return validate()">
                        <div>
                            <?php
                                if (isset($_GET['msg'])) {
                                    $msg= $_GET['msg'];
                                    echo "<h3 style = 'color:red' >".$msg."</h3>";
                                }
                            ?>
                        </div>
                        <h3 class="title">Login with the given credentials</h3>
                        <div class="row">
                            <div class="col-auto" style="width:100%">
                                <div class="">
                                    <label class="label"> Aadhrita Token</label>
                                    <input class="input--style-4" type="text" name="name" required>
                                </div>
                            </div>
                            
                       
                            <div class="col-auto" style="width:100%">
                                <div class="">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="psd" required>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="p-t-15">
                            <button class="btn btn-success" type="submit">Login</button>
                                &nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               
                            <button class="btn btn-danger" type="button" onclick="location.href='../content/register.php';">Register</button>
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
   

    <!-- Main JS-->
    <script src="../js/global.js"></script>

</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</html>
<!-- end document-->