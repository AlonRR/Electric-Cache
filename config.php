<?php
$host = "148.66.138.145";
$username = "dbusrShnkr23";
$password = "studDBpwWeb2!";
$database = "dbShnkr23stud2";

$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>