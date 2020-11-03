<?php 
error_reporting(0);
session_start(); 
if($_SESSION['logged']){ 
    header("Location: home.php"); 
    exit; 
} ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

</head>

<body> 
  
  <div class="bg" style="background-image: url('img/3.jpg'); height: 100vh; background-repeat: no-repeat; background-size: cover; background-position: center left;">
    
      <div class="container">
        <div class="d-flex justify-content-center" style="margin: 0; padding: 120px;">
          <div class="card shadow-xl" style="width: 350px;">
              
              <div class="card-header" style="height: 100px;">
                <center>
                  <h1> MedK<i class="fas fa-md fa-pills"></i>sk </h1>
                    </center>
                      </div>
                  
                  <div class="card-body">
                    <div class="d-flex justify-content-center" style="margin: 0px;">
                      
                      <form class="users" action="Logincheck.php" method="POST" >  
                        <div class="input-group form-group" style="width: 300px;">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span></div>
                            <input type="text" name="USERNAME" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group form-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span></div>
                            <input type="password" name="PASSWORD" class="form-control" placeholder="Password">
                        </div>
                        <div class="row align-items-center remember">&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="checkbox">&nbsp;Remember Me </div>
                        <div class="form-group">
                          <input type="submit" value="Login" class="btn float-right btn-outline-info" style="width: 80px;">
                        </div>
                      </form>

                    </div>
                  </div>
                <div class="card-footer">
                  <div class="d-flex justify-content-center">
                    <a href="#" style="text-decoration: none;"> Forget your password? </a>
                  </div>
                </div>
            </div>
          </div> 
        </div>
      </div>
