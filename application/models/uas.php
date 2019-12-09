<?php
class Uas extends CI_Model{
	function show_data(){
		$hasil=$this->db->query("SELECT * FROM mahasiswa");
		return $hasil;
	}
	
	
	

	
	
}