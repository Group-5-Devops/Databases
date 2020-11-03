<?php 
	include 'include/header.php';
  include ("connections.php");


if(empty($_GET["search"])){
  echo "Index must not be empty";
}else{
    $search = $_GET["search"];

    $terms = explode (" ", $search);

    $query = "SELECT * FROM medicine WHERE";

    $i = 0;

    foreach ($terms as $each) {
      
      $i++;

      if ($i == 1){
        $query .= " MNAME LIKE '%$each%' ";
      }else{
        $query .= " OR MNAME LIKE '%$each%' ";
      }
    }

    $query_2 = mysqli_query($connections, $query);
    $check_this = mysqli_num_rows($query_2);

    if($check_this > 0 && $search!="") {
        while($row = mysqli_fetch_assoc($query_2)){

          $MID = $row["MID"];

          $db_MNAME = $row["MNAME"];
          $db_MDES = $row["MDES"];
          $db_MUSE = $row["MUSE"];
          $db_MTYPE = $row["MTYPE"];

          $full_name = ucfirst($db_MNAME) . " " . ucfirst($db_middle_name[0]) . ". " . ucfirst($db_last_name);

          echo "$full_name 

          <a href='edit.php?MID=$MID'>Update</a>
            |
          <a href='delete.php?MID=$MID'>Delete</a>
          <hr>

          ";

        }

    }else{

      echo "<h1>No Found Result.</h1>";

    }

  }


?>
