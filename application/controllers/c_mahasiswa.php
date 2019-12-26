<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mahasiswa extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    public function index(){
        $data['view'] = $this->m_mahasiswa->tampil();
        $this->load->view('v_datamahasiswa',$data);
    }


    public function tambah(){
        $this->load->view('v_tambah');
    }


    public function daftar(){
        $this->load->view('v_daftarmagang');
    }

    public function pendaftaran(){
        $this->m_mahasiswa->tambah_data();
        redirect('c_mahasiswa/');
    }

    public function tambahdata(){
        $this->m_mahasiswa->tambah_data();
        redirect('c_mahasiswa/');
    }


    public function tampiledit($id_mahasiswa){
        $data['view'] = $this->m_mahasiswa->tampilubah($id_mahasiswa);
        $this->load->view('v_edit',$data);
    }

    public function editdata(){
        $this->m_mahasiswa->edit_data();
        redirect('c_mahasiswa');
    }
        
    public function hapus($id_mahasiswa){
        $this->m_mahasiswa->hapus($id_mahasiswa);
        redirect('c_mahasiswa');  
    }

    public function modal(){
        $data['view'] = $this->m_mahasiswa->tampil();
        $this->load->view('v_modal',$data);
    }

     public function rekap(){
        $data['daftar'] = $this->db->query("SELECT * FROM daftar T, dosen B, mahasiswa A WHERE T.id_dosen=B.id_dosen and T.id_mahasiswa=A.id_mahasiswa")->result();
        $data['view'] = $this->m_mahasiswa->tampil();
        $data['jumlahm']=$this->m_mahasiswa->jumlahm();
        $data['sum']=$this->m_mahasiswa->banyak();
        $data['nomor']=$this->m_mahasiswa->merubah();
        $data['belum']=$this->m_mahasiswa->belumall();
        $data['belum1']=$this->m_mahasiswa->belum1();
        $data['belum2']=$this->m_mahasiswa->belum2();
        $data['belum3']=$this->m_mahasiswa->belum3();
        $data['belum4']=$this->m_mahasiswa->belum4();
        $data['belum5']=$this->m_mahasiswa->belum5();
        $data['viewlog'] = $this->m_mahasiswa->tampillog();
        $this->load->view('v_rekap',$data);
    }
}