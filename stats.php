<?php
session_start();

if (!(isset($_SESSION["user_id"]))) {
    header("Location: login.php");
}
$user_id = $_SESSION["user_id"];
include "config.php";
?>

<?php
if (isset($_POST['template_name'])) {
    $template_name = $_POST['template_name'];
    $sql = 'SELECT * FROM tbl_211_templates t WHERE t.user_id =' . $user_id . ' AND t.template_name = "' . $template_name . '"';
    // echo $sql;
    $result = mysqli_query($connection, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
    } else
        die("DB query failed.");

} else {
    header("Location: templates.php");
}
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
    <script src="js/script.js"></script>
    <link rel="icon" href="images/icon.ico">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="styles.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <script src="https://use.fontawesome.com/68cbe5c16f.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/object.css">

    <!-- <script src="lightSensorControl.js"></script> -->


    <title>Template</title>
</head>

<body class="ms-0 me-0 p-0 bg-2b2b2b templates-body">
    <header class="container p-3 ms-0 me-0 mw-100 bg-2b2b2b fw-300">
        <nav class="navbar navbar-expand p-0 w-100">
            <div class="row p-0">
            <img class="userPic" src=<?php echo '"' . $_SESSION["images"] . '"' ?> alt="User Image"
                data-bs-toggle="modal" data-bs-target="#imageModal" style="border-radius: 100% widht:4%">
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
                        <a class="nav-link" href="battery.php">
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
                        <a class="nav-link active" href="">
                            <i class="fa-solid fa-square-poll-vertical" style="color: #2396f3;"></i>                            <svg class="statsSelected" xmlns="http://www.w3.org/2000/svg" height="0.875em"
                                viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    .statsSelected {
                                        fill: #2196f3
                                    }
                                </style>
                                <path
                                    d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm64 192c17.7 0 32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm64-64c0-17.7 14.3-32 32-32s32 14.3 32 32V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V160zM320 288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V320c0-17.7 14.3-32 32-32z" />
                            </svg>
                            Stats
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="templates.php">
                            <img src="images/Electric-Cache_Project_List_Alt_Icon_1.png" alt="">
                            Template
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <body>
        <main class="container h-100 p-0 mw-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-6 mx-auto">
                    <div class="template_details bg-light p-3 rounded mb-4">
                        <?php
                        $template_id = $row['template_id'];
                        echo ' <h2 class="col template_details">' . $row['template_name'] . '</h2>';
                        echo '       <big class="row">' . $row['start_time'] . ' till ' . $row['end_time'] . ' ' . $row['template_repeat'] . '</big>';
                        echo '    </div>';


                        $sql = "SELECT DISTINCT v.vehicle_number
                        FROM tbl_211_vehicles AS v
                        INNER JOIN tbl_211_templates AS t ON v.template_id = $template_id
                        WHERE t.user_id = $user_id";

                        $result = mysqli_query($connection, $sql);

                        if (!$result) {
                            die("DB query failed.");
                        }

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="list-group-item row">
                          <i class="bi bi-car-front-fill"></i>';
                            echo $row['vehicle_number'];
                            echo '<br>';
                            echo '</div>';
                        }

                        ?>
                    </div>
                    <div class="table" style="position: relative">
                        <div class="table-cell">
                            <div id="main">
                                <div id="screen">
                                    <div id="home">
                                        <div id="radial">
                                            <div id="empty"></div>
                                        </div>
                                        <div id="icon">
                                            <!-- <i class="fa fa-battery-quarter fa-3x"></i> -->
                                            <img
                                                src="http://i1204.photobucket.com/albums/bb409/david_barukcic/battery_icon_zpst5bk33aq.png" />
                                        </div>
                                        <div id="status">15%</div>
                                        <h1 id="countdown">0</h1>
                                        <div id="mph">mph</div>
                                    </div>
                                    <div id="car">
                                        <img
                                            src="http://i1204.photobucket.com/albums/bb409/david_barukcic/engine_icon_zpsnvg1y3qj.png" />
                                        <h2>ENGINE<br>DIAGNOSTICS</h2>
                                        <h3>DC/DC Converter<br>Failure <span class="small">not solved</span></h3>
                                    </div>

                                    <div id="cardva">
                                        <img
                                            src="http://i1204.photobucket.com/albums/bb409/david_barukcic/temperature_icon_zpssyam3lm5.png" />

                                        <h2>ENGINE<br>TEMPERATURE</h2>
                                        <h3>46<span class="small"> ℃</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>

        <script src="js/objectJS.js"></script>

    </body>

</html>