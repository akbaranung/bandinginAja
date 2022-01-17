<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
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
        $data['title'] = 'Front End Slider';
        $data['slider'] = $this->M_beranda->tampil_slider()->result();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/data_slider', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('tulisan1', 'Tulisan 1', 'required');
        $this->form_validation->set_rules('tulisan2', 'Tulisan 2', 'required');
        $data['title'] = 'Form Tambah Data Slider';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar');
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('admin/form_data_slider', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $tulisan1 = $this->input->post('tulisan1', true);
            $tulisan2 = $this->input->post('tulisan2', true);

            $config['upload_path'] = './uploads/slider';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
            }
            $data = array(
                'tulisan_1'  => $tulisan1,
                'tulisan_2'  => $tulisan2,
                'gambar'    => $gambar
            );

            $this->M_beranda->input_data_slider($data, 'slider');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan! </strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  	</div>');
            redirect('Slider');
        }
    }

    public function hapus($id)
    {

        $data = $this->M_beranda->getdataByIdSlider($id)->row();
        $namaGambar = './uploads/slider/' . $data->gambar;


        if($data->gambar != '')
        {
            if(is_readable($namaGambar) && unlink($namaGambar))
            $where = array('id' => $id);
            $this->M_beranda->hapus_data_slider($where, 'slider');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil dihapus! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('Slider');
        } else {
            $where = array('id' => $id);
            $this->M_beranda->hapus_data_slider($where, 'slider');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil dihapus! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('Slider');
        }

        
    }

    public function edit($id)
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Form Edit Data Slider Beranda';
        $data['data_slider'] = $this->M_beranda->edit_data_slider($id)->result();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('admin/form_edit_slider', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $tulisan_1 = $this->input->post('tulisan1');
        $tulisan_2 = $this->input->post('tulisan2');

        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['upload_path'] = './uploads/slider';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $data = array(
                    'tulisan_1' => $tulisan_1,
                    'tulisan_2' => $tulisan_2,
                    'gambar'    => $new_image  
                );
            } else {
                echo $this->upload->display_error();
            }
        } else {
            $data = array(
                'tulisan_1' => $tulisan_1,
                'tulisan_2' => $tulisan_2
            );
        }


        $where = array(
            'id' => $id
        );


        $this->M_beranda->update_data_slider($where, $data, 'slider');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diubah! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('Slider');
    }
}
