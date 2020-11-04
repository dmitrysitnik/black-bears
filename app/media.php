<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" data-aos="fade-up" id="portfolio">
  <h3 class="w3-center">МЕДИА</h3>
  <p class="w3-center"><em>Фотографии с мероприятий.<br> (нажмите чтобы увеличить)</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div id="media" class="w3-center">
    <div v-for="(item, index) in visiblePhotos">
      
      <div class="w3-row-padding w3-center w3-section">
        
        <div class="w3-col m3">
          <img v-bind:src="item[0].url" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"/>
        </div>

        <div class="w3-col m3">
          <img v-bind:src="item[1].url" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"/>
        </div>

        <div class="w3-col m3">
          <img v-bind:src="item[2].url" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"/>
        </div>

        <div class="w3-col m3">
          <img v-bind:src="item[3].url" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"/>
        </div>
      </div>
    </div>

    <div>
      <loader v-if="isLoading" object="#181716" color1="#ffffff" color2="#17fd3d" size="8" speed="5" bg="#343a40" objectbg="#999793" opacity="0" disableScrolling="false" name="dots"></loader>
    </div>
    <button v-on:click="loadMorePhotos()" class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">ЗАГРУЗИТЬ ЕЩЕ</button>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i
      class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
</div>

<script>
  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }
</script>