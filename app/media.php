<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" data-aos="fade-up" id="portfolio">
    <h3 class="w3-center">МЕДИА</h3>
    <p class="w3-center"><em>Фотографии с мероприятий.<br> (нажмите чтобы увеличить)</em></p><br>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-row-padding w3-center">
      <div class="w3-col m3">
        <img src="../app/Photo/media1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>

      <div class="w3-col m3">
        <img src="../app/Photo/media2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>

      <div class="w3-col m3">
        <img src="../app/Photo/media10.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>

      <div class="w3-col m3">
        <img src="../app/Photo/media4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
    </div>

    <div class="w3-row-padding w3-center w3-section">
      <div class="w3-col m3">
        <img src="../app/Photo/media5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>

      <div class="w3-col m3">
        <img src="../app/Photo/media6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>

      <div class="w3-col m3">
        <img src="../app/Photo/media7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>

      <div class="w3-col m3">
        <img src="../app/Photo/media11.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
      <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">ЗАГРУЗИТЬ ЕЩЕ</button>
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