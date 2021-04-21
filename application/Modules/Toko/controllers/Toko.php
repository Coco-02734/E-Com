<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Raski Store | Halaman Awal";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get("tb_produk")->result_array();
        if ($data['user']) {
            $data['keranjang'] = $this->db->get('keranjang')->result_array();
            $data['jml'] = $this->db->select_sum('jumlah')->get_where('keranjang', ['id_user' => $data['user']['id'], 'aktif' => 0])->row_array();
        }
        $this->load->view("awal", $data);
    }
    public function tambah($id)
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $produk = $this->db->get_where("tb_produk", ['id_produk' => $id])->row_array();
        $cek = $this->db->get_where('keranjang', ['id_produk' => $id])->row_array();
        $data = [
            'id_produk' => $id,
            'id_user' => $user['id'],
            'jumlah'    => 1,
            'aktif'    => 0,
            'total_harga' => $produk['harga']
        ];
        if (!$cek) {
            $this->db->insert('keranjang', $data);
        } else {
            $updatenya = [
                'jumlah' => $cek['jumlah'] + 1,
                'total_harga' => $cek['total_harga'] + $produk['harga']
            ];
            $this->db->set($updatenya);
            $this->db->where('id_produk', $id);
            $this->db->update('keranjang');
        }

        $this->session->set_flashdata('message', 'berhasil');
        redirect('toko');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['password'] == $password) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                redirect('toko');
            } else {
                redirect('toko');
            }
        } else {
            redirect('toko');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah logout / keluar.
			Silahkan login !!!</div>');
        redirect('toko');
    }

    public function keranjang()
    {
        $data['title'] = "Raski Store | Halaman Awal";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get("tb_produk")->result_array();
        if ($data['user']) {
            $data['keranjang'] = $this->db->from('keranjang')->join('tb_produk', 'tb_produk.id_produk=keranjang.id_produk')->where('id_user', $data['user']['id'])->get()->result_array();
            $data['jml'] = $this->db->select_sum('total_harga')->get_where('keranjang', ['id_user' => $data['user']['id'], 'aktif' => 0])->row_array();
            $data['jml_brg'] = $this->db->select_sum('jumlah')->get_where('keranjang', ['id_user' => $data['user']['id'], 'aktif' => 0])->row_array();
        }
        $this->load->view("keranjang", $data);
    }
}
