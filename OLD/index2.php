<?php
session_start();

if (!(isset($_SESSION["user_id"]))) {
    header("Location: login.php");
}
$user_id = $_SESSION["user_id"];
$img = $_SESSION["images"];
$name = $_SESSION["username"];
$user_type = $_SESSION["type_id"];

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
        <header class="container p-3 ms-0 me-0 mw-100 bg-2b2b2b fw-300">


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

                    <aside class="buttomSection">

                        <div class="mapInnerWrap div1">
                            <div class="actualMap div1">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d79632.9857825174!2d34.797043743966626!3d32.07934504295723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1selectric%20charging%20stations%20israel!5e0!3m2!1sen!2sil!4v1683738554978!5m2!1sen!2sil"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <h2 id="favorites">Favorites</h2>
                            <div class="TLVbusDepot div1">&nbsp;

                                <h3>&nbsp;TLV bus depot</h3>
                                <h4>&nbsp;&nbsp;23 HaDag, Tel-Aviv, Israel
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-sign-turn-slight-right-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435Zm1.385 6.547.8 1.386a.25.25 0 0 0 .451-.039l1.06-2.882a.25.25 0 0 0-.192-.333l-3.026-.523a.25.25 0 0 0-.26.371l.667 1.154-.621.373A2.5 2.5 0 0 0 6 8.632V11h1V8.632a1.5 1.5 0 0 1 .728-1.286l.607-.364Z" />
                                    </svg>
                                </h4>

                            </div>
                        </div>

                    </aside>

                    <div class="map div1">
                        <div class="mapInnerWrap div1">
                            <div class="actualMap div1">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d79632.9857825174!2d34.797043743966626!3d32.07934504295723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1selectric%20charging%20stations%20israel!5e0!3m2!1sen!2sil!4v1683738554978!5m2!1sen!2sil"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <h2 class="favorites">Favorites</h2>
                            <div class="TLVbusDepot div1">&nbsp;

                                <h3>&nbsp;TLV bus depot</h3>
                                <h4>&nbsp;&nbsp;23 HaDag, Tel-Aviv, Israel
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-sign-turn-slight-right-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435Zm1.385 6.547.8 1.386a.25.25 0 0 0 .451-.039l1.06-2.882a.25.25 0 0 0-.192-.333l-3.026-.523a.25.25 0 0 0-.26.371l.667 1.154-.621.373A2.5 2.5 0 0 0 6 8.632V11h1V8.632a1.5 1.5 0 0 1 .728-1.286l.607-.364Z" />
                                    </svg>
                                </h4>

                            </div>
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
                            $sql = "SELECT t.template_name, t.battery_level, t.start_time, t.end_time, t.template_repeat
                            FROM tbl_211_templates t
                            WHERE t.user_id =" . $user_id;

                            $result = mysqli_query($connection, $sql);
                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                            } else
                                die("DB query failed.");

                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="template">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"></label></div>';
                                echo $row['template_name'];
                                echo "<br>";
                                echo $row['start_time'];
                                echo "-";
                                echo $row['end_time'];
                                echo "<br>";
                                echo $row['template_repeat'];
                                echo '</div>';
                            }
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
                            <li>Total CO2 emmisions from all vehicles currently on the road has fallen by 4.6%
                                between
                                2000 - 2015</li>
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

                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="template">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"></label></div>';
                            echo $row['template_name'];
                            echo "<br>";
                            echo $row['start_time'];
                            echo "-";
                            echo $row['end_time'];
                            echo "<br>";
                            echo $row['template_repeat'];
                            echo '</div>';
                        }
                        ?>

                    </div>
                    <button class="customize"> <img src="images/Electric-Cache_Project_Create_Icon_1.png" alt="template"
                            width="12" height="12">
                        Customize</button>
        </div>
        </section>

        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/script.js"></script>

</body>

</html>