<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('admin/auth');
        }
    }
    public function index()
    {
        $data['title'] = "Halaman Admin | Raski Store";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
    }

    public function produk()
    {
        $data['title'] = "Halaman Produk | Raski Store";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get('tb_produk')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('produk', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Produk | Raski Store";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get('tb_produk')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah', $data);
        $this->load->view('templates/footer');
    }

    public function upload()
    {
        $data = [
            'nama_produk' => $this->input->post('nama'),
            'stok'        => $this->input->post('stok'),
            'harga'       => $this->input->post('harga')
        ];
        $upload_gambar = $_FILES['foto']['name'];

        if ($upload_gambar) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '500000';
            $config['upload_path'] = './assets/img/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {

                $new_gambar = $this->upload->data('file_name');
                $this->db->set('gambar', $new_gambar);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maksimal Berkas 200Mb </div>');
            }
        }
        $this->db->insert('tb_produk', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Produk Berhasil Ditambahkan</div>');
        redirect('admin/produk');
    }

    public function hapus($id)
    {
        $this->db->where('id_produk', $id);
        $this->db->delete('tb_produk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Produk Berhasil Dihapus</div>');
        redirect('admin/produk');
    }
}
