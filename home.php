<?php 
	include 'include/header.php';
  include ("connections.php");
?>

<style type="text/css">
  tr{
    font-size: 80%;
    color: white;
  }
 

</style>

  <div class="bg" style="background-image: url('img/3.jpg'); height: 800px; background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="container">
        <p class="mb-3" style="font-family: bellmt; font-size:40px; color: maroon;"> MEDICINE K<i class="fas fa-fw fa-pills"></i>SK </p>
            <form method="POST" action="home.php" style="float: left; width: 370px;">
              <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search Medicine">
                  <button class="btn btn-info" type="submit" name="test"><i class="fas fa-fw fa-search"></i></button>&nbsp;
                  <a class="btn btn-success" title="ADD" href="Madd.php" style="float: right;"> <i class="fas fa-fw fa-pen"></i> </a>
              </div>
            </form><br><br><br>
<table class="table table-striped" >
    <div class="card">
        <thead>
            <tr style="font-family: Arial; font-size: 20px;">
                <th>#</th>
                <th>Medicine Name</th>
                <th>Description</th>
                <th>Use for</th>
                <th>Medicine Type</th> 
                <th>Action</th>
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
                          <tr style="font-family: arial;">
                            <td style="font-size: 18px;"><?php echo $row['MID']; ?></td>
                            <td style="font-size: 18px;"><?php echo $row['MNAME']; ?></td>
                            <td style="font-size: 15px;"><?php echo $row['MDES']; ?></td>
                            <td style="font-size: 15px;"><?php echo $row['MUSE']; ?></td>
                            <td style="font-size: 18px;"><?php echo $row['MTYPE']; ?></td>
                            <td ><?php 
                            echo "
                                <a class='btn btn-warning btn-sm' href='Mups.php?MID=$MID'>Update</a>
                                |
                                <a class='btn  btn-danger btn-sm' href='Mdel.php?MID=$MID'>Delete</a>";
                            ?></td>
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
<?php 
  include 'include/footer.php';
?>