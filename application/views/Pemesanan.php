<!DOCTYPE HTML>
<head>
<title>Bigshot</title>
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
  <div id="site_title"><a href="Index.php"> <img src="<?php echo base_url();?>assets/img/logo.png" alt=""></a> </div>

  <!-- Navigation -->
  <?php $this->load->view('Menu_customer');?>
  </div>
  <!-- Page Content -->
  <div class="container">
  <br>
  <br>
    <center>
      <h1>Form Pemesanan</h1>
      
        <?php $this->session->flashdata('pesan') ?>
        <form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label>Jumlah</label><br>
            <input type="text" name="jumlah" value=""> 
          </div>      
          
          <input type="hidden" name="id_pesan" value="<?php echo $id_pesan; ?>">
          <input type="hidden" name="id_customer" value="<?php echo $id_customer; ?>">
          <input type="hidden" name="id_produk" value="<?php echo $id_produk; ?>">

          <br><button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
          <a href="<?php echo site_url('Welcome/Produk_Customer')?>" class="btn btn-default">Cancel</a>
        </form>
      </center>
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
    <!-- END footer -->
</body>
</html>