<?php 
/**
* 
*/
class Produk_model extends CI_Model
{
	public $admin			= 'admin';
	public $produk			= 'produk';
	public $id				= 'id_produk';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->admin)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->produk)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->produk,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->produk);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->produk,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->produk)->row();
	}

	function get_option(){
		$this->db->select('*');
		$this->db->from('produk');
		$query = $this->db->get();
		return $query->result();
	}
}
 ?>