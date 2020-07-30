<?php ?>
<html>
  <head>
  <title>Threshold Gaming - About us</title>
    <link rel="stylesheet" href="aboutloading.css" />
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
      location.replace("aboutproject.php");
    }, 2000);
  </script>
</html>

