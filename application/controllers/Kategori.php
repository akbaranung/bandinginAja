<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_beranda');
        if (!$this->session->userdata('email')) {
            redirect('Admin');
        }
    }

    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->M_beranda->tampil_kategori()->result();
        $data['title'] = 'Kategori';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/data_kategori', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama Kategori', 'required');
        $data['title'] = 'Form Tambah Data Kategori';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar');
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('admin/form_data_kategori', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $nama = $this->input->post('nama', true);

            $config['upload_path'] = './uploads/kategori';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
            }
            $data = array(
                'nama_kategori'  => $nama,
                'img'           => $gambar
            );

            $this->M_beranda->input_data_kategori($data, 'slider');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan! </strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  	</div>');
            redirect('Kategori');
        }
    }


    public function edit($id)
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Form Edit Data Kategori';
        $data['data_kategori'] = $this->M_beranda->edit_kategori($id)->result();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('Admin/form_edit_kategori', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_kategori = $this->input->post('nama');

        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['upload_path'] = './uploads/kategori';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $data = array(
                    'nama_kategori' => $nama_kategori,
                    'img'    => $new_image
                );
            } else {
                echo $this->upload->display_error();
            }
        } else {
            $data = array(
                'nama_kategori' => $nama_kategori
            );
        }

        $where = array(
            'id' => $id
        );


        $this->M_beranda->update_data_kategori($where, $data, 'kategori');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diubah! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('Kategori');
    }
}
