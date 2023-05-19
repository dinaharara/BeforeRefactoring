<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Stories</title>
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">

    <style>
        .header2 {


            position: absolute;
            top: 190px;
            left: 130px;
            color: white;



        }

        hr {
            border: 1.5px solid black;
        }



        .convert {
            width: 500px;
            height: fit-content;
            background-color: #255946;
            color: white;
            padding: 10px;
            margin-left: 400px;
            margin-top: 0px;
            border: 2px solid #255946;
            outline: none;
            font-size: larger;
            border-radius: 15px;
            display: inline-block;
            text-align: center;

        }

        .theuser {
            width: 80px;
            margin-left: 0px;
            margin-right: 5px;
        }

        .convert:hover {
            text-decoration: none;
            color: white;
        }

        .description {
            position: absolute;
            top: 250px;
            left: 130px;
            color: white;
        }

        .header22 {
            width: 100%;
            height: 500px;
            margin: 0px auto;
            background-image: url('images/theback.jpeg');
            background-size: cover;
            background-position-x: center;
            background-position-y: -150px;
            background-repeat: no-repeat;
            margin-bottom: 0px;
            /* text-align: center; */
            padding-bottom: 0px;
            position: relative;

        }

        .same {
            margin-left: 300px;
            margin-top: 70px;
            margin-bottom: 110px;
            width: 800px;
        }
    </style>
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
                                <li><a class="dropdown-item" href="thePinnedStories.php">Pinned Stories </a></li>
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
    <div class="header22">
        <h2 class="header2">Most Recent Stories Added By Farmers</h2>
        <small class="description">here you can see the most recent stories, you can be updated with what farmers <br>come through, and the farmers can be joind to have a united opinion</small>

    </div>
    <a class="convert" href="form.php">Add Your Story</a>



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
    $query = "SELECT * FROM `story`;";

    // FETCHING DATA FROM DATABASE
    $result = $conn->query($query);
    $imagess = array(
        'images/farmeeeeer.png',
        'images\first.png',
        'images\fotor_2023-5-6_18_42_49.png',
        'images\fotor_2023-5-6_18_45_32.png',
        'images\fotor_2023-5-6_18_45_46.png',
        'images\fotor_2023-5-6_18_46_7.png',
        'images\fotor_2023-5-6_19_0_8.jpg',
        'images\fotor_2023-5-6_19_13_18.png',
        'images\fotor_2023-5-6_19_13_36.png',
        'images\fotor_2023-5-6_19_14_50.png'



    );
    $i = 0;
    if ($result->num_rows > 0) {
        // OUTPUT DATA OF EACH ROW
        while ($row = $result->fetch_assoc()) {
            echo "<div class='same'>" .

                '<img class="theuser" src="' . $imagess[$i] . '">' . "<br>" . "<br>" .
                "Name : " . $row["name"] . "<hr>" . "Story : " . "<br>"  . $row["theStory"] . "<hr>" . "<small>" . "Added in : " . $row["theDate"] .  "</small>" .  "</div>";
            $i++;
            if ($i == 10)
                $i = 0;
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
    </body>

</html>