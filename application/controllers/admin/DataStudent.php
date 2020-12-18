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
}
