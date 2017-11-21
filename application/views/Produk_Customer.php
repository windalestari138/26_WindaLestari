<!DOCTYPE HTML>
<head>
    <title>OlshopCosmetik_Renii | Produk</title>
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
  <!-- Main Menu -->
<?php $this->load->view('Menu_customer');?>
</div>
    <!-- END header -->
    <div id="container">
        <h1>Cosmetik</h1>
        <br>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url()."Welcome/Status_customer/".$this->session->userdata('username'); ?>">Status Pemesanan</a></li>
          <br>
        <?php foreach ($produk as $key => $value) { ?>
            <div class="one-fifth">
            <a href="#"><img class="portfolio-img pretty-box" src="<?php echo site_url();?>assets/admin/uploads/<?php echo $value->gambar; ?>" alt="" width="158" height="100"></a>

            <li class="list-group-item">
              <h4 class="card-title">
                
              </h4>
              <center>
                <ul class="list-group list-group-flush">
                   
                    <li class="list-group-item"><?php echo $value->nama_produk; ?></li>
                    <li class="list-group-item"><?php echo $value->merk;?></li>
                    <li class="list-group-item"><?php echo $value->harga;?></li>

                    <li class="list-group-item">
                        <center><a href="<?php echo base_url()."Pesan/tambah/".$value->id_produk?>" class="btn btn-primary">Pesan</a></center>
                    </li>
                </ul>
                </center>
            </li>
        </div><?php } ?>
    <div style="clear:both; height: 40px">
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