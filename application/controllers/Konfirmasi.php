<?php 
/**
* 
*/
class Konfirmasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Konfirmasi_model');
		$this->load->model('Customer_model');
		$this->load->model('Pesan_model');
	}

	function index()
	{
		$data['konfirmasi'] = $this->Konfirmasi_model->ambil_data();
		$this->load->view('Admin/Konfirmasi_list',$data);
	}

	function tambah($id_pesan)
	{
		$username = $this->session->userdata('username');
		$pesan = $this->Pesan_model->ambil_data_id($id_pesan);
		$customer = $this->Customer_model->ambil_data_user($username);
		$data = array(
			'aksi' 				=> site_url('Konfirmasi/tambah_aksi'),
			'id_konfirmasi' 	=> set_value('id_konfirmasi'),
			'id_customer' 		=> set_value('id_customer',$customer->id_customer),
			'id_pesan'		 	=> set_value('id_pesan',$pesan->id_pesan),
			'button' 			=> 'Insert'
			);
		$this->load->view('Konfirmasi',$data);
	}
	function tambah_aksi()
	{
		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/admin/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar'			=>$gbr['file_name'],
                'id_konfirmasi'			=> $this->input->post('id_konfirmasi'),
				'id_customer' 		=> $this->input->post('id_customer'),
				'id_pesan'	 		=> $this->input->post('id_pesan'),

                );
                $this->Konfirmasi_model->tambah_data($data); //akses model untuk menyimpan ke database
                redirect('Welcome/Produk_Customer'); //jika berhasil maka akan ditampilkan view upload
            }else{
                
                redirect('Welcome/Gagal'); //jika gagal maka akan ditampilkan form upload
            }
        }

		$data = array(
			'id_konfirmasi' 			=> $this->input->post('id_konfirmasi'),
			'id_customer' 		=> $this->input->post('id_customer'),
			'id_pesan' 		=> $this->input->post('id_pesan')
			);
		$this->Konfirmasi_model->tambah_data($data);
		 $this->session->set_flashdata("konfirmasi", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil !!</div></div>");
                redirect(site_url('Konfirmasi'));
	}


	function delete($id)
	{
		$this->Konfirmasi_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('Konfirmasi');
	}

	
	public function download($id){
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->Konfirmasi_model->ambil_data_id($id);
            
            $gambar = $fileInfo->gambar;
            //file path
            $file = 'assets/admin/uploads/'.$gambar;            
            //download file from directory
            force_download($file, NULL);
        }
    }

}

 ?>