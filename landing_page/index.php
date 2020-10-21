<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel='icon' href='logo.png' type='image/png'/>
  
    <title>Threshold Gaming</title>
    <meta name="description" content="Built for Gamers by Gamers" />

    <!--Inter UI font-->
    <link
      href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@700&display=swap"
      rel="stylesheet"
    />

    <!-- transitions -->
    <link rel="stylesheet" href="Style/transitions.css">

    <!--vendors styles-->

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    />

    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="css/default.css" id="theme-color" />
    <!-- <link rel="stylesheet" href="css/default.css"/> -->
    <!-- Page css -->
    <link rel="stylesheet" href="Style/scrollbar.css" />

    <!-- Custom Cursor -->
    <style>       
*
{
cursor : url(cursors/swordcursor.png), default;
}
button:hover, a:hover, input:hover
{
cursor : url(cursors/swordcursor2.png), default !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
  color: black !important;
  background-color: #1de9b6 !important;
  border-radius: 5px;
}
  </style>
  </head>

  <body>
    <video autoplay muted loop id="myVideo">
      <source src="css/bgvideogames.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
    <cursor>
      <!-- <img src="pubg1.jpg" style="top: 100%; left: 0px; height: 20%; width: 100%;">  -->
    <!-- <div id="loader">
      <img src="image.gif" width="30%" />
    </div> -->
    <!--navigation-->
    <section class="smart-scroll">
      <div class="slideDown">
        <div class="fadeIn">
      <div class="container-fluid">
        <div class="navbar navbar-expand-md navbar-dark">
          <a class="navbar-brand heading-black" href="loading.php">
          <img src="logo.png" style="max-width: 100px;"></img>
          </a>

          <button
            class="navbar-toggler navbar-toggler-right border-0"
            type="button"
            data-toggle="collapse"
            data-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span data-feather="grid"></span>
          </button>

          <!-- Search bar -->

          <div class="container1">
            <form role="search" method="get" class="search-form form" action="">
              <label>
                  <span class="screen-reader-text">Search for...</span>
                  <input type="search" class="search-field" placeholder="Search for..." value="" name="s" title="" />
              </label>
              <input type="submit" class="search-submit button" value="&#xf002" />
          </form>
          </div>

          <!-- <div class="container-mario">
            <canvas class="illo"></canvas>
          </div> -->
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a
                  class="nav-link page-scroll d-flex flex-row align-items-center text-primary"
                  href="../landing_page/loading.php"
                >
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link page-scroll d-flex flex-row align-items-center text-primary"
                  href="../forums/loading.php"
                >
                  Community
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link page-scroll d-flex flex-row align-items-center text-primary"
                  href="#"
                >
                  Tournaments
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link page-scroll d-flex flex-row align-items-center text-primary"
                  href="../blogs/loading.php"
                >
                  Blogs
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link page-scroll d-flex flex-row align-items-center text-primary"
                  href="../contactus_aboutus/aboutloading.php"
                >
                  About
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link page-scroll d-flex flex-row align-items-center text-primary"
                  href="../signup_page/loading.php"
                >
                <i class="fas fa-sign-in-alt fa-fw"></i>
                   Register/Sign in
                </a>
              </li>
            </ul>
          </div>
        </div>
        </nav>
    </section>
    <script> $('.item').click(function(){
      $('.item.active').removeClass("active");
      $(this).addClass('active');
  })</script>
  <!-- <img src="pubg1.jpg" style="padding-top: 50px; left: 0px; height: 20%; width: 100%; opacity: 0.5;">  -->
    <article>
      <!--hero header-->
      <!-- <img src="pubg1.jpg" style="top: 50%; left: 0px; height: 50%; width: 100%;">  -->
      <div class="zoomer">
        <div class="fadeIn">
           <section class="py-7 py-md-0 bg-hero" id="home"> 
            <!-- <img src="pubg1.jpg" style="padding-top: 50px; left: 0px; height: 20%; width: 100%;"> -->
        <div class="container" data-center-center="opacity:1;bottom:0;" data-0-top="opacity:0;top:25px;">
           <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
              <h1 class="heading-black text-capitalize">
                Built For Gamers By Tech Enthusiasts
              </h1>
              <p class="lead py-3">
                This is a platform that is dedicated for gamers to take part in
                various communities!
              </p>
              <button
                class="btn btn-primary d-inline-flex flex-row align-items-center"
              >
                Get started now
                <em class="ml-2" data-feather="arrow-right"></em>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      </section>
    
      

      <!-- features section -->
      <div class="row mt-5">
        <div class="col-md-10 mx-auto">
          <div class="row feature-boxes">
            <div class="col-md-6 box" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">
              <div class="icon-box box-primary">
                <div class="icon-box-inner">
                  <span data-feather="edit-3" width="35" height="35"></span>
                </div>
              </div>
              <h5>Weekly Blogs and Discussion Forum</h5>
              <p class="text-muted">
                A dedicated blog page where visitors can read latest happenings from gaming world
                and QnA type forum.
              </p>
            </div>
            <div class="col-md-6 box" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">
              <div class="icon-box box-success">
                <div class="icon-box-inner">
                  <i class="fas fa-trophy fa-2x"></i>
                </div>
              </div>
              <h5>Tournaments</h5>
              <p class="text-muted">
                Wanna showcase your skills? This is the place for you! Lead the leaderboard chief!
              </p>
            </div>
            <div class="col-md-6 box" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">
              <div class="icon-box box-danger">
                <div class="icon-box-inner">
                  <i class="fas fa-info-circle fa-2x"></i>
                </div>
              </div>
              <h5>About us</h5>
              <p class="text-muted">
                Hmm.. Curious huh? You might wanna see this if you want to know, who we are? Why we built this? 
              </p>
            </div>
            <div class="col-md-6 box" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">
              <div class="icon-box box-info">
                <div class="icon-box-inner">
                  <i class="fab fa-discord fa-2x"></i>
                </div>
              </div>
              <h5>List of gaming Discord servers</h5>
              <p class="text-muted">
                Tired of finding servers for the game which you play? We list the Discord gaming servers at one place for you!
              </p>
            </div>
          </div>
        </div>
      </div>

      <!--blogs section-->
<section class="py-7" id="blog">
  <div class="container">
      <div class="row">
          <div class="col-md-6 mx-auto text-center" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-200px;">
              <h2 class="heading-black">Blogs from Devs</h2>
              <p class="text-muted lead">What's going on?</p>
          </div>
      </div>
      <div class="row mt-5">
          <div class="col-md-4" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-200px;">
              <div class="card">
                  <a href="#">
                      <img class="card-img-top img-raised" src="blog_images/PSY.jpg" alt="Blog 1">
                  </a>
                  <div class="card-body">
                      <a href="#" class="card-title mb-2"><h5>Story Of Simar 'PSY' Sethi</h5></a>
                      <p class="text-muted small-xl mb-2">Sep 27, 2019</p>
                      <p class="card-text">Simar started his gaming career in 2013 from Mumbai with DOTA 2. Then he shifted to Delhi and that is where his real journey began...
                         <a href="#">Learn more</a></p>
                  </div>
              </div>
          </div>
          <div class="col-md-4" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-200px;">
              <div class="card">
                  <a href="#">
                      <img class="card-img-top img-raised" src="blog_images/ankit_panth.jpg" alt="Blog 2">
                  </a>
                  <div class="card-body">
                      <a href="#" class="card-title mb-2"><h5>Ankit 'V3NOM' Panth</h5></a>
                      <p class="text-muted small-xl mb-2">August 16, 2019</p>
                      <p class="card-text">V3nom started gaming in a café in Kandivali, a suburb of the city of Mumbai. The enthusiasm he saw when people played...
                        <a href="#">Learn more</a></p>
                  </div>
              </div>
          </div>
          <div class="col-md-4" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:200px;">
              <div class="card">
                  <a href="#">
                      <img class="card-img-top img-raised" src="blog_images/mortal.jpg" alt="Blog 3">
                  </a>
                  <div class="card-body">
                      <a href="#" class="card-title mb-2"><h5>Naman Mathur aka MortaL</h5></a>
                      <p class="text-muted small-xl mb-2">December 2nd, 2019</p>
                      <p class="card-text">Naman Mathur Popularly known as Mortal For Soul Mortal, Mortal Popular Indian Gamer and Streamer. Naman mathur is Creator Of channel Mortal...
                         <a href="#">Learn more</a></p>
                  </div>
              </div>
          </div>
      </div>
      <div class="row mt-6">
          <div class="col-md-6 mx-auto text-center" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-100px;">
              <a href="../blogs/loading.php" class="btn btn-primary">View all blogs</a>
          </div>
      </div>
  </div>
