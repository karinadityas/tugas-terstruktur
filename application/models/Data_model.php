<?php

class Data_model extends CI_Model
{
    private $table = 'mahasiswa';
    public function save($mahasiswa)
    {
        return $this->db->insert($this->table, $mahasiswa);
    }
    public function data()
    {
        $q = $this->db->get($this->table);
        return $q->result_array();
    }
}
?>