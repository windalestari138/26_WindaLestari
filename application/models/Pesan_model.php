<?php 
/**
* 
*/
class Pesan_model extends CI_Model
{
	public $pesan		= 'pesan';
	public $id			= 'id_pesan';
	public $id_customer = 'id_customer';
	public $id2			= 'id_customer';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('pesan.id_pesan, customer.nama, produk.nama_produk, produk.merk, produk.harga, pesan.jumlah, pesan.status');
        $this->db->from('pesan');
        $this->db->join('customer', 'pesan.id_customer = customer.id_customer');
        $this->db->join('produk', 'pesan.id_produk = produk.id_produk');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->pesan,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->pesan)->row();//1 data
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->pesan);
	}
	
	function tambah_data($data)//array
	{
		return $this->db->insert($this->pesan,$data);
	}

	function ambil_data_pesan($id_customer){
		$this->db->where($this->id_customer,$id_customer);
		return $this->db->get($this->pesan)->result();
	}
	function ambil_data_id2($id)
	{
		$this->db->where($this->id2,$id);
		return $this->db->get($this->pesan)->result();//1 data
	}
}

 ?>