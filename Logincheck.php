<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="medicinekiosk"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn,"$db_name")or die("cannot select DB");
// username and password sent from form 
$username=$_POST['USERNAME']; 
$password=$_POST['PASSWORD']; 
// To protect MySQL injection (more detail about MySQL injection)

$query = mysqli_query($conn, "SELECT * FROM users WHERE USERNAME = '".$_POST['USERNAME']."' and PASSWORD = '".($_POST['PASSWORD'])."'");
$count=mysqli_num_rows($query);
// If result matched $username and $mypassword, table row must be 1 row
if($count==1){
		session_start();
        $_SESSION['USERNAME'] = $row['USERNAME']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: Home.php"); // Modify to go to the page you would like 
        exit; 
}
else {
echo "<script>alert('Wrong Username or Password.');</script>";
}
?>
<html>
<head>
<meta http-equiv="refresh" content="1;url=login.php">
<body>
</body>
</head>
</html>