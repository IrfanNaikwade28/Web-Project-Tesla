<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/bootstrap.js"></script>
  <script src="js/script.js"></script>
  <title>Model 3 | Tesla</title>
</head>

<body>
  <div class="" id="Slider1">
    <section class="page1 page position-relative">
      <?php
      include("navbar.php");
      ?>
      <div class="txt1 position-relative top-25">
        <h1 class="text-light">Model 3</h1>
        <p>
          <a href="#" class="text-light text-decoration-none border-bottom border-light">Demo Drive</a>
        </p>
        <div class="h-btn1 d-grid row-gap-4 justify-content-center">
          <div class=" d-flex column-gap-5 justify-content-center align-items-center">
            <label for="">
              <span class="text-light font-size-1">3.1s</span><br>
              <span class="text-light font-size-2">0-60 mph*</span>
            </label>
            <label for="">
              <span class="text-light font-size-1">333 mi</span><br>
              <span class="text-light font-size-2">Range (EPA est.)</span>
            </label>
            <label for="">
              <span class="text-light font-size-1">$32,740†</span><br>
              <span class="text-light font-size-2">After Tax Credit</span>
            </label>
          </div>
          <div class="d-flex w-100">
            <button type="button" class="btn btn-light border-3 me-3 w-75 rounded-1">
              Explore Inventory
            </button>
            <button type="button" class="btn btn-outline-light border-3 w-75 rounded-1">
              Custom Order
            </button>
          </div>
        </div>
      </div>
      <video class="w-100 position-absolute top-0 z-n1 h-auto" autoplay loop muted>
        <source src="assets/videos/Model-3-Main-Hero-Desktop-LHD-Animation.webm" type="video/webm" />
      </video>
    </section>
    <section class="page">
      <div class="w-100 mapImage" style="background:url(assets/img/img25.jpg)">
        <div style="background:url(assets/img/img25.jpg)" class="img-fluid  w-100"></div>
      </div>
    </section>
    <!-- <section class="page h-100">
      <div class="w-100 h-75" style="background:url(assets/img/img20.jpg);background-size:cover;background-repeat: no-repeat;">
        <div class="d-grid">
          <div class="text-light float-end">
            Over-the-air Updates
          </div>
          <div class="text-light">
            15inch <br>
            Touchscreen Display
          </div>
          <div class="text-light">
            All-Glass Roof
          </div>
        </div>
      </div>
      <div class="bg-black d-flex text-light w-100 h-25 column-gap-5 pt-2">
        <div class="w-50 font-size-small Padding1">
          <h2>Built Around the Driver</h2><br>
          <button type="button" class="btn btn-outline-light rounded-0 border-3 w-50">View Inventory</button>
        </div>
        <div class="w-75 font-size-small Padding2">
          The inside of Model 3 is unlike any other vehicle with unrivaled technology, premium <br>
          materials and plenty of legroom.
        </div>
      </div>
    </section> -->
    <section class="page"></section>
  </div>
  <!-- Slide Nav start-->
  <div class="offcanvas offcanvas-end bg-light" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="staticBackdropLabel"></h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav position-absolute top-25 start-50 translate-middle-x">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Model S</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Model 3</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Model X</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Model Y</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Solar Roof</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Solar Panels</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Powerwall</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Account</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- Slide Nav end -->
</body>

</html>