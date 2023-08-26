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


    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
          ['2004/05',  165,      938,         522,             998,           450,      614.6],
          ['2005/06',  135,      1120,        599,             1268,          288,      682],
          ['2006/07',  157,      1167,        587,             807,           397,      623],
          ['2007/08',  139,      1110,        615,             968,           215,      609.4],
          ['2008/09',  136,      691,         629,             1026,          366,      569.6]
        ]); -->

        <!-- var options = {
          title : 'Monthly Coffee Production by Country',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script> -->

</head>



<title>Template</title>
</head>

<body class="ms-0 me-0 p-0 bg-3b3b3b templates-body">
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
                            <!-- <i class="fa-solid fa-square-poll-vertical" style="color: #2396f3;"></i> -->
                            <!-- <img src="images/Electric-Cache_Project_Poll_Icon_1.png" alt=""> -->
                            <svg class="statsSelected" xmlns="http://www.w3.org/2000/svg" height="0.875em"
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
    <main class="container h-100 p-0 mw-100 bg-4a4a4a">
        <div class="row row-col-md-2 mw-100 mh-100">
            <div class="col-md-4 mw-100 mh-100 p-1 bg-777777-40 templates-names">
                <div class="row ">
                    <!--Div that will hold the pie chart-->
                    <div id="chart_div" style="width: 900px; height: 500px;"></div>                
                </div>
                <div class="row gap-1">
                    <div class="row bg-3b3b3b">
                        <p class="col">Night busses</p>
                        <div class="col form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="night_busses"
                                title="toggle-switch" checked>
                        </div>
                        <small class="row">22:00 till 6:00 next day Daily</small>
                    </div>
                    <div class="row bg-3b3b3b">
                        <p class="col">Saturday Off</p>
                        <div class="col form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="saturday_off"
                                title="toggle-switch" checked>
                        </div>
                        <small class="row">00:00 till 1 hour before Sunset Weekly Sat</small>
                    </div>
                    <div class="row bg-3b3b3b">
                        <p class="col">Friday Off</p>
                        <div class="col form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="friday_off"
                                title="toggle-switch">
                        </div>
                        <small class="row">Sunset till day end Weekly Fri</small>
                    </div>
                    <div class="row bg-3b3b3b">
                        <p class="col">Reserve buses</p>
                        <div class="col form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="reserve_busses"
                                title="toggle-switch">
                        </div>
                        <small class="row">6:00 till 7:00 Daily</small>
                    </div>
                    <div class="row bg-3b3b3b">
                        <p class="col">Parked Mon Wed</p>
                        <div class="col form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="parked_mon_wed"
                                title="toggle-switch" checked>
                        </div>
                        <small class="row">9:00 till 17:00 Weekly Mon, Wed</small>
                    </div>
                </div>
            </div>
            <div class="col-md ms-0 me-0 mw-100 mh-100 p-0 bg-3b3b3b">
                <div class="row row-col-2 mw-100 mh-100 bg-2b2b2b mt-1 ms-1 me-1">
                    <div class="col form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="reserve_busses_secondery"
                            title="toggle-switch" checked>
                    </div>
                    <button class="btn col" id="edit-btn">
                        <i class="bi bi-pencil-fill"></i>
                        Edit
                    </button>
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
                            <div class="list-group-item row">
                                <i class="bi bi-car-front-fill"></i>
                                442-334-120
                                <div class="list-group-item row">
                                    <i class="bi bi-bus-front-fill"></i>
                                    393-233-687
                                </div>
                                <div class="row list-group-item">
                                    <i class="bi bi-bus-front-fill"></i>
                                    384-474-292
                                </div>
                                <div class="row list-group-item">
                                    <i class="bi bi-car-front-fill"></i>
                                    393-579-002
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </main>
</body>

</html>