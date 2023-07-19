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
        <form method = "POST" action = "login.php">
          <div class="user-box">
            <input type="text" name="username" required>
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required>
            <label>Password</label>
          </div>
          <input type="submit" id = "submit" value="Submit">
        </form>
      </div> 

      <?php
      $servername = "localhost";
      $username = "your_username";
      $password = "your_password";
      $dbname = "your_database";
      
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      // Retrieve the username and password from the form
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      // Prepare the SQL statement to check the user's credentials
      $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();
      $result = $stmt->get_result();
      
      // Check if a matching user was found
      if ($result->num_rows == 1) {
        // Successful login
        session_start();
        $_SESSION['username'] = $username;
        header("Location: welcome.php"); // Redirect to a welcome page
      } else {
        // Invalid credentials
        echo "Invalid username or password. Please try again.";
      }
      
      $stmt->close();
      $conn->close();
      ?>
      

</body>
</html>

