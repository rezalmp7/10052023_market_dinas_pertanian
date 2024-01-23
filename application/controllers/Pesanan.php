<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();

		$this->load->model("M_admin");
	}
	public function index()
	{
		$user = $this->session->userdata('id');
        $data['transaksi'] = $this->M_admin->select_where('transaksi', array('id_user' => $user))->result_array();

		$this->load->view('layout/header');
		$this->load->view('pesanan', $data);
		$this->load->view('layout/footer');
	}
    public function store() {
        if($this->session->userdata("id") != null) {
            $post = $this->input->post();
            $kode_pesanan = time();

            $id_user = $this->session->userdata('id');

            $keranjang = $this->M_admin->select_where('keranjang', array('id_user' => $id_user))->result_array();

            $total = 0;

            foreach ($post['id'] as $key => $value) {
                $total += $post['harga'][$key] * $post['qty'][$key];
            }

            $data_transaksi = array(
                'kode_pesanan' => $kode_pesanan,
                'id_user' => $id_user,
                'tgl_pengambilan' => date("Ymd", strtotime($post['tgl_pengambilan'])),
                'status' => 1,
                'total' => $total
            );

            $this->M_admin->insert_data('transaksi', $data_transaksi);
            $transaksi = $this->M_admin->select_where('transaksi', array('kode_pesanan' => $kode_pesanan))->row_array();

            $pesanan = [];
            foreach ($post['id'] as $key => $value) {
                $keranjang = $this->M_admin->select_where('keranjang', array('id' => $post['id'][$key]))->row_array();
                $data = array(
                    'id_transaksi' => $transaksi['id'],
                    'id_produk' => $keranjang['id_produk'],
                    'type' => $keranjang['type'],
                    'qty' => $post['qty'][$key],
                    'harga' => $post['harga'][$key],
                );

                $this->M_admin->insert_data('pesanan', $data);

				if($keranjang['type'] == 'bibit') {
					$produk = $this->M_admin->select_where('bibit', array('id' => $keranjang['id_produk']))->row();
					$this->M_admin->update_data('bibit', array('jumlah' => ($produk->jumlah-$post['qty'][$key])), array('id' => $produk->id));
				} else {
					$produk = $this->M_admin->select_where('pupuk', array('id' => $keranjang['id_produk']))->row();
					$this->M_admin->update_data('pupuk', array('jumlah' => ($produk->jumlah-$post['qty'][$key])), array('id' => $produk->id));
				}
            }

            $this->M_admin->delete_data('keranjang', array('id_user' => $id_user));

            redirect(base_url('pesanan'));
        } else {
            redirect(base_url('login'));
        }
    }
	public function show($id)
	{

        $data['transaksi'] = $this->M_admin->select_where('transaksi', array('id' => $id))->row_array();
        
        $keranjang_db = $this->M_admin->select_where('pesanan', array('id_transaksi' => $id))->result_array();

        $pesanan_save = [];

        foreach ($keranjang_db as $key => $value) {
            if($value['type'] == 'bibit') {
                $produk_db = $this->M_admin->select_where('bibit', array('id' => $value['id_produk']))->row_array();
                $produk = array(
                    'id' => $produk_db['id'],
                    'nama' => 'Bibit '.$produk_db['produsen'],
                    'harga' => $produk_db['harga']
                );
            } else {
                $produk_db = $this->M_admin->select_where('pupuk', array('id' => $value['id_produk']))->row_array();
                $produk = array(
                    'id' => $produk_db['id'],
                    'nama' => $produk_db['nama'],
                    'harga' => $produk_db['harga']
                );
            }

            $pesanan_save[] = array(
                'id' => $value['id'],
                'produk' => $produk,
                'qty' => $value['qty'], 
                'harga' => $value['harga'], 
            );
        }

        $data['pesanan'] = $pesanan_save;

		$this->load->view('layout/header');
		$this->load->view('pesanan_detail', $data);
		$this->load->view('layout/footer');
	}
    public function cetak($id) {
        $data['transaksi'] = $this->M_admin->select_where('transaksi', array('id' => $id))->row_array();

        $keranjang_db = $this->M_admin->select_where('pesanan', array('id_transaksi' => $id))->result_array();

        $pesanan_save;

        foreach ($keranjang_db as $key => $value) {
            if($value['type'] == 'bibit') {
                $produk_db = $this->M_admin->select_where('bibit', array('id' => $value['id_produk']))->row_array();
                $produk = array(
                    'id' => $produk_db['id'],
                    'nama' => 'Bibit '.$produk_db['produsen'],
                    'harga' => $produk_db['harga']
                );
            } else {
                $produk_db = $this->M_admin->select_where('pupuk', array('id' => $value['id_produk']))->row_array();
                $produk = array(
                    'id' => $produk_db['id'],
                    'nama' => $produk_db['nama'],
                    'harga' => $produk_db['harga']
                );
            }

            $pesanan_save[] = array(
                'id' => $value['id'],
                'produk' => $produk,
                'qty' => $value['qty'],
                'harga' => $value['harga'],
            );
        }

        $data['pesanan'] = $pesanan_save;

        $this->load->view('pesanan_cetak', $data);
    }
}
