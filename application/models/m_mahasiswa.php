<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {
    public function tampil(){
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }
 
    public function tampilubah($id_mahasiswa){
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function tambah_data(){
        $data = array(
            'id_mahasiswa' => $this->input->post('id_mahasiswa'),
            'nim' => $this->input->post('nim'),
            'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'angkatan' => $this->input->post('angkatan')
        );
        return $this->db->insert('mahasiswa',$data);
    }

    public function edit_data(){
        $data = array(
            'id_mahasiswa' => $this->input->post('id_mahasiswa'),
            'nim' => $this->input->post('nim'),
            'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'angkatan' => $this->input->post('angkatan')
        );
        $id_mahasiswa = $this->input->post('id_mahasiswa');
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        return $this->db->update('mahasiswa',$data);
    }

    public function hapus($id_mahasiswa){
        return $this->db->delete('mahasiswa',array('id_mahasiswa' =>$id_mahasiswa));
    }

    function terdaftar(){
        $hasil = "SELECT count(nama_kp) as banyak FROM daftar";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }
    function banyak(){
        $hasil = "SELECT count(nim) as banyak FROM mahasiswa";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }

    function banyak1(){
        $hasil = "SELECT count(nim) as banyak FROM mahasiswa WHERE angkatan='2016' ";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }

    function banyak2(){
        $hasil = "SELECT count(nim) as banyak FROM mahasiswa WHERE angkatan='2017' ";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }

    function banyak3(){
        $hasil = "SELECT count(nim) as banyak FROM mahasiswa WHERE angkatan='2018' ";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }

    function banyak4(){
        $hasil = "SELECT count(nim) as banyak FROM mahasiswa WHERE angkatan='2019' ";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }

    function banyak5(){
        $hasil = "SELECT count(nim) as banyak FROM mahasiswa WHERE angkatan='2020' ";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }

    function belumall(){
        $hasil = "SELECT count(nim) as banyak FROM mahasiswa";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }

    function belum1(){
        $hasil = "SELECT count(nim) as banyak FROM mahasiswa WHERE angkatan='2016'";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }

    function belum2(){
        $hasil = "SELECT count(nim) as banyak FROM mahasiswa WHERE angkatan='2017'";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }

    function belum3(){
        $hasil = "SELECT count(nim) as banyak FROM mahasiswa WHERE angkatan='2018' ";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }

    function belum4(){
        $hasil = "SELECT count(nim) as banyak FROM mahasiswa WHERE angkatan='2019' ";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }

    function belum5(){
        $hasil = "SELECT count(nim) as banyak FROM mahasiswa WHERE angkatan='2020' ";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }

    function merubah(){
        $hasil = "SELECT count(id_mahasiswa) as banyak FROM mahasiswa";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }
    function jumlahm(){
        $hasil = "SELECT count(id_mahasiswa) as banyak FROM daftar";
        $tampil = $this->db->query($hasil);
        return $tampil->row()->banyak;
    }
    public function tampillog(){
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }
}