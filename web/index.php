<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="../app/style/main.css">

</head>

<body>

  <div class="topnav w3-bar" id="myTopnav">
    <a href="#home" class="w3-button">Домой</a>

    <div class="dropdown">
      <button class="dropbtn w3-button">О команде
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#" class="w3-button">Основная команда</a>
        <a href="#" class="w3-button">Студенческая команда</a>
      </div>
    </div>


    <a href="#portfolio" class="w3-button w3-hide-small"><i class="fa fa-th"></i> Медиа</a>
    <a href="#contact" class="w3-button w3-hide-small"><i class="fa fa-envelope"></i> Контакты</a>
    <a href="#" class="w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
    <a href="#" style="font-size:15px;" class="icon" onclick="">&#9776;</a>
  </div>

  <?php
    require('../app/main.php')
  ?>


  <div class="w3-row w3-light-grey">
    <div class="w3-content w3-container w3-center w3-padding-64" id="news" data-aos="fade-up">
      <!-- VK Widget -->
      <div id="vk_groups"></div>
    </div>
  </div>

  

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Наверх</a>
    <div class="w3-xlarge w3-section">
      <a href="https://vk.com/blackbearspolytech" target="_blank">
        <i class="fa fa-envelope w3-hover-opacity"></i>
      </a>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
  </footer>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init({
      easing: 'ease-out-back',
      duration: 800,
      delay: 200,
      once: false,
      disable: 'mobile'
    });
  </script>

  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>
  <script type="text/javascript">
    VK.Widgets.Group("vk_groups", { mode: 4, width: "auto", no_cover: 1, height: "700" }, 76018378);
  </script>


</body>

</html>