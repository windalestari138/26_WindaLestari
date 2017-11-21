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
  <?php $this->load->view('Menu');?>
  </div>
  <!--_______________________________________Register_________________________________ -->
<div id="container">
<h1>FORM Registrasi</h1>
<center>
    <form action="<?php echo base_url(). 'Customer/daftar_aksi'; ?>" method="post">
        <table>
            <tbody>
                <tr><td> Nama </td>
                <td> : </td>
                <td> <div class="">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Anda" size="50"></div></td>
                </tr>

                <tr> <td> Email </td>
                    <td> : </td>
                    <td> <div class="">
                        <input type="text" class="form-control" name="email" placeholder="Email" size="50">
                        </div></td>
                </tr>

                <tr> <td> Alamat </td>
                    <td> : </td>
                    <td><div class="">
                       <input type="text" class="form-control" name="alamat" placeholder="Alamat Anda" size="50">
                        </div></td>
                </tr>

                <tr> <td> Username </td>
                    <td> : </td>
                    <td> <div class="">
                        <input type="text" class="form-control" name="username" placeholder="Username Anda" size="50">
                        </div></td>
                </tr>

                <tr> <td> Password </td>
                    <td> : </td>
                    <td><div class="">
                        <input type="password" class="form-control" name="password" placeholder="Password Anda" size="50">
                        </div></td>
                </tr>        

                <tr><td></td>
                    <td><td><input type="submit" class="" value="DAFTAR" /></td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
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