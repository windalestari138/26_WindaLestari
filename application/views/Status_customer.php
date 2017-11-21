<!DOCTYPE HTML>
<head>
<title>OlshopCosmetik_Renii | Registrasi</title>
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
  <?php $this->load->view('Menu_customer');?>
  </div>
    <!-- Page Content -->
    <br>
    <br>
    <br>
    <center>
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Daftar Status Pemesanan</h1>
      <div class="row">
        <table id="example" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>ID Pemesanan</th>
              <th>Id customer</th>
              <th>Id produk</th>
              <th>Jumlah Pesanan</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
      <tbody>
        <?php foreach ($pesan as $key => $value) { ?>
        <tr>
          <td><?php echo $value->id_pesan; ?></td>
          <td><?php echo $value->id_customer; ?></td>
          <td><?php echo $value->id_produk; ?></td>
          <td><?php echo $value->jumlah; ?></td>
          <td><?php echo $value->status; ?></td>
          <td><a href="<?php echo base_url()."Konfirmasi/tambah/".$value->id_pesan?>" class="btn btn-primary">Konfirmasi</a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
      </div>
      <div style="clear:both; height: 40px"></div>
    </div>
    </center>
    <!-- /.container -->
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