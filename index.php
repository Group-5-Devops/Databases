<!DOCTYPE html>
<html lang="en">
<?php 
  include ("connections.php");
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MedKiosk</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>

 
    
    <div class="bg" style="background-image: url('img/3.jpg'); height: 800px; background-repeat: no-repeat; background-size: cover; background-position: center center;">
    
      <div class="container-fluid">
        <br>
            <center>
              <h1 class="mb-1" style="font-family: bellmt; font-size: 60px; color: maroon;"> 
                  Medicine K<i class="fas fa-fw fa-pills"></i>sk
              </h1>
            </center>
      </div>

            <form method="POST" action="index.php" class="container" style="float: center; width: 500px;">
              <div class="input-group">
                 <input type="text" name="search" class="form-control" placeholder="Search Medicine">
                  <button class="btn btn-dark" type="submit" name="test"><i class="fas fa-fw fa-search"></i></button>
                    </div>
                      </form>
                        <br><br>

        <div class="container">
          <table class="table table-striped text-white bg-grey" >
            <div class="card">
              <thead>
                  <tr class="text-dark" style="font-family: arial; font-size: 20px;">
                      <th>Medicine Name</th>
                      <th>Description</th>
                      <th>Use for</th>
                      <th>Medicine Type</th>
                  </tr>
              </thead>
    

    <div class="medkiosk-container">    
      <?php
        if (isset($_POST["test"])) {
        $search = $_POST["search"];
        $sql = "SELECT * FROM medicine  WHERE MID LIKE '%$search%' OR 
                MNAME LIKE '%$search%' OR MDES LIKE '%$search%' 
                OR MUSE LIKE '%$search%' OR MTYPE LIKE '%$search%' LIMIT 10 ";
        $result = mysqli_query($connections,$sql);
        $queryResult = mysqli_num_rows($result);
        
          if ($queryResult > 0) {
            while ($row = mysqli_fetch_array($result)) {
              $MID = $row["MID"];
              ?>
                  <tbody>
                          <tr style="font-family: arial; font-size: 18px;">
                            <td ><?php echo $row['MNAME']; ?></td>
                            <td ><?php echo $row['MDES']; ?></td>
                            <td ><?php echo $row['MUSE']; ?></td>
                            <td ><?php echo $row['MTYPE']; ?></td>
                          </tr>
                  </tbody>
            
              <?php
              }
          }else{
            echo "<center>No Data!!!<center/>";
          }
        } 
      ?>

        </div>
      </table>

      </div>
    </div>
  </div>

</body>
</html>
