<!DOCTYPE HTML>
<head>
<title>OlshopCosmetik_Renii</title>
<meta charset="utf-8">
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/menu/css/simple_menu.css">
<!--JS FILES -->
<script src="<?php echo base_url();?>assets/js/jquery.tools.min.js"></script>
<script>
$(function () {
    $("#prod_nav ul").tabs("#panes > div", {
        effect: 'fade',
        fadeOutSpeed: 400
    });
});
</script>
<script>
$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
</script>
</head>
<body>
<div class="header">
  <!-- Logo/Title -->
  <div id="site_title"><a href="Index.php"> <img src="<?php echo base_url();?>assets/img/logooo.png" alt=""></a> </div>
  <!-- Main Menu -->
<?php $this->load->view('Menu_customer');?>
</div>
<!-- END header -->
<div id="container">
  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
      <div> <img src="<?php echo base_url();?>assets/img/demo/home.jpg" alt="">
        <h5>Peralatan Makeup</h5>
      </div>
      <div> <img src="<?php echo base_url();?>assets/img/demo/home1.jpg" alt="">
        <h5>Kosmetik MAKE OVER</h5>
      </div>
      <div> <img src="<?php echo base_url();?>assets/img/demo/home2.jpg" alt="">
        <h5>Kosmetik WARDAH</h5>
      </div>
      <div> <img src="<?php echo base_url();?>assets/img/demo/home3.jpg" alt="">
        <h5>Kosmetik LOREAL</h5>
      </div>
      <div> <img src="<?php echo base_url();?>assets/img/demo/home4.jpg" alt="">
          <h5>Kosmetik NYX</h5>
      </div>
    </div>
    <!-- END tab panes -->
      <br clear="all">
    <!-- navigator -->
    <div id="prod_nav">
        <ul>
        <li><a href="#1"><img src="<?php echo base_url();?>assets/img/demo/homee1.jpg" alt=""><strong>Peralalatan Kosmetik</strong>Foundation</a></li>
        <li><a href="#2"><img src="<?php echo base_url();?>assets/img/demo/homee2.jpg" alt=""><strong>MAKE OVER</strong>EYE SHADOW</a></li>
        <li><a href="#3"><img src="<?php echo base_url();?>assets/img/demo/homee3.jpg" alt=""><strong>WARDAH</strong>Bedak WARDAH</a></li>
        <li><a href="#4"><img src="<?php echo base_url();?>assets/img/demo/homee4.jpg" alt=""><strong>LOREAL</strong>Bedak LOREAL</a></li>
        <li><a href="#5"><img src="<?php echo base_url();?>assets/img/demo/homee5.jpg" alt=""><strong>NYX</strong>Bedak NYX</a></li>
      </ul>
    </div>
    <!-- close navigator -->
  </div>
  <!-- END prod wrapper -->
    <div style="clear:both"></div>
  <h1 style="padding: 20px 0">OlshopCosmetik_renii ?</h1>
  <blockquote>OlshopCosmetik_Renii adalah salah satu olshop yang menjual berbagai cosmetik dan alat make up. <br> OlshopCosmetik_Renii ini menjual cosmetik dari berbagai merk, ada merk MAKE OVER, LOREAL, NYX, dan WARDAH.</blockquote>
  <!-- First Column -->
  <div class="one-fourth">
    <div class="heading_bg">
      <h2>MAKE OVER</h2>
    </div>
    <img src="<?php echo base_url();?>assets/img/demo/home1.jpg" width="217" alt=""> </div>
  <!-- Second Column -->
  <div class="one-fourth">
    <div class="heading_bg">
      <h2>LOREAL</h2>
    </div>
    <img src="<?php echo base_url();?>assets/img/demo/home3.jpg" width="217" alt=""> </div>
  <!-- Third Column -->
  <div class="one-fourth">
    <div class="heading_bg">
      <h2>NYX</h2>
    </div>
    <img src="<?php echo base_url();?>assets/img/demo/home4.jpg" width="217" alt=""> </div>
  <!-- Fourth Column -->
  <div class="one-fourth last">
    <div class="heading_bg">
      <h2>WARDAH</h2>
    </div>
    <img src="<?php echo base_url();?>assets/img/demo/home2.jpg" width="217" alt=""> </div>
  <div style="clear:both; height: 40px"></div>
</div>
<!-- END container -->
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
<!-- END footer -->
</body>
</html>