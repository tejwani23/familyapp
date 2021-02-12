<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Family Tree || FamilyApp</title>
    <link rel = "icon" href ="./images/aa2.jpg">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./stylelearning.css">
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
          <li><a href="about.php">About Us</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li class="active"><a href="tree.php">Family Tree</a></li>';
            echo '<li><a href="events.php">Family Events</a></li>';
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
    <div class="aboutimg">
      <p class="aboutp">The family is one of the nature's masterpieces.</p>
    </div>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <?php
          $i=0;
          //$result = $mysqli->query("SELECT * FROM users");
          $result = $mysqli->query('SELECT * from users order by id age');

         if($result === FALSE){
             die(mysqli_error($mysqli));
         }

        if($result){
          while($obj = $result->fetch_object()){

              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->fname.'</h3></p>';
              echo '<p><h3>'.$obj->lname.'</h3></p>';
              echo '<p><h3>'.$obj->dob.'</h3></p>';
              echo '<p><h3>'.$obj->address.'</h3></p>';
              echo '<p><h3>'.$obj->pin.'</h3></p>';
              echo '<p><h3>'.$obj->mother.'</h3></p>';
              echo '<p><h3>'.$obj->father.'</h3></p>';
              echo '<p><h3>'.$obj->email.'</h3></p>';
              echo '<p><h3>'.$obj->fb.'</h3></p>';
              echo '<p><h3>'.$obj->insta.'</h3></p>';
              echo '<p><h3>'.$obj->linkedin.'</h3></p>';
              echo '<p><h3>'.$obj->twitter.'</h3></p>';
              echo '</div>';

              $i++;
            }

          }

          echo '</div>';
          echo '</div>';
          ?>

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
