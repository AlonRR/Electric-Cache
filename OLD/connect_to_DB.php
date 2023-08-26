<?php
$host = "148.66.138.145";
$username = "dbusrShnkr23";
$password = "studDBpwWeb2!";
$database = "dbShnkr23stud2";

$connection = mysqli_connect($host, $username, $password, $database);


// function connectToDatabase()
// {
//     $host = "148.66.138.145";
//     $username = "dbusrShnkr23";
//     $password = "studDBpwWeb2!";
//     $database = "dbShnkr23stud2";

//     $connection = mysqli_connect($host, $username, $password, $database);
//     if (!$connection) {
//         die("Connection failed: " . mysqli_connect_error());
//     }
//     return $connection;
// }

// Check the connection
// if (!$connection) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Function to validate user credentials and create a session
function createSession($username, $password)
{
    $connection = connectToDatabase();

    // Prepare the SQL query
    $query = "SELECT * FROM tbl_211_users WHERE username = ? AND password = ?";

    // Use prepared statements to prevent SQL injection
    if ($stmt = mysqli_prepare($connection, $query)) {
        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);

        // Execute the query
        mysqli_stmt_execute($stmt);

        // Store the result
        mysqli_stmt_store_result($stmt);

        // Check if the user was found in the database
        if (mysqli_stmt_num_rows($stmt) == 1) {
            // Bind the result variables
            mysqli_stmt_bind_result($stmt, $user_id, $username, $email, $password, $image, $type_id);

            // Fetch the results
            mysqli_stmt_fetch($stmt);

            // Store user information in the session variables
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['image'] = $image;
            $_SESSION['type_id'] = $type_id;

            // Close the statement
            mysqli_stmt_close($stmt);

            // Close the connection
            mysqli_close($connection);

            // Redirect the user to a logged-in page (change this to your desired page)
            header("Location: index.php");
            exit();
        } else {
            // Close the statement
            mysqli_stmt_close($stmt);

            // Close the connection
            mysqli_close($connection);

            // Redirect the user to a login error page (change this to your desired page)
            header("Location: login_error.php");
            exit();
        }
    } else {
        die("Error: " . mysqli_error($connection));
    }


}

?>