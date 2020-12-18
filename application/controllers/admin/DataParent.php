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
}
