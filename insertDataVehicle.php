<?php

include 'config.php';
session_start();
$user_id = $_POST['user_id'];

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'add':
            if (isset($_POST['newVehicle']) && isset($_POST['template_name'])) {
                $newVehicle = mysqli_real_escape_string($connection, $_POST['newVehicle']);
                $template_name = mysqli_real_escape_string($connection, $_POST['template_name']);

                $sql = "INSERT INTO tbl_211_vehicles (vehicle_number, template_id)
                        VALUES (
                            $newVehicle, 
                            (SELECT template_id FROM tbl_211_templates WHERE template_name = '$template_name')
                        )";

                if (!mysqli_query($connection, $sql)) {
                    die("Query failed: " . mysqli_error($connection));
                }
            }
            break;

        case 'delete':
            if (isset($_POST['vehicles'])) {
                $vehiclesToDelete = implode(',', $_POST['vehicles']); // Converts the array to comma-separated string
                $sql = "DELETE FROM tbl_211_vehicles WHERE vehicle_number IN ($vehiclesToDelete)";
                mysqli_query($connection, $sql);
            }
    }
}

header("Location: templates.php"); // Redirect back to your previous page (replace with your actual page)
?>