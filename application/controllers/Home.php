<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_beranda');
	}

	public function index()
	{
		$data['slider'] = $this->M_beranda->tampil_slider()->result();
		$data['buku_tamu'] = $this->M_beranda->tampil_buku_tamu()->result();
		$data['kategori'] = $this->M_beranda->tampil_kategori()->result();
		$data['title'] = 'Bandingin Aja';
		$this->load->view('user/header', $data);
		$this->load->view('user/content', $data);
		$this->load->view('user/footer');
	}

	public function buku_tamu()
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required');
		$this->form_validation->set_rules('point', 'point', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$data['title'] = 'Beranda';
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('user/header', $data);
			$this->load->view('user/content', $data);
			$this->load->view('user/footer');
		} else {
			$nama = $this->input->post('nama', true);
			$email = $this->input->post('email', true);
			$pekerjaan = $this->input->post('pekerjaan', true);
			$pesan = $this->input->post('pesan', true);
			$point = $this->input->post('point', true);

			$data = array(
				'nama'  => $nama,
				'email'  => $email,
				'pekerjaan' => $pekerjaan,
				'pesan'     => $pesan,
				'point'		=> $point
			);

			$this->M_beranda->input_buku_tamu($data, 'buku_tamu');
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data pengunjung berhasil ditambahkan! </strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  	</div>');
			redirect('Home');
		}
	}
}
