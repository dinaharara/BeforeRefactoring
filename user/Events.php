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
                            <a class="nav-link home" aria-current="page" href="index.php">Home</a>
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
                    <a href="Events.php">Events</a>
                    <h1>Events</h1>
                </div>
            </section>
        </section>
        <img src="../images/ripped-paper-header-1.png" width="100%" class="inFoImg">


        <section class="event_main">
            <div class="container">
            <?php
                      $sql = "SELECT * FROM `events`";
                      $result = mysqli_query($con,$sql);
                      if($result){
                        while($row=mysqli_fetch_assoc($result)){
                          $id=$row['id'];
                          $name=$row['Name'];
                          $description=$row['Description'];
                          $link=$row['link'];
                          $speaker=$row['speaker'];
                          $starttime=$row['starttime'];
                          $endtime=$row['endtime'];
                          $date=$row['date'];

                          echo'
                          <div class="row g-0 align-items-center event-block no-gutters margin-40px-bottom">
                          <div class="col-lg-5 col-sm-12 pb-0">
                              <div class="position-relative">
                              <iframe src="'.$link.'" width="470" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                  <div class="events-date">
                                      <div class="font-size28">'.$date.'</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-7 col-sm-12">
                              <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                                  <h5
                                      class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500">
                                      <a class="text-theme-color">Sustainable agriculture practices</a></h5>
                                  <ul class="event-time ">
                                      <li><i class="far fa-clock"></i> '.$starttime.' AM - '.$endtime.' PM</li>
                                      <li><i class="fas fa-user margin-5px-right"></i> Speaker :'.$speaker.'</li>
                                  </ul>
                                  <p class="mb-0">'.$description.'</p>
                                  
                              </div>
                           </div>
                       </div>      
                          ';
                      }
                    }
                      ?>
            </div>
        </section>
        <img src="../images/ripped-paper-header-1.png" width="100%" class="inFoImg">
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
    <script src="js/script.js"></script>
</body>
</html>


<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3624.671145130462!2d46.681757!3d24.703829!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1684178596907!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->