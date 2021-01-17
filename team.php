<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

?>
<!DOCTYPE html>
<head>
  <title>Events for The CyberSrishti 2020</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/favicon.png" type="image/x-icon" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <!----------------->

  <!--icons i.e. font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./team.css">
  <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>

<body id="Home" data-spy="scroll" data-target=".navbar" data-offset="60" bgcolor="blue">
<!-- Navbar -->
<nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Arun Bhardwaj Cricket Foundation</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
	  <ul class="right">
          <li><a href="about.php">About Us</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="programs.php">Programs</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li class="active"><a href="team.php">Team</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li"><a href="learning.php">Learning Centre</a></li>';
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

<ul class="container-fluid">
  <li class="card">
    <div class="img--container">
      <img src="./images/c2.jpg" alt="" />
    </div>
    <div class="card--text">
      <div class="text--container">
        <div class="text--header">
          <h2 class="text--title">Arun K. Bhardwaj</h2>
          <p class="text--subtitle">Founder</p>
        </div>
        <div class="text--details">
          <p class="text--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nulla cum impedit et nemo molestiae, suscipit animi officiis soluta natus, provident ab laudantium, amet dolorum.
          </p>
          
          <a href="" data-toggle="modal" data-target="#event1" class="text--link">Event Details</a>
        </div>
      </div>
    </div>
  </li>
  <li class="card">
    <div class="img--container">
      <img src="./images/c2.jpg" alt="" />
    </div>
    <div class="card--text">
      <div class="text--container">
        <div class="text--header">
          <h2 class="text--title">Kanhaiya Lal Tejwani</h2>
          <p class="text--subtitle">Founder</p>
        </div>
        <div class="text--details">
          <p class="text--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nulla cum impedit et nemo molestiae, suscipit animi officiis soluta natus, provident ab laudantium, amet dolorum.
          </p>
          
          <a href="" data-toggle="modal" data-target="#event1" class="text--link">Event Details</a>
        </div>
      </div>
    </div>
  </li>
  <li class="card">
    <div class="img--container">
      <img src="./images/c2.jpg" alt="" />
    </div>
    <div class="card--text">
      <div class="text--container">
        <div class="text--header">
          <h2 class="text--title">Kanhaiya Lal Tejwani</h2>
          <p class="text--subtitle">Founder</p>
        </div>
        <div class="text--details">
          <p class="text--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nulla cum impedit et nemo molestiae, suscipit animi officiis soluta natus, provident ab laudantium, amet dolorum.
          </p>
          
          <a href="" data-toggle="modal" data-target="#event1" class="text--link">Event Details</a>
        </div>
      </div>
    </div>
  </li>
</ul>

<div class="container">
<div class="row">
<div class="modal fade " id="event1" tabindex="-1" role="dialog" style="color:#000!important">
<div class="modal-dialog ">
<div class="modal-content" style="background-color: white!important; text-align: left" >
<br>
<div class="modal-header" >
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#000!important; text-align: center">Arun K. Bhardwaj</h4>
</div>
<div class="modal-header">
<div class="row">
<div class="team-member">
<img class="img-responsive center-block" src="Date Release 2.jpg"   alt="">
<h3>Professionally Accredited:</h3>	<br>
<ul>
  <li>Diploma in CRICKET COACHING (Regular Course) from India`s pioneering Institution - Netaji Subhash National Institute of Sports, Patiala, in April 1973-74</li>
  <li>Attended Level -3 (advanced coaching course) conducted by Australian Cricket Board at Sydney in 1999 </li>
  <li>Successfully completed BCCI Level – 2 Coaches programme in 2001-02</li>
  <li>Trained by World famous cricket coach, Mr. Alf Gover at his Indoor Cricket School in London</li>
  <li>Attended Coaching Clinic for the Budding Pace Bowlers conducted by the great Australian fast bowler, Dennis Lillee at M.R.F.  Pace Academy, Chennai</li>
  <li>Qualified first class cricket umpire of BCCI and served on All India Panel for 15 years</li>
</ul>


<h3>Professional Experience:</h3>	
<br>
<ul>
  <li>Served as Chief Cricket Coach in Sports College, Lucknow,  for 12 years </li>
  <li>Served as Senior cricket coach at Sports Authority of  India, N.Delhi for 22 years</li>
  <li>Served as Center Head of Center for excellence in cricket of DDCA</li>
  <li>Conducted coaching camps for the junior state teams of Delhi , U.P. & Bihar</li>
  <li>Conducted Coaches training programme for various state cricket associations such as Cricket Association of Bengal & DDCA.</li>
  <li>Trained Coaches of Cricket Academy of Pathans (CAP) at different centers in India</li>
  <li>Conducted Coaching Camps along with former Indian Captain Mr. Bishen Singh Bedi  </li>
  <li>Expertise in video technical skill assessment and solution (fault detection & correction) </li>
</ul>
<h3>Coaching Award: </h3>
<br>
<ul>
  <li>Coaching Award from the National Cricket Association of UK in 1985</li>
</ul>  
<h3>Book Authored: </h3>
<br>
<ul>
  <li>Written book titled “Coaching Batting Skills” published in 2008</li>
</ul>
<h3> Articled Publised:</h3>
<br>
<ul>
  <li>Technical articles series published in “Cricket Samrat”</li>
</ul>
<h3>TV & Radio Commentator</h3>
<br>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="modal fade " id="event1" tabindex="-1" role="dialog" style="color:#000!important">
<div class="modal-dialog ">
<div class="modal-content" style="background-color: white!important; text-align: center" >
<br>
<div class="modal-header" >
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#000!important">CyberSrishti2020</h4>
<h3>Coming Soon</h3>
</div>
<div class="modal-header">
<div class="row">
<div class="team-member">
<img class="img-responsive center-block" src="Date Release 2.jpg"   alt="">
<h3 style="float:left; margin-left:0.5vw;"> Details:</h3><br>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
<html>
