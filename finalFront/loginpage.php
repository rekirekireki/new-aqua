<?php
include_once("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AquaFlants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="loginpage.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">AquaFlants</h1>
        <form class="form-login" action="checklogin.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Log In</button>
                <a href="createaccount.php" class="btn btn-secondary">Create an Account</a>
            </div>
        </form>
    </div>
</body>
</html>
