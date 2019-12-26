<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    public function index(){
        $data['view'] = $this->m_mahasiswa->tampil();
        $data['sum']=$this->m_mahasiswa->banyak();
        $data['sum1']=$this->m_mahasiswa->banyak1();
        $data['sum2']=$this->m_mahasiswa->banyak2();
        $data['sum3']=$this->m_mahasiswa->banyak3();
        $data['sum4']=$this->m_mahasiswa->banyak4();
        $data['sum5']=$this->m_mahasiswa->banyak5();
        $data['sumdosen']=$this->m_dosen->banyak();
        $data['belum']=$this->m_mahasiswa->belumall();
        $data['belum1']=$this->m_mahasiswa->belum1();
        $data['belum2']=$this->m_mahasiswa->belum2();
        $data['belum3']=$this->m_mahasiswa->belum3();
        $data['belum4']=$this->m_mahasiswa->belum4();
        $data['belum5']=$this->m_mahasiswa->belum5();
        $data['jumlahm']=$this->m_mahasiswa->jumlahm();
        $data['terdaftar']=$this->m_mahasiswa->terdaftar();
        $data['viewlog'] = $this->m_mahasiswa->tampillog();
        $this->load->view('v_dashboard',$data);
    }
}