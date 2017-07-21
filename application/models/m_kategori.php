<?php
class m_kategori extends CI_Model 
	{
		public function __construct()
    {
        $this->load->database();
    }
    function daftar(){
		$data = $this->db->get('kategori');
		return $data;
	}
	// function edit($where,$table) {
	// 	return $this->db->get_where($table,$where);

	// }
	// function v_edit($where,$databuku,$table){
	// 	$this->db->where($where);
	// 	$this->db->update($table,$databuku);
	// }
	function hapus($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>