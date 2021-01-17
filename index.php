<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arun Bhardwaj Cricket Foundation</title>
    <link rel = "icon" href ="./images/Picture1.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./styleindex.css">
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation" style="z-index:1;">
      <ul class="title-area">
        <li class="name">
        <!-- <a href="#" class="navbar-brand" style="padding: 0.5vh 0.3vw;">
            <img src="./images/Picture2.png" alt="logo" height="30vh" width="30vw">
        </a> -->
        </li>
        <li class="name">
          <h1><a href="index.php">Arun Bhardwaj Cricket Foundation</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
          <li><a href="about.php">About Us</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="programs.php">Programs</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="learning.php">Learning Centre</a></li>';
            echo '<li><a href="blog.php">Blogs</a></li>';
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>


<div class="main1">
  
    <div class="row" style="margin-top:10px;">
      <div class="small-12"> 

      <ul class="slideshow" style="background-color:#C0C0C0;">
  <li><span style="background-image:url(./images/c10.jpg)">Image 01</span>
  <li><span style="background-image:url(./images/c8.jpg)">Image 02</span></li>
  <li><span style="background-image:url(./images/c9.jpg)">Image 03</span></li>
  <li><span style="background-image:url(./images/c8.jpg)">Image 04</span></li>
  <li><span style="background-image:url(./images/c11.jpg)">Image 05</span></li>
  <li><span style="background-image:url(./images/c6.jpg)">Image 06</span></li>
</ul>

  <div class="container logomain">
  <!-- <img class="landimage" src="./images/Picture2.png"> -->
  <!-- Arun Bhardwaj Cricket Foundation
  Strive for excelence -->
    <!-- <button href="products.php" style="border-radius:13px; background-color:#228B22">Our Objectives</button>
    <button href="products.php" style="border-radius:13px; background-color:#228B22">Learning Centre</button> -->
</div>
</div>
</div>

<section id="about" style="background-color: #0A0608; border-bottom: none;">
    <div class="container aboutcol">
          <div class="col-sm-6 abcol">
          <div class="card-deck">
            <div class="card bg-primary cdabout1">
              <div class="card-body text-center">
                <p class="card-text cdabouth1">OUR OBJECTIVE</p>
                <p class="card-text cdaboutp" >
                Playing cricket should always be a pleasure without too much worrying about victory or defeat. <br>
                In our collective endeavor the sole objective is to foster the 
                love of the game to provide the ultimate source of motivation for 
                learning and playing the game. <br>
                As a Coach and mentor we have this responsibility to provide 
                an opportunity of getting better day by day to achieve the ultimate goal.
              </div>
            </div> 
          </div>
          </div>
          <div class="col-sm-6 abcol1">
              <div class="card-deck">
                <div class="card bg-primary" style="box-shadow: 0px 0px 0px 0px #10141a;">
                  <div class="card-body cdabout2">
                    <!-- <p class="card-text">Some text inside the first card</p> -->
                    <img src="./images/obj.jpg" style="border-radius:10px; width: 100%; height: 100%; object-fit: cover; object-position: center;">
                  </div>
                </div> 
              </div>
              </div>
        </div>
</section>
<section id="features">
        <div class="container">
          <div class="row">
        <div class="card" style="width: 16rem; z-index:10000;">
<h1 style="font-size:3vh;">Video Analysis</h1>
  <img class="card-img-top" src="./images/preview.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Expertise in video analysis of players skills to help them get better.</p>
  </div>
</div>
<div class="card" style="width: 16rem; z-index:10000;">
<h1 style="font-size:3vh;">Video Analysis</h1>
  <img class="card-img-top" src="./images/preview.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Expertise in video analysis of players skills to help them get better.</p>
  </div>
</div>
<div class="card" style="width: 16rem; z-index:10000;">
<h1 style="font-size:3vh;">Video Analysis</h1>
  <img class="card-img-top" src="./images/preview.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Expertise in video analysis of players skills to help them get better.</p>
  </div>
</div>
        </div>
        </div>
</section>

<section id="register">
  <div> Start your journey of cricket training today. <br>Register to access our expert curated learning resource.<br>
  <a href="register.php"><button>Register</button></a>
</section>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <footer style="margin-top:0px; z-index:1; background:black; width:100vw; padding:1.5vh;">
           <p style="text-align:center; font-size:0.8em; color: white;">&copy; Arun Bhardwaj Cricket Academy. All Rights Reserved.</p>
        </footer>

      </div>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
