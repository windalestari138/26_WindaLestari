<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model');
		$this->load->model('Customer_model');
		$this->load->model('Pesan_model');
		$this->load->helper(array('url'));
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function Index()
	{
		$this->load->view('Index');
	}
	public function About()
	{
		$this->load->view('About');
	}
	public function Produk()
	{
		$data['produk'] = $this->Produk_model->ambil_data();
		$this->load->view('Produk',$data);
	}
	public function Contact()
	{
		$this->load->view('Contact');
	}
	public function Login()
	{
		$this->load->view('Login');
	}
	public function Registrasi()
	{
		$this->load->view('Registrasi');
	}


	public function Index_customer()
	{
		$this->load->view('Index_customer');
	}
	public function About_customer()
	{
		$this->load->view('About_customer');
	}
	public function Produk_Customer()
	{
		$data['produk'] = $this->Produk_model->ambil_data();
		$this->load->view('Produk_Customer',$data);
	}
	public function Contact_customer()
	{
		$this->load->view('Contact_customer');
	}
	

	public function Pemesanan()
	{
		$this->load->view('Pemesanan');
	}
	
	public function Status_customer($id)
	{
		$customer = $this->Customer_model->ambil_data_user($id);
		$data['pesan'] = $this->Pesan_model->ambil_data_id2($customer->id_customer);
		$this->load->view('Status_customer',$data);
	}
	
	public function Gagal()
	{
		$this->load->view('Gagal');
	}

	public function Gagal_login()
	{
		$this->load->view('Gagal_login');
	}
}
