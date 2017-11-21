<?php 
/**
* 
*/
class Pesan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pesan_model');
		$this->load->model('Customer_model');
		$this->load->model('Produk_model');
	}

	function index()
	{
		$data['pesan'] = $this->Pesan_model->ambil_data();
		$this->load->view('Admin/Pesan_list',$data);
	}

	function tambah($id_produk)
	{
		$username 	= $this->session->userdata('username');
		$produk 	= $this->Produk_model->ambil_data_id($id_produk);
		$customer 	= $this->Customer_model->ambil_data_user($username);
		$data = array(
			'aksi' 				=> site_url('Pesan/tambah_aksi'),
			'id_pesan' 			=> set_value('id_pesan'),
			'id_custom er' 		=> set_value('id_customer',$customer->id_customer),
			'id_produk'		 	=> set_value('id_produk',$produk->id_produk),
			'jumlah' 			=> set_value('jumlah'),
			'button' 			=> 'Insert'
			);
		$this->load->view('Pemesanan',$data);
	}

	function tambah_aksi()
	{

		$data = array(
			'id_pesan' 			=> $this->input->post('id_pesan'),
			'id_customer' 		=> $this->input->post('id_customer'),
			'id_produk' 		=> $this->input->post('id_produk'),
			'jumlah'			=> $this->input->post('jumlah')
			);
		$this->Pesan_model->tambah_data($data);
		 $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil !!</div></div>");
                redirect('Welcome/Produk_Customer');
	}

	function delete($id)
	{
		$this->Pesan_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('Pesan');
	}

	function update($id)
	{
		$pesan = $this->Pesan_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Pesan/update_aksi'),
			'status' 			=> set_value('status',$pesan->jumlah),
			'id_pesan' 			=> set_value('id_pesan',$pesan->id_pesan),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Pesan_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'status' 		=> $this->input->post('status')
			);	
		$id_pesan = $this->input->post('id_pesan');
		$this->Pesan_model->edit_data($id_pesan,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('Pesan');
	}
}

 ?>