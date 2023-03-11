<?php 
include('function.php');
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<h1>Login</h1>

<form method="post" action="login.php">

    <?php include('errors.php'); ?>

    <label>Username</label>
    <input type="text" name="username"></input>

    <label>Password</label>
    <input type="password" name="password"></input>

    <button type="submit" name="login_user">Login</button>

    <p>Not yet a member? <a href="register.php">SignUp</a></p>

</form>

</body>

</html>