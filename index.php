<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="./app/style/main.css">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>

  <div class="topnav w3-bar" id="myTopnav">
    <a href="index.php" class="w3-button"><i class="fa fa-home fa-2x"></i></a>

    <div class="dropdown">
      <button class="dropbtn w3-button">О команде
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="index.php?page=team" class="w3-button">Основная команда</a>
        <a href="index.php?page=student-team" class="w3-button">Студенческая команда</a>
        <a href="index.php?page=history" class="w3-button">История</a>
        <a href="index.php?page=achievements" class="w3-button">Достижения команды</a>
      </div>
    </div>

    <a href="index.php?page=media" class="w3-button w3-hide-small"><i class="fa fa-th"></i> Медиа</a>
    <a href="index.php?page=contacts" class="w3-button w3-hide-small"><i class="fa fa-envelope"></i> Контакты</a>
    <!-- <a href="#" class="w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a> -->
    <a href="#" style="font-size:20px;" class="icon" onclick="toggleMobileMenu()"><i class="fa fa-bars fa-1x"></i></a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-text-white w3-hide w3-hide-large w3-hide-medium menu-color">
    <a href="index.php?page=team" class="w3-bar-item w3-button" onclick="">Основная команда</a>
    <a href="index.php?page=student-team" class="w3-bar-item w3-button" onclick="">Студенческая команда</a>
    <a href="index.php?page=history" class="w3-bar-item w3-button" onclick="">История</a>
    <a href="index.php?page=media" class="w3-bar-item w3-button">Медиа</a>
    <a href="index.php?page=contacts" class="w3-bar-item w3-button">Контакты</a>
    <a href="index.php?page=achievements" class="w3-bar-item w3-button">Достижения команды</a>
  </div>

  <?php
$page = $_GET["page"];

if (!isset($page)) {
    require './app/main.php';
} elseif ($page == "team") {
    require './app/team.php';
} elseif ($page == 'media') {
    require './app/media.php';
} elseif ($page == 'contacts') {
    require './app/contacts.php';
} elseif ($page == 'student-team') {
    require './app/student-team.php';
} elseif ($page == 'history') {
    require './app/history.php';
} elseif ($page == 'achievements') {
    require './app/achievements.php';
}

?>
<pulse-loader :loading="loading" :color="color" :size="size"></pulse-loader>
  <div class="w3-row w3-center w3-white w3-padding-16" data-aos="fade-up">
    <div class="w3-quarter w3-section ">
      <img class="logo-restriction" src="./app/Photo/Additional/Политех полный лого.png">
    </div>
    <div class="w3-quarter w3-section">
      <img class="logo-restriction" src="./app/Photo/Additional/РФБ лого.png">
    </div>
    <div class="w3-quarter w3-section">
      <img class="logo-restriction" src="./app/Photo/Additional/Logo_FBP.png">
    </div>
    <div class="w3-quarter w3-section logo-restrictions">
      <img class="logo-restriction" src="./app/Photo/Additional/asb-vk-logo.jpg">
    </div>

  </div>



  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Наверх</a>
    <div class="w3-xlarge w3-section">
      <a href="https://vk.com/blackbearspolytech" target="_blank"><i class="fa fa-vk w3-hover-opacity"></i></a>
      <a href="https://www.instagram.com/blackbearspolytech/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
      <a href="https://www.youtube.com/channel/UCo6bFQxmow4rn0-Cmfl6BPA" target="_blank"><i class="fa fa-youtube w3-hover-opacity"></i></a>
    </div>
  </footer>

  <script src="https://apps.elfsight.com/p/platform.js" defer></script>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
function toggleMobileMenu() {
    var x = document.getElementById("navDemo");
    let logo = document.getElementsByClassName("logo-black-bears")[0];
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        logo.className += " w3-hide"
    } else {
        x.className = x.className.replace(" w3-show", "");
        logo.className = logo.className.replace(" w3-hide", "");
    }
}
  </script>
  <script>
    
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init({
      easing: 'ease-out-back',
      duration: 700,
      delay: 300,
      once: false,
      disable: 'mobile'
    });
  </script>

  <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>
  <script type="text/javascript">
    VK.Widgets.Group("vk_groups", { mode: 4, width: "auto", no_cover: 1, height: "700" }, 76018378);
  </script>

<script src="https://unpkg.com/vue-ui-preloader"></script>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/vue-ui-preloader/dist/loader.css">

<script>
  Vue.use(loader);

    var app = new Vue({
      el: '#robin-table',
      data: {
        info: {},
        matches:{},
        cards:[],
        currentCarouselCard: 0,
        positions:{},
        logo: "",
        errors:[],
        isLoading: true
      },   

      created() {
        this.fetchInfo();
      },

      updated(){
          this.AddLogoData();

      },

      methods: {
        fetchInfo(){
          axios
          .get('http://org.infobasket.ru/Widget/RoundRobin/35070?format=json')
        .then(response => { this.positions = response.data; this.isLoading = false; })
        .catch(e => { this.errors.push(e) })

        },

        AddRoundRobinClass(){
          document.getElementsByClassName('round-robin')[0].className += " w3-table w3-striped w3-bordered";
        },

        GetTeamLogoSource(teamId){
          let logoSource = "";

          logoSource = "http://org.infobasket.ru/Widget/GetTeamLogo/"+teamId  ;
          return logoSource;
        },

        AddLogoData(){

          let pos = this.positions;
          pos.forEach(el => {
            el.logo = this.GetTeamLogoSource(el.CompTeamName.TeamID);
          });

          this.positions = pos;

        },

        IsBlackBears(team){

          if(team === 100142){
            return true;
          }
          else {
            return false;
          }
        }


        }

    })
  </script>

  <script>
Vue.use(loader);

    var matches = new Vue({
      el: '#matches',
      data: {
        matches:{},
        cards:[],
        bearsMatches:[],
        currentCarouselCard: 0,
        todayGame: false,
        foundGame: false,
        isLoading:true
      },

      components:{
          loader:loader
        },

      created() {
        this.fetchInfo();
      },

      updated(){
          this.GetAllCarouselCards();
          this.HideCards();
      },

      methods: {
        fetchInfo(){

        axios
        .get('https://org.infobasket.ru/Widget/CalendarCarousel/35070?&max=100&format=json')
        .then(response => { this.matches = response.data; this.isLoading = false; this.matches.sort((a, b) => a.GameDateInt - b.GameDateInt) })
        .catch(e => { this.error.push(e) })
        },

        GetAllCarouselCards(){
          this.cards = document.getElementsByClassName('carousel-card');
          this.bearsMatches = this.matches.filter(bears => bears.TeamAid === 100142 || bears.TeamBid === 100142);
        },

        HideCards(){

          this.currentCarouselCard = 0;

          var today = new Date();
          var dd = String(today.getDate()).padStart(2, '0');
          var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
          var yyyy = today.getFullYear();
          var DateString = yyyy + mm + dd;
          var DateInt =  Number(DateString);


          for( let index = 0; index <= this.cards.length; index++){

            if(this.bearsMatches[index].GameDateInt < DateInt){
              this.cards[index].className += " card-hide";
            }
            else if(this.bearsMatches[index].GameDateInt === DateInt){
              this.currentCarouselCard = index;
              this.todayGame = true;
              this.foundGame = true;
              this.cards[index].className += " flex-center-align";
            }
            else if(this.bearsMatches[index].GameDateInt > DateInt){

              if(!this.foundGame){
                this.currentCarouselCard = index;
                this.foundGame = true;
                this.cards[index].className += " flex-center-align";
              } else {
                this.cards[index].className += " card-hide";
              }

            }
 
          } 
          
        },

        FakeScroll(){
          window.scrollBy(0,1);
          window.scrollBy(0,-1);
        },

        CarouselMove(step){

          let newCard = 0;
          let Moved = false;

          if(step === -1){

            if (this.currentCarouselCard < this.cards.length - 1){
              newCard = this.currentCarouselCard + 1;
              Moved = true;
            }

          } else if(step === 1){

            if(this.currentCarouselCard > 0){
              newCard = this.currentCarouselCard - 1;
              Moved = true;
            }
          }

          if(Moved){
           //Текущую карточку из карусели необходимо спрятать
           this.cards[this.currentCarouselCard].className = "carousel-card w3-card w3-padding-16 w3-margin-bottom w3-row slideshow-container card-hide";
           this.cards[newCard].className = "carousel-card w3-card w3-padding-16 w3-margin-bottom w3-row slideshow-container flex-center-align";
           this.FakeScroll();
           this.currentCarouselCard = newCard;
          }

        }
      }
    })
    </script>

    <script>

    Vue.use(loader);

     var squadMain = new Vue({
        el: '#mainsquad',
        data: {
         squad:{},
         errors:[],
         isLoading: true
        },
        components: {
          loader: loader
        },

    created() {
      this.fetchInfo();
    },

    methods: {
      fetchInfo(){

      axios
      .get('http://org.infobasket.ru/Widget/TeamRoster/100142?CompID=35070&format=json')
      .then(response => { this.squad = response.data; this.isLoading = false;})
      .catch(e => { this.error.push(e) })
      },
      GetPersonPhotoSource(personID){
        return 'http://org.infobasket.ru/Widget/GetPersonPhoto/' + personID;
      }
    }
  });
    </script>

<script>
     var squadStudent = new Vue({
        el: '#studentsquad',
        data: {
         squad:{},
         errors:[],
         isLoading: true
        },
        components: {
          loader: loader
        },

    created() {
      this.fetchInfo();
    },

    methods: {
      fetchInfo(){

      axios
      .get('http://asb.infobasket.ru/Widget/TeamRoster/6232?CompID=43541&format=json')
      .then(response => { this.squad = response.data; this.isLoading = false; })
      .catch(e => { this.error.push(e) })
      },
      GetPersonPhotoSource(personID){
        return 'http://asb.infobasket.ru/Widget/GetPersonPhoto/' + personID;
      }
    }
  });
    </script>

<script>
    var media = new Vue({
      el: '#media',
      data: {
        photos:[
          [ 
            { url: "./app/Photo/media1.jpg" },
            { url: "./app/Photo/media2.jpg" },
            { url: "./app/Photo/media3.jpg" },
            { url: "./app/Photo/media4.jpg" },
          ],
          [ 
            { url: "./app/Photo/media5.jpg" },
            { url: "./app/Photo/media6.jpg" },
            { url: "./app/Photo/media7.jpg" },
            { url: "./app/Photo/media8.jpg" },
          ],
          [ 
            { url: "./app/Photo/media9.jpg" },
            { url: "./app/Photo/media10.jpg" },
            { url: "./app/Photo/media11.jpg" },
            { url: "./app/Photo/media12.jpg" },
          ],
          [ 
            { url: "./app/Photo/media13.jpg" },
            { url: "./app/Photo/media14.jpg" },
            { url: "./app/Photo/media15.jpg" },
            { url: "./app/Photo/media16.jpg" },
          ],
        ],
        visiblePhotos: [],
        currentBlocks: 1,
        errors:[],
        isLoading: false
      },

      components: {
        loader: loader
      },

      created() {
        this.init();
      },

      updated(){
      },

      methods: {
        init(){
          this.visiblePhotos.push(this.photos[0]);
          this.visiblePhotos.push(this.photos[1]);
        },

        loadMorePhotos(){
          
          if(this.photos.length <= this.currentBlocks){
            return;
          }

          this.isLoading = true;
          setTimeout(()=>{ this.isLoading = false}, 1000);

          this.currentBlocks++;
          this.visiblePhotos.push(this.photos[this.currentBlocks]);
        }
      }

    })
  </script>


</body>

</html>