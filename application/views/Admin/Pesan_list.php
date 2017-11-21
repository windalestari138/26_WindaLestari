<?php $this->load->view('templates/admin/header');?>
<div id="page-wrapper">
	<div class="row">
	<ul><ul><ul><ul><ul><ul>
		<div class="col-lg-12">
			<h1 class="page-header">Data Pesanan</h1>
		</div><?=$this->session->flashdata('pesan')?>	
	</div>
	<div class="row">
	<ul><ul><ul><ul><ul><ul>
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID Pesan</th>
					<th>Nama Produk</th>
					<th>Merk Produk</th>
					<th>Nama Pemesan</th>
					<th>Harga Produk</th>
					<th>Jumlah</th>
					<th>Status</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pesan as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_pesan; ?></td>
					<td><?php echo $value->nama_produk; ?></td>
					<td><?php echo $value->merk; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->harga; ?></td>
					<td><?php echo $value->jumlah; ?></td>
					<td><?php echo $value->status; ?></td>
					<td>
						<a href="<?php echo site_url('Pesan/delete/'.$value->id_pesan); ?>"
							class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
						<a href="<?php echo site_url('Pesan/update/'.$value->id_pesan); ?>"
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