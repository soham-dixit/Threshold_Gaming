<?php ?>
<html>
  <head>
  <title>Threshold Gaming - Sign in</title>
    <link rel="stylesheet" href="loading.css" />
    <!-- Favicon -->
  <link rel='icon' href='../landing_page/logo.png' type='image/png'/>
  </head>
  <body>
    <div class="loader">
      <img src="pac.gif" width="30%" class="center" />
    </div>
  </body>
  <script type="text/javascript">
    window.addEventListener("load", function () {
      const loader = document.querySelector(".loader");
      loader.className += " hidden";
    });
    // location.replace("index.html");
    setTimeout(function () {
      location.replace("index.php");
    }, 2000);
  </script>
</html>

