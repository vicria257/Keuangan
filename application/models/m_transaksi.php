<?php
class m_transaksi extends CI_Model 
	{
		public function __construct()
    {
        $this->load->database();
    }
    function index(){
		$data = $this->db->get('transaksi');
		return $data;
	}
	function edit($where,$table) {
		return $this->db->get_where($table,$where);

	}
	function v_edit($where,$databuku,$table){
		$this->db->where($where);
		$this->db->update($table,$databuku);
	}
	function hapus($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>