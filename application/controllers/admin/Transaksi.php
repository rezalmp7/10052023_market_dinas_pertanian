<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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
        $data['transaksi'] = $this->M_admin->select_all('transaksi')->result_array();

        foreach ($data['transaksi'] as $key => $value) {
            $user = $this->M_admin->select_where('user', array('id' => $value['id_user']))->row_array();

            $data['transaksi'][$key]['nama_user'] = $user['nama'];
        }

        $this->load->view('admin/layout/header');
		$this->load->view('admin/transaksi', $data);
        $this->load->view('admin/layout/footer');
	}
    public function show($id) {
        $data['transaksi'] = $this->M_admin->select_where('transaksi', array('id' => $id))->row_array();
        $data['pemesan'] = $this->M_admin->select_where('user', array('id' => $data['transaksi']['id_user']))->row_array();

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

        $this->load->view('admin/layout/header');
		$this->load->view('admin/transaksi_detail', $data);
        $this->load->view('admin/layout/footer');
    }
    public function updateStatus() {
        $get = $this->input->get();

        $this->M_admin->update_data('transaksi', array('status' => $get['status']), array('id' => $get['id']));

        redirect(base_url('admin/transaksi/show/'.$get['id']));
    }
}
