<!DOCTYPE html>
<html>
<head>
	<title>Basic data</title>
	<meta name="author" content="aadhrita" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<script type="text/javascript" src="../../js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
	<div class="container-fluid" style="padding: 300px 20px;">
		<div class="jumbotron">
			<form action="../dbin.php" method="POST" enctype="multipart/form-data">
				<h3>Enter details to register for AADHRITA2020 </h3>
				<div class="form-group  mx-sm-3 ">
					<label>Name : </label>
					<input type="text" class="form-control" name="userName" required />
				</div>
				<div class="form-group  mx-sm-3 ">
					<label>College Name : </label>
					<input type="text" class="form-control" name="collegeName" required/>
				</div>
				<div class="form-group  mx-sm-3 ">
					<label>College ID : </label>
					<input type="text" class="form-control" name="collegeID" required/>
				</div>
				<div class="form-group mx-sm-3 mb-2 ">
					<label>Email Id : </label>
					<input type="text" class="form-control" name="email" required/>
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<label>Contact NO : </label>
					<input type="text" class="form-control" name="contact" required/>
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<label>Gender : </label>
					<input type="radio" name="gender" value="male" required> male
					<input type="radio" name="gender" value="female"> female
					<input type="radio" name="gender" value="other"> others
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<label for="sel1">Year of Study:</label>
					<select class="form-control" name="yos" id="sel1">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<label>City : </label>
					<input type="text" class="form-control" name="city" required/>
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<label>Pincode : </label>
					<input type="text" class="form-control" name="pincode" required/>
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<label>accommodation : </label>
					<input type="radio" name="accommodation" value="male" required> YES
					<input type="radio" name="accommodations" value="female" > NO
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<input type="submit" name="submit" class="btn btn-success" value = "submit">
				</div>
			</form>
		</div>
	</div>
</body>
</html>