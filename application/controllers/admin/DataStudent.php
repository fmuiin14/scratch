<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataStudent extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Student';
		$data['students'] = $this->StudentsModel->get_data('data_students')->result();
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dataStudent', $data);
		$this->load->view('template_admin/footer');
		
	}

	public function tambahData() {
		$data['title'] = "Tambah Data Student";
		$data['all_hubungan'] = $this->StudentsModel->get_data('data_parents')->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambahDataStudent', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambahDataAksi() {
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
		$this->tambahData();
		} else {
		$nama_anak = $this->input->post('nama_anak');
		$tgl_lahir_anak = $this->input->post('tgl_lahir_anak');
		$usia_anak = $this->input->post('usia_anak');
		$no_hp_anak = $this->input->post('no_hp_anak');
		$agama = $this->input->post('agama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$parents = $this->input->post('parents');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		// untuk photo menggunakan superglobal variabel dr php
		$photo = $_FILES['photo']['name'];
		if ($photo = '') {

		} else {
		$config['upload_path'] = './assets/photo/';
		$config['allowed_types'] = 'jpg|jpeg|png|tiff';
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('photo')) {
		echo "Photo Gagal di Upload";
		} else {
		$photo = $this->upload->data('file_name');
		}
		}

		$data = array(
		'nama_anak' => $nama_anak,
		'tgl_lahir_anak' => $tgl_lahir_anak,
		'usia_anak' => $usia_anak,
		'no_hp_anak' => $no_hp_anak,
		'agama' => $agama,
		'jenis_kelamin' => $jenis_kelamin,
		'parents' => $parents,
		'tanggal_masuk' => $tanggal_masuk,
		'photo' => $photo,
		);

		$this->StudentsModel->insertData($data, 'data_students');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert"
				aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('admin/dataStudent');
		}
	}

	public function updateData($id) {
		$where = array('id_student' => $id);

		$data['students'] = $this->db->query("SELECT * FROM data_students WHERE id_student = '$id'")->result();

		$data['parents'] = $this->StudentsModel->get_data('data_parents')->result();

		$data['title'] = 'Update Data Student';

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/updateDataStudent', $data);
		$this->load->view('template_admin/footer');


	}

	public function updateDataAksi() {
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->updateData();
		} else {
			$id = $this->input->post('id_student');
			$nama_anak = $this->input->post('nama_anak');
			$tgl_lahir_anak = $this->input->post('tgl_lahir_anak');
			$usia_anak = $this->input->post('usia_anak');
			$no_hp_anak = $this->input->post('no_hp_anak');
			$agama = $this->input->post('agama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$parents = $this->input->post('parents');
			$tanggal_masuk = $this->input->post('tanggal_masuk');
			// untuk photo menggunakan superglobal variabel dr php
			$photo = $_FILES['photo']['name'];
			if($photo) {
				$config['upload_path'] = './assets/photo';
				$config['allowed_types'] = 'jpg|jpeg|png|tiff';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('photo')) {
					$photo = $this->upload->data('file_name');
					$this->db->set('photo', $photo);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'nama_anak' => $nama_anak,
				'tgl_lahir_anak' => $tgl_lahir_anak,
				'usia_anak' => $usia_anak,
				'no_hp_anak' => $no_hp_anak,
				'agama' => $agama,
				'jenis_kelamin' => $jenis_kelamin,
				'parents' => $parents,
				'tanggal_masuk' => $tanggal_masuk,
		);

		$where = array(
			'id_student' => $id
		);

		$this->StudentsModel->updateData('data_students', $data, $where);

		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil di update</strong><button type="button" class="close" data-dismiss="alert"
				aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('admin/dataStudent');

		}
	}

	public function deleteData($id) {
		$where = array('id_student' => $id);

		$this->StudentsModel->deleteData($where, 'data_students');

		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert"
				aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('admin/dataStudent');
	}

	public function _rules() {
	$this->form_validation->set_rules('nama_anak', 'Nama Anak', 'required');
	$this->form_validation->set_rules('tgl_lahir_anak', 'Tanggal Lahir Anak', 'required');
	$this->form_validation->set_rules('usia_anak', 'Usia Anak', 'required');
	$this->form_validation->set_rules('no_hp_anak', 'No HP Anak', 'required');
	$this->form_validation->set_rules('agama', 'Agama', 'required');
	$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
	$this->form_validation->set_rules('parents', 'Parents', 'required');
	$this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
	}
}
