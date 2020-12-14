<!DOCTYPE html>
<html lang="en">
<head>
<title>Wisata</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/prettyPhoto.css">
<script src="<?=base_url();?>assets/js/jquery-1.7.1.min.js"></script>
<script src="<?=base_url();?>assets/js/superfish.js"></script>
<script src="<?=base_url();?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?=base_url();?>assets/js/tms-0.4.1.js"></script>
<script src="<?=base_url();?>assets/js/slider.js"></script>
<script src="<?=base_url();?>assets/js/jquery.prettyPhoto.js"></script>
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
          <div class="banner"><span class="row-1"><b></b> </span><span class="row-2">WISATA <b></b></span></div>
        </li>
        <li><img src="<?=base_url();?>assets/images/12.jpg" alt="">
          <div class="banner"><span class="row-1"><b></b> </span><span class="row-2"> <b></b></span></div>
        </li>

      </ul>
      <a href="#" class="mp-prev"></a> <a href="#" class="mp-next"></a> </div>
    <!-- Content -->
    <section id="content">
      <div class="container_12">
        <article class="a2">
          <h3>Galery wisata</h3>
          <div class="wrapper">
            <div class="col-1">
              <figure class="img-box"> <a href="<?=base_url();?>assets/images/image-blank.png" class="lightbox-image" data-gal="prettyPhoto[1]"> <img src="<?=base_url();?>assets/images/15.jpg" alt=""> </a> </figure>
              <div class="gallery-meta"> <a href="#" class="gallery-name">Desa Lemukih</a> <span class="capacity"></span> </div>
            </div>
            <div class="col-1">
              <figure class="img-box"> <a href="<?=base_url();?>assets/images/image-blank.png" class="lightbox-image" data-gal="prettyPhoto[1]"> <img src="<?=base_url();?>assets/images/16.jpg" alt=""> </a> </figure>
              <div class="gallery-meta"> <a href="#" class="gallery-name">Waterfal</a> <span class="capacity"></span> </div>
            </div>
            <div class="col-2">
              <figure class="img-box"> <a href="<?=base_url();?>assets/images/image-blank.png" class="lightbox-image" data-gal="prettyPhoto[1]"> <img src="<?=base_url();?>assets/images/17.jpg" alt=""> </a> </figure>
              <div class="gallery-meta"> <a href="#" class="gallery-name">Desa Lemukih</a> <span class="capacity"></span> </div>
            </div>
          </div>
          <div class="wrapper">
            <div class="col-1">
            <figure class="img-box"> <a href="<?=base_url();?>assets/images/image-blank.png" class="lightbox-image" data-gal="prettyPhoto[1]"> <img src="<?=base_url();?>assets/images/18.jpg" alt=""> </a> </figure>
              <div class="gallery-meta"> <a href="#" class="gallery-name">Air Terjun Fiji</a> <span class="capacity"></span> </div>
            </div>
            <div class="col-1">
            <figure class="img-box"> <a href="<?=base_url();?>assets/images/image-blank.png" class="lightbox-image" data-gal="prettyPhoto[1]"> <img src="<?=base_url();?>assets/images/19.jpg" alt=""> </a> </figure>
              <div class="gallery-meta"> <a href="#" class="gallery-name">Lemukih Water Slide</a> <span class="capacity">(31 photos)</span> </div>
            </div>
            <div class="col-2">
            <figure class="img-box"> <a href="<?=base_url();?>assets/images/image-blank.png" class="lightbox-image" data-gal="prettyPhoto[1]"> <img src="<?=base_url();?>assets/images/20.jpg" alt=""> </a> </figure>
              <div class="gallery-meta"> <a href="#" class="gallery-name">Rumah Pohon Lemukih</a> <span class="capacity">(42 photos)</span> </div>
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
