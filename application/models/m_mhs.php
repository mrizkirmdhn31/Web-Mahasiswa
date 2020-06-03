<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_mhs extends CI_Model{

	public function getmhs(){
		$sql = $this->db->query('select*from mhs');
		return $sql;
	}

	function simpan($data){
		$this->db->insert('mhs',$data);
	}
	function matkul($id_matkul){
 		return $this->db->get_where('mhs',array('id'=>$id_matkul));
 	}


}