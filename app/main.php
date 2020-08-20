<script src="https://unpkg.com/vue"></script>

<!-- The start page -->
<div class="bgimg-1 w3-display-container w3-white" id="home">
  </div>
  <div class="w3-display-middle" style="white-space:nowrap;">
    <div class="w3-center " data-aos="flip-left">
      <img class="logo-black-bears" src="../app/Photo/logo/black-bears-logo.png">
    </div>

  </div>
</div>

<div class="w3-row w3-light-grey">
    <div class="w3-content w3-container w3-center w3-padding-64" id="news" data-aos="fade-up">
      <!-- VK Widget -->
      <div id="vk_groups"></div>
    </div>
</div>

<div class="w3-display-container w3-light-grey">
    <div class="w3-content w3-container w3-center">
      <h3>СУПЕРЛИГА-1</h3>
      <div id="robin-table" class="w3-content w3-container w3-center">
          <div v-html="info"></div>
      </div>
    </div>
</div>

<!-- <div class="w3-display-container w3-light-grey">
  <div class="w3-content w3-container w3-center"><h3>МАТЧИ</h3></div>
</div> -->


<div class="w3-row w3-black">
 <div class="w3-content w3-container w3-center w3-padding-64" id="news" data-aos="fade-up">
  <iframe width="800" height="450" src="https://www.youtube.com/embed/6q_dJpGyFcE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 </div>
</div>


<!-- Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
      <!-- <span class="w3-xxlarge w3-black w3-text-white">КОНТАКТЫ</span> -->
    </div>
  </div>

  <div class="w3-row w3-center w3-black w3-padding-16" data-aos="fade-right">
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">1Х</span><br>
      Серебряные призеры Суперлиги-2 Чемпионата России
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">2Х</span><br>
      Чемпионы России среди студентов
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">3Х</span><br>
      Чемпионы Высшего дивизиона «Санкт-Петербург» среди студентов
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">1Х</span><br>
      Чемпионы Студенческой Суперлиги среди студентов
    </div>

    <div class="w3-row w3-center">
     <a href="#" class="w3-button w3-section w3-light-grey">Все достижения</a>
    </div>

  </div>
