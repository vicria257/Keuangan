<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kategori');

	}

	public function tampil()
	{
		$data['financial']=$this->db->query('select * from kategori')->result_array();
		$this->load->view('financial/v_kategori.php', $data);
	}
	public function tambah()
	{
		$data['financial']=$this->db->query('select * from kategori')->result_array();

	 	if (isset($_POST['submit'])) {
	
	 		$nama			=	$this->input->post ('nama_kategori');

	 		$simpan_data = array(
	 			//'id_kategori'=>$id,
	 			'nama_kategori'=>$nama,
	 			);

	 		var_dump($simpan_data);
	 		$result = $this->db->insert("kategori", $simpan_data);
	 		redirect(base_url('C_kategori/tampil'));
	 	}
	 	else{
	 		$this->load->view('financial/v_crudkategori',$data);
	 	}
	}
	public function hapus($id)	
	{
		$where = array('id_kategori'=> $id);
		$this->m_kategori->hapus($where,'kategori');
		redirect('C_kategori/tampil');
	}

}
?>