<!DOCTYPE html>
<html>
<title>Kathlynn Gallardo, Ui/UX Designer and Illustrator</title>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/tab.css">
  <link rel="stylesheet" type="text/css" href="css/mobilenav.css">
  <link rel="stylesheet" type="text/css" href="js/mobilenav.js">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- <script type="text/javascript" src="./lib/jquery-3.3.1.min.js"></script> -->
</head>
<body>
<main class="container">


<?php #MOBILE NAV?>
<header>
        <div class="container">
          <nav id="navigation">
            <a href="#" class="logo">Jan Czizikow</a>
            <a aria-label="mobile menu" class="nav-toggle">
              <span></span>
              <span></span>
              <span></span>
            </a>
              <ul class="menu-left">
                <li><a href="#about">About</a></li>
                <li><a href="#exp">Resume</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
          </nav>
        </div>
      </header>

<section id="about">
<div class="container">
  <h1>Fully responsive navigation</h1>
  <p>Mobile hamburger menu with css3 animations, animated links on hover, hide navigation on scroll down / show on scroll up (<a href="https://medium.com/@mariusc23/hide-header-on-scroll-down-show-on-scroll-up-67bbaae9a78c#.xnr8amvlw">credit to Marius Craciunoiu</a>)</p>
  <p class="signature">Made with ♥ by <a href="http://www.janczizikow.com/"> Jan Czizikow</a></p>
  </div>
</section>

<section id="exp">
  <div class="container">
  <h1>Resume</h1></div>
</section>

<section id="skills">
  <div class="container">
  <h1>skills</h1></div>
</section>

<section id="projects">
  <div class="container">
  <h1>projects</h1></div>
</section>

<section id="contact">
  <div class="container">
  <h1>contact</h1></div>
</section>


  <?php #HEADER ?>
  <div class="header">

  
    <div class="details">
      <figure class="profile_img">
        <img src="https://i.pinimg.com/564x/e7/13/c9/e713c9d591f5a173672ef03b5ee1d1d1.jpg" class="img">
      </figure>
      <span class="content">
        <label class="name"> Kathlynn Gallardo</label>
        <label class="occ"> UI/UX Designer and Illustrator</label>
        <label class="email"> kathlynngallardo.25@gmail.com</label>
      </span>





    </div>
    <div class="plants">
      <figure class="svg1">
        <img src="assets/1.svg" class="-img">
      </figure>
       <figure class="svg2">
       <img src="assets/2.svg" class="-img">
      </figure>
    </div>



    <div class="tab">
      <ul class="nav nav-pills">
        <li class="active">
            <a class="effect-underline" data-toggle="pill" href="#mobile">Mobile Design</a></li>
        <li><a class="effect-underline" data-toggle="pill" href="#web">Web Design</a></li>
        <li><a class="effect-underline" data-toggle="pill" href="#illus">Illustrations</a></li>
        <li><a class="effect-underline" data-toggle="pill" href="#vector">Vectors</a></li>
        <li><a class="effect-underline" data-toggle="pill" href="#icons">Icons</a></li>
        <li><a class="effect-underline" data-toggle="pill" href="#logo">Logo Designs</a></li>
        <li><a class="effect-underline" data-toggle="pill" href="#gra">Graphics</a></li>
      </ul>
    </div>
  </div>

  

  <?php #TABS ?>
  <div class="tab-content">
    <div id="mobile" class="tab-pane fade in active">
      <?php include 'tabs/mobile.php'; ?>
    </div>
    <div id="web" class="tab-pane fade">
      <?php include 'tabs/web.php'; ?>
    </div>
    <div id="illus" class="tab-pane fade">
      <?php include 'tabs/illus.php'; ?>
    </div>
    <div id="vector" class="tab-pane fade">
      <?php include 'tabs/vector.php'; ?>
    </div>
    <div id="icons" class="tab-pane fade">
      <?php include 'tabs/icons.php'; ?>
    </div>
    <div id="logo" class="tab-pane fade">
      <?php include 'tabs/logo.php'; ?>
    </div>
    <div id="gra" class="tab-pane fade">
      <?php include 'tabs/graphics.php'; ?>
    </div>
  </div>

  <?php #FOOTER ?>

</main>


<footer class="footer">
  <div class="content">
    <span>Kathlynngallardo.25@gmail.com</span>
    <span> Design and built with ❤️ </span>
    <span> ©️ kathlynnGallardo</span>
  </div>
</footer>

</body>
</html>
