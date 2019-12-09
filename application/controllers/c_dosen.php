<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dosen extends CI_Controller {

    public function index(){
        $this->load->view('v_dosen');
    }

    function get_data_user(){
		$list = $this->m_dosen->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $field->nama_dosen;
			$row[] = $field->alamat;
			$row[] = $field->no_hp;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->m_dosen->count_all(),
			"recordsFiltered" => $this->m_dosen->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}

	public function tambahdosen(){
        $this->load->view('v_tambahdosen');
    }

    public function tambahdatadosen(){
        $this->m_dosen->tambah_datadosen();
        redirect('c_dosen/');
    }
}