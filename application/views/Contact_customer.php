<!DOCTYPE HTML>
<head>
<title>OlshopCosmetik_Renii | Contact</title>
<meta charset="utf-8">
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/menu/css/simple_menu.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/nivo-slider.css" type="text/css" media="screen">
<!-- JS Files -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/js/slides/slides.min.jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/cycle-slider/cycle.js"></script>
<script src="<?php echo base_url();?>assets/js/nivo-slider/jquery.nivo.slider.js"></script>
<script src="<?php echo base_url();?>assets/js/tabify/jquery.tabify.js"></script>
<script src="<?php echo base_url();?>assets/js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url();?>assets/js/twitter/jquery.tweet.js"></script>
<script src="<?php echo base_url();?>assets/js/scrolltop/scrolltopcontrol.js"></script>
<script src="<?php echo base_url();?>assets/js/portfolio/filterable.js"></script>
<script src="<?php echo base_url();?>assets/js/modernizr/modernizr-2.0.3.js"></script>
<script src="<?php echo base_url();?>assets/js/easing/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url();?>assets/js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script src="<?php echo base_url();?>assets/js/swfobject/swfobject.js"></script>
<!-- FancyBox -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox.css" media="all">
<script src="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox-1.2.1.js"></script>
</head>
<body>
<div class="header">
  <!-- Logo/Title -->
        <div id="site_title"><a href="Index.php"> <img src="<?php echo base_url();?>assets/img/logooo.png" alt=""></a> </div>
        <?php $this->load->view('Menu_customer');?>    </div>
    <!-- END header -->
<div id="container">
  <h1>Contact</h1>
  <div class="one-half">
    <div class="heading_bg">
      <h2>OlshopCosmetik_Renii</h2>
    </div>
    <p><strong>Reni Siahaan</strong><br>
      <br>
      Tel   : 0823 8550 0846<br>
      Line  : reni_shn<br>
      Pin   : DB3C0CFF </p>
  </div>
  <div class="one-half last">
    <form action="#" id="contact_form" method="post">
      <fieldset>
        <label>Name <span class="required">*</span></label>
        <input type="text" name="name" id="Myname" value="" class="text requiredField">
      </fieldset>
      <fieldset>
        <label>Email <span class="required">*</span></label>
        <input type="text" name="email" id="myemail" value="" class="text requiredField email">
      </fieldset>
      <fieldset>
        <label>Subject <span class="required">*</span></label>
        <input type="text" name="subject" id="mySubject" value="" class="text requiredField subject">
      </fieldset>
      <fieldset>
        <label>Your Message <span class="required">*</span></label>
        <textarea name="message" id="Mymessage" rows="20" cols="30" class="text requiredField"></textarea>
      </fieldset>
      <fieldset>
        <input name="Mysubmitted" id="Mysubmitted" value="Send Message" class="button white" type="submit">
      </fieldset>
    </form>
    <!--END form ID contact_form -->
  </div>
  <div style="clear:both; height: 40px"></div>
</div>
<!-- close container -->
<div id="footer">
<!-- First Column -->
    <div class="one-fourth">
        <h3>Olshop Cosmetik</h3>
        <ul class="footer_links">
            <li><a href="<?php echo base_url()."Index.php/Welcome/Index";?>">Home</a></li>
            <li><a href="<?php echo base_url()."Index.php/Welcome/About";?>">About</a></li>
            <li><a href="<?php echo base_url()."Index.php/Welcome/Produk";?>">Product</a></li>
            <li><a href="<?php echo base_url()."Index.php/Welcome/Contact";?>">Contact</a></li>
        </ul>
    </div>
  <!-- Second Column -->
    <div class="one-fourth">
    <h3>Product Cosmetik</h3>
    MAKE OVER
    <br>WARDAH
    <br>LOREAL
    <br>NYX
    </div>
  <!-- Third Column -->
  <div class="one-fourth last">
    <h3>Create</h3>
      OlshopCosmetik_Renii
      <br>Design by : Winda Lestari
  </div>
  <!-- Fourth Column -->
  <div class="one-fourth">
    <h3>Information</h3>
    <div id="social_icons"> Theme by <a href="http://www.csstemplateheaven.com">CssTemplateHeaven</a></div>
    </div>
  <div style="clear:both"></div>
  </div>
</body>
</html>