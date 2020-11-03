<?php 
	include 'include/header.php';
	include ("connections.php");



$MID = $_GET["MID"];

$get_record = mysqli_query($connections, "SELECT * FROM medicine WHERE MID='$MID'");

$get_record_num = mysqli_num_rows($get_record);

if($get_record_num > 0){
	
	while($row = mysqli_fetch_assoc($get_record)){

		$db_MNAME = $row["MNAME"];
		$db_MDES = $row["MDES"];
		$db_MUSE = $row["MUSE"];
		$db_MTYPE = $row["MTYPE"];
	}

	$new_MNAME = $new_MDES = $new_MUSE = $new_MTYPE = "";


	if(isset($_POST["btnUpdate"])){

				$new_MNAME = $_POST["new_MNAME"];
				$db_MNAME = $new_MNAME;
	
				$new_MDES = $_POST["new_MDES"];
				$db_MDES = $new_MDES;
	
				$new_MUSE = $_POST["new_MUSE"];
				$db_MUSE = $new_MUSE;


				$new_MTYPE = $_POST["new_MTYPE"];
				$db_MTYPE = $new_MTYPE;
		
				if($new_MNAME AND $new_MDES AND $new_MUSE AND $new_MTYPE){


			mysqli_query($connections, "UPDATE medicine SET MNAME='$new_MNAME', MDES='$new_MDES',
			MUSE='$new_MUSE', MTYPE='$new_MTYPE' WHERE MID='$MID' ");
			header("Location: home.php");
		}
			


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
					<input type="submit" name="btnUpdate" class="btn btn-success" value="UPDATE" style="float:center ;">
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