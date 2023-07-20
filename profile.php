<?php
// Include the database connection file
include 'connect_to_DB.php';

// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
  // Get the user_id from the session
  $user_id = $_SESSION['user_id'];
} else {
  // If the user is not logged in, redirect to the login page
  header("Location: login.php");
  exit();
}

// Prepare the SQL query to fetch user data
$query = "SELECT * FROM tbl_211_users WHERE id = ?";
$connection = connectToDatabase();
$stmt = mysqli_prepare($connection, $query);


// Bind the user_id parameter to the statement
mysqli_stmt_bind_param($stmt, "ss", $user_id);

// Execute the statement
mysqli_stmt_execute($stmt);

// Get the result set
$result = mysqli_stmt_get_result($stmt);

// Check if the query executed successfully
if (!$result) {
  die("DB query failed.");
}

// Fetch the user data from the result set
$row = mysqli_fetch_assoc($result);

// Close the statement
mysqli_stmt_close($stmt);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js"></script>
  <link rel="icon" href="images/icon.ico">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Electric-Cache</title>
</head>


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
  <div class="login-box profile_box">


    <div class="container-fluid div1 profile_nav">
      <header class="container p-3 ms-0 me-0 mw-100 bg-trans fw-300 profile_header">
        <nav class="navbar navbar-expand p-0 w-100 navbar_profile">
          <div class="row p-0">
            <ul class="navbar-nav align-items-end fw-900 fs-30">
              <li class="nav-item">
                <a class="row align-items-end navbar-brand" href="index.php">
                  <div class="col logo94"></div>
                  <h1 class="col display-5 justify-content-end align-bottom p-0 mb-0 text-white">
                    Electric-Cache
                  </h1>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php">
                  <img src="images/Electric-Cache_Project_Home_Icon_1.png" alt="Electric-Cache_Project_Home_Icon_1.png">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="battery.html">
                  <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 512 512">
                    <style>
                      svg {
                        fill: #f5f5f5
                      }
                    </style>
                    <path
                      d="M80 96c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32l96 0c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32h16c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64l16 0zm304 96c0-8.8-7.2-16-16-16s-16 7.2-16 16v32H320c-8.8 0-16 7.2-16 16s7.2 16 16 16h32v32c0 8.8 7.2 16 16 16s16-7.2 16-16V256h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H384V192zM80 240c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16z" />
                  </svg>
                  Battery
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="stats.html">
                  <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 448 512">
                    <style>
                      svg {
                        fill: #f5f5f5
                      }
                    </style>
                    <path
                      d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm64 192c17.7 0 32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm64-64c0-17.7 14.3-32 32-32s32 14.3 32 32V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V160zM320 288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V320c0-17.7 14.3-32 32-32z" />
                  </svg>
                  Stats
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="listPage.html">
                  <img src="images/Electric-Cache_Project_List_Alt_Icon_1.png" alt="">
                  Template
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div main="main_profile">
        <img class="user_pic" src="images/freida-user.jpg" alt="freida" title="freida">
        <div class="profile_detail">
          <?php
          // Access user information from the $row variable
          $username = $row['username'];
          $email = $row['email'];
          $image = $row['images'];

          // Display user information on the page
          echo "<h1>Welcome, $username!</h1>";
          echo "<p>Email: $email</p>";
          echo "<img src=\"$image\" alt=\"$username\">";
          ?>
        </div>
        <div class="profile_details"></div>
        <div class="profile_detail"></div>
        <div class="profile_detail"></div>
      </div>

</body>

</html>