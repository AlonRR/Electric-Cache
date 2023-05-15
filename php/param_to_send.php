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
    $vehicles = $_GET["vehicles"] ?? '000-000-000';

    // Display the received values
    echo "Hello: " . $userName . "<br>";
    echo "Battery-percent: " . $battery_percent ."<br>";
    echo "Start-time: " . $start_time ."<br>";
    echo "End-time: " . $end_time ."<br>";
    echo "Frequency: " . $frequency. "<br>";
    echo "Vehicles: ";
    foreach ($vehicles as $item): ?>
        <li><?php echo $item; ?></li>
    <?php endforeach; 

}
?>

</body>
</html>
