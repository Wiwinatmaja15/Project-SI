<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
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
      <h1 class=""><a href="<?=base_url();?>assets/index.html">CONTACT</a></h1>
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
          <li><a href="<?=base_url();?>contacts.html">contact</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </header>    <!-- Slider -->
    <div class="mp-slider">
      <ul class="items">
        <li><img src="<?=base_url();?>assets/images/10.jpg" alt="">
          <div class="banner"><span class="row-1"><b></b> </span><span class="row-2">CONTACT <b></b></span></div>
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
          <div class="wrapper">
            <div class="col-11">
              <h3>Postal address</h3>
              <div class="map_container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63182.64143492131!2d115.15672872751087!3d-8.21129403429877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd18c2a4ca2b16b%3A0x5030bfbca830810!2sLemukih%2C%20Sawan%2C%20Buleleng%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1607922000427!5m2!1sen!2sid"></iframe>
              </div>
              <div class="adress">
                <div class="dt">  </div>
                <div class="extra-wrap">
                  <div class="dd">Telephone: +6281939008767</div>
                  <div class="dd">E-mail: <a href="#">wiwinatmaja@gmail.com</a></div>
                  <div class="dd">Skype: <a href="#">@skypename</a></div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <h3>Feedback</h3>
              <form action="#" id="contact-form" method="post">
                <fieldset>
                  <label class="name">
                    <input type="text" value="Your Name" onFocus="if(this.value=='Your Name'){this.value=''}" onBlur="if(this.value==''){this.value='Your Name'}">
                  </label>
                  <label class="phone">
                    <input type="text" value="Telephone" onFocus="if(this.value=='Telephone'){this.value=''}" onBlur="if(this.value==''){this.value='Telephone'}">
                  </label>
                  <label class="email">
                    <input type="email" value="Email" onFocus="if(this.value=='Email'){this.value=''}" onBlur="if(this.value==''){this.value='Email'}">
                  </label>
                  <label class="message">
                    <textarea onFocus="if(this.value=='Message'){this.value=''}" onBlur="if(this.value==''){this.value='Message'}">Message</textarea>
                  </label>
                  <div class="btns"> <a class="button">Clear</a> <a class="button">Send</a> </div>
                </fieldset>
              </form>
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
