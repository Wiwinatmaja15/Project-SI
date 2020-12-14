<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
<script src="<?=base_url();?>assets/js/jquery-1.7.1.min.js"></script>
<script src="<?=base_url();?>assets/js/superfish.js"></script>
<script src="<?=base_url();?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?=base_url();?>assets/js/tms-0.4.1.js"></script>
<script src="<?=base_url();?>assets/js/slider.js"></script>
<script src="<?=base_url();?>assets/js/jquery.cycle.all.min.js"></script>
<script>
$(function(){
	$('.content-slider').cycle({
		fx: 'fade',
		prev: '.cs-prev',
		next: '.cs-next'
	}); 
})
</script>
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
      <h1 class=""><a href="<?=base_url();?>assets/index.html">Wisata Lemukih</a></h1>
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
          <div class="banner"><span class="row-1"><b></b> </span><span class="row-2">About Us <b></b></span></div>
        </li>
        <li><img src="<?=base_url();?>assets/images/12.jpg" alt="">
          <div class="banner"><span class="row-1"><b></b> </span><span class="row-2"> <b></b></span></div>
        </li>

      </ul>
      <a href="#" class="mp-prev"></a> <a href="#" class="mp-next"></a> </div>
    <!-- Content -->
    <section id="content">
      <div class="container_12">
      <article class="a1">
      <div class="wrapper">
            <figure class="img-box img-indent-1"> <img src="<?=base_url();?>assets/images/13.jpg" alt=""> </figure>
            <div class="extra-wrap">
              <h3> Tentang Kami  </h3>
              <p class="p2">Lemukih-  5 januari 2020 Pemerintah desa Lemukih Mengadakan Musyawarah Tentang Laporan Pertanggung Jawaban Realisasi Pelaksanaan Anggaran Pendapatan dan Belanja Desa Tahun anggaran 2019 yang juga di hadiri oleh Perbekel & Perangkat Desa, Ketua dan Anggota BPD, ketua dan anggota LPM, Tim Penggerak PKK, Kelian Desa Adat Lemukih, Kelian Banjar Dinas Se- Desa Lemukih, BUMDES, Babinsa dan Babinkabtibmas Desa Lemukih. </p>
              <p class="p1"> Musyawarah Desa ini didampingi Oleh Ketut Budiarta selaku Perbekel Desa Lemukih, dan dilanjutkan dengan penyampaian Laporan Realisasi Pertanggung jawaban APBDes tahun 2019 Oleh sekretaris desa Lemukih. </p>
            </div>
          </div>
        </article>
        <article class="content-box">
          <div class="wrapper">
            <div class="col-3 relative">
              <h3 class="hp-1">Testimonials</h3>
              <div class="content-slider">
                <section>
                  <blockquote class="quote-1">
                    <p class="p3">Desa Lemukih menyediakan wisata budaya dan kesenian. Suasana pedesaan, hingga persawahan yang masih luas dan hijau, akan memanjakan mata dan membuat fikiran menjadi segar kembali.
                    Banyak sekali kegiatan yang dapat kamu lakukan di Lemukih, seperti berkunjung ke Fiji Waterfall, bermin ayunan yang berada tepat di atas Fiji Waterfall, bersantai  di warung-warung yang berada di sepanjang jalan menuju air terjun dan menikmati indahnya bentangan sawah yang membuat otak dan fikiran fresh kembali. </p>
                    <a href="#"></a> </blockquote>
                </section>
              </div>
              <a class="cs-prev"></a> <a class="cs-next"></a> </div>
            <div class="col-4">
              <h3 class="hp-1">AIR TERJUN</h3>
              <div class="wrapper">
                <div class="col-1">
                  <figure class="img-box"> <img src="<?=base_url();?>assets/images/21.jpg" alt=""> </figure>
                  <h5>Waterfall fiji</h5>
                  <p> </p>
                </div>
                <div class="col-2">
                  <figure class="img-box"> <img src="<?=base_url();?>assets/images/7.jpg" alt=""> </figure>
                  <h5>Waterfall fiji</h5>
                  <p> </p>
                </div>
              </div>
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
