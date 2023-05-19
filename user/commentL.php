<?php
include '../connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $comment=$_POST['comment'];

  $sql="insert into `comment`(name,comment)
  values('$name','$comment')";
  $result = mysqli_query($con,$sql);
  if($result)
  header('location:commentL.php');
  else
  die(mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
      .form .bt{
    color: #fff;
    background-color: #f7c35f;
    padding: 19.5px 39.5px;
    font-size: 18px;
    font-weight: 600;
    border-radius: 15px;
    border:0;
  }
  .form .bt:hover{
    background: #017d3f;
  }
  
</style>
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
                            <a class="nav-link pages" href="Donation.html" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Donation
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mx-2 mb-5">
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
                    <h1>Leave Comment</h1>
                </div>
            </section>
        </section>
        <img src="../images/ripped-paper-header-1.png" width="100%" class="inFoImg">

        <section class="startMain">
            <div class="container1">
                <div class="inner pt-3">
                    <h3 class="m-4">
                        <svg width="40" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path fill-rule="evenodd" clip-rule="evenodd" fill="#F9EBB2" d="M50,12H4c-1.105,0-2,0.895-2,2v30c0,1.105,0.895,2,2,2h8 c1.105,0,2,0.895,2,2c0,0,0,11,0,12c0,1.391,1.859,3.141,4,1c2-2,14-14,14-14s0.709-1,2.656-1C35.313,46,50,46,50,46 c1.105,0,2-0.895,2-2V14C52,12.895,51.105,12,50,12z"></path> <path fill-rule="evenodd" clip-rule="evenodd" fill="#F9EBB2" d="M60,2H16c-1.105,0-2,0.895-2,2v6h36c2.211,0,4,1.789,4,4v20h6 c1.105,0,2-0.895,2-2V4C62,2.895,61.105,2,60,2z"></path> </g> <g> <path fill="#394240" d="M60,0H16c-2.211,0-4,1.789-4,4v6H4c-2.211,0-4,1.789-4,4v30c0,2.211,1.789,4,4,4h7c0.553,0,1,0.447,1,1v11 c0,1.617,0.973,3.078,2.469,3.695C14.965,63.902,15.484,64,16,64c1.039,0,2.062-0.406,2.828-1.172l14.156-14.156 c0,0,0.516-0.672,1.672-0.672S50,48,50,48c2.211,0,4-1.789,4-4v-8h6c2.211,0,4-1.789,4-4V4C64,1.789,62.211,0,60,0z M52,44 c0,1.105-0.895,2-2,2c0,0-14.687,0-15.344,0C32.709,46,32,47,32,47S20,59,18,61c-2.141,2.141-4,0.391-4-1c0-1,0-12,0-12 c0-1.105-0.895-2-2-2H4c-1.105,0-2-0.895-2-2V14c0-1.105,0.895-2,2-2h46c1.105,0,2,0.895,2,2V44z M62,32c0,1.105-0.895,2-2,2h-6 V14c0-2.211-1.789-4-4-4H14V4c0-1.105,0.895-2,2-2h44c1.105,0,2,0.895,2,2V32z"></path> <path fill="#394240" d="M13,24h13c0.553,0,1-0.447,1-1s-0.447-1-1-1H13c-0.553,0-1,0.447-1,1S12.447,24,13,24z"></path> <path fill="#394240" d="M41,28H13c-0.553,0-1,0.447-1,1s0.447,1,1,1h28c0.553,0,1-0.447,1-1S41.553,28,41,28z"></path> <path fill="#394240" d="M34,34H13c-0.553,0-1,0.447-1,1s0.447,1,1,1h21c0.553,0,1-0.447,1-1S34.553,34,34,34z"></path> </g> <path opacity="0.15" fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M62,32c0,1.105-0.895,2-2,2h-6V14 c0-2.211-1.789-4-4-4H14V4c0-1.105,0.895-2,2-2h44c1.105,0,2,0.895,2,2V32z"></path> </g> </g></svg>
                        Comments
                    </h3>
                    
                    <?php
                      $sql = "SELECT * FROM `comment`";
                      $result = mysqli_query($con,$sql);
                      if($result){
                        while($row=mysqli_fetch_assoc($result)){
                          $id=$row['id'];
                          $name=$row['Name'];
                          $comment=$row['comment'];
                          
                          echo'
                          <div class="comm1 my-4">
                          <hr>
                          <p class="ms-3">
                            <svg  width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 393.051 393.051" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#C19D7B;" d="M262.012,219.604H131.038c-59.992,0-108.735,48.485-108.735,108.477v64.97h348.444v-64.97 C370.747,268.024,322.004,219.604,262.012,219.604z"></path> <g> <circle style="fill:#EEB490;" cx="196.525" cy="209.648" r="48.485"></circle> <path style="fill:#EEB490;" d="M98.521,118.626c-0.194,1.228-0.259,2.521-0.259,3.749c0,15.774,12.8,28.574,28.574,28.574 s28.574-12.8,28.574-28.574c0-1.293-0.065-2.521-0.259-3.749H98.521z"></path> <path style="fill:#EEB490;" d="M237.899,118.626c-0.194,1.228-0.259,2.521-0.259,3.749c0,15.774,12.8,28.574,28.574,28.574 c15.774,0,28.574-12.8,28.574-28.574c0-1.293-0.065-2.521-0.259-3.749H237.899z"></path> </g> <path style="fill:#FACCB4;" d="M123.41,118.238v34.327c0,40.339,32.776,73.115,73.115,73.115s73.115-32.776,73.115-73.115v-34.327 H123.41z"></path> <path style="fill:#C19D7B;" d="M279.337,99.297V83.071C279.596,37.236,242.36,0,196.525,0s-83.071,37.236-83.071,83.071v16.226 h-55.79v23.079h277.463V99.297C335.127,99.297,279.337,99.297,279.337,99.297z"></path> <path style="fill:#8A6753;" d="M303.709,318.125v-90.44c-10.731-4.461-22.562-7.305-34.844-8.145v98.521h-144.42v-98.457 c-12.283,0.776-24.113,3.426-34.844,8.145v90.376H66.78v74.925h259.362v-74.925H303.709z"></path> <path style="fill:#C19D7B;" d="M245.01,369.455h-96.97c-2.909,0-5.236-2.327-5.236-5.236s2.327-5.236,5.236-5.236h96.97 c2.909,0,5.236,2.327,5.236,5.236S248.113,369.455,245.01,369.455z"></path> </g></svg>
                            '.$name.'
                          </p>
                          <p class="ms-3">'.$comment.'</p>
                          </div>
                    
                          ';
                        }
                      }
                      ?>
                </div>
            </div>
            
            <div class="container1 mt-5">
                <form method="post">
                <div class="form">
                    <input class="form-control form-control-lg mt-4 py-3" type="text" placeholder="Full Name" aria-label=".form-control-lg example" name="name" required>
                    <textarea required placeholder="Write Comment" name="comment"class="mt-3 mb-4 w-100"></textarea>
                    <button class="bt" name="submit">Leave Comment</button>
                </div>
                </form>
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
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>