<?php 
	include 'include/header.php';
	include ("connections.php");

$MTYPE = $MNAME = $MDES = $MUSE = "";

if(isset($_POST["submitMeds"])){

	$MNAME = $_POST["MNAME"];
	$MDES = $_POST["MDES"];
	$MUSE = $_POST["MUSE"];
	$MTYPE = $_POST["MTYPE"];
	mysqli_query($connections,"INSERT INTO medicine (MNAME,MDES,MUSE,MTYPE) values ('$MNAME','$MDES','$MUSE','$MTYPE')");
	header("Location: Home.php");



	}
?>



<div class="bg" style="background-image: url('img/3.jpg'); height: 600px; background-repeat: no-repeat; background-size: cover; background-position: center center;">


<div class="container" style="padding-top: 30px; padding-bottom: 30px;">
	
		<div class="card-body">
			<form class="container" action="#" method="POST">
				<center>
					<h3 class="text-white" style="font-family: bellmt; font-size: 50px;">
						<b><i class="fas fa-fw fa-plus-square"></i>Medicine </b></h3>
							</center>
								<hr>
				
 <form method="POST">
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="#"> Medicine Name: </label>
								<input type="text" name="MNAME" class="form-control" placeholder="Medicine Name" required>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="#"> Description: </label>
								<input type="text" name="MDES" class="form-control" placeholder="Description" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="#"> Use for: </label>
								<input type="text" name="MUSE" class="form-control" placeholder="Reason" required>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="#"> Type of medicine: </label>
								<select name="MTYPE" class="form-control">
									<option name="MTYPE"> Select Medicine </option>									
									<option name="MTYPE" value="Tablet"> Tablet </option>
									<option name="MTYPE" value="Capsule"> Capsule </option>
									<option name="MTYPE" value="Syrup"> Syrup </option>
								</select>
						</div>
					</div>
				</div>	
			<hr>
				<center>
				<div class="form-group">
					<input type="submit" name="submitMeds" class="btn btn-success" value="Add" style="float: ;">
				</div>
				</center>
			</form>
		</div>
	</div>
</div>



<?php

  include 'include/footer.php';
?>