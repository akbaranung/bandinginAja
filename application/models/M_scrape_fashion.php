<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_scrape_fashion extends CI_Model
{

    public function input_data($data)
    {
        $this->db->insert('scrape_fashion', $data);
    }

    public function tampil_data()
    {
        return $this->db->query("SELECT*FROM scrape_fashion ORDER BY id DESC");
    }

    public function bersihkan()
    {
        return $this->db->query("UPDATE scrape_fashion
        SET price = REPLACE(price, '</div>', '')");
    }

    public function hapus_data_scrape_fashion($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
