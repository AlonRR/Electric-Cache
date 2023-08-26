<?php
session_start();

if (!(isset($_SESSION["user_id"]))) {
    header("Location: login.php");
}
$user_id = $_SESSION["user_id"];
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" href="#" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Nunito+Sans:wght@200&family=Rubik&display=swap"
        rel="stylesheet">
    <link rel="icon" href="images/icon.ico">
    <link rel="stylesheet" href="css/style.css">
    <title>Electric-Cache</title>
</head>

<body class="body1">
    <div class="container-fluid div1">
        <header class="container p-3 ms-0 me-0 mw-100 bg-2b2b2b fw-300">
            <nav class="navbar navbar-expand p-0 w-100">
                <img class="userPic" src=<?php echo '"' . $_SESSION["images"] . '"' ?> alt="User Image"
                    data-bs-toggle="modal" data-bs-target="#imageModal" style="border-radius: 100% widht:4%">
                <div class="row p-0">
                    <ul class="navbar-nav align-items-end fw-300 fs-30">
                        <li class="nav-item">
                            <a class="row align-items-end navbar-brand" href="index.php">
                                <div class="col logo94"></div>
                                <h1 class="col display-5 justify-content-end align-bottom p-0 mb-0 text-white">
                                    Electric-Cache
                                </h1>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="index.php"> <!-- Added class: text-white -->
                                <img src="images/Electric-Cache_Project_Home_Icon_1.png"
                                    alt="Electric-Cache_Project_Home_Icon_1.png">
                                <!-- <i class="bi bi-house-fill"></i> -->
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"> <!-- Added class: text-white -->
                                <svg class="batterySelected" xmlns="http://www.w3.org/2000/svg" height="0.875em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        .batterySelected {
                                            fill: #2196f3
                                        }
                                    </style>
                                    <path
                                        d="M80 96c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32l96 0c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32h16c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64l16 0zm304 96c0-8.8-7.2-16-16-16s-16 7.2-16 16v32H320c-8.8 0-16 7.2-16 16s7.2 16 16 16h32v32c0 8.8 7.2 16 16 16s16-7.2 16-16V256h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H384V192zM80 240c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16z" />
                                </svg>
                                Battery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="stats.php"> <!-- Added class: text-white -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="0.875em"
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
                            <a class="nav-link text-white" aria-current="page" href="templates.php">
                                <!-- Added class: text-white -->
                                <img src="images/Electric-Cache_Project_List_Alt_Icon_1.png" alt="">
                                <!-- <i class="bi bi-table"></i> -->
                                Template
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="row div1">

            <main class="col-lg-12 main1">

                <section class="leftSection">
                    <div class="setRecommended div1">
                        <div class="form-check form-switch setSwitch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                        </div>
                        <h2>&nbsp;Set Recommended</h2>

                    </div>

                    <aside class="buttomSection">

                        <div class="mapWrap">
                            <div class="row ps-4 bg-535353 row-gap-3">
                                <div class="display-6 form-label">Time</div>
                                <div class="row ps-0">
                                    <label class="form-label col" for="battery-percent">Set grid battery
                                        level:</label>
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
                                    <input class="col form-control" type="time" name="end-time" id="end-time"
                                        value="17:00">
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

                    </aside>

                    <div class="map">
                        <div class="mapWrap">
                            <div class="row ps-4 bg-535353 row-gap-3">
                                <div class="display-6 row ps-2">Time</div>
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
                                    <input class="col form-control" type="time" name="end-time" id="end-time"
                                        value="17:00">
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
                    </div>
                </section>
                <section class="middleSection">

                    <div class="prediction div1">
                        <h2>Money</h2>
                        <div class="predicionRight div1">
                            <h6> A precalculated three-day savings:</h6>

                            <!-- <div class="container div1"> -->
                            <div class="div1">
                                <canvas id="myChart"></canvas>

                                <!-- </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="savings div1">
                        <h2>Emmisions</h2>
                        <canvas id="myChart2" width="900" height="400"></canvas>
                </section>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Wz0tgW8h9KvhTV8j1HfSwrI+U2BMQ57uIK2vWlu3XCdHH5+soXYV8sBKN7/lfnNM"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</body>

</html>