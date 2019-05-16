<!DOCTYPE html>
<html>
<title>Kathlynn Gallardo, Ui/UX Designer and Illustrator</title>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/tab.css">
  <link rel="stylesheet" type="text/css" href="scss/style.scss">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- <script type="text/javascript" src="./lib/jquery-3.3.1.min.js"></script> -->
</head>
<body>
<main class="container">

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

  </div>

  <?php #FOOTER ?>

</main>
</body>
</html>
