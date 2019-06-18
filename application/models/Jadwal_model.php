<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
    private $_table = "jadwal";

    public $id_hari;
    public $nama_hari;
    public $nama_matkul;
    public $kelas;
    public $semester;

    public function rules()
    {
        return [
            ['field' => 'nama_hari',
            'label' => 'Nama Hari',
            'rules' => 'required'],

            ['field' => 'nama_matkul',
            'label' => 'Nama Matkul',
            'rules' => 'required'],

            ['field' => 'kelas',
            'label' => 'Kelas',
            'rules' => 'required'],

            ['field' => 'semester',
            'label' => 'Semester',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_hari" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_hari = uniqid();
        $this->nama_hari = $post["nama_hari"];
        $this->nama_matkul = $post["nama_matkul"];
        $this->kelas = $post["kelas"];
        $this->semester = $post["semester"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_hari = $post["id"];
        $this->nama_hari = $post["nama_hari"];
        $this->nama_matkul = $post["nama_matkul"];
        $this->kelas = $post["kelas"];
        $this->semester = $post["semester"];
        $this->db->update($this->_table, $this, array('id_hari' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_hari" => $id));
    }
}
