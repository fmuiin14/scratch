<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataParent extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Parents';
		$data['parents'] = $this->ParentsModel->get_data('data_parents')->result();
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dataParent', $data);
		$this->load->view('template_admin/footer');
		
	}

	public function tambahData() {
		$data['title'] = "Tambah Data Parent";
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahDataParent', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambahDataAksi() {
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
		$this->tambahData();
		} else {
		$nama_parents = $this->input->post('nama_parents');
		$hubungan = $this->input->post('hubungan');
		$no_hp = $this->input->post('no_hp');
		$email_parents = $this->input->post('email_parents');

		$data = array(
		'nama_parents' => $nama_parents,
		'hubungan' => $hubungan,
		'no_hp' => $no_hp,
		'email_parents' => $email_parents,
		);

		$this->ParentsModel->insertData($data, 'data_parents');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert"
				aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('admin/dataParent');
		}
	}

	public function _rules() {
	$this->form_validation->set_rules('nama_parents', 'nama parents', 'required');
	$this->form_validation->set_rules('hubungan', 'Hubungan', 'required');
	$this->form_validation->set_rules('no_hp', 'No HP', 'required');
	$this->form_validation->set_rules('email_parents', 'Email Parents', 'required');
	}

	public function updateData($id) {
		$where = array('id_parents' => $id);
		$data['parents'] = $this->db->query("SELECT * FROM data_parents WHERE id_parents = '$id'")->result();
		
		
		$data['title'] = 'Update Data Parent';
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/updateDataParent', $data);
		$this->load->view('template_admin/footer');
	}

	public function updateDataAksi() {
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
		$this->updateData();
		} else {
		$id = $this->input->post('id_parents');
		$nama_parents = $this->input->post('nama_parents');
		$hubungan = $this->input->post('hubungan');
		$no_hp = $this->input->post('no_hp');
		$email_parents = $this->input->post('email_parents');

		$data = array(
		'nama_parents' => $nama_parents,
		'hubungan' => $hubungan,
		'no_hp' => $no_hp,
		'email_parents' => $email_parents,
		);

		$where = array(
		'id_parents' => $id
		);

		$this->ParentsModel->updateData('data_parents', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil di update</strong><button type="button" class="close" data-dismiss="alert"
				aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('admin/dataParent');
		}
	}

	public function deleteData($id) {
		$where = array('id_parents' => $id);
		$this->ParentsModel->deleteData($where, 'data_parents');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert"
				aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('admin/dataParent');
	}
}
