<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinned Stories</title>
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">

    <style>
        .main {
            width: 1000px;
            margin-left: 200px;
            margin-top: -20px;
            margin-bottom: 70px;
            text-align: left;
            position: relative;
            font-weight: 600;
            font-size: larger;
        }

        .main::before {

            content: "";
            position: absolute;
            top: 40px;
            left: -50px;
            width: 0;
            height: 0;
            background-color: white;
            margin-top: 0px;
            border-style: solid;
            border-width: 18px;
            border-color: transparent #255946 transparent transparent;

        }

        .theheader1 {


            position: absolute;
            top: 160px;
            left: 130px;



        }


        .description {
            position: absolute;
            top: 240px;
            left: 130px;
            color: white;
        }

        h2 {
            color: white;
            font-weight: bolder;
            margin-top: 20px;
            margin-bottom: 50px;


        }




        hr {
            border: 1.5px solid black;
        }

        .theheader {
            width: 100%;
            height: 500px;
            margin: 0px auto;
            background-image: url('images/theback.jpeg');
            background-size: cover;
            background-position-x: center;
            background-position-y: -150px;
            background-repeat: no-repeat;
            margin-bottom: 40px;
            /* text-align: center; */
            padding-bottom: 0px;
            position: relative;

            /* border-radius: 15px; */
            /* margin-top: 100px; */
            /* display: flex; 
            flex-direction: row;
            align-items: center; */

        }


        .header2 {
            text-align: center;
            background-color: RGB(250 250 250);

            color: #255946;
            width: 770px;
            height: 60px;
            margin: 20px auto;
            padding-top: 10px;
            padding-left: 0px;
            position: sticky;
            top: 0;
            /* box-shadow: 0 0 10px 0 #255946; */

        }
    </style>
</head>

<body>

    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg justify-content-around">
            <div class="container">
                <a class="navbar-brand " href="index.php">
                    <img src="images/logo.png" alt="logo image" width="100">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link home" aria-current="page" href="index.php">Home</a>
                        </li>
                        <img src="images/1.png" class="homeline" width="70">
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle pages" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Stores
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="thePinnedStories.php">Pinned Stories</a></li>
                                <li><a class="dropdown-item" href="updatedStories.php">Updated Stories</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle pages" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Infographics.php">Infographics</a></li>
                                <li><a class="dropdown-item" href="Articles.php">Articles</a></li>
                                <li><a class="dropdown-item" href="Events.php">Events</a></li>
                                <li><a class="dropdown-item" href="AnnualReports.php">Annual Reports</a></li>
                                <li><a class="dropdown-item" href="Videos.php">Videos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link pages" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Donation
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mx-2">
                    <a class="nav-link btn-comment" aria-current="" href="commentL.php">Leave Comment</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="theheader">
        <h2 class="theheader1">Most Popular Stories</h2>
        <small class="description">This page contains most influential stories added by <br>farmers,and the most proplems they suffering from</small>
    </div>


    <?php

    error_reporting(0);
    ?>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "stories";

    // CREATE CONNECTION
    $conn = new mysqli(
        $servername,
        $username,
        $password,
        $databasename
    );

    // GET CONNECTION ERRORS
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL QUERY
    $query = "SELECT * FROM `storiespinned`;";

    // FETCHING DATA FROM DATABASE
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // OUTPUT DATA OF EACH ROW
        while ($row = $result->fetch_assoc()) {
            echo  "<div class='main'>" .

                "<p>" . $row["theStoryPinned"] . '<br>' .
                "</p>" .
                "<br>"
                . "<hr>"
                . " </div>";
        }
    } else {
        echo "<div class='nothing'> nothing added yet</div>";
    }

    $conn->close();


    ?>

    <footer>
        <img src="../../images/ripped-paper-base-2.png" class="w-100">
        <div class="foot1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="images/logo.png" width="150" class="mb-3">
                        <p class="mt-2">PALESTINIAN FARMERS GUIDE <br>
                            Resistance & Defense</p>
                        <div class="social-share mt-4">
                            <a class="fb" href=""><i class="fab fa-facebook me-2"></i></a>
                            <a class="tw" href=""><i class="fab fa-twitter me-2"></i></a>
                            <a class="in" href=""><i class="fab fa-instagram me-2"></i></a>
                            <a class="li" href=""><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 pe-2">
                        <h4 class="mb-4 text-start h4">About</h4>
                        <div class="my-3 iconfooter">
                            <i class="fa-solid fa-chevron-right"></i>
                            <a href="#">General Information</a>
                        </div>
                        <div class="my-3 iconfooter">
                            <i class="fa-solid fa-chevron-right"></i>
                            <a href="#">Who We Are</a>
                        </div>
                        <div class="my-3 iconfooter">
                            <i class="fa-solid fa-chevron-right"></i>
                            <a href="#">Latest Resources</a>
                        </div>
                        <div class="my-3 iconfooter">
                            <i class="fa-solid fa-chevron-right"></i>
                            <a href="#">Leave Comments</a>
                        </div>
                    </div>
                    <div class="col-lg-3  ps-3">
                        <h4 class="mb-4 text-start h4">Links</h4>
                        <div class="my-3 iconfooter">
                            <i class="fa-solid fa-chevron-right"></i>
                            <a href="#">Our Accounts</a>
                        </div>
                        <div class="my-3 iconfooter">
                            <i class="fa-solid fa-chevron-right"></i>
                            <a href="#">New Campaign</a>
                        </div>
                        <div class="my-3 iconfooter">
                            <i class="fa-solid fa-chevron-right"></i>
                            <a href="#">Upcoming Events</a>
                        </div>
                        <div class="my-3 iconfooter">
                            <i class="fa-solid fa-chevron-right"></i>
                            <a href="#">Volunteers</a>
                        </div>
                    </div>
                    <div class="col-lg-2 ">
                        <h4 class="final-h4 ">Contact</h4>

                        <div class="mb-3 mt-4 iconfoot2">
                            <P><i class="fa-solid fa-phone"></i> +972 59000000</P>
                        </div>
                        <hr>
                        <div class="mb-3 mt-3 iconfoot2">
                            <P><i class="fa-regular fa-envelope"></i> pfg@gmail.com</P>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="foot2 d-flex space-between">
            <p>
                © Copyright 2023 by pfg.com
            </p>
            <p>
                Terms & Conditions / Privacy Policy / Sitemap
            </p>
        </div>
    </footer>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/script.js"></script>
</body>