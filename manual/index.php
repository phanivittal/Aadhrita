<?php
  session_start();
  if (isset($_SESSION['user'])) {
    session_unset();
    session_destroy();
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin login</title>
  <meta name="author" content="SAIKIRAN SEEPANA" >
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/register/register.css">

</head>
<body>
  <div class="container" style="padding-top: 120px " >
    <div class="jumbotron">
      <div>
        <form method="POST" action="./php/redirect/" enctype="multipart/form-data">
          <h3>Admin login</h3>
          <div class="form-group">
            <label for="username" > user name : </label>
            <input type="email" class="form-control " name="username" pattern="[^$,]+" required="yes" >
          </div>
          <div class="form-group">
            <label>Password :</label>
            <input type="password" class="form-control col-xs-4" name="password" required="yes" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,20}">
          </div>
          <div class="form-group" style="padding-top: 20px;padding-left: 120px;">
            <input type="submit" class="btn btn-primary" name="">
          </div>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>