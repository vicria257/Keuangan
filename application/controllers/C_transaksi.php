<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');

	}

	public function index()
	{
		$data['financial']=$this->db->query('select * from transaksi')->result_array();
		$this->load->view('financial/v_transaksi.php', $data);
	}
	
	public function income()
	{
		$data['financial']=$this->db->query('select * from member')->result_array();
		$data['kategori']=$this->db->query('select * from kategori')->result_array();

		if (isset($_POST['submit'])) {
			// $id 			=	$this->input->post ('id_transaksi');
			$tgl			=	$this->input->post('tanggal');
			$tgl=date('Y-m-d H:i:s', strtotime($tgl));
			$id_member 		=	$this->input->post('id_member');
			$id_kategori 	=	$this->input->post('id_kategori');
			$jml_transaksi 	=	$this->input->post('jml_transaksi');
			$keterangan 	=	$this->input->post('keterangan');

			$simpan_data = array(
				//'id_transaksi'=>$id,
				'tanggal'=>$tgl,
				'id_member'=>$id_member,
				'id_kategori'=>$id_kategori,
				'tipe'=>'income',
				'jml_transaksi'=>$jml_transaksi,
				'keterangan'=>$keterangan,
				);

			var_dump($simpan_data);
			// die();
			$result = $this->db->insert("transaksi", $simpan_data);
			redirect(base_url('C_transaksi'));
		}
		else{
			$this->load->view('financial/v_incometransaksi',$data);
		}
	}
	public function outcome()
	{
		$data['financial']=$this->db->query('select * from member')->result_array();
		$data['kategori']=$this->db->query('select * from kategori')->result_array();

		if (isset($_POST['submit'])) {
			// $id 			=	$this->input->post ('id_transaksi');
			$tgl			=	$this->input->post('tanggal');
			$tgl=date('Y-m-d H:i:s', strtotime($tgl));
			$id_member 		=	$this->input->post('id_member');
			$id_kategori 	=	$this->input->post('id_kategori');
			$jml_transaksi 	=	$this->input->post('jml_transaksi');
			$keterangan 	=	$this->input->post('keterangan');

			$simpan_data = array(
				// 'id_transaksi'=>$id,
				'tanggal'=>$tgl,
				'id_member'=>$id_member,
				'id_kategori'=>$id_kategori,
				'tipe'=>'Outcome',
				'jml_transaksi'=>$jml_transaksi,
				'keterangan'=>$keterangan,
				);

			var_dump($simpan_data);
			// die();
			$result = $this->db->insert ("transaksi", $simpan_data);
			redirect(base_url('C_transaksi'));
		}
		else{
			$this->load->view('financial/v_outcometransaksi',$data);
		}
	}
	
	public function edit($id) 
	{
		{
        $where = array('id_transaksi'=> $id);
		$data['financial'] = $this->m_transaksi->edit($where,'transaksi')->result();
		$this->load->view('financial/v_editincome', $data);
		}
	}
	public function v_edit()
	{

			$tgl			=	$this->input->post('tanggal');
			$tgl=date('Y-m-d H:i:s', strtotime($tgl));
			$id_member 		=	$this->input->post('id_member');
			$id_kategori 	=	$this->input->post('id_kategori');
			$tipe	 		=	$this->input->post('tipe');
			$jml_transaksi 	=	$this->input->post('jml_transaksi');
			$keterangan 	=	$this->input->post('keterangan');

			$data = array(
				'id_transaksi'=>$id,
				'tanggal'=>$tgl,
				'id_member'=>$id_member,
				'id_kategori'=>$id_kategori,
				'tipe'=>$tipe,
				'jml_transaksi'=>$jml_transaksi,
				'keterangan'=>$keterangan,
				);

			$this->db->where('id_transaksi', $id);
			$this->db->update('transaksi',$data);
			$kondisi = array('id_transaksi' => $id);
			$data['financial'] = $this->db->get_where('transaksi',$kondisi)->result_array();
			$this->load->view('C_transaksi/v_transaksi',$data);
	}
	
	public function hapus($id)	
	{
		$where = array('id_transaksi'=> $id);
		$this->m_transaksi->hapus($where,'transaksi');
		redirect('C_transaksi');
			
	}
}
?>