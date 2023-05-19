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
                            <a class="nav-link home" aria-current="page" href="#">Home</a>
                        </li>
                        <img src="../images/homeline.png" class="homeline" width="70">
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle pages" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Stores
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ReadStory.php">Read Story</a></li>
                                <li><a class="dropdown-item" href="WriteStory.php">Write Story</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle pages" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                    <a class="first" href="index.php">Home</a>
                    <span>/</span>
                    <a>Resources</a>
                    <span>/</span>
                    <a href="Videos.php">Videos</a>
                    <h1>Videos</h1>
                </div>
            </section>
        </section>
        <img src="../images/ripped-paper-header-1.png" width="100%" class="inFoImg">

        <section>
            <section class="boxing_Art pt-5 mb-5">
                <div class="container">
                <?php
                $sql = "SELECT * FROM `videos`";
                $result = mysqli_query($con,$sql);
                if($result){
                    $count = 0;
                    while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $name=$row['Name'];
                    $description=$row['Description'];
                    $link=$row['link'];
                    if ($count % 2 == 0) {
                        echo '<div class="row justify-content-between">';
                    }
                    echo '
                        <div class="col me-2" style="max-width: 560px;">
                        <div class="card mb-3" style="max-width: 560px;">
                            <iframe src="https://www.youtube.com/embed/'.$link.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <div class="card-body">
                            <h5 class="card-title1">'.$name.'</h5>
                            <p class="card-text">'.$description.'</p>
                            <a href="video1.html" class="btn btn-vi">Leave Comment</a>
                            </div>
                        </div>
                        </div>
                    ';
                    $count++;
                    if ($count % 2 == 0) {
                        echo '</div>';
                    }
                    }
                    if ($count % 2 != 0) {
                    echo '</div>';
                    }
                }
                ?>
                </div>
            </section>
        </section>


                   
               

       
        <!-- <div class="row justify-content-between">
            <div class="col me-2">
                <div class="card mb-3">
                    <iframe  src="https://www.youtube.com/embed/7898F6ous7A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title1">Efficient Irrigation Methods</h5>
                        <p class="card-text">This video will showcase different irrigation methods that Palestinian farmers can use to maximize the use of available water resources.</p>
                        <a href="video1.html" class="btn btn-vi ">Review</a>
                    </div>
                </div>
            </div>
            <div class="col me-2">
                <div class="card mb-3">
                    <iframe  src="https://www.youtube.com/embed/aRxymTETvXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title">Organic Farming</h5>
                        <p class="card-text">This video provide tips on how to adopt organic farming practices, such as composting, crop rotation, and using natural pesticides.</p>
                        <a href="#" class="btn btn-vi ">Review</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col me-2">
                <div class="card mb-3">
                    <iframe src="https://www.youtube.com/embed/zSCR2K81IRo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title">Improved Crop Production</h5>
                        <p class="card-text">This video will provide tips on how Palestinian farmers can maximize crop production.</p>
                        <a href="#" class="btn btn-vi ">Review</a>
                    </div>
                </div>
            </div>
            <div class="col me-2">
                <div class="card mb-3">
                    <iframe src="https://www.youtube.com/embed/lUdNMsVDIZ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title">Climate Smart Agriculture</h5>
                        <p class="card-text">This video will explore how Palestinian farmers can adopt climate-smart agricultural practices that help them cope with climate change.</p>
                        <a href="#" class="btn btn-vi ">Review</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col me-2">
                <div class="card mb-3">
                    <iframe src="https://www.youtube.com/embed/ADuEgp8-IYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title">Value-added Products</h5>
                        <p class="card-text">This video will showcase value-added products that Palestinian farmers can create from their produce, such as jams, pickles, and preserves. </p>
                        <a href="#" class="btn btn-vi ">Review</a>
                    </div>
                </div>
            </div>
            <div class="col me-2">
                <div class="card mb-3">
                    <iframe src="https://www.youtube.com/embed/ShoD-FOlMUY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title">Agricultural Marketing</h5>
                        <p class="card-text">This video will provide an introduction to marketing for Palestinian farmers.</p>
                        <a href="#" class="btn btn-vi ">Review</a>
                    </div>
                </div>
            </div>
        </div> -->
       
          
          
        


         
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
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>