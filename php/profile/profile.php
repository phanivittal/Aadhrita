<div class="container" style="padding-top:90px;">
			<?php
			$AAD3ID = "AAD3001";
			echo "
			<div>
			<p style= 'font-size: 20px'>Welcome 
			".$_SESSION['session_user']." Token ID : 
			".$_SESSION['aadhrita_id']."
			</p>
			</div>
			";
			?>
			<div class="jumbotron">
				<h3>Registerd Technical Events : </h3>
				<h4>To register for more Technical Events click.. <a class="btn btn-primary" href="../../technical.php"> here </a></h4>
				<?php
				$id = $_SESSION['aadhrita_id'];
				$sql = "SELECT * FROM `technicalRegistrations` WHERE `aadhritaID` = '$id'";
				$retval = mysqli_query($conn,$sql);
				
				if ($n = mysqli_num_rows($retval)) {
					echo "
					<div class = 'container'>
					<h5>registered for some Technical Evevnt</h5>
					</div>
					";
				}
				else{
					echo "
					<div class = 'container'>
					<h5>
					you haven't registered for any Technical Event .
					</h5>
					</div>
					";
				}
				?>
			</div>
			<div class="jumbotron">
				<h3>Registerd Cultural Events : </h3>
				<h4>To register for more Cultural Eents click.. <a class="btn btn-primary" href="../../cultural.php"> here </a></h4>
				<?php
				$id = $_SESSION['aadhrita_id'];
				$sql = "SELECT * FROM `culturalRegistrations` WHERE `aadhritaID` = '$id'";
				$retval = mysqli_query($conn,$sql);
				if ($n = mysqli_num_rows($retval)) {
					echo "
					<div class = 'container'>
					<h5>registered for some Cultural Evevnt</h5>
					</div>
					";
				}
				else{
					echo "
					<div class = 'container'>
					<h5>
					you haven't registered for any Cultural Event .
					</h5>
					</div>
					";
				}
				?>
			</div>
			<div class="jumbotron">
				<h3>Registerd Workshops : </h3>
				<h4> To register for more Workshops click.... <a class="btn btn-primary" href="../../workshop.php"> here </a></h4>
				<?php
				$sql = "SELECT * FROM `workshopRegistrations` WHERE `aadhritaID` = '$id'";
				$retval = mysqli_query($conn,$sql);
				if ($n = mysqli_num_rows($retval)) {
					echo "
					<div class = 'container'>
					<h5>registered for some Workshop</h5>
					</div>
					";
				}
				else{
					echo "
					<div class = 'container'>
					<h5>
					you haven't registered for any workshops .
					</h5>
					</div>
					";
				}
				?>
			</div>
			<div class="jumbotron">
				<h3>Accommodation : </h3>
				<h4> To register for Accommodation.... <a class="btn btn-primary" href="../../workshop.php"> opt </a></h4>
				<?php
				$sql = "SELECT * FROM `registrations` WHERE `aadhritaID` = '$id'";
				$retval = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($retval);
				if ( $row['accommodation'] == "yes" ) {
					echo "
					<div class = 'container'>
					<h5>Accomodation granted .</h5>
					</div>
					";
				}
				else{
					echo "
					<div class = 'container'>
					<h5>
					you haven't opted for any Accommodation .
					</h5>
					</div>
					";
				}
				?>
			</div>
		</div>