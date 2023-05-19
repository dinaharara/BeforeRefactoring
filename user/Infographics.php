<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infographics</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg justify-content-around">
            <div class="container">
                <a class="navbar-brand " href="index.php">
                    <img src="../images/logo.png" alt="logo image" width="100">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link home" aria-current="page" href="#"  data-i18n="home">Home</a>
                        </li>
                        <img src="../images/homeline.png" class="homeline" width="70">
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle pages" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"  data-i18n="stories">
                                Stores
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ReadStory.php"  data-i18n="readstory">Read Story</a></li>
                                <li><a class="dropdown-item" href="WriteStory.php"   data-i18n="writestory">Write Story</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle pages" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"  data-i18n="resources">
                                Resources
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Infographics.php" data-i18n="infographics">Infographics</a></li>
                                <li><a class="dropdown-item" href="Articles.php"  data-i18n="articles">Articles</a></li>
                                <li><a class="dropdown-item" href="Events.php"  data-i18n="events">Events</a></li>
                                <li><a class="dropdown-item" href="AnnualReports.php" data-i18n="annualReports">Annual Reports</a></li>
                                <li><a class="dropdown-item" href="Videos.php" data-i18n="videos">Videos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link pages" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
        <img src="../images/ripped-paper-header-1.png" width="100%" class="img">
    </header>
    <main>
        <section class="pagerInfograph">
            <section class="pagerInfographSection">
                <div class="container">
                    <a class="first" href="index.html"  data-i18n="home">Home</a>
                    <span>/</span>
                    <a data-i18n="resources">Resources</a>
                    <span>/</span>
                    <a href="Infographics.html" data-i18n="infographics">Infographics</a>
                    <h1 data-i18n="infographics">Infographics</h1>
                </div>
            </section>
        </section>
        <img src="../images/ripped-paper-header-1.png" width="100%" class="inFoImg">

        <section class="WestBankSett">
            <div class="container">
                <p class="text-center pWest">Palestinian farmers who have been affected by the confiscation of land</p>
                <div class="row RowWest space-between my-5">
                    <div class="col-lg-8">
                        <p class="phWest ms-4 mt-5 mb-3">The exact number of Palestinian farmers who have been affected by the confiscation of land is difficult to determine, but it is estimated to be in the tens of thousands.</p>
                        <p class="phWest ms-4 my-4">The Israeli government has confiscated large amounts of Palestinian land in the occupied territories, including the West Bank and Gaza Strip, for the purpose of building settlements, establishing military zones, constructing a separation wall, and other purposes. This has had a devastating impact on Palestinian farmers, who rely on their land for their livelihoods.
                        </p>
                        <p class="phWest ms-4 my-4">The confiscation of land has resulted in the displacement of Palestinian farmers, as well as the destruction of their homes, water wells, and other infrastructure. It has also made it difficult for farmers to access their land, as Israeli authorities have restricted Palestinian movement in the occupied territories.</p>
                        <div class="mt-5"><a href="https://www.aljazeera.com/features/2021/10/27/settler-attacks-cause-palestinian-farmers-financial-losses"
                            target="_blank" class="btn-DM ms-4">Read More</a></div>
                    </div>
                    <div class="col-lg-4">
                        <img src="../images/palestinian_woman_tools_israeli_soldier_west_bank_2012_afp.jpg"class="imgabout" width="350" height="500" >                               
                    </div>
                </div>
            </div>
        </section>

        <section class="WestBankSett">
            <div class="container">
                <p class="text-center pWest">ISRAELI SETTLEMENTS IN THE WEST BANK</p>
                <div class="row RowWest space-around my-5">
                    <div class="col-lg-4 p-0">
                        <img src="../images/Palestine_Map_(Settlements).jpg"class="imgabout" width="380" >                               
                    </div>
                    <div class="col-lg-8 px-4">
                        <p class="phWest ms-4 mt-5 mb-3">In 2022, the West Bank had about 199 settlements and 220 outposts, and as of 2021, the area of the Israeli settlements was about 201.1 square kilometers, representing 3.6 percent of the total area of the West Bank. According to Israeli classification, 542 square kilometers, or 9.6 percent of the West Bank.”</p>
                        <p class="phWest ms-4 my-4">By building settlements and outposts on what is geographically recognized as Palestinian land, Israel undermines Palestinian sovereignty and preemptively bifurcates any future Palestinian state by limiting its urban development. </p>
                        <p class="phWest ms-4 my-4">The Israeli separation wall that protects the settlements and their network of roads divided the West Bank into three major Palestinian population blocs: the north, which includes Nablus, Jenin, and Tulkarm.</p>
                        <div class="mt-5"><a href="https://drive.google.com/file/d/1UhDvb0cv-dXAkc26Dn4W_AfV9Xqe3Glv/view?usp=sharing" target="_blank" class="btn-DM ms-4">Download Map</a></div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    <footer>
            <img src="../images/ripped-paper-base-2.png" class="w-100">
            <div class="foot1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="../images/logo.png" width="150" class="mb-3"> 
                            <p class="mt-2">PALESTINIAN FARMERS GUIDE <br>
                            Resistance & Defense</p>
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
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>