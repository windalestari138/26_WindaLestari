<?php 
/**
* 
*/
class Customer_model extends CI_Model
{
	public $customer		= 'customer';
	public $id				= 'id_customer';
	public $order			= 'ASC';
	public $username		= 'username';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->customer)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->customer)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->customer,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->customer);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->customer,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->customer)->row();
	}

	function ambil_data_user($username)
	{
		$this->db->where($this->username,$username);
		return $this->db->get($this->customer)->row();
	}
}
 ?>