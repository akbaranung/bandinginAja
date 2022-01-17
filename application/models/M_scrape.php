<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_scrape extends CI_Model
{

    public function input_data($data)
    {
        $this->db->insert('scrape', $data);
    }

    public function tampil_data()
    {
        return $this->db->query("SELECT*FROM scrape ORDER BY id DESC");
    }

    public function bersihkan()
    {
        return $this->db->query("DELETE FROM scrape WHERE price LIKE '%<div%'");
    }

    public function hapus_data_scrape($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
