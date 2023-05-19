<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
                            <a class="nav-link home" aria-current="page" href="#" data-i18n="home">Home</a>
                        </li>
                        <img src="../images/homeline.png" class="homeline" width="70">
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle pages" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" data-i18n="stories">
                                Stores
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ReadStory.php" data-i18n="readstory">Read Story</a></li>
                                <li><a class="dropdown-item" href="WriteStory.php"  data-i18n="writestory">Write Story</a></li>
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
                                aria-expanded="false" data-i18n="donation">
                                Donation
                            </a>
                        </li>
                        <select class="p-1 mt-2 classSelect">
                            <option value="en" data-i18n="english" selected>English</option>
                            <option value="ar" data-i18n="arabic">Arabic</option>
                          </select>
                    </ul>
                </div>
                <div class="mx-2">
                <a class="nav-link btn-comment" aria-current="" href="commentL.php" data-i18n="comment">Leave Comment</a>
                </div>
            </div>
        </nav>
        <img src="../images/ripped-paper-header-1.png" width="100%" class="img">
    </header>
    <main>
        <section class="pagerInfograph">
            <section class="pagerInfographSection">
                <div class="container">
                    <a class="first" href="index.html" data-i18n="home">Home</a>
                    <span>/</span>
                    <a>Resources</a>
                    <span>/</span>
                    <a href="AnnualReports.html" data-i18n="annualReports">Annual Reports</a>
                    <h1 data-i18n="annualReports">Annual Reports</h1>
                </div>
            </section>
        </section>
        <img src="../images/ripped-paper-header-1.png" width="100%" class="inFoImg">
        
        <section class="time-line-website">
            <div class="container">                      
                <div class="row text-center justify-content-center mb-5">
                    <div class="col-xl-6 col-lg-8">
                        <h2 class="font-weight-bold" data-i18n="webEvolution">A Website Evolution</h2>
                        <p class="text-muted"  data-i18n="p1">We’re very proud of the path we’ve taken. Explore the history that made us the website we are today.</p>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col">
                        <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1" data-i18n="t1">2/2023</p>
                                    <p class="h6 text-muted mb-0 mb-lg-0" data-i18n="t1a">The idea</p>
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1" data-i18n="t2">3/2023</p>
                                    <p class="h6 text-muted mb-0 mb-lg-0" data-i18n="t2a">The plan</p>
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1" data-i18n="t3">4/2023</p>
                                    <p class="h6 text-muted mb-0 mb-lg-0" data-i18n="t3a">Implementation</p>
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1" data-i18n="t4">5/2023</p>
                                    <p class="h6 text-muted mb-0 mb-lg-0" data-i18n="t4a">The test</p>
                                </div>
                            </div>
                            <div class="timeline-step mb-0">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1" data-i18n="t5">6/2023</p>
                                    <p class="h6 text-muted mb-0 mb-lg-0"  data-i18n="t5a">Website launch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="Achievements">
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h3 class="text-center" data-i18n="achievements">Achievements</h3>
                        <ul class="timeline">
                            <li>
                                <a target="_blank" href=""  data-i18n="p2">Increased Crop Yields Despite Limited Space</a>
                                <p data-i18n="p2a">In this year, the video section has benefited over 500 Palestinian farmers, resulting in an increase in crop yields of up to 20%. This increase in productivity has been especially significant given the limited space available for farming in many parts of Palestine.</p>
                            </li>
                            <li>
                                <a href="#" data-i18n="p3">Advocacy Efforts Lead to Policy Changes</a>
                                <p data-i18n="p3a">Thanks to the organization's advocacy, Palestinian farmers are now able to access government subsidies for agricultural inputs, and restrictions on the use of certain pesticides have been lifted, allowing farmers to improve the quality of their crops.
                                </p>
                            </li>
                            <li>
                                <a href="#" data-i18n="p4">Empowering Palestinian Farmers Through Knowledge-Sharing</a>
                                <p data-i18n="p4a">The Palestinian Farmers Against the Settlements has expanded its community outreach programs over this year, providing educational opportunities to farmers across Palestine. Through workshops, seminars, and mentorship programs, the organization has empowered farmers with the knowledge and skills needed to improve their agricultural practices and increase their yields.</p>
                            </li>
                            <li>
                                <a href="#" data-i18n="p5">Collaborating for Greater Impact</a>
                                <p data-i18n="p5a">The Palestinian Farmers Against the Settlements has formed several key partnerships over this year, allowing it to access additional resources and expand its reach. Through partnerships with local NGOs and international organizations, the organization has been able to provide farmers with access to additional funding, equipment, and training.</p>
                            </li>
                        </ul>
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
                            <p class="mt-2"  data-i18n="p6">PALESTINIAN FARMERS GUIDE <br  data-i18n="p7">
                            Resistance & Defense</p>
                        </div>
                        <div class="col-lg-3 pe-2">
                            <h4 class="mb-4 text-start h4"  data-i18n="p8">About</h4>
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#"  data-i18n="p9">General Information</a>
                            </div>                                                       
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#"   data-i18n="p10">Who We Are</a>
                            </div>
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#"  data-i18n="p11">Latest Resources</a>
                            </div>
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#"  data-i18n="comment">Leave Comments</a>
                            </div>   
                        </div>
                        <div class="col-lg-3  ps-3">
                            <h4 class="mb-4 text-start h4"  data-i18n="p12">Links</h4>
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#" data-i18n="p13">Our Accounts</a>
                            </div>                                                       
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#" data-i18n="p14">New Campaign</a>
                            </div>
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#" data-i18n="p15">Upcoming Events</a>
                            </div>
                            <div class="my-3 iconfooter">
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="#" data-i18n="p16">Volunteers</a>
                            </div>            
                        </div>                   
                        <div class="col-lg-2 ">
                            <h4 class="final-h4 "  data-i18n="p17">Contact</h4>
                    
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
                <p  data-i18n="copyri">
                    © Copyright 2023 by pfg.com
                </p>
                <p data-i18n="term">
                    Terms & Conditions / Privacy Policy / Sitemap
                </p>
            </div>
    </footer>
    
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>