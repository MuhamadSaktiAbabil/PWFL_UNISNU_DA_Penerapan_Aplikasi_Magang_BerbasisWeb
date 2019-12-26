<?php
defined('BASEPATH') or exit ('NO Direct Script Access Allowed');

class C_daftar extends CI_Controller{
	public function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

	function index(){
		$data['daftar'] = $this->db->query("SELECT * FROM daftar T, dosen B, mahasiswa A WHERE T.id_dosen=B.id_dosen and T.id_mahasiswa=A.id_mahasiswa")->result();
		$this->load->view('v_daftartampil',$data);	
	}

	function tambah(){
		$data['mahasiswa'] = $this->m_daftar->get_data('mahasiswa')->result();
		$data['dosen'] = $this->m_daftar->get_data('dosen')->result();
		$data['daftar'] = $this->m_daftar->get_data('daftar')->result();
		$this->load->view('v_daftar',$data);
	}

	public function daftar(){
		$this->m_daftar->tambah_data();
		redirect('c_daftar/');  
    }

}