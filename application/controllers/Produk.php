<?php 
/**
* 
*/
class Produk extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['produk'] = $this->Produk_model->ambil_data();
		$this->load->view('Admin/Produk_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('Produk/tambah_aksi'),
			'nama' 				=> set_value('nama'),
			'merk' 				=> set_value('merk'),
			'harga' 			=> set_value('harga'),
			'id_produk' 		=> set_value('id_produk'),
			'button' 			=> 'Insert'
			);
		$this->load->view('Admin/Produk_form',$data);
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
                'gambar' 			=> $gbr['file_name'],
                'nama_produk' 		=> $this->input->post('nama'),
				'merk' 				=> $this->input->post('merk'),
				'harga' 			=> $this->input->post('harga')
                );
                $this->Produk_model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('Produk'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('Produk_form'); //jika gagal maka akan ditampilkan form upload
            }
        }


		$data = array(
            'nama_produk' 		=> $this->input->post('nama'),
			'merk' 				=> $this->input->post('merk'),
			'harga' 			=> $this->input->post('harga')
			);
		$this->Produk_model->tambah_data($data);
		redirect(site_url('Produk'));
	}

	function delete($id)
	{
		$this->Produk_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('Produk');
	}

	function update($id)
	{
		$produk = $this->Produk_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Produk/update_aksi'),
			'nama' 				=> set_value('nama',$produk->nama_produk),
			'merk' 				=> set_value('merk',$produk->merk),
			'harga' 			=> set_value('harga',$produk->harga),
			'id_produk' 		=> set_value('id_produk',$produk->id_produk),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Produk_form',$data);		
	}

	function update_aksi()
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
                'gambar'		=>$gbr['file_name'],
                'nama_produk' 	=> $this->input->post('nama'),
				'merk' 			=> $this->input->post('merk'),
				'harga'	 		=> $this->input->post('harga')
				                  
                );
                $id_produk=$this->input->post('id_produk');
                $this->Produk_model->edit_data($id_produk,$data); //akses model untuk menyimpan ke database


                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update data berhasil !!</div></div>");
                redirect('Produk'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('Produk_form','refresh'); //jika gagal maka akan ditampilkan form upload
            }
        }
		$data = array(
			'nama_produk' 		=> $this->input->post('nama'),
			'merk' 				=> $this->input->post('merk'),
			'harga' 			=> $this->input->post('harga')
			);	
		$id_produk = $this->input->post('id_produk');
		$this->Produk_model->edit_data($id_produk,$data);
            redirect('Produk');
	}
}

 ?>