<?php
include 'config.php';
session_start();
?>

<?php
//get data from query string and escape variables for security
$userName = mysqli_real_escape_string($connection, $_POST['username']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$user_id = mysqli_real_escape_string($connection, $_POST['user_id']);
$state_id = mysqli_real_escape_string($connection, $_POST['state']);

// if (empty($_POST["user_type"])) {
//     $user_type = 0;
// } else {
//     $user_type = 1;
// }

$query = "UPDATE tbl_211_users SET username = '$userName' ,email = '$email' WHERE user_id = $user_id";
echo $query;

$result = mysqli_query($connection, $query);

if (!$result) {
    die("DB query failed.");
}
?>


<?php
header("Location:index.php");
//release returned data
mysqli_free_result($result);
//close DB connection
mysqli_close($connection);
?>