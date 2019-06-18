<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test2 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_dosen_model");
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data["user_dosen"] = $this->user_dosen_model->getAll();
		$user_dosen = $this->user_dosen_model;
		$validation = $this->form_validation;
		$validation->set_rules($user_dosen->rules());

		if ($validation->run()) {
				$user_dosen->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect(site_url('admin/test2'));
		} else {
		$this->load->view("admin/home", $data);
	}
	}

	/*
	public function bodydosen()
	{
		$this->load->view('admin/konten/b_dosen');
	} */

	public function add()
	{
			$user_dosen = $this->user_dosen_model;
			$validation = $this->form_validation;
			$validation->set_rules($user_dosen->rules());

			if ($validation->run()) {
					$user_dosen->save();
					$this->session->set_flashdata('success', 'Berhasil disimpan');
			}
	}

	public function edit($id = null)
	{
			if (!isset($id)) redirect('admin/test2');

			$user_dosen = $this->user_dosen_model;
			$validation = $this->form_validation;
			$validation->set_rules($user_dosen->rules());

			if ($validation->run()) {
					$user_dosen->update();
					$this->session->set_flashdata('success', 'Berhasil disimpan');
			}

			$data["user_dosen"] = $user_dosen->getById($id);
			if (!$data["user_dosen"]) show_404();

			$this->load->view("admin/file_tambahan/edit_form_dosen", $data);
	}

	public function delete($id=null)
	{
			if (!isset($id)) show_404();

			if ($this->user_dosen_model->delete($id)) {
					redirect(site_url('admin/test2'));
			}
	}
}

/* End of file Test.php */
/* Location: ./application/controllers/admin/Test.php */
