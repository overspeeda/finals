<?php include('function.php') ?>

<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<h1>Register</h1>

<form method="post" action="register.php">

    <?php include('errors.php'); ?>

    <label>Email</label>
    <input type="text" name="email"></input>

    <label>Username</label>
    <input type="text" name="username"></input>

    <label>Password</label>
    <input type="password" name="password_1"></input>

    <label>Confirm Password</label>
    <input type="password" name="password_2"></input>

    <button type="submit" name="reg_user">register</button>

    <p>already a member? <a href="login.php">Sign In</a></p>

</form>

</body>

</html>