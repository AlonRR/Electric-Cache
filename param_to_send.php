<!DOCTYPE html>
<html>
<head>
    <title>get parameters PHP</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve the values of userName, password, and clue from the query string
    $userName = $_GET["name"];
    $battery_percent = $_GET["battery-percent"];
    $start_time = $_GET["start-time"];
    $end_time = $_GET["end-time"];
    $frequency = $_GET["frequency"];
    $vehicles = $_GET["vehicles[]"];

    // Display the received values
    echo "Hello: " . $userName . "<br>";
    echo "battery-percent: " . $battery_percent ."<br>";
    echo "start-time: " . $start_time ."<br>";
    echo "end-time: " . $end_time ."<br>";
    echo "frequency: " . $frequency. "<br>";
    // echo "vehicles[]: " . $vehicles ."<br>";
    
}
?>


</body>
</html>
