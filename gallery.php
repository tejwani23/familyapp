<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery || ABCA</title>
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
    <link rel="stylesheet" href="./stylegallery.css">
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>

  <body background="b1.jpg">

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
          <li class="active"><a href="gallery.php">Gallery</a></li>
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
    
    <div class="container">
	<div class="gallery">
		<img src="./images/c10.jpg" alt="" width="100%" height="auto" class="gallery-img" id="g1"/>
		<img src="./images/c1.jpg" alt="" width="100%" height="auto" class="gallery-img" />		
		<img src="./images/c2.jpg" alt="" width="100%" height="auto" class="gallery-img" />
		<img src="./images/c3.jpg" alt="" width="100%" height="auto" class="gallery-img" />
    <img src="./images/c4.jpg" alt="" width="100%" height="auto" class="gallery-img" />
    <img src="./images/c5.jpg" alt="" width="100%" height="auto" class="gallery-img" />
		<img src="./images/c6.jpg" alt="" width="100%" height="auto" class="gallery-img" />		
		<img src="./images/c7.jpg" alt="" width="100%" height="auto" class="gallery-img" />
		<img src="./images/c8.jpg" alt="" width="100%" height="auto" class="gallery-img" />
        <img src="./images/c9.jpg" alt="" width="100%" height="auto" class="gallery-img" />
        <img src="./images/c10.jpg" alt="" width="100%" height="auto" class="gallery-img" />
        <img src="./images/c10.jpg" alt="" width="100%" height="auto" class="gallery-img" />
		
	</div> 
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script> -->

<!-- partial -->
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script>
  function () {
    $(".gallery-img").click(function(){
      var t = $(this).attr("src");
      $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
      $("#myModal").modal();
    });
  });
  </script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
