<?php

session_start();

if (!(isset($_SESSION["user_id"]))) {
    header("Location: login.php");
}
$user_id = $_SESSION["user_id"];
include "config.php";

$searchQuery = "";
if (isset($_POST['template_name'])) {
    $searchQuery = $_POST['template_name'];

    // Make sure to escape any special characters to prevent SQL injection
    $safeSearchQuery = $connection->real_escape_string($searchQuery);
    $sql = "SELECT * FROM tbl_211_templates WHERE template_name  = '$searchQuery'";
    $result = $connection->query($sql);

    // while ($row = $result->fetch_assoc()) {
    //     echo '    <div class="row bg-3b3b3b">';
    //     echo '        <p class="col">' . $row['template_name'] . '</p>';
    //     echo '        <div class="col form-check form-switch">';
    //     echo '            <input class="form-check-input" type="checkbox" role="switch" id="night_busses" title="toggle-switch" checked>';
    //     echo '        </div>';
    //     echo '        <small class="row">' . $row['start_time'] . ' till ' . $row['end_time'] . ' ' . $row['template_repeat'] . '</small>';
    //     echo '    </div>';
    // }
}

if (!$result) {
    die("DB query failed.");
}
header("Location: stats2.php")
    ?>