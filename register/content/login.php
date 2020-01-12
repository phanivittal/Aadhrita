<form action="validateuser.php" method="POST" enctype="multipart/form-data" >
	    	<div class="container">
				<div class="jumbotron">
					<div>
						<?php
							if (isset($_GET['msg'])) {
								$msg= $_GET['msg'];
								echo "<h3 style = 'color:red' >".$msg."</h3>";
							}
						?>
					</div>
					<h3>Login with the given credentials</h3>
					<div class="form-group">
						<label>username :</label> <i class="fas fa-user"></i>
						<input type="text" class="form-control" name="userName">
					</div>
					<div class="form-group">
						<label>password :</label> <i class="fas fa-lock"></i>
						<input type="password" class="form-control" name="password">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" name="submit" value="submit">
						<label>not a user register</label><br><br><button type="button" class="btn  btn-outline-danger" onclick="location.href='../register/content/register.php';">register</a></button>
					</div>
				</div>
			</div>
	    </form>
