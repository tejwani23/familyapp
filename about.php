<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About | FamilyApp</title>
    <link rel = "icon" href ="./images/aa2.jpg">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./styleabout.css">
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body background="b1.jpg">

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Tejwani Family</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
	  <ul class="right">
          <li class="active"><a href="about.php">About Us</a></li>
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
    <div class="abt">
      <div class="abtdiv">
        <div class="abthead">
           <h1 style="font-weight:600;">About</h1>
           <p style="font-weight:600;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ante nisl, lacinia vel imperdiet in, placerat vel velit. 
                Integer blandit, dui nec vulputate scelerisque, lorem arcu imperdiet tellus, at tempus nulla tortor eget dolor. 
                Integer finibus diam quis feugiat pellentesque. Pellentesque et nulla arcu. 
                Quisque nulla nulla, scelerisque id eros eget, scelerisque ultrices lacus.
                Aenean dapibus condimentum risus a bibendum. Phasellus tristique nunc eu pulvinar fringilla.</p> 
        </div>
        </div>
    <div>
    </div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="./scriptabout.js"></script>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
