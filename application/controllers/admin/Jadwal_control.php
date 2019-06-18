<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jadwal_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["jadwal_control"] = $this->jadwal_model->getAll();
        $this->load->view("admin/coba/list", $data);
    }

    public function add()
    {
        $jadwal = $this->jadwal_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwal->rules());

        if ($validation->run()) {
            $jadwal->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/coba/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/jadwal_control');

        $jadwal = $this->jadwal_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwal->rules());

        if ($validation->run()) {
            $jadwal->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jadwal"] = $jadwal->getById($id);
        if (!$data["jadwal"]) show_404();

        $this->load->view("admin/coba/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->jadwal_model->delete($id)) {
            redirect(site_url('admin/jadwal_control'));
        }
    }
}
