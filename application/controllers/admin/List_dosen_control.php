<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_dosen_control extends CI_Controller
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
		$this->load->view("admin/konten/b_dosen", $data);
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

			$this->load->view("admin/coba/new_form");
	}

	public function edit($id = null)
	{
			if (!isset($id)) redirect('admin/body_dosen_control');

			$user_dosen = $this->user_dosen_model;
			$validation = $this->form_validation;
			$validation->set_rules($user_dosen->rules());

			if ($validation->run()) {
					$user_dosen->update();
					$this->session->set_flashdata('success', 'Berhasil disimpan');
			}

			$data["user_dosen"] = $user_dosen->getById($id);
			if (!$data["user_dosen"]) show_404();

			$this->load->view("admin/coba/edit_form", $data);
	}

	public function delete($id=null)
	{
			if (!isset($id)) show_404();

			if ($this->user_dosen_model->delete($id)) {
					redirect(site_url('admin/body_dosen_control'));
			}
	}
}

/* End of file Test.php */
/* Location: ./application/controllers/admin/Test.php */
