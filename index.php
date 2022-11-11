<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/f19af8a373.js" crossorigin="anonymous">
  </script>
  <title>MEKTO - Auto Mechanic Finder</title>
  <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #EEEEEE;">

  <?php
  include('navbar.php');
  ?>

  <div class="container" style="padding-top: 20">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100"
            src="https://retail-carousel.s3.ap-south-1.amazonaws.com/indianewwebsite33prob03.jpg?version=1667243028.704425"
            alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100"
            src="https://retail-carousel.s3.ap-south-1.amazonaws.com/indianewwebsite17prob9.jpg?version=1646984375.736361"
            alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/banner3.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
  <hr style="border: 1px solid #787A91; width: 70%;">
  <div style="padding:7px 40px ; ">
    <img src="images/Timeline.png" alt="Timeline" style="width: 100%; border-radius: 25px; border: 2px;">
  </div>
  <hr style="border: 1px solid #787A91; width: 30%;">
  <div style="text-align:center;">
    <h2 style="color: green;">SERVICE DUE? CAR TROUBLE?</h2><br>
    <h3 style="color:#76BA99;">Wait no more, Get started with Mekto!</h3>
    <button type="button" class="btn btn-lg" style="background-color: #76BA99;">
      <h2><a href="userregistration.php" style="color:#000000; text-decoration: none;"> Get Started</a></h2>
    </button>
  </div>
  <hr style="border: 1px solid #787A91; width: 30%;">

  <div style="padding:7;text-align:center; ">
    <img src="images/benefits.png" alt="Timeline" style="width: 85%; border-radius: 25px; border: 2px;">
  </div>
  <hr style="border: 1px solid #787A91; width: 70%;">
  <div style="padding:7;text-align:center; ">
    <img src="images/reach.png" alt="Timeline" style="width: 85%; border-radius: 25px; border: 2px;">
  </div>
  <hr style="border: 1px solid #787A91; width: 70%;">
  <div style=" padding-bottom:7;"></div>
  <div>
    <h2 style="text-align: center; font-weight: 600;">Customer Reviews</h2>
    <div class="container" style="padding-top: 20">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/rev1.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/rev2.png" alt="Second slide">
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <hr style="border: 1px solid #787A91; width: 70%;">
  <div style=" padding-bottom:40;"></div>

  <?php
  include('footer.php');
  ?>