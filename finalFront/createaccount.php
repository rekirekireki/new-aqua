<?php
include_once("connection.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>AquaFlants - Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="createaccount.css">
  </head>
  <body>
    <div class="container">
      <h1>Create Account</h1>
      <form action="file.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="First Name">First Name:</label>
          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name" required>
        </div>
        <div class="form-group">
          <label for="Last Name">Last Name:</label>
          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name" required>
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
        </div>
        <div class="form-group">
          <label for="username">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
        </div>
        <button type="submit" class="btn btn-primary">Sign-Up</button>
        <a href="loginpage.php" class="btn btn-secondary">Back to Log In</a>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
