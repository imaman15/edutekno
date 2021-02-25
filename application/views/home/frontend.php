<!DOCTYPE html>
<html>
<title>EDUTEKNO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/w3.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontsRaleway.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets/sw/sweetalert2.css">
<link href='https://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("<?php echo base_url()?>assets/home/images/3.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>
  <?php $this->session->flashdata('welcome'); ?>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">EDUTEKNO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a style="text-decoration: none; " href="#home" class="w3-bar-item w3-button"><i class="fa fa-home"></i> BERANDA</a>
      <a style="text-decoration: none; " href="#tentang" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TENTANG</a>
      <a style="text-decoration: none; " href="#fitur" class="w3-bar-item w3-button"><i class="fa fa-th"></i> FITUR</a>
      <a style="text-decoration: none; " href="#kontak" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> KONTAK</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" style="float: right;"><i style="padding: 10px;" class="w3-large fa fa-close"></i></a>
  <a style="text-decoration: none; " href="#home" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-home"></i> BERANDA</a>
  <a style="text-decoration: none; " href="#tentang" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TENTANG</a>
  <a style="text-decoration: none; " href="#fitur" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-th"></i> FITUR</a>
  <a style="text-decoration: none; " href="#kontak" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> KONTAK</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-middle w3-text-white" style="margin-top:-3%; text-align: center;">
    <span class="w3-jumbo w3-hide-small">EDUTEKNO</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">EDUTEKNO</span><br>
    <span class="" style="font-size: 30px;">Belajar dimanapun dan kapanpun</span>
   
  </div> 

  <div class="w3-display-bottommiddle w3-large" style="padding-bottom: 130px; text-align: center;">
 <p>
      <a href="<?php echo base_url ('dosen/login')?>" class="w3-button w3-green w3-padding-large w3-large w3-margin-top w3-hover-opacity-off">Saya seorang Pengajar</a>
      <a href="<?php echo base_url ('login')?>" class="w3-button w3-blue w3-padding-large w3-large w3-margin-top w3-hover-opacity-off">Saya seorang Pelajar</a> 
    </p>
  </div>
</header>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="tentang">
  <h3 class="w3-center">TENTANG</h3>
  <p class="w3-center w3-large">EDUTEKNO adalah sistem pembelajaran yang digunakan sebagai sarana untuk proses belajar mengajar yang dilaksanakan tanpa harus bertatap muka secara langsung antara pengajar dengan pelajar. Dan juga EDUTEKNO dapat memberikan kemudahan untuk pembelajaran yang lebih efektif dan efisien. </p>
  <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="<?php echo base_url(); ?>assets/home/images/ss1.jpg" alt="Buildings" width="700" height="280">
  </div>
  <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="<?php echo base_url(); ?>assets/home/images/ss2.jpg" alt="Buildings" width="700" height="280">
  </div>

<!
<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">X</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>


<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="fitur">
  <h3 class="w3-center">FITUR</h3>
  <p class="w3-center w3-large">Fitur-fitur yang tersedia dalam EDUTEKNO</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-group w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Bergabung dalam kelas</p>
      <p>Pengajar dapat membuat kelas dan Pelajar dapat bergabung dengan kelas.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-upload w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Upload Berkas</p>
      <p>Dapat mengupload file materi dengan berbagai ekstensi.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-search w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Pencarian</p>
      <p>Berkas yang sudah diupload dapat dengan mudah dicari melalui fitur pencarian</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-commenting w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Diskusi</p>
      <p>Pengajar maupun pelajar dapat berdiskusi tentang materi melalui komentar pada postingan.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<!-- <div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>We know design.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="/w3images/phone_buildings.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div> -->


<!-- Work Section -->
<!-- <div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done for people</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_mic.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
    </div>
  </div>
</div> -->

<!-- Modal for full size images on click-->
<!-- <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
 -->
<!-- Skills Section -->
<!-- <div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div> -->

<!-- Pricing Section -->
<!-- <div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>PRICING</h3>
  <p class="w3-large">Choose a pricing plan that fits your needs.</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
</div> -->

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="kontak">
  <h3 class="w3-center">KONTAK</h3>
  <p class="w3-center w3-large">Kirim Kritik &#38; Saran</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Serang, Banten</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> No Handphone: +62 895328290858</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: EduTekno@gmail.com</p>
      <br>
      <form action="<?php echo base_url(); ?>home/insert" method="post">
        <p><input class="w3-input w3-border" type="text" name="nama" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" name="email" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" name="subjek" placeholder="Subjek" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" name="pesan" placeholder="Pesan" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit" name="submit">
            <i class="fa fa-paper-plane"></i> KIRIM PESAN
          </button>
        </p>
      </form>
    </div>
    <div class="w3-half">
      <!-- Add Google Maps -->
      
        <iframe style="width:100%;height:510px;padding-right: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.315630687994!2d106.13033831420321!3d-6.088111761420934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418ad8721f55b1%3A0x661c08d7d1609ee7!2sUniversitas+Serang+Raya!5e0!3m2!1sid!2sid!4v1526907650339" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-indigo"><i class="fa fa-arrow-up w3-margin-right"></i>Kembali ke atas</a>
  <p>© 2018 EDUVISION. All rights reserved </a></p>
</footer>
 <script type="text/javascript" src="<?php echo base_url();?>assets/assets/sw/sweetalert2.min.js"></script> 
<!-- Add Google Maps -->
<script>
// function myMap()
// {
//   myCenter=new google.maps.LatLng(41.878114, -87.629798);
//   var mapOptions= {
//     center:myCenter,
//     zoom:12, scrollwheel: false, draggable: false,
//     mapTypeId:google.maps.MapTypeId.ROADMAP
//   };
//   var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

//   var marker = new google.maps.Marker({
//     position: myCenter,
//   });
//   marker.setMap(map);
// }

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
