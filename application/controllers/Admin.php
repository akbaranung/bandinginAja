<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_profile');

    }

    public function index()
    {
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        } else {
            // validasinya success
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $admin = $this->db->get_where('admin', ['email' => $email])->row_array();

        // Jika adminnya ada 
        if ($admin) {
            //Jika adminnya aktif
            if ($admin['is_active'] == 1) {
                //cek password
                if ($password == $admin['password']) {
                    $data = [
                        'email' => $admin['email'],
                        'role' => $admin['role']
                    ];
                    $this->session->set_userdata($data);
                    redirect('Admin/dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('Admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('Admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('Admin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('Admin');
    }

    public function administrator()
    {
        if(!$this->session->userdata('email')){
            redirect('Admin');
        }
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Administrator';
        $data['profile'] = 'My Profile';
        if (!$this->session->userdata('email')) {
            redirect('admin');
        }
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function dashboard()
    {
        if(!$this->session->userdata('email')){
            redirect('Admin');
        }
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['teknologi'] = $this->db->query('SELECT count(*) as jumlah FROM scrape')->result();
        $data['fashion'] = $this->db->query('SELECT count(*) as jumlah FROM scrape_fashion')->result();
        $data['tamu'] = $this->db->query('SELECT count(*) as jumlah FROM buku_tamu')->result();
        $data['title'] = 'Administrator';
        $data['profile'] = 'My Profile';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function edit()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Profile';
        $data['data'] = $this->db->query('SELECT * FROM admin')->result();
        if (!$this->session->userdata('email')) {
            redirect('Admin');
        }

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/form_edit_profile', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_kategori = $this->input->post('nama');


        $config['upload_path'] = './uploads/profile';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
        }

        $data = array(
            'name' => $nama_kategori,
            'image'    => $gambar

        );

        $where = array(
            'id' => $id
        );


        $this->M_profile->update_data_profile($where, $data, 'admin');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diubah! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('Admin/administrator');
    }
}
