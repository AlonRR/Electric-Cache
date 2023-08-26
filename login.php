<?php
include 'config.php';

session_start();

if (!empty($_POST["username"])) {
  $query = "SELECT * FROM tbl_211_users WHERE username='"
    . $_POST["username"]
    . "' and password='"
    . $_POST["password"] . "'";

  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result);

  if (is_array($row)) {
    $_SESSION["images"] = $row['images'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["user_id"] = $row['user_id'];
    $_SESSION["type_id"] = $row['type_id'];
    $_SESSION["email"] = $row['email'];

    header('Location: ./index.php');
  } else {
    $message = "Invalid UserName or Password!";
  }
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