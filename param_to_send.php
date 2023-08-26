<?php

session_start();

if (!(isset($_SESSION["user_id"]))) {
    header("Location: login.php");
}
$user_id = $_SESSION["user_id"];
include "config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['template_name'])) {
    $tempalte_name = $connection->real_escape_string($_POST['template_name']);
    $batteryLevel = (int) $_POST['battery_level'];
    $startTime = $connection->real_escape_string($_POST['start_time']);
    $endTime = $connection->real_escape_string($_POST['end_time']);
    $repeat = $connection->real_escape_string($_POST['template_repeat']);

    $sql = "INSERT INTO tbl_211_templates (template_name, battery_level, start_time, end_time, template_repeat, user_id) VALUES ('$tempalte_name', $batteryLevel, '$startTime', '$endTime', '$repeat', '$user_id')";

    if ($connection->query($sql)) {
        // Get the template ID of the last inserted template
        $templateId = $connection->insert_id;

        if (isset($_POST['days'])) {
            foreach ($_POST['days'] as $day) {
                $connection->query("INSERT INTO tbl_211_template_days (template_id, day_id) VALUES ($templateId, $day)");
            }
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['template_id']) && isset($_POST['action_type']) && $_POST['action_type'] == 'delete') {
    $template_id = $_POST['template_id'];
    $sql = "DELETE FROM tbl_211_templates WHERE template_id = '$template_id' ";
    echo $sql;
}



// header("Location: templates.php"); // Redirect back to your previous page (replace with your actual page)

?>