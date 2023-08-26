<?php
session_start();

if (!(isset($_SESSION["user_id"]))) {
    header("Location: login.php");
}
$user_id = $_SESSION["user_id"];
include "config.php";

$sql = "SELECT t.template_name, t.battery_level, t.start_time, t.end_time, t.template_repeat
                        FROM tbl_211_templates t
                        WHERE t.user_id =" . $user_id;


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Nunito+Sans:wght@200&family=Rubik&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">

    <link rel="icon" href="images/icon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Template</title>
</head>

<body class="ms-0 me-0 p-0 bg-3b3b3b templates-body ">
    <header class="container p-3 ms-0 me-0 mw-100 bg-2b2b2b fw-300">
        <nav class="navbar navbar-expand p-0 w-100">
            <div class="row p-0">
                <img src="images/freida-user.jpg" alt="user" class="userPic">
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
                            <img src="images/Electric-Cache_Project_Battery_Charging_Full_Icon_1.png"
                                alt="Electric-Cache_Project_Battery_Charging_Full_Icon_1.png"
                                title="Electric-Cache_Project_Battery_Charging_Full_Icon_1.png">
                            Battery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stats.php">
                            <img src="images/Electric-Cache_Project_Poll_Icon_1.png" alt="">
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
                    <!-- <input class="search-bar col-7" placeholder="Template name">
                    <div class="col btn btn-primary" href="editTemplate.php" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8    8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg>
                        <small>
                            New Template
                        </small>
                    </div> -->
                </div>
                <div class="row gap-1">
                    <?php
                    $query = "SELECT t.template_id, t.template_name, t.battery_level, t.start_time, t.end_time, t.template_repeat
                    FROM tbl_211_templates t
                    WHERE t.user_id =" . $user_id;

                    $result = mysqli_query($connection, $query);
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                    } else
                        die("DB query failed.");
                    while ($row = $result->fetch_assoc()) {
                        $modalId = "deleteModal" . $row['template_id'];

                        // Display template details
                        echo '<div class="row bg-3b3b3b align-items-center">';
                        echo '    <div class="col-6">';
                        echo '        <p>' . $row['template_name'] . '</p>';
                        echo '        <small>' . $row['start_time'] . ' till ' . $row['end_time'] . ' ' . $row['template_repeat'] . '</small>';
                        echo '    </div>';
                        echo '    <div class="col-3 form-check form-switch">';
                        echo '        <input class="form-check-input" type="checkbox" role="switch" id="night_busses" title="toggle-switch" checked>';
                        echo '    </div>';
                        echo '    <div class="col-3 text-end">';
                        echo '        <button type="button" class="btn btn-link text-danger" data-bs-toggle="modal" data-bs-target="#' . $modalId . '"><i class="bi bi-trash"></i></button>';
                        echo '    </div>';
                        echo '</div>';

                        // Modal for deletion confirmation
                        echo '<div class="modal fade" id="' . $modalId . '" tabindex="-1" aria-labelledby="exampleModalLabel' . $row['template_id'] . '" aria-hidden="true">';
                        echo '    <div class="modal-dialog">';
                        echo '        <div class="modal-content">';
                        echo '            <div class="modal-header">';
                        echo '                <h5 class="modal-title" id="exampleModalLabel' . $row['template_id'] . '">Confirm Deletion</h5>';
                        echo '                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                        echo '            </div>';
                        echo '            <div class="modal-body">';
                        echo '                Are you sure you want to delete the template named "' . $row['template_name'] . '"?';
                        echo '            </div>';
                        echo '            <div class="modal-footer">';
                        echo '                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>';
                        echo '                <form action="param_to_send.php" method="POST">'; // Start of the form
                        echo '                    <input type="hidden" name="template_id" value="' . $row['template_id'] . '">';
                        echo '                    <input type="hidden" name="action_type" value="delete">'; // Added this hidden input to identify the action.
                        echo '                    <button type="submit" class="btn btn-danger">Delete</button>';
                        echo '                </form>'; // End of the form
                        echo '            </div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                    }
                    ?>
                    Employees

                    <?php
                    $query = "SELECT
                        users.username AS worker_name,
                        t.template_id,
                        t.template_name,
                        t.template_name,
                        t.battery_level,
                        t.start_time,
                        t.end_time,
                        t.template_repeat
                        FROM
                        tbl_211_worker_employer we
                        INNER JOIN
                        tbl_211_users users ON we.worker_id = users.user_id AND users.type_id = 1
                        LEFT JOIN
                        tbl_211_templates t ON users.user_id = t.user_id
                        WHERE
                        we.employer_id = $user_id";

                    $result = mysqli_query($connection, $query);
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                    } else
                        die("DB query failed.");
                    while ($row = $result->fetch_assoc()) {
                        $modalId = "deleteModal" . $row['template_id'];
                        // Display template details
                        echo '<div class="row bg-3b3b3b align-items-center">';
                        echo '    <div class="col-6">';
                        echo '        <p>' . $row['worker_name'] . '</p>';
                        echo '        <p>' . $row['template_name'] . '</p>';
                        echo '        <small>' . $row['start_time'] . ' till ' . $row['end_time'] . ' ' . $row['template_repeat'] . '</small>';
                        echo '    </div>';
                        echo '    <div class="col-3 form-check form-switch">';
                        echo '        <input class="form-check-input" type="checkbox" role="switch" id="night_busses" title="toggle-switch" checked>';
                        echo '    </div>';
                        echo '    <div class="col-3 text-end">';
                        echo '        <button type="button" class="btn btn-link text-danger" data-bs-toggle="modal" data-bs-target="#' . $modalId . '"><i class="bi bi-trash"></i></button>';
                        echo '    </div>';
                        echo '</div>';

                        // Modal for deletion confirmation
                        echo '<div class="modal fade" id="' . $modalId . '" tabindex="-1" aria-labelledby="exampleModalLabel' . $row['template_id'] . '" aria-hidden="true">';
                        echo '    <div class="modal-dialog">';
                        echo '        <div class="modal-content">';
                        echo '            <div class="modal-header">';
                        echo '                <h5 class="modal-title" id="exampleModalLabel' . $row['template_id'] . '">Confirm Deletion</h5>';
                        echo '                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                        echo '            </div>';
                        echo '            <div class="modal-body">';
                        echo '                Are you sure you want to delete the template named "' . $row['template_name'] . '"?';
                        echo '            </div>';
                        echo '            <div class="modal-footer">';
                        echo '                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>';
                        echo '                <form action="param_to_send.php" method="POST">'; // Start of the form
                        echo '                    <input type="hidden" name="template_id" value="' . $row['template_id'] . '">';
                        echo '                    <input type="hidden" name="action_type" value="delete">'; // Added this hidden input to identify the action.
                        echo '                    <button type="submit" class="btn btn-danger">Delete</button>';
                        echo '                </form>'; // End of the form
                        echo '            </div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                    }

                    ?>
                    <!-- <div class="col-3 text-end">
                            <form method="post" action="stats.php">
                                <button type="submit" style="color: #ffffff" class="btn text-left p-0">More</button>
                                <input type="hidden" name="template_name" value="' . $row['template_name'] . '">
                            </form>
                        </div> -->

                </div>
            </div>
            <div class="col-md ms-0 me-0 mw-100 mh-100 p-0 bg-3b3b3b">
                <form action="param_to_send.php" method="POST">
                    <div class="row row-col-2 mw-100 mh-100 mt-1 ms-1 me-1">
                        <div class="row row-col-2 ms-0 me-0 mw-100 mh-100 bg-2b2b2b">
                            <button class="btn col ms-auto" type="submit" value="cancel">
                                <a href=" templates.php" style="text-decoration: none; color: inherit;">
                                    <i class="bi bi-x-circle-fill"></i>
                                    Cancel
                                </a>
                            </button>
                            <button class="btn col" type="submit" value="save">
                                <i class="bi bi-car-front-fill"></i>
                                Save
                            </button>
                        </div>
                        <div class="col-xl bg-4a4a4a m-1">
                            <div class="row p-2 bg-4a4a4a">
                                <label class="form-label display-6 p-0">Name</label>
                                <input class="form-control" type="text" name="template_name"
                                    placeholder="Template name here..." required>
                            </div>
                            <div class="row bg-4a4a4a row-gap-3">
                                <div class="display-6 form-label">Time</div>
                                <div class="row ps-0">
                                    <label class="form-label col" for="battery_level">Set grid battery
                                        level:</label>
                                    <input class="col form-control" type="number" name="battery_level"
                                        id="battery-percent" min="0" max="100" placeholder="Set percentage" required>
                                </div>
                                <div class="row ps-0">
                                    <label class="form-label col" for="start_time">Start</label>
                                    <input class="col form-control" type="time" name="start_time" id="start-time"
                                        required>
                                </div>
                                <div class="row ps-0">
                                    <label class="form-label col" for="end_time">End</label>
                                    <input class="col form-control" type="time" name="end_time" id="end-time" required>
                                </div>
                                <div class="row ps-0">
                                    <label class="form-label col" for="template_repeat">Repeat:</label>
                                    <select class="col form-select ms-4" name="template_repeat" id="template_repeat"
                                        required>
                                        <option selected value="">Choose</option>
                                        <option value="daily">Daily</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="monthly">Monthly</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="btn-group col p-0 bg-606060" role="group"
                                        aria-label="Basic checkbox toggle button group">
                                        <input type="checkbox" class="btn-check" name="days[]" value="1" id="btn-sun">
                                        <label class="btn btn-outline-primary" for="btn-sun">Sun</label>
                                        <input type="checkbox" class="btn-check" name="days[]" value="2" id="btn-mon">
                                        <label class="btn btn-outline-primary" for="btn-mon">Mon</label>
                                        <input type="checkbox" class="btn-check" name="days[]" value="3" id="btn-tue">
                                        <label class="btn btn-outline-primary" for="btn-tue">Tue</label>
                                        <input type="checkbox" class="btn-check" name="days[]" value="4" id="btn-wed">
                                        <label class="btn btn-outline-primary" for="btn-wed">Wed</label>
                                        <input type="checkbox" class="btn-check" name="days[]" value="5" id="btn-thu">
                                        <label class="btn btn-outline-primary" for="btn-thu">Thu</label>
                                        <input type="checkbox" class="btn-check" name="days[]" value="6" id="btn-fri">
                                        <label class="btn btn-outline-primary" for="btn-fri">Fri</label>
                                        <input type="checkbox" class="btn-check" name="days[]" value="7" id="btn-sat">
                                        <label class="btn btn-outline-primary" for="btn-sat">Sat</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>

                <div class="col-xl m-1 bg-4a4a4a">
                    <!-- <div class="row display-6 p-2">
                            Vehicles
                        </div> -->
                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#vehiclesModal">
                        <i class="bi bi-pencil-fill"></i>
                    </button>
                    Vehicles
                    <div class="modal fade" id="vehiclesModal" tabindex="-1" aria-labelledby="vehiclesModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="vehiclesModalLabel">Manage Vehicles</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="vehiclesForm" action="insertDataVehicle.php" method="post">
                                        <div class="mb-3">
                                            <label for="newVehicle" class="form-label">Add New Vehicle</label>
                                            <input type="number" class="form-control" id="newVehicle" name="newVehicle"
                                                placeholder="Vehicle Number">
                                            <label for="template_name" class="form-label">Template Name</label>
                                            <input type="text" class="form-control" id="template_name"
                                                name="template_name" placeholder="Enter Template Name">

                                        </div>
                                        <?php
                                        $sql = "SELECT v.vehicle_number
                                        FROM tbl_211_vehicles AS v
                                        INNER JOIN tbl_211_templates AS t ON v.template_id = t.template_id
                                        WHERE t.user_id = $user_id";


                                        $result = mysqli_query($connection, $sql);
                                        if ($result) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<div class="form-check">';
                                                echo '    <input class="form-check-input" name="vehicles[]" type="checkbox" id="' . $row['vehicle_number'] . '" value="' . $row['vehicle_number'] . '">';
                                                echo '    <i class="bi bi-car-front-fill"></i>';
                                                echo '    <label class="form-check-label" for="' . $row['vehicle_number'] . '">' . $row['vehicle_number'] . '</label>';
                                                echo '</div>';
                                            }
                                        } else {
                                            die("DB query failed.");
                                        }
                                        ?>
                                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" form="vehiclesForm" name="action" value="add"
                                        class="btn btn-success">Add</button>
                                    <button type="submit" form="vehiclesForm" name="action" value="delete"
                                        class="btn btn-danger">Delete Checked</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col">
                            <?php
                            $sql = "SELECT v.vehicle_number
                        FROM tbl_211_vehicles AS v
                        INNER JOIN tbl_211_templates AS t ON v.template_id = t.template_id
                        WHERE t.user_id = $user_id";

                            $result = mysqli_query($connection, $sql);
                            if ($result) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                <div class="list-group-item row">
                                <i class="bi bi-car-front-fill"></i>';
                                    echo $row['vehicle_number'];
                                    echo '<br';
                                }
                            } else {
                                die("DB query failed.");
                            }
                            ?>
                        </div>


                    </div>
                </div>

                </form>
            </div>
        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/templateScript.js"></script>

</html>