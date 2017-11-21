<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('Home').'"><i class="fa fa-dashboard"></i> Dashboard</a>
	</li>
	<li>
		<a href="'.site_url('Produk').'"><i class="fa fa-book"></i>Data Barang</a>
	</li>	
	<li>
		<a href="'.site_url('Customer/data_customer').'"><i class="fa fa-users"></i>Data Customer</a>
	</li>	
	<li>
		<a href="'.site_url('Pesan').'"><i class="fa fa-shopping-cart"></i>Data Pesanan</a>
	</li>	
	<li>
		<a href="'.site_url('Konfirmasi').'"><i class="fa fa-check-circle"></i>Data Konfirmasi</a>
	</li>
		</li>';
	}

