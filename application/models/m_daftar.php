<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class M_daftar extends CI_Model{

	public function tambah_data(){
        $data = array(
        	'tgl_pencatatan' => $this->input->post('tgl_pencatatan'),
            'id_pinjam' => $this->input->post('id_pinjam'),
            'id_mahasiswa' => $this->input->post('id_mahasiswa'),
            'id_dosen' => $this->input->post('id_dosen'),
            'nama_kp' => $this->input->post('nama_kp'),
            'alamat_kp' => $this->input->post('alamat_kp'),
            'no_kp' => $this->input->post('no_kp'),
        );
        return $this->db->insert('daftar',$data);
    }
        
	public function edit_data(){
        $data = array(
            'tgl_pencatatan' => $this->input->post('tgl_pencatatan'),
            'id_mahasiswa' => $this->input->post('id_mahasiswa'),
            'id_dosen' => $this->input->post('id_dosen'),
            'nama_kp' => $this->input->post('nama_kp'),
            'alamat_kp' => $this->input->post('alamat_kp'),
            'no_kp' => $this->input->post('no_kp'),
            'tgl_acc' => $this->input->post('tgl_acc'),
        );
        $id_pinjam = $this->input->post('id_pinjam');
        $this->db->where('id_pinjam', $id_pinjam);
        return $this->db->update('daftar',$data);
    }


	function get_data($table){
		return $this->db->get($table);
	}

	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

}