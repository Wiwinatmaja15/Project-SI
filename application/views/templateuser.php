<!DOCTYPE html>
<html lang="en">
<head>
<title>Pariwisata</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
<script src="<?=base_url();?>assets/js/jquery-1.7.1.min.js"></script>
<script src="<?=base_url();?>assets/js/superfish.js"></script>
<script src="<?=base_url();?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?=base_url();?>assets/js/tms-0.4.1.js"></script>
<script src="<?=base_url();?>assets/js/slider.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<div class="main-indents">
  <div class="main">
    <!-- Header -->
    <header>
      <h1 class=""><a href="<?=base_url();?>assets/index.html">Wisata Lemukih  </a></h1>
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="<?=site_url("Frontend/index");?>">home</a></li>
          <li><a href="<?=site_url("Frontend/about");?>">About</a></li>
          <li> <a href="<?=base_url();?>gallery.html">Jenis</a>
            <ul>
              <li><a href="<?=site_url("Frontend/wisata");?>">Wisata</a></li>
              <li><a href="<?=site_url("Frontend/hotel");?>">Hotel</a></li>
                <ul>
                </ul>
              </li>
              
            </ul>
          </li>
          <li><a href="<?=base_url();?>contacts.html">contacts</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </header>
    <!-- Slider -->
    <div class="mp-slider">
      <ul class="items">
        <li><img src="<?=base_url();?>assets/images/10.jpg" alt="">
          <div class="banner"><span class="row-1"><b></b> </span><span class="row-2">LEMUKIH <b></b></span></div>
        </li>
        <li><img src="<?=base_url();?>assets/images/12.jpg" alt="">
          <div class="banner"><span class="row-1"><b></b> </span><span class="row-2">WISATA  <b></b></span></div>
        </li>

      </ul>
      <a href="#" class="mp-prev"></a> <a href="#" class="mp-next"></a> </div>
    <!-- Content -->
    <section id="content">
      <div class="container_12">
        <article class="a1">
          <div class="wrapper"> <img src="<?=base_url();?>assets/images/1.jpg" alt="" class="img-indent">
            <div class="extra-wrap">
              <h3> <span class="welcome">Welcome</span>Website Wisata Desa Lemukih </h3>
              <p class="p1"> Memiliki banyak tempat wisata, dan pengelolaan tempat wisata yang benar-benar baik. Membuat Bali menjadi destinasi wisata yang harus kamu kunjungi, Salah satunya adalah DESA LEMUKIH, Desa Lemukih adalah salah satu desa yang terletak di Kecamatan Sawan, Kabupaten Buleleng-Bali,
              Desa Lemukih menyediakan wisata budaya dan kesenian. Suasana pedesaan, hingga persawahan yang masih luas dan hijau, akan memanjakan mata dan membuat fikiran menjadi segar kembali. </p>
            </div>
          </div>
        </article>
        <article class="content-box">
          <h3 class="hp-1">Tempat Wisata:</h3>
          <div class="wrapper">
            <div class="col-1">
              <figure class="img-box"> <img src="<?=base_url();?>assets/images/2.jpg" alt=""> </figure>
              <h5><span>Cemara Green View Wisata Selfie Baru di Lemukih </span> </h5>
              <p>Trend selfi dikalangan masyarakat nampaknya berdampak terhadap perkembangan objek wisata di buleleng. Camera Green View Terletak di desa Lemukih kecamatan sawan
              salah satu keunggulan dari tempat selfi ini adalah kita bisa menikmati indahnya sunset pada senja hari dan juga menikmati sejuknya udara perdesaan </p>
            </div>
            <div class="col-1">
              <figure class="img-box"> <img src="<?=base_url();?>assets/images/3.jpg" alt=""> </figure>
              <h5><span>Air Terjun Fiji Lemukih </span> </h5>
              <p> Air Terjun Lemukih Bali mungkin sedikit berbeda dengan air terjun yang ada disini. Ketika anda datang ke air terjun ini, maka anda tidak hanya menemui satu air terjun saja, melainkan terdapat tiga air terjun sekaligus. Ketiga pemdangan air terjun tersebut didampingi dengan pemandangan hutan dan pepohonan hijau yang ada disekitarnya.. </p>
            </div>
            <div class="col-2">
              <figure class="img-box"> <img src="<?=base_url();?>assets/images/4.jpg" alt=""> </figure>
              <h5><span>Lemukih Water Slide Perosotan Air Alami </span> </h5>
              <p> Salah satu tempat yang rekomended untuk ber- perosotan air (waterslide) terletak di Desa Lemukih yang sangat kaya akan potensi alam, pemandangan indah dengan suasana alam pedesaan yang masih asli.  
              Disekitar daerah disebut diatas terdapat perosotan alam sepanjang 45 meteran, dimana biasanya dulu dipakai tempat bermain annak - anak di desa tersebut, namun kini telah dikenalkan ke masyrakat luas sebagai tempat  tempat tujuan perosotan air (waterslide) alami  selain air terjun yang ada. </p>
            </div>
          </div>
        </article>
      </div>
    </section>
    <!-- Footer -->
    <footer>
      <div class="copyright"> Website Desa Lemukih by <a target="_blank" href="">wiwinatmaja.com</a> </div>
      <ul class="social-list">
        <li><a href="#"><img src="<?=base_url();?>assets/images/soc-icon-1.png" alt=""></a></li>
        <li><a href="#"><img src="<?=base_url();?>assets/images/soc-icon-2.png" alt=""></a></li>
        <li><a href="#"><img src="<?=base_url();?>assets/images/soc-icon-3.png" alt=""></a></li>
      </ul>
    </footer>
  </div>
</div>
</body>
</html>
