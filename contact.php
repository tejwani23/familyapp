<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact || ABCA</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Arun Bhardwaj Cricket Academy</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
        <li><a href="about.php">About Us</a></li>
        <li><a href="team.php">Team</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="programs.php">Programs</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
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

    <form method="POST" action="#" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">
        <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Name" name="username">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Email</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" placeholder="<email_id>@domain_name.com" name="username">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">What would you like to ask us?</label>
            </div>
            <div class="small-8 columns">
              <textarea id="right-label" placeholder="Type here" name="pwd"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Submit" style="background: #072f4b; border: none; border-radius:8px; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>

    <div class="row" style="margin-top:30px;">
      <div class="small-12">

        <p style="text-align: center;">Wanna get in touch? Email us at <a href="mailto:sansgroup@gmail.com">abcrickfoundation@gmail.com</a></p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; Arun Bhardwaj Cricket Academy. All Rights Reserved.</p>
        </footer>

      </div>
    </div>



    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>