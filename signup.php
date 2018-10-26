<?php
require 'db.php';
session_start();

if(isset($_POST['name']) && isset($_POST['password']) ){
$name = $_POST['name'];
$password = $_POST['password'];

$sql ='INSERT INTO `login` (`username`, `password`) VALUES (:name, SHA1(:password))';
$statment=$conn->prepare($sql);

if($statment->execute([':name' => $name, ':password' => $password])){
$message ='data inserted successfully';
header("location:login.php");
}

}

?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Mazin</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="script.js/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
  <body>
 <div class="container">
    

<div class="panel panel-default">
<div class="panel-heading "><h3 style="text-align:center ">Sign Up To Student System</h3>
</div>

<div class="card">
  <div class="card-body">
  <div class="card-header">
  </div>


<div class="panel-body">
<p class="text-monospace text-danger"></p>
<form method="post">
<div class="form-group text-uppercase">
<label for="name">enter Username</label>
<input type="text" name="name" id="name" class="form-control" required>
</div>
<form method="post">
<div class="form-group text-uppercase">
<label for="name">enter Password</label>
<input type="password" name="password" id="password" class="form-control" required>
</div>
<div class="form-group">
<button type="submit"  class="btn btn-outline-warning btn pull-right text-uppercase">signup</button></div>

</form>
</div>
</div>

 
 </div>
</div>

 </div>
   </body>
</html>










