<?php 
	include 'include/header.php';
	include ("connections.php");



$MID = $_GET["MID"];

$get_record = mysqli_query($connections, "SELECT * FROM medicine WHERE MID='$MID'");

$check_get_record = mysqli_num_rows($get_record);

if($check_get_record > 0){

	$row = mysqli_fetch_assoc($get_record);
	$db_MNAME = $row["MNAME"];
	$db_MDES = $row["MDES"];
	$db_MUSE = $row["MUSE"];
	$db_MTYPE = $row["MTYPE"];


	$full_name = ucfirst($db_MNAME) . " " . ucfirst($db_MDES) . " " . ucfirst($db_MTYPE);

	if(isset($_POST["btnDelete"])){
		mysqli_query($connections, "DELETE FROM medicine WHERE MID='$MID'");
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
								<input type="text" name="new_MNAME" class="form-control"value="<?php echo $db_MNAME; ?>">
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="#"> Description: </label>
								<input type="text" name="new_MDES" class="form-control" value="<?php echo $db_MDES; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="#"> Use for: </label>
								<input type="text" name="new_MUSE" class="form-control" value="<?php echo $db_MUSE; ?>">
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="#"> Type of medicine: </label>
								<select name="new_MTYPE" class="form-control">								
									<option name="new_MTYPE" <?php if($db_MTYPE == "Tablet"){ echo "selected ";} ?> value="Tablet"> Tablet </option>
									<option name="new_MTYPE" <?php if($db_MTYPE == "Capsule"){ echo "selected ";} ?> value="Capsule"> Capsule </option>
									<option name="new_MTYPE" <?php if($db_MTYPE == "Syrup"){ echo "selected ";} ?> value="Syrup"> Syrup </option>
								</select>
						</div>
					</div>
				</div>	
			<hr>
				<center>
				<div class="form-group">
					<input type="submit" name="btnDelete" class="btn btn-success" value="DELETE" style="float: center;">
				</div>
				</center>
			</form>
		</div>
	</div>
</div>


<?php
}else{

	echo "<h1>No Record Found!!</h1>";

}
?>

<?php

  include 'include/footer.php';
?>