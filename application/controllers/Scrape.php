<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scrape extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_scrape');
        $this->load->helper('simple_html_dom');
        if(!$this->session->userdata('email')){
            redirect('Admin');
        }
    }

    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Scrape Data';
        $data['scrape'] = $this->M_scrape->tampil_data()->result();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/scrape', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('scrape', 'Kata Kunci', 'required');
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Scrapping Data Teknologi';
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('admin/form_scrape', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {
            $cari = $this->input->post('scrape', true);
            for ($x = 1; $x <= 4; $x++) {
                $html = file_get_html('https://iprice.co.id/search/?term=' . $cari . '&page=' . $x);
                $bahan = $html->find('div[class=pk cN lQ kF]', 0);
                $productsContainer = $bahan->find('div[class=pu kF oT cM iq iU iV uu]');
                $products['products'] = [];
                foreach ($productsContainer as $product => $value) {
                    $div_img = $value->find('div[class=dR cN nW kF ra c dQ dP bc eK]', 0);
                    $img = $div_img->find('amp-img', 0)->src;

                    $link = $value->find('a', 0)->href;

                    $div_title = $value->find('div[class=l bc]', 0);
                    $title = $div_title->find('span[class=truncate-2 db ra oz co b h2-ns uD]', 0)->innertext;

                    $div_price = $value->find('div[class=gM uu a0 fl ei kp b db h65]', 0);
                    $price = $div_price->find('div', 0)->innertext;

                    $logo = $value->find('amp-img[layout=fixed]', 0)->src;

                    $data = array(
                        'img' => $img,
                        'url' => $link,
                        'nama' => $title,
                        'price' => $price,
                        'logo' => $logo,
                        'jenis' => $cari
                    );
                    $this->M_scrape->input_data($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil discrape! </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                }
            }
            redirect('Scrape');
        }
    }

    public function bersihkan()
    {
        $this->M_scrape->bersihkan();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil dibershikan! </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
        redirect('Scrape');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_scrape->hapus_data_scrape($where, 'scrape');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('Scrape');
    }
}
