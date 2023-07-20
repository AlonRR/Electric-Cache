<?php
include 'connect_to_DB.php';
session_start();
// Example usage: Assume you have received the user's submitted form data
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    createSession($username, $password);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="images/icon.ico">
  <title>Electric-Cache</title>
</head>

<body>
  <div class="login-box">
    <h2>Login</h2>
    <form method="POST" action="login.php">
      <div class="user-box">
        <input type="text" id="username" name="username" required>
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" id="password" name="password" required>
        <label>Password</label>
      </div>
      <input type="submit" id="submit" value="Submit">
    </form>
  </div>


</body>

</html>