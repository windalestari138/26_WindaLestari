<?php $this->load->view('templates/admin/header');?>
<div id="page-wrapper">
	<div class="row">
	<ul><ul><ul><ul><ul><ul>
		<div class="col-lg-12">
			<h1 class="page-header">Data Produk</h1>
		</div><?=$this->session->flashdata('pesan')?>	
		<div class="col-md-12 text-right">
		<a href="<?php echo site_url('Produk/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Insert</a>
		</div></div>
	<div class="row">
	<ul><ul><ul><ul><ul><ul>
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">ID</th>
					<th style="width:200px">Gambar</th>
					<th>Nama</th>
					<th>Merk</th>
					<th>Harga</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($produk as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_produk; ?></td>
					<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>"></td>
					<td><?php echo $value->nama_produk; ?></td>
					<td><?php echo $value->merk; ?></td>
					<td><?php echo $value->harga; ?></td>
					<td>
						<a href="<?php echo site_url('Produk/delete/'.$value->id_produk); ?>"
							class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
						<a href="<?php echo site_url('Produk/update/'.$value->id_produk); ?>"
							class="btn btn-warning"><i class="fa fa-pencil-square"></i></a>
					</td>	
				</tr><?php } ?>
			</tbody></table>
	</div>
	<?php $this->load->view('templates/admin/footer'); ?>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>