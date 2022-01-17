<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_beranda extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function tampil_slider()
    {
        return $this->db->query("SELECT* FROM slider");
    }

    public function input_data_slider($data)
    {
        $this->db->insert('slider', $data);
    }

    public function edit_data_slider($id)
    {
        $id = $this->uri->segment(3);
        return $this->db->query("SELECT * FROM slider WHERE id = $id");
    }

    public function update_data_slider($where, $data)
    {
        $this->db->where($where);
        $this->db->update('slider', $data);
    }

    public function getdataByIdSlider($id)
    {
        return $this->db->get_where('slider', array('id' => $id));
    }

    public function hapus_data_slider($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function tampil_kategori()
    {
        return $this->db->query("SELECT* FROM kategori");
    }

    public function input_data_kategori($data)
    {
        $this->db->insert('kategori', $data);
    }

    public function getKategoriTeknologi()
    {
        return $this->db->query("SELECT * FROM kategori WHERE nama_kategori = 'Teknologi'");
    }

    public function getKategoriFashion()
    {
        return $this->db->query("SELECT * FROM kategori WHERE nama_kategori = 'Fashion'");
    }

    public function edit_kategori($id)
    {
        $id = $this->uri->segment(3);
        return $this->db->query("SELECT * FROM kategori WHERE id = $id");
    }

    public function update_data_kategori($where, $data)
    {
        $this->db->where($where);
        $this->db->update('kategori', $data);
    }

    public function input_buku_tamu($data)
    {
        $this->db->insert('buku_tamu', $data);
    }

    public function tampil_buku_tamu()
    {
        return $this->db->query("SELECT* FROM buku_tamu");
    }

    public function hapus_data_buku_tamu($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
