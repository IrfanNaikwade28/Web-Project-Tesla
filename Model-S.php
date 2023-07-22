<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/utility2.css" />
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <title>Model S | Tesla</title>
  </head>
  <body>
    <main>
        <div class="" id="Slider1">
            <section class="page1 page position-relative">
              <?php
                include("navbar.php");
              ?>
              <div class="txt1 position-relative top-25">
                <h1 class="text-light">Model S</h1>
                <p>
                  <a href="#" class="text-light text-decoration-none border-bottom border-light">Explore Inventory</a>
                </p>
                <div class="h-btn1 d-grid row-gap-4 justify-content-center">
                    <div class=" d-flex column-gap-5 justify-content-center align-items-center res-label">
                        <label for="">
                            <span class="text-light font-size-1">396 mi</span><br>
                            <span class="text-light font-size-2">Range (EPA est.)</span>
                        </label>
                        <label for="">
                            <span class="text-light font-size-1">1.99 s</span><br>
                            <span class="text-light font-size-2">0-60 mph*</span>
                        </label>
                        <label for="">
                            <span class="text-light font-size-1">200 mph</span><br>
                            <span class="text-light font-size-2">Top Speed†</span>
                        </label>
                        <label for="">
                            <span class="text-light font-size-1">1,020 hp</span><br>
                            <span class="text-light font-size-2"> Peak Power</span>
                        </label>
                    </div>
                    <div class="d-flex">
                        <button type="button" class="btn btn-light border-3 mx-2 w-50 res-btn">
                            Order Now
                          </button>
                          <button type="button" class="btn btn-outline-light border-3 w-50 res-btn">
                            Demo Drive
                          </button>
                    </div>
                </div>
              </div>
              <video class="w-100 position-absolute top-0 z-n1 h-auto" autoplay loop muted>
                <source
                  src="assets/videos/Model-S-Main-Hero-Mobile-LHD-Animation.webm"
                  type="video/webm"/>
              </video>
            </section>
            <section class="page page1 bg-black">
              <div>
                <h1>Interior of the Future</h1>
              </div>
              <div class="position-relative top-25 h-100 w-100" style="background:url(assets/img/img9.jpg) center;background-size: cover;"></div>
            </section>
            <section class="page page1 bg-black">
              <div id="carouselExampleCaptions" class="carousel slide carousel-fade m-5">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <video muted autoplay loop class="align-items-center">
                      <source src="assets/videos/Model-S-Interior-Carousel-1-Cinematic-Display-Desktop-Global.webm">
                    </video>
                  </div>
                  <div class="carousel-item">
                    <video muted autoplay loop>
                      <source src="assets/videos/MS-Interior-Carousel-2-Yoke-Desktop.webm">
                    </video>
                  </div>
                  <div class="carousel-item">
                    <video muted autoplay loop>
                      <source src="assets/videos/Model-S-Interior-Carousel-3-Perfect-Environment-Desktop.webm">
                    </video>
                  </div>
                  <div class="carousel-item">
                    <video muted autoplay loop>
                      <source src="assets/videos/Model-S-Interior-Carousel-4-Second-Row-Desktop.webm">
                    </video>
                  </div>
                  <div class="carousel-item w-100">
                    <video muted autoplay loop class="vd5 ">
                      <source src="assets/videos/MS-Interior-Carousel-5-Gaming-Mobile.webm">
                    </video>
                  </div>
                </div>
              </div>
            </section>
            <section class="page bg-black page1">
              <div class="disp-grid m-5 res-disp-grid h-100">
                  <div><img src="assets/img/img10.jpg" class="wid img-fluid" alt=""></div>
                  <div class="text-light txt-align">
                    <h5>Stay Connected</h5>
                    Instantly connect with multi-device Bluetooth, or fast<br>
                    charge devices with wireless and 36-watt USB-C<br>
                    charging.
                  </div>
                  <div class="text-light txt-align">
                    <h5>Immersive Sound</h5>
                    A 22-speaker, 960-watt audio system with Active Road <br>
                    Noise Reduction offers immersive listening and studio- <br>
                    grade sound quality.
                  </div>
                  <div>
                    <video autoplay muted loop class="wid">
                      <source src="assets/videos/MS-Interior-Grid-2-Audio-Desktop.webm">
                    </video>
                  </div>
                  <div><img src="assets/img/img11.jpg" alt="" class="wid img-fluid"></div>
                  <div class="text-light txt-align">
                    <h5>Room for Everything</h5>
                    With front and rear trunks and fold-flat seats you can <br>
                    fit your bike without taking the wheel off—and your <br>
                    luggage too. Compare Models
                  </div>
              </div>
            </section>
            <section class="page page1" style="background-color:#F4F4F4">
              <div class="move">
                <h2>Electric Powertrain</h2>
                <br>
                Model S platforms unite powertrain and battery technologies for unrivaled performance, range and <br>
                efficiency. New module and pack thermal architecture allows faster charging and gives you more power <br>
                and endurance in all conditions.
              </div>
              <div class="moveD ">
                <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade mx-5 " data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="assets/img/img12.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/img13.jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                </div>
                <div class="mt-5 p-4">
                  <div class="moveC"></div>
                  <h5 class="mt-2">Model S</h5>
                  <br>
                  Dual Motor All-Wheel Drive unlocks more range than any other <br>
                  vehicle in our current lineup, with insane power and maximum
                  control.
                </div>
                <div class="d-flex column-gap-5 p-4">
                  <label for="">
                      <span class="font-size-1">3.1 s</span><br>
                      <span class="font-size-2">0-60 mph</span>
                  </label>
                  <label for="">
                      <span class="font-size-1">405 mi</span><br>
                      <span class="font-size-2">Range (EPA est.)</span>
                  </label>
                  <label for="">
                      <span class="font-size-1">670 hp</span><br>
                      <span class="font-size-2">peak power</span>
                  </label>
              </div>
              </div>
            </section>
            <section class="page bg-black">
              <div><img src="assets/img/img14.jpg" alt="" class="h-50 w-100 object-fit-cover"></div>
              <div class="d-flex ExtDesign text-light">
                <div class="d-flex flex-column">
                  <div>
                    <h5>Exterior</h5>
                    <h2>Designed for Efficiency</h2>
                  </div>
                  <button type="button" class="btn btn-outline-light w-50 mt-4 border-3">Order Now</button>
                  <button type="button" class="btn btn-outline-light w-50 mt-4">view Inventory</button>
                </div>
                <div>
                  With a drag coefficient of just .208 Cd, the lowest on the planet, Model S is built for <br>
                  speed, endurance and range. Improved aerodynamics and a wider chassis offer more <br>
                  responsive performance so you can take corners quicker and with more confidence.
                </div>
              </div>
            </section>
            <section class="page page1 bg-black">
              <div class="disp-grid m-5">
                <div class="text-light txt-align">
                  <h5>Relentless Performance</h5>
                    Staggered, performance wheels and tires keep the car <br>
                    planted and help transfer maximum power down to the <br>
                    road.
                </div>
                <div><img src="assets/img/img15.jpg" class="wid" alt=""></div>
                <div>
                  <img src="assets/img/img16.jpg" alt="" class="wid">
                </div>
                <div class="text-light txt-align">
                  <h5> Optimized Aerodynamics</h5>
                      Attention to detail on all exterior surfaces makes Model <br>
                      S the most aerodynamic production car on Earth.
                </div>
                <div class="text-light txt-align">
                  <h5>Refined Styling</h5>
                  An iconic silhouette meets refreshed, elegant <br>proportions.
                </div>
                <div><img src="assets/img/img17.jpg" alt="" class="wid"></div>
            </div>
            </section>
            <section class="page">
              <div class="card mb-3 h-100">
                <div class="row g-0">
                  <div class="col-md-8 h-100">
                    <video autoplay muted loop class="h-100">
                      <source src="assets/videos/Plaid-Range-Web-Desktop-8mb.mp4" type="video/mp4">
                    </video>
                  </div>
                  <div class="col-md-4">
                    <div class="card-body p-5 h-100">
                      <h6>Range</h6>
                      <h5 class="card-title">Go Anywhere</h5>
                      <p class="card-text">With up to 405 miles of estimated range and access to the world’s largest and most powerful fast charging network, you’ll spend less time plugged in and more time on the road. Chat with a Tesla Advisor to learn more about Model S or schedule a demo drive today.</p>
                      <div class="d-flex flex-column btns">
                        <button type="button" class="btn btn-outline-dark border-3">Order Now</button>
                        <button type="button" class="btn btn-secondary mt-3">Find My Route</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="page bg-black text-light d-flex column-gap-5">
              <div class="w-50">
                <img src="assets/img/img18.jpg" alt="" class="w-100">
              </div>
              <div class="w-50 specs">
                <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                  <li class="nav-item w-25 me-3" role="presentation">
                    <button class="btn btn-outline-light border-2 active me-3 w-100" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Model S Plaid</button>
                  </li>
                  <li class="nav-item w-25" role="presentation">
                    <button class="btn btn-outline-light border-2 w-100" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Model S</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active d-flex gap-5" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="d-grid gap-4">
                      <span>
                        <div></div>
                        Range (EPA est.) <br>
                        396 mi
                      </span>
                      <span>
                        <div></div>
                        1/4 Mile <br>
                        9.23@155 mph trap speed
                      </span>
                      <span>
                        <div></div>
                        Peak Power <br>
                        1,020 hp
                      </span>
                      <span>
                        <div></div>
                        Wheels <br>
                        19" or 21"
                      </span>
                      <span>
                        <div></div>
                        Cargo <br>
                        28 cu ft
                      </span>
                      <span>
                        <div></div>
                        Weight <br>
                        4,776 lbs
                      </span>
                  </div>
                  <div class="d-grid gap-4">
                    <span>
                      <div></div>
                      *Acceleration <br>
                    1.99 s 0-60 mph <br>
                    with rollout subtracted
                    </span>
                    <span>
                      <div></div>
                      †Top Speed <br>
                      200 mph <br>
                      when equipped with paid <br>
                      hardware upgrades
                    </span>
                    <span>
                      <div></div>
                      Drag Coefficient <br>
                      0.208 Cd
                    </span>
                    <span>
                      <div></div>
                      Powertrain <br>
                      Tri Motor
                    </span>
                    <span>
                      <div></div>
                      Supercharging Max <br>
                      250 kW
                    </span>
                  </div>
                  </div>
                  <div class="tab-pane fade d-flex gap-5 specs2" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <div class="d-grid text-light gap-4">
                      <span>
                        <div></div>
                        Range (EPA est.) <br>
                        405 mi
                      </span>
                      <span>
                        <div></div>
                        Peak Power <br>
                        670 hp
                      </span>
                      <span>
                        <div></div>
                        Wheels <br>
                        19" or 21"
                      </span>
                      <span>
                        <div></div>
                        Cargo <br>
                        28 cu ft
                      </span>
                      <span>
                        <div></div>
                        Acceleration <br>
                        3.1 s 0-60 mph
                      </span>
                  </div>
                  <div class="d-grid gap-">
                    <span>
                      <div></div>
                      Top Speed <br>
                      149 mph 
                    </span>
                    <span>
                      <div></div>
                      Drag Coefficient <br>
                      0.208 Cd
                    </span>
                    <span>
                      <div></div>
                      Weight <br>
                      4,560 lbs
                    </span>
                    <span>
                      <div></div>
                      Powertrain <br>
                      Dual Motor
                    </span>
                    <span>
                      <div></div>
                      Supercharging Max <br>
                      250 kW
                    </span>
                  </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="page">
              <div class="d-flex justify-content-center align-items-center">
                <div class="w-50 d-flex flex-column justify-content-center align-items-center">
                  <div>
                    <h2>Experience Model S</h2>
                    Design yours or request a callback from a Tesla Advisor to <br>
                    learn more
                  </div>
                  <div class="w-75 d-flex mt-5">
                    <button type="button" class="btn btn-outline-dark w-50 me-3 ms-5 border-3 rounded-0">Order Now</button>
                    <button type="button" class="btn btn-secondary w-50 rounded-0">Request a Callback</button>
                  </div>
                </div>
                <div class="w-50">
                  <img src="assets/img/img19.jpg" alt="" class="w-100">
                </div>
              </div>
              <div class="move-20">
                  <p class="text-secondary text-center">Certain high data usage vehicle features require at least Standard Connectivity, including maps, navigation <br>
                  and voice commands. Access to features that use cellular data and third-party licenses are subject to <br>
                  change. Learn more about Standard Connectivity and any limitations.</p>
              </div>
              <div class="d-flex justify-content-center my-4 footer move-20">
                <a href="#" class="text-secondary text-decoration-none font-size-3">Tesla © 2023</a>
                <a href="#" class="text-secondary text-decoration-none font-size-3">Privacy & Legal</a>
                <a href="#" class="text-secondary text-decoration-none font-size-3">Vehicle Recalls</a>
                <a href="#" class="text-secondary text-decoration-none font-size-3">Contact</a>
                <a href="#" class="text-secondary text-decoration-none font-size-3">News</a>
                <a href="#" class="text-secondary text-decoration-none font-size-3">Get Updates</a>
                <a href="#" class="text-secondary text-decoration-none font-size-3">Locations</a>
              </div>
            </section>
          </div>
    </main>
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
