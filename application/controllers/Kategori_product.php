<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_product');
        $this->load->model('M_beranda');
    }

    public function Teknologi()
    {
        $jenis = $this->input->get('jenis', TRUE);

        // PAGINATION
        $this->load->library('pagination');

        //CONFIG
        $config['base_url'] = 'http://localhost/Smartweb/Kategori_product/Teknologi';
        $config['total_rows'] = $this->M_product->countAllTeknologi();
        $config['per_page'] = 12;

        //Styling
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</li>';


        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);



        $data['start'] = $this->uri->segment(3);
        $data['teknologi'] = $this->M_product->getTeknologi($config['per_page'], $data['start'], $jenis)->result();
        $data['teknologi_jenis'] = $this->M_product->getTeknologiJenis()->result();
        $data['kategori'] = $this->M_beranda->getKategoriTeknologi()->result();
        $data['buku_tamu'] = $this->M_beranda->tampil_buku_tamu()->result();
        $data['title'] = 'Kategori Teknologi';
        $this->load->view('user/header', $data);
        $this->load->view('user/kategori_teknologi_view', $data);
        $this->load->view('user/footer');
    }

    public function Fashion()
    {
        $jenis = $this->input->get('jenis', TRUE);

        // PAGINATION
        $this->load->library('pagination');

        //CONFIG
        $config['base_url'] = 'http://localhost/Smartweb/Kategori_product/Fashion';
        $config['total_rows'] = $this->M_product->countFashion();
        $config['per_page'] = 12;

        //Styling
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</li>';


        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);



        $data['start'] = $this->uri->segment(3);
        $data['fashion'] = $this->M_product->getFashion($config['per_page'], $data['start'], $jenis)->result();
        $data['fashion_jenis'] = $this->M_product->getFashionJenis()->result();
        $data['kategori'] = $this->M_beranda->getKategoriFashion()->result();
        $data['buku_tamu'] = $this->M_beranda->tampil_buku_tamu()->result();
        $data['title'] = 'Kategori Fashion';
        $this->load->view('user/header', $data);
        $this->load->view('user/kategori_fashion_view', $data);
        $this->load->view('user/footer');
    }
}
