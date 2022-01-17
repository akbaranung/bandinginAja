<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_tamu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_beranda');
        if(!$this->session->userdata('email')){
            redirect('Admin');
        }
    }

    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['buku_tamu'] = $this->M_beranda->tampil_buku_tamu()->result();
        $data['title'] = 'Buku Tamu';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/data_buku_tamu', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_beranda->hapus_data_buku_tamu($where, 'buku_tamu');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('Buku_tamu');
    }
}
