<?php
session_start();

if (!(isset($_SESSION["user_id"]))) {
    header("Location: login.php");
}
$user_id = $_SESSION["user_id"];
$user_type = $_SESSION["type_id"];
include "config.php";
?>

<?php
$sql = "SELECT t.template_name, t.battery_level, t.start_time, t.end_time, t.template_repeat
                        FROM tbl_211_templates t
                        WHERE t.user_id =" . $user_id;
// echo $sql;

$result = mysqli_query($connection, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
} else
    die("DB query failed.");
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="icon" href="images/icon.ico">
    <title>Template</title>
</head>

<body class="ms-0 me-0 p-0 bg-3b3b3b templates-body">
    <header class="container p-3 ms-0 me-0 mw-100 bg-2b2b2b fw-300">
        <nav class="navbar navbar-expand p-0 w-100">
            <div class="row p-0">
                <img src="<?php echo $_SESSION["images"] ?>" alt="user" class="userPic">
                <ul class="navbar-nav align-items-end fw-300 fs-30">
                    <li class="nav-item">
                        <a class="row align-items-end navbar-brand" href="index.php">
                            <div class="col logo94"></div>
                            <h1 class="col display-5 justify-content-end align-bottom p-0 mb-0">
                                Electric-Cache
                            </h1>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <img src="images/Electric-Cache_Project_Home_Icon_1.png"
                                alt="Electric-Cache_Project_Home_Icon_1.png">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.875em"
                                viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
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
                        <a class="nav-link" href="stats.php">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
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
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="images/Electric-Cache_Project_List_Alt_Icon_1_selected.png" alt="">
                            Template
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container h-100 p-0 mw-100 bg-4a4a4a">
        <div class="row row-col-md-2 mw-100 mh-100">
            <div class="col-md-4 mw-100 mh-100 p-1 bg-777777-40 templates-names">
                <div class="row ">
                    <form action="stats.php" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control col-7" placeholder="Template name"
                                name="template_name">
                            <div class="input-group-append">
                                <input type="submit" class="btn btn-outline-primary" value="Search">
                                &nbsp;
                            </div>
                        </div>
                    </form>
                    <!-- <input class="search-bar col-7" placeholder="Template name">
                    <a class="col btn btn-primary" href="editTemplate.php" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg>
                        <small>
                            New Template
                        </small>
                    </a> -->
                </div>

                <div class="row gap-1">
                    <?php
                    do {

                        echo '<div class="row bg-3b3b3b align-items-center">';
                        echo '    <div class="col-6">';
                        echo '        <p>' . $row['template_name'] . '</p>';
                        echo '         <small>' . $row['start_time'] . ' till ' . $row['end_time'] . ' ' . $row['template_repeat'] . '</small>';
                        echo '    </div>';
                        echo '    <div class="col-3 form-check form-switch">';
                        echo '        <input class="form-check-input" type="checkbox" role="switch" id="night_busses" title="toggle-switch" checked>';
                        echo '    </div>';
                        echo '    <div class="col-3 text-end">';
                        echo '      <form method = "post" action="stats.php">';
                        echo '          <button type="submit" style="color: #ffffff" class="btn text-left p-0">More</button>';
                        echo '          <input type="hidden" name="template_name" value="' . $row['template_name'] . '">';

                        echo '       </form>';
                        echo '     </div>';
                        echo '</div>';
                    } while ($row = $result->fetch_assoc());
                    ?>
                </div>
                <div class="workers">
                    <?php if ($user_type == 2) {
                        echo '<i class="bi bi-clipboard-data"></i>';
                        
                        echo 'Employees';
                    }
                    ?>

                    <div class="row gap-1">
                        <div class="col-6"></div>
                        <?php
                        if ($user_type == 2) {
                            $query = "SELECT
                        workers.username AS worker_name,
                        t.template_name,
                        t.battery_level,
                        t.start_time,
                        t.end_time,
                        t.template_repeat
                    FROM
                        tbl_211_worker_employer we
                    JOIN
                        tbl_211_users employers ON we.employer_id = employers.user_id AND employers.type_id = 2
                    JOIN
                        tbl_211_users workers ON we.worker_id = workers.user_id
                    LEFT JOIN
                        tbl_211_templates t ON workers.user_id = t.user_id
                    WHERE
                        employers.user_id = $user_id";

                            $result = mysqli_query($connection, $query);
                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                            } else
                                die("DB query failed.");
                            do {

                                echo '<div class="row bg-3b3b3b align-items-center">';
                                echo '    <div class="col-6">';
                                echo '        <p>' . $row['worker_name'] . '</p>';
                                echo '<p>' . $row['template_name'] . '</p>';
                                echo $row['start_time'] . ' till ' . $row['end_time'] . ' ' . $row['template_repeat'];
                                echo '    </div>';
                                echo '    <div class="col-3 form-check form-switch">';
                                echo '        <input class="form-check-input" type="checkbox" role="switch" id="night_busses" title="toggle-switch" checked>';
                                echo '    </div>';
                                echo '    <div class="col-3 text-end">';
                                echo '      <form method = "post" action="stats.php">';
                                echo '          <button type="submit" style="color: #ffffff" class="btn text-left p-0">More</button>';
                                echo '          <input type="hidden" name="template_name" value="' . $row['template_name'] . '">';
                                echo '       </form>';
                                echo '     </div>';
                                echo '</div>';
                            } while ($row = $result->fetch_assoc());
                        }

                        ?>
                    </div>

                </div>
            </div>
            <div class="col-md ms-0 me-0 mw-100 mh-100 p-0 bg-3b3b3b">
                <div class="row row-col-2 mw-100 mh-100 bg-2b2b2b mt-1 ms-1 me-1">
                    <a href="editTemplate.php" class="btn col" id="edit-btn">
                        <i class="bi bi-pencil-fill"></i> Edit
                    </a>
                </div>
                <fieldset class="row mw-100 mh-100" disabled>
                    <div class="col-xl p-1">
                        <div class="row p-2 bg-4a4a4a">
                            <div class="form-label display-6 p-0">Name</div>
                            <input class="form-control" type="text" name="name" placeholder="Template name here..."
                                value="Parked Mon Wed">
                        </div>
                        <div class="row bg-4a4a4a row-gap-3">
                            <div class="display-6 form-label">Time</div>
                            <div class="row ps-0">
                                <label class="form-label col" for="battery-percent">Set grid battery level:</label>
                                <input class="col form-control" type="number" name="battery-percent"
                                    id="battery-percent" min="0" max="100" placeholder="Set percentage" value="50">
                            </div>
                            <div class="row ps-0">
                                <label class="form-label col" for="start-time">Start:</label>
                                <input class="col form-control" type="time" name="start-time" id="start-time"
                                    value="09:00">
                            </div>
                            <div class="row ps-0">
                                <label class="form-label col" for="end-time">End:</label>
                                <input class="col form-control" type="time" name="end-time" id="end-time" value="17:00">
                            </div>
                            <div class="row ps-0">
                                <label class="form-label col" for="frequency">Repeat:</label>
                                <select class="col form-select ms-4" name="frequency" id="frequency">
                                    <option value="daily">Daily</option>
                                    <option value="weekly" selected>Weekly</option>
                                    <option value="monthly">Monthly</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="btn-group col p-0 bg-606060" role="group"
                                    aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btn-sun">
                                    <label class="btn btn-outline-primary" for="btn-sun">Sun</label>
                                    <input type="checkbox" class="btn-check" id="btn-mon" checked>
                                    <label class="btn btn-outline-primary" for="btn-mon">Mon</label>
                                    <input type="checkbox" class="btn-check" id="btn-tue">
                                    <label class="btn btn-outline-primary" for="btn-tue">Tue</label>
                                    <input type="checkbox" class="btn-check" id="btn-wed" checked>
                                    <label class="btn btn-outline-primary" for="btn-wed">Wed</label>
                                    <input type="checkbox" class="btn-check" id="btn-thu">
                                    <label class="btn btn-outline-primary" for="btn-thu">Thu</label>
                                    <input type="checkbox" class="btn-check" id="btn-fri">
                                    <label class="btn btn-outline-primary" for="btn-fri">Fri</label>
                                    <input type="checkbox" class="btn-check" id="btn-sat">
                                    <label class="btn btn-outline-primary" for="btn-sat">Sat</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl m-1 bg-4a4a4a">
                        <div class="row display-6 vehicles p-2">
                            Vehicles
                        </div>
                        <div class="col">
                            <?php
                            $sql = "SELECT v.vehicle_number
                            FROM tbl_211_vehicles AS v
                            INNER JOIN tbl_211_templates AS t ON v.template_id = t.template_id
                            WHERE t.user_id = $user_id";

                            $result = mysqli_query($connection, $sql);
                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                            } else
                                die("DB query failed.");

                            while ($row = $result->fetch_assoc()) {
                                echo '
                                <div class="list-group-item row">
                                <i class="bi bi-car-front-fill"></i>';
                                echo $row['vehicle_number'];
                                echo '<br';
                            }
                            ?>

                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </main>
</body>

</html>