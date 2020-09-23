<?php ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon -->
  <link rel='icon' href='../landing_page/logo.png' type='image/png'/>
    <title>Threshold Gaming - Sign in</title>
    <meta name="description" content="Register/Sign In" />

    <!--Inter UI font-->
    <link
      href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@700&display=swap"
      rel="stylesheet"
    />

    <!--vendors styles-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
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
    <link rel="stylesheet" href="default.css" id="theme-color" />
	   
		   
    <!-- Page css -->
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="css/styleacc.css">
     
     <!-- Custom Cursor -->
<style>       
*
{
cursor : url(../landing_page/cursors/swordcursor.png), default;
}
button:hover, a:hover, input:hover
{
cursor : url(../landing_page/cursors/swordcursor2.png), default !important;
}
</style>
  </head>
  <body>
   <!--navigation-->
    <section class="smart-scroll">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark">
          <a class="navbar-brand heading-black" href="../landing_page/loading.php">
            LOGO
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
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
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
              <li class="nav-item active">
                <a
                  class="nav-link page-scroll d-flex flex-row align-items-center text-primary"
                  href="../signup_page/loading.php"
                >
                  <em
                    data-feather="layout"
                    width="18"
                    height="18"
                    class="mr-2"
                  ></em>
                  Register/Sign in
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
 <!-- <section class="py-7 py-md-0 bg-hero" id="home">
      <div class="container">
        <div class="row vh-md-100">
          <div class="col-md-6 col-sm-10 col-12 mx-auto my-auto text-center">
            <h1 class="heading-black text-capitalize">
                    Register/sign In
            </h1>
		  </div>
		</div>
	  </div>
	</section>-->
 
 <section class="py-7 py-md-0 bg-hero" id="home">
      <div class="container">
        <div class="row vh-md-100">
          <div class="col-md-6 col-sm-10 col-12 mx-auto my-auto text-center">
<div class="align">
<div class="card">
  <div class="head">
    <div></div>
    <a id="login" class="selected" href="#login">Login</a>
    <a id="register" href="#register">Register</a>
    <div></div>
  </div>
  <div class="tabs">
    <form>
      <div class="inputs">
        <div class="input">
          <input placeholder="Username" type="text">
          <img src="img/user.svg">
        </div>
        <div class="input">
          <input placeholder="Password" type="password">
          <img src="img/pass.svg">
        </div>
        <label class="checkbox">
          <input type="checkbox">
          <span>Remember me</span>
        </label>
      </div>
      <button>Login</button>
    </form>
    <form>
      <div class="inputs">
        <div class="input">
          <input placeholder="Email" type="text">
          <img src="img/mail.svg">
        </div>
        <div class="input">
          <input placeholder="Username" type="text">
          <img src="img/user.svg">
        </div>
        <div class="input">
          <input placeholder="Password" type="password">
          <img src="img/pass.svg">
        </div>
      </div>
      <button>Register</button>
    </form>
  </div>
</div>
</div>
		</div>
	  </div>
	</section>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/index.js"></script>
</div>


  <!--footer-->
	 <footer class="py-6">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 mr-auto">
            <h5>About Gaming Community</h5>
            <p class="text-muted">
              This is a platform that is dedicated for gamers to take part in
              various communities.
            </p>
            <ul class="list-inline social social-sm">
              <li class="list-inline-item">
                <a href=""><i class="fa fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href=""><i class="fa fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href=""><i class="fa fa-instagram"></i></a>
              </li>
            </ul>
          </div>
          <div class="col-sm-2">
            <h5>Partnership</h5>
            <ul class="list-unstyled">
              <li><a href="#">Want to partner with us?</a></li>
            </ul>
          </div>
          <div class="col-sm-2">
            <h5>Help</h5>
            <ul class="list-unstyled">
              <li><a href="../contactus_aboutus/loading.php">Contact us</a></li>
              <li><a href="../contactus_aboutus/aboutloading.php">About us</a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-muted text-center small-xl">
            &copy; 2020 Threshold Gaming - All Rights Reserved
          </div>
        </div>
      </div>
    </footer>

    <!--scroll to top-->
    <div class="scroll-top">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
  <!-- <script>
    var loader = document.getElementById("loader");
    window.addEventListener("load", function () {
      loader.style.height = "100px";
      loader.style.width = "100px";
      loader.style.borderRadius = "50%";
      loader.style.visibility = "hidden";
    });
  </script> -->
 


  </body>
</html>
 