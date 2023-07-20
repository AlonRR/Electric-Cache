<?php
$servername = "148.66.138.145";
$username = "dbusrShnkr23";
$password = "studDBpwWeb2!";
$dbname = "dbShnkr23stud2";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the 'username' and 'password' keys exist in $_POST
if (isset($_POST['username']) && isset($_POST['password'])) {
  // Retrieve the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Prepare the SQL statement to check the user's credentials
  $stmt = $conn->prepare("SELECT * FROM tbl_211_users WHERE username = ? AND password = ?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if a matching user was found
  if ($result->num_rows == 1) {
    // Successful login
    session_start();
    $_SESSION['username'] = $username;
    header("Location: index.php"); // Redirect to a welcome page
  } 
  else {
    // Invalid credentials
    echo "Invalid username or password. Please try again.";
  }

  $stmt->close();
}

$conn->close();
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
        <form method ="POST" action ="login.php">
          <div class="user-box">
            <input type="text" id="username" name="username" required>
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" id="password" name="password" required>
            <label>Password</label>
          </div>
          <input type="submit" id = "submit" value="Submit">
        </form>
      </div> 


</body>
</html>

