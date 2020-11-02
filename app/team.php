<div class="w3-display-container w3-light-grey">
  <div class="w3-content w3-container w3-center ">
    <div class="w3-margin-top" data-aos="fade-up">
      <h1>Состав команды</h1>
      <div id="mainsquad">
        <!-- Игроки -->
        <div v-for="(item, index) in squad.Players"
          class="w3-card-4 w3-padding-16 w3-margin-bottom w3-row slideshow-container w3-light-grey" data-aos="fade-right">

          <div class="w3-col m6 w3-center">
            <img v-bind:src="GetPersonPhotoSource(item.PersonID)" class="person-photo grey-shadow">
          </div>
          <div class="w3-col m6 w3-center">

            <div>
              <p class="person-text">{{ item.PersonInfo.PersonFullNameRu }} </p>
              <p v-if="item.DisplayNumber" class="person-number">#{{ item.DisplayNumber }}</p>
            </div>
            <p class="person-position">{{ item.Position }}</p>
            <div class="w3-container">
            <p>Возраст: {{ item.PersonInfo.Age }} 
            <br>Дата рождения: {{ item.PersonInfo.PersonBirth }}
            <!-- <br>Страна: {{ item.CountryName }}
            <br>Рост: {{ item.Height }}
            <p v-if="item.Rank">Разряд: {{ item.Rank }}</p> -->
            </div>
          </div>
          </div>
          
        
        <!-- Тренеры -->
        <h1>Тренерский состав</h1>
        <div v-for="(item, index) in squad.Coaches"
          class="w3-card w3-padding-16 w3-margin-bottom w3-row slideshow-container" data-aos="fade-right">

          <div class="w3-col s6 m6 w3-center">
            <img v-bind:src="GetPersonPhotoSource(item.PersonID)" class="person-photo grey-shadow">
          </div>
          <div class="w3-col s6 m6 w3-center">

            <div>
              <p class="person-text">{{ item.PersonInfo.PersonFullNameRu }} </p>
            </div>
            <p class="person-position">{{ item.Post }}</p>
            <div>Возраст: {{ item.PersonInfo.Age }} </div>
            <div>Дата рождения: {{ item.PersonInfo.PersonBirth }}</div>

            <div>Страна: {{ item.CountryName }}</div>
            <div v-if="item.Rank">Разряд: {{ item.Rank }}</div>
          </div>

        </div>


        <!-- Стафф -->
        <h1>Персонал</h1>
        <div v-for="(item, index) in squad.Staff"
          class="w3-card w3-padding-16 w3-margin-bottom w3-row slideshow-container" data-aos="fade-right">

          <div class="w3-col s6 m6 w3-center">
            <img v-bind:src="GetPersonPhotoSource(item.PersonID)" class="person-photo grey-shadow">
          </div>
          <div class="w3-col s6 m6 w3-center">

            <div>
              <p class="person-text">{{ item.PersonInfo.PersonFullNameRu }} </p>
            </div>
            <p class="person-position">{{ item.Post }}</p>
            <div>Возраст: {{ item.PersonInfo.Age }} </div>
            <div>Дата рождения: {{ item.PersonInfo.PersonBirth }}</div>

            <div>Страна: {{ item.CountryName }}</div>
            <div v-if="item.Rank">Разряд: {{ item.Rank }}</div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>


</div>
