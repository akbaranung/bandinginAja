<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scrape_fashion extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_scrape_fashion');
        $this->load->helper('simple_html_dom');
        if(!$this->session->userdata('email')){
            redirect('Admin');
        }
    }

    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Scrape Data Fashion';
        $data['fashion'] = $this->M_scrape_fashion->tampil_data()->result();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/scrape_fashion', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('scrape', 'Kata Kunci', 'required');
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Scrapping Data Fashion';
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('admin/form_scrape_fashion', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {
            $cari = $this->input->post('scrape', true);
            for ($x = 1; $x <= 2; $x++) {
                $html = file_get_html('https://iprice.co.id/search/?term=' . $cari . '&page=' . $x);
                $bahan = $html->find('div[class=pk cN lQ kF]', 0);
                $productsContainer = $bahan->find('div[class=pu kF oT cM iq iU iV uu]');
                foreach ($productsContainer as  $value) {
                    $div_img = $value->find('div[class=dR cN nW kF ra c dQ dP bc eK]', 0);
                    $img = $div_img->find('amp-img', 0)->src;

                    $link = $value->find('a', 0)->href;

                    $div_title = $value->find('span[class=dT dS bc]', 0);
                    $title = $div_title->find('span', 0)->innertext;

                    $div_price = $value->find('div[class=p]', 0);
                    $price = $div_price->find('span', 0)->innertext;

                    $logo = $value->find('amp-img[layout=fixed]', 0)->src;

                    $data = array(
                        'img' => $img,
                        'url' => $link,
                        'nama' => $title,
                        'price' => $price,
                        'logo' => $logo,
                        'jenis' => $cari
                    );
                    $this->M_scrape_fashion->input_data($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil discrape! </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                }
            }
            redirect('Scrape_fashion');
        }
    }

    public function bersihkan()
    {
        $this->M_scrape_fashion->bersihkan();
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
        $this->M_scrape_fashion->hapus_data_scrape_fashion($where, 'scrape_fashion');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('Scrape_fashion');
    }
}