</section>



      <!--faq section-->
      <section class="py-7" id="faq">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mx-auto text-center" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-200px;"> 
              <h2>Frequently asked questions</h2>
              <p class="text-muted lead">Answers to most common questions.</p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-12 mx-auto">
              <div class="row">
                <div class="col-md-6 mb-5 text-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">
                  <h6>Can I try it for free?</h6>
                  <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming.</p>
                </div>
                <div class="col-md-6 mb-5 text-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">
                  <h6>Do you have hidden fees?</h6>
                  <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming.</p>
                </div>
                <div class="col-md-6 mb-5 text-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">
                  <h6>What are the payment methods you accept?</h6>
                  <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming.</p>
                </div>
                <div class="col-md-6 mb-5 text-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">
                  <h6>How often do you release updates?</h6>
                  <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming.</p>
                </div>
                <div class="col-md-6 mb-5 text-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">
                  <h6>What is your refund policy?</h6>
                  <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming.</p>
                </div>
                <div class="col-md-6 mb-5 text-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">
                  <h6>How can I contact you?</h6>
                  <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-6 mx-auto text-center" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-100px;">
              <h5 class="mb-4">Have questions?</h5>
              <a href="../contactus_aboutus/loading.php" class="btn btn-primary">Contact us</a>
            </div>
          </div>
        </div>
      </section>


      <!--footer-->
      <footer class="py-5">
        <div class="col-md-10 col-12 divider top-divider mx-auto pt-5 text-center"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-5 mr-auto">
              <h5>Follow us</h5>
              <p class="text-muted">
                This is a platform that is dedicated for gamers to take part in
                various communities.
              </p>
              <ul class="list-inline social social-sm">
                <li class="list-inline-item">
                  <a href=""><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href=""><i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href=""><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
            <div class="col-sm-2">
              <h5>Partnership</h5>
              <ul class="list-unstyled">
                <p><a href="#">Want to partner with us?</a></p>
              </ul>
            </div>
            <div class="col-sm-2">
              <h5>Help</h5>
              <ul class="list-unstyled">
              <p><a href="../contactus_aboutus/loading.php">Contact us</a></p>
                <p><a href="../signup_page/loading.php">Log in</a></p>
              </ul>
            </div>
          </div>
          <div class="col-12 text-muted text-center small-xl">
          <center><a href="#">Donate us!</a></center>
        </div>
          <div class="row mt-2">
            <div class="col-12 text-muted text-center small-xl">
              &copy; 2020 Threshold Gaming - All Rights Reserved
            </div>
          </div>
        </div>
      </footer>
      </article>
    

    <!--scroll to top-->
    <div class="scroll-top">
      <i class="fas fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.6/lib/darkmode-js.min.js"></script>
    <script src="js/script.js"></script> -->

    <!-- scrolling transitions -->
    <script src="js/skrollr.js"></script>
    <script type="text/javascript">
        var s = skrollr.init();
    </script>
    </cursor>
  </body>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  <script src="https://unpkg.com/zdog@1/dist/zdog.dist.min.js"></script>
  <script src="js/mario.js"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="jQuery.progressBar.js"></script>
  <script> 
    $("article").progressBar({
      throttleTime: 100,
      debounceTime: 200,
      progressBarHeight: 15,
      progressBarColor: "#34495E",
      progressBarValueColor: "cyan",
    });
  </script> -->
</html>
