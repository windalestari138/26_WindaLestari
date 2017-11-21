<?php $this->load->view('templates/admin/header');?>
<div id="page-wrapper">
	<div class="row">
	<ul><ul><ul><ul><ul><ul>
		<div class="col-lg-12">
			<h1 class="page-header">Data Konfirmasi Pemesanan</h1>
		</div><?=$this->session->flashdata('konfirmasi')?>	
	</div>
	<div class="row">
	<ul><ul><ul><ul><ul><ul>
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID konfirmasi</th>
					<th>ID Pemesanan</th>
					<th>Nama Member</th>
					<th>Jumlah Pesanan</th>
					<th style="width:200px">Bukti Pembayaran</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($konfirmasi as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_konfirmasi; ?></td>
					<td><?php echo $value->id_pesan; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->jumlah; ?></td>
					<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>"></td>
					<td>
						<a href="<?php echo site_url('Konfirmasi/delete/'.$value->id_konfirmasi); ?>"
							class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
						<a href="<?php echo site_url('Konfirmasi/download/'.$value->id_konfirmasi); ?>" class="btn btn-info">Download</a></td>
				</tr><?php } ?>
			</tbody>
		</table>
	</div>
	<?php $this->load->view('templates/admin/footer'); ?>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>