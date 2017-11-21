<?php $this->load->view('templates/admin/header'); ?>
<div id="page-wrapper">
	<div class="row">
	<ul><ul><ul><ul><ul><ul>
		<div class="col-lg-12">
			<h1 class="page-header">Data produk</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama produk: </label>
				<input type="text" name="nama" class="form-control" placeholder="Inputkan Nama produk" 
				required value="<?php echo $nama; ?>">
			</div>
			<div class="form-group">
				<label>Merk produk: </label>
				<input type="text" name="merk" class="form-control" placeholder="Inputkan Merk produk" 
				required value="<?php echo $merk; ?>">
			</div>
			<div class="form-group">
				<label>Harga produk: </label>
				<input type="text" name="harga" class="form-control" placeholder="Inputkan Harga produk" 
				required value="<?php echo $harga; ?>">
			</div>
			<div class="form-group">
				<label>Gambar produk: </label>
				<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar produk">
			</div>
			<input type="hidden" name="id_produk" value="<?php echo $id_produk; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('Produk')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>