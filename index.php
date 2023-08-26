<?php
session_start();

if (!(isset($_SESSION["user_id"]))) {
    header("Location: login.php");
}
$user_id = $_SESSION["user_id"];
$img = $_SESSION["images"];
$name = $_SESSION["username"];
$user_type = $_SESSION["type_id"];
$email = $_SESSION["email"];
include "config.php";

?>


<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">

    <link rel="icon" href="images/icon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Electric-Cache</title>
</head>

<body class="body1">
    <div class="container-fluid div1">
        <header class="container p-3 ms-0 me-0 mw-100 bg-2b2b2b fw-300" style="display: flex">
            <nav class="navbar navbar-expand p-0 w-100">`
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
                            <a class="nav-link active" href="index.php">
                                <!-- Added class: text-white -->
                                <img src="images/Electric-Cache_Project_Home_Icon_1_selected.png"
                                    alt="Electric-Cache_Project_Home_Icon_1.png">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <!-- Added class: text-white -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
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
                            <a class="nav-link text-white" href="stats.php">
                                <!-- Added class: text-white -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 448 512">
                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
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
                            <a class="nav-link active text-white" aria-current="page" href="templates.php">
                                <img src="images/Electric-Cache_Project_List_Alt_Icon_1.png" alt="">
                                Template
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content" style="background-color: #3b3b3b">
                        <div class="modal-header">
                            <!-- <img src="<?php echo $_SESSION["images"] ?>" alt="User Image" class="img-fluid userImage userPic"> -->
                            <button class="btn btn-secondary" id="edit-btn" style="color: white">
                                <i class="bi bi-pencil-fill"></i>
                                Edit
                            </button>
                            <a href="logout.php">
                                <button type="link" class="btn btn-primary" id="logout-btn">Logout</button>
                            </a>
                        </div>
                        <div class="modal-body">
                            <div id="viewMode">
                                <h2>
                                    Username:
                                </h2>
                                <h3 id="view-username" style="color: #c5c5c5">
                                    <?php $sql = "SELECT username FROM tbl_211_users WHERE user_id = $user_id";
                                    $result = mysqli_query($connection, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result); // Fetch the associative array                                
                                        echo $row['username'];
                                    } else {
                                        echo "There is no such email";
                                    }
                                    ?>
                                </h3>
                                <h2>
                                    Email:
                                </h2>
                                <h3 id="view-username" style="color: #c5c5c5">
                                    <?php $sql = "SELECT email FROM tbl_211_users WHERE user_id = $user_id";
                                    $result = mysqli_query($connection, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result); // Fetch the associative array                                
                                        echo $row['email'];
                                    } else {
                                        echo "There is no such email";
                                    }
                                    ?>
                                </h3>
                            </div>
                            <!-- <div id="editMode"> -->
                            <form id="editMode" style="display: none;" method="post" action="insertData.php">
                                <div class="mb-3">
                                    <label>Username:</label>
                                    <input type="text" name='username' class="form-control" id="edit-username" value="<?php $sql = "SELECT username FROM tbl_211_users WHERE user_id = $user_id";
                                    $result = mysqli_query($connection, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result); // Fetch the associative array                                
                                        echo $row['username'];
                                    } else {
                                        echo "There is no such email";
                                    } ?>
                                    ">
                                </div>
                                <div class="mb-3">
                                    <label>Email:</label>
                                    <input type="text" name='email' class="form-control" id="edit-email" value="<?php $sql = "SELECT email FROM tbl_211_users WHERE user_id = $user_id";
                                    $result = mysqli_query($connection, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result); // Fetch the associative array                                
                                        echo $row['email'];
                                    } else {
                                        echo "There is no such email";
                                    }
                                    ?>">
                                </div>
                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                <button type="submit" class="btn btn-primary" id="save-btn">Save</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <img class="userPic" src=<?php echo '"' . $_SESSION["images"] . '"' ?> alt="User Image"
                data-bs-toggle="modal" data-bs-target="#imageModal" style="border-radius: 100% widht:4%">
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
                        <p>The "recommended button" will initiate<br>
                            a prediction program that will
                            set the time and percentage for<br>
                            charging and discharging.<br>
                            This will help you save as much money and emissions as possible."
                        </p>
                    </div>

                    <!-- <aside class="buttomSection">

                        <div class="mapInnerWrap div1">
                            <div class="actualMap div1">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d79632.9857825174!2d34.797043743966626!3d32.07934504295723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1selectric%20charging%20stations%20israel!5e0!3m2!1sen!2sil!4v1683738554978!5m2!1sen!2sil"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <h2 class="favorites">Favorites</h2>
                            <div id="locationsContainer"></div>

                    
                        </div>

                    </aside> -->

                    <div class="map div1">
                        <div class="mapInnerWrap div1">
                            <div class="actualMap div1">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d79632.9857825174!2d34.797043743966626!3d32.07934504295723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1selectric%20charging%20stations%20israel!5e0!3m2!1sen!2sil!4v1683738554978!5m2!1sen!2sil"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <h2>Favorites</h2>
                            <div id="locationsContainer"></div>
                            <!-- <div class="TLVbusDepot div1">&nbsp;

                                <h3>&nbsp;TLV bus depot</h3>
                                <h4>&nbsp;&nbsp;23 HaDag, Tel-Aviv, Israel
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-sign-turn-slight-right-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435Zm1.385 6.547.8 1.386a.25.25 0 0 0 .451-.039l1.06-2.882a.25.25 0 0 0-.192-.333l-3.026-.523a.25.25 0 0 0-.26.371l.667 1.154-.621.373A2.5 2.5 0 0 0 6 8.632V11h1V8.632a1.5 1.5 0 0 1 .728-1.286l.607-.364Z" />
                                    </svg>
                                </h4> -->

                            <!-- </div> -->
                        </div>
                    </div>
                </section>
                <section class="middleSection">
                    <div class="gridBattery div1">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                        </div>
                        <h2>&nbsp;Grid Battery</h2><br>
                        <input type="Range" class="form-range" name="battery_percentage">
                    </div>

                    <div class="prediction div1">
                        <h2>Prediction</h2>
                        <div class="predictionLeft div1">

                            <h6>Approx. 74</h6>
                            <h6>Gram CO2 today</h6>
                        </div>
                        <div class="predicionRight div1">
                            <div class="container div1">
                                <div class="div1">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="savings div1">
                        <h2>Savings</h2>
                        <canvas id="myChart2" width="900" height="400"></canvas>
                    </div>
                    <div class="templatesMobile div1">
                        <div class="templates div1">
                            <form class="d-flex" role="search" value="TemplateName">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                            </form>

                            <?php
                            $sql = 'SELECT t.template_name, t.battery_level, t.start_time, t.end_time, t.template_repeat
                            FROM tbl_211_templates t WHERE t.user_id = "' . $user_id . '"';
                            $result = mysqli_query($connection, $sql);
                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                            } else
                                die("DB query failed.");

                            do {
                                echo '<div class="template d-flex">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"></label></div>';
                                echo '<div class=templateInfo>';
                                echo $row['template_name'];
                                echo "<br>";
                                echo $row['start_time'];
                                echo "-";
                                echo $row['end_time'];
                                echo "<br>";
                                echo $row['template_repeat'];
                                echo '</div></div>';
                            }while ($row = $result->fetch_assoc());
                            ?>

                        </div>
                </section>

                <section class="rightSection">
                    <div class="howMuchCO2 div1">
                        <h5>&nbsp;How much CO2 is emmited?</h5>
                        <h6>According to the SMMT New Car Report 2017, UK cars:</h6>
                        <ul>
                            <li>Emmited 68.5 MtCO2e (Metric tons of carbon dioxide equivalent)" during 2016 - that's
                                the
                                same amount</li>
                            <li>The average new car amits 120.1g/km of CO2</li>
                            <li>CO2 emmisions from cars has dropped by 8.9% between 2000 and 2015</li>
                        
                        </ul>

                    </div>
                    <div class="templates div1">
                        <form class="d-flex" role="search" value="TemplateName">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                        </form>

                        <?php
                        $sql = "SELECT t.template_name, t.battery_level, t.start_time, t.end_time, t.template_repeat
                        FROM tbl_211_templates t
                        WHERE t.user_id =" . $user_id;
                        ?>

                        <?php
                        $result = mysqli_query($connection, $sql);
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                        } else
                            die("DB query failed.");

                        do {
                            echo '<div class="template d-flex">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label></div>';
                            echo '<div class=templateInfo>';
                            echo $row['template_name'];
                            echo "<br>";
                            echo $row['start_time'];
                            echo "-";
                            echo $row['end_time'];
                            echo "<br>";
                            echo $row['template_repeat'];
                            echo '</div></div>';
                        } while ($row = $result->fetch_assoc());
                        ?>

                    </div>
                    <button class="customize"> <img src="images/Electric-Cache_Project_Create_Icon_1.png" alt="template"
                            width="12" height="12">
                        Customize</button>
        </div>
        </section>

        </main>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->
        <script type="module" src="js/script.js" defer></script>

</body>

</html>