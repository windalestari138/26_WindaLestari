<?php $this->load->view('templates/admin/header');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
		<ul><ul><ul><ul><ul><ul>
			<h1 class="page-header">Data customer</h1>
		</div><?=$this->session->flashdata('pesan')?>	
	</div>
	<div class="row">
	<ul><ul><ul><ul><ul><ul>
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID customer</th>
					<th>Nama customer</th>
					<th>Username</th>
					<th>Password</th>
					<th>Alamat</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($customer as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_customer; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->username; ?></td>
					<td><?php echo $value->password; ?></td>
					<td><?php echo $value->alamat; ?></td>
					<td>
						<a href="<?php echo site_url('Customer/delete/'.$value->id_customer); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash-o"></i>
						</a>
						<a href="<?php echo site_url('Customer/update/'.$value->id_customer); ?>"
							class="btn btn-warning">
							<i class="fa fa-pencil-square"></i>
						</a>
					</td>	
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php $this->load->view('templates/admin/footer'); ?>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>