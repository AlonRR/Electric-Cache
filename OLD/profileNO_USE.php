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
                        <a class="nav-link" href="battery.html">
                            <img src="images/Electric-Cache_Project_Battery_Charging_Full_Icon_1.png"
                                alt="Electric-Cache_Project_Battery_Charging_Full_Icon_1.png"
                                title="Electric-Cache_Project_Battery_Charging_Full_Icon_1.png">
                            Battery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stats.html">
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
                    <input class="search-bar col-7" placeholder="Template name">
                    <button class="col btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg>
                        <small>
                            New Template
                        </small>
                    </button>
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
                <form action="php/param_to_send.php" class="row row-col-2 mw-100 mh-100 mt-1 ms-1 me-1">
                    <div class="row row-col-2 ms-0 me-0 mw-100 mh-100 bg-2b2b2b">
                        <button class="btn col ms-auto" type="submit" value="cancel">
                            <i class="bi bi-x-circle-fill"></i>
                            Cancel
                        </button>
                        <button class="btn col" type="submit" value="save">
                            <i class="bi bi-car-front-fill"></i>
                            Save
                        </button>
                    </div>
                    <div class="col-xl bg-4a4a4a m-1">
                        <div class="row p-2 bg-4a4a4a">
                            <label class="form-label display-6 p-0">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Template name here..."
                                required>
                        </div>
                        <div class="row bg-4a4a4a row-gap-3">
                            <div class="display-6 form-label">Time</div>
                            <div class="row ps-0">
                                <label class="form-label col" for="battery-percent">Set grid battery level:</label>
                                <input class="col form-control" type="number" name="battery-percent"
                                    id="battery-percent" min="0" max="100" placeholder="Set percentage" required>
                            </div>
                            <div class="row ps-0">
                                <label class="form-label col" for="start-time">Start</label>
                                <input class="col form-control" type="time" name="start-time" id="start-time" required>
                            </div>
                            <div class="row ps-0">
                                <label class="form-label col" for="end-time">End</label>
                                <input class="col form-control" type="time" name="end-time" id="end-time" required>
                            </div>
                            <div class="row ps-0">
                                <label class="form-label col" for="frequency">Repeat:</label>
                                <select class="col form-select ms-4" name="frequency" id="frequency" required>
                                    <option selected value="">Choose</option>
                                    <option value="daily">Daily</option>
                                    <option value="weekly">Weekly</option>
                                    <option value="monthly">Monthly</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="btn-group col p-0 bg-606060" role="group"
                                    aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btn-sun">
                                    <label class="btn btn-outline-primary" for="btn-sun">Sun</label>
                                    <input type="checkbox" class="btn-check" id="btn-mon">
                                    <label class="btn btn-outline-primary" for="btn-mon">Mon</label>
                                    <input type="checkbox" class="btn-check" id="btn-tue">
                                    <label class="btn btn-outline-primary" for="btn-tue">Tue</label>
                                    <input type="checkbox" class="btn-check" id="btn-wed">
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
                        <div class="row display-6 p-2">
                            Vehicles
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="vehicles[]" type="checkbox" id="442-334-120"
                                value="442-334-120">
                            <i class="bi bi-car-front-fill"></i>
                            <label class="form-check-label" for="442-334-120">442-334-120</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="vehicles[]" type="checkbox" id="393-233-687"
                                value="393-233-687">
                            <i class="bi bi-bus-front-fill"></i>
                            <label class="form-check-label" for="393-233-687">393-233-687</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="vehicles[]" type="checkbox" id="384-474-292"
                                value="384-474-292">
                            <i class="bi bi-bus-front-fill"></i>
                            <label class="form-check-label" for="384-474-292">384-474-292</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="vehicles[]" type="checkbox" id="393-579-002"
                                value="393-579-002">
                            <i class="bi bi-car-front-fill"></i>
                            <label class="form-check-label" for="393-579-002">393-579-002</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="vehicles[]" type="checkbox" id="203-384-558"
                                value="203-384-558">
                            <i class="bi bi-car-front-fill"></i>
                            <label class="form-check-label" for="203-384-558">203-384-558</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="vehicles[]" type="checkbox" id="273-575-696"
                                value="273-575-696">
                            <i class="bi bi-bus-front-fill"></i>
                            <label class="form-check-label" for="273-575-696">273-575-696</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="vehicles[]" type="checkbox" id="273-686-844"
                                value="273-686-844">
                            <i class="bi bi-bus-front-fill"></i>
                            <label class="form-check-label" for="273-686-844">273-686-844</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="vehicles[]" type="checkbox" id="283-555-383"
                                value="283-555-383">
                            <i class="bi bi-bus-front-fill"></i>
                            <label class="form-check-label" for="283-555-383">283-555-383</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="vehicles[]" type="checkbox" id="455-393-992"
                                value="455-393-992">
                            <i class="bi bi-bus-front-fill"></i>
                            <label class="form-check-label" for="455-393-992">455-393-992</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="vehicles[]" type="checkbox" id="238-494-655"
                                value="238-494-655">
                            <i class="bi bi-bus-front-fill"></i>
                            <label class="form-check-label" for="238-494-655">238-494-655</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>