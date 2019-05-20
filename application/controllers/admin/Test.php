<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/home');
	}
	public function bodydosen()
	{
		$this->load->view('admin/konten/b_dosen');
	}
}

/* End of file Test.php */
/* Location: ./application/controllers/admin/Test.php */
