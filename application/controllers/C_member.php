<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_member');

	}

	public function tampil()
	{
		$data['financial']=$this->db->query('select * from member')->result_array();
		$this->load->view('financial/v_member.php', $data);
	}
	public function tambah()
	{
		$data['financial']=$this->db->query('select * from member')->result_array();

	 	if (isset($_POST['submit'])) {
	
	 		$nama			=	$this->input->post ('nama');
	 		$alamat 		=	$this->input->post ('alamat');
	 		$no_hp		 	=	$this->input->post ('no_hp');
			

	 		$simpan_data = array(
	 			//'id_member'=>$id,
	 			'nama'=>$nama,
	 			'alamat'=>$alamat,
	 			'no_hp'=>$no_hp,
	 			);

	 		var_dump($simpan_data);
	 		$result = $this->db->insert("member", $simpan_data);
	 		redirect(base_url('C_member/tampil'));
	 	}
	 	else{
	 		$this->load->view('financial/v_crudmember',$data);
	 	}
	}

	public function hapus($id)	
		{
			$where = array('id_member'=> $id);
			$this->m_member->hapus($where,'member');
			redirect('C_member/tampil');
				
		}
}
?>