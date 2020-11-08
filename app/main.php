<script src="https://unpkg.com/vue"></script>

<!-- The start page -->
<div class="bgimg-1 w3-display-container w3-white">
</div>
<div class="w3-display-middle" style="white-space:nowrap;">
  <div class="w3-center " data-aos="flip-down">
    <img class="logo-black-bears" src="./app/Photo/logo/black-bears-logo.png">
  </div>

</div>
</div>

<div class="w3-row w3-light-grey w3-center">
  <h2>BLOOD, SWEAT & NEWS</h2>
  <div class="w3-content w3-col m6 w3-container w3-center w3-padding-16" id="news" data-aos="fade-up">
    <!-- VK Widget -->
    <div id="vk_groups"></div>
  </div>
  <div class="w3-content w3-col m6 w3-container w3-center w3-padding-16" data-aos="fade-up">
    <div class="elfsight-app-a0559ba6-2697-4de9-860d-58bd112bb329"></div>
  </div>
</div>

<div class="w3-display-container w3-light-grey" data-aos="fade-up">

  



  <div class="w3-content w3-container w3-center">
    
    <!-- Tab links -->
  <div class="tab w3-center">
    <button class="tablinks active" onclick="openTableTab(event, 'super-league')"><h5>Суперлига-1</h5></button>
    <button class="tablinks" onclick="openTableTab(event, 'student-league')"><h5>Студенческая лига РЖД</h5></button>
  </div>
    <div id="robin-table" class="w3-content w3-container w3-center overflow-auto">
      <!-- Tab content -->
      <div id="super-league" class="tabcontent" style="display: block;">
        <table class="w3-table w3-striped w3-bordered w3-centered">
          <loader v-if="isLoading" object="#181716" color1="#ffffff" color2="#17fd3d" size="8" speed="2" bg="#343a40"
          objectbg="#999793" opacity="80" disableScrolling="false" name="dots"></loader>
          <tr>
            <td>Позиция</td>
            <td></td>
            <td>Команда</td>
            <td>Игры</td>
            <td>Победы</td>
            <td>Поражения</td>
            <td>Очки</td>
            <td>Процент побед</td>
          </tr>
          <tr v-for="(team, index) in positions" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamPlace }}</td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}"><img
                v-bind:src="GetTeamLogoSource(team.CompTeamName.TeamID, false)" class="table-logo" /></td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamName.CompTeamShortNameRu }} </td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamStandings[0].StandingGame }}</td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamStandings[0].StandingWin }}</td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamStandings[0].StandingLose }}</td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamStandings[0].StandingPoints }}</td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamStandings[0].VictoryPercent }}%</td>
          </tr>
        </table>
        
      </div>
      <div id='student-league' class="tabcontent">
        <table class="w3-table w3-striped w3-bordered w3-centered">
          <tr>
            <td>Позиция</td>
            <td></td>
            <td>Команда</td>
            <td>Игры</td>
            <td>Победы</td>
            <td>Поражения</td>
            <td>Очки</td>
            <td>Процент побед</td>
          </tr>
          <tr v-for="(team, index) in studentPositions" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamPlace }}</td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}"><img
                v-bind:src="GetTeamLogoSource(team.CompTeamName.TeamID, true)" class="table-logo" /></td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamName.CompTeamShortNameRu }} </td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamStandings[0].StandingGame }}</td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamStandings[0].StandingWin }}</td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamStandings[0].StandingLose }}</td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamStandings[0].StandingPoints }}</td>
            <td style="vertical-align: middle" :class="{ bbline: IsBlackBears(team.CompTeamName.TeamID )}">
              {{ team.CompTeamStandings[0].VictoryPercent }}%</td>
          </tr>
        </table>
      </div>
    </div>


  </div>
</div>



<div class="w3-display-container w3-light-grey">
  <div class="w3-content w3-container w3-center">
    <div data-aos="">
      <h3>МАТЧИ КОМАНДЫ</h3>
      <div id="matches" class="w3-content w3-container w3-center">
        <div v-for="(item, index) in matches" v-if="item.TeamAid === 100142 || item.TeamBid === 100142 || item.TeamAid === 6232 || item.TeamBid === 6232"
          class="carousel-card w3-card w3-padding-16 w3-margin-bottom w3-row slideshow-container w3-white">
          <loader v-if="isLoading" object="#181716" color1="#ffffff" color2="#17fd3d" size="8" speed="2" bg="#343a40"
          objectbg="#999793" opacity="0" disableScrolling="false" name="dots"></loader>
          <div class="w3-col m2">
            <a class="prev no_margin" v-on:click="CarouselMove(1)">&#10094;</a>
          </div>
          <div class="w3-col m2">
            <img v-bind:src="item.TeamLogoA" class="carousel-logo no_margin" />
          </div>
          <div class="w3-col m4 w3-center">
            <div>
              <h6><b>{{ item.LeagueNameRu }}</b></h6>
            </div>
            <div>{{ item.CompNameRu }}</div>
            <div>{{ item.DisplayDateTimeMsk }}</div>
            <div>
              <h6>{{ item.ShortTeamNameAru }} - {{ item.ShortTeamNameBru }}</h6>
            </div>
            <div>
              <h3 v-if="item.ScoreA !== null">{{ item.ScoreA }} : {{ item.ScoreB }}</h3>
            </div>
          </div>
          <div class="w3-col m2 w3-center">
            <img v-bind:src="item.TeamLogoB" class="carousel-logo no_margin" />
          </div>
          <div class="w3-col m2">
            <a class="next" v-on:click="CarouselMove(-1)">&#10095;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="w3-row w3-black">
  <div class="w3-content w3-container w3-center w3-padding-64" id="news" data-aos="fade-up">
    <iframe width="320" height="200" src="https://www.youtube.com/embed/02OBNNyVCic" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
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
    <a href="index.php?page=achievements" class="w3-button w3-section w3-light-grey">Все достижения</a>
  </div>

</div>