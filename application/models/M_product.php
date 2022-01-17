<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Model
{

    public function input_data($data)
    {
        $this->db->insert('scrape', $data);
    }

    public function getTeknologi($limit, $start, $jenis)
    {
        $this->db->get('scrape', $limit, $start);
        $this->db->where('jenis', $jenis);
        return $this->db->get('scrape');
    }

    public function countAllTeknologi()
    {
        return $this->db->get('scrape')->num_rows();
    }

    public function getTeknologiJenis()
    {
        return $this->db->query("SELECT jenis FROM scrape GROUP BY jenis");
    }

    public function getFashion($limit, $start, $jenis)
    {
        $this->db->get('scrape_fashion', $limit, $start);
        $this->db->where('jenis', $jenis);
        return $this->db->get('scrape_fashion');
    }

    public function getFashionJenis()
    {
        return $this->db->query("SELECT jenis FROM scrape_fashion GROUP BY jenis");
    }

    public function countFashion()
    {
        return $this->db->get('scrape_fashion')->num_rows();
    }
}
