<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tejwani Family</title>
    <link rel = "icon" href ="./images/aa2.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
        </li>
        <li class="name">
          <h1><a href="index.php">Tejwani Family</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="tree.php">Family-Tree</a></li>';
            echo '<li><a href="events.php">Family-Events</a></li>';
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

      <ul class="slideshow" style="background-color:#072f4b;">
  <li><span style="background-image:url(./images/aa1.jpg)">Image 01</span>
  <li><span style="background-image:url(./images/aa3.jpg)">Image 01</span>
</ul>

  <div class="container logomain">
</div>
</div>
</div>

<section id="about" style="background-color: #0A0608; border-bottom: none;">
    <div class="container aboutcol">
          <div class="col-sm-6 abcol">
          <div class="card-deck">
            <div class="card bg-primary cdabout1">
              <div class="card-body text-center">
                <p class="card-text cdabouth1">OUR HISTORY</p>
                <p class="card-text cdaboutp" >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ante nisl, lacinia vel imperdiet in, placerat vel velit. 
                Integer blandit, dui nec vulputate scelerisque, lorem arcu imperdiet tellus, at tempus nulla tortor eget dolor. 
                Integer finibus diam quis feugiat pellentesque. Pellentesque et nulla arcu. 
                Quisque nulla nulla, scelerisque id eros eget, scelerisque ultrices lacus.
                Aenean dapibus condimentum risus a bibendum. Phasellus tristique nunc eu pulvinar fringilla.
              </div>
            </div> 
          </div>
          </div>
          <div class="col-sm-6 abcol1">
              <div class="card-deck">
                <div class="card bg-primary" style="box-shadow: 0px 0px 0px 0px #10141a;">
                  <div class="card-body cdabout2">
                    <!-- <p class="card-text">Some text inside the first card</p> -->
                    <img src="./images/aa1.jpg" style="border-radius:10px; width: 100%; height: 100%; object-fit: cover; object-position: center;">
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
<h1 style="font-size:3vh;">Family Tree</h1>
  <img class="card-img-top" src="./images/aa1.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Expertise in video analysis of players skills to help them get better.</p>
  </div>
</div>
<div class="card" style="width: 16rem; z-index:10000;">
<h1 style="font-size:3vh;">Family Events</h1>
  <img class="card-img-top" src="./images/aa3.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Mental strength is as important as physical ability in Cricket and our team ensures that.</p>
  </div>
</div>
<div class="card" style="width: 16rem; z-index:10000;">
<h1 style="font-size:3vh;">Connected Map</h1>
  <img class="card-img-top" src="./images/aa5.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Stay connected with the latest happenings at the Academy. We celebrate Cricket everyday.</p>
  </div>
</div>
        </div>
        </div>
</section>

<section id="register">
  <div> Start your journey of connecting with your family today. <br>Everyone has become nuclear in this era and warmth of family is missing.<br> Connect with your family reunite and rejunivate.<br>
  <a href="register.php"><button>Register</button></a>
</section>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <footer style="margin-top:auto; z-index:1; background:black; width:100vw; padding:1.5vh;">
           <p style="text-align:center; font-size:0.8em; color: white;">&copy; Family App Centre. Tejwani Family.</p>
           <i class="bi bi-envelope"></i>
           <span class="fas fa-cloud"></span>
        </footer>

      </div>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
