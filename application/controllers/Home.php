<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$bibit5 = $this->M_admin->select_select_limit_orderBy("*", "bibit", 5, 'created_at DESC')->result_array();
		$pupuk5 = $this->M_admin->select_select_limit_orderBy("*", "pupuk", 5, 'created_at DESC')->result_array();
		// $pupuk5 = $this->M_admin->select_all_limit("pupuk", 5)->result_array();

		$transaksi_bibit = $this->db->from('bibit')
			->join("pesanan", "bibit.id = pesanan.id_produk")
			->where('pesanan.type', 'bibit')
			->select(['bibit.id as id', 'bibit.produsen as nama', 'SUM(pesanan.qty) as qty'])
			->group_by('bibit.id')
			->get()->result_array();

		$transaksi_pupuk = $this->db->from('pupuk')
			->join("pesanan", "pupuk.id = pesanan.id_produk")
			->where('pesanan.type', 'pupuk')
			->select(['pupuk.id as id', 'pupuk.nama as nama', 'SUM(pesanan.qty) as qty'])
			->group_by('pupuk.id')
			->get()->result_array();
		$transaksi_all = array_merge($transaksi_bibit,$transaksi_pupuk);

		$keys = array_column($transaksi_all, 'qty');
		array_multisort($keys, SORT_DESC, $transaksi_all);
		
		$transaksi_slice = array_slice($transaksi_all, 0, 5);
			
		$nama_transaksi = [];
		$qty_transaksi = [];

		foreach ($transaksi_slice as $key => $value) {
			$nama_transaksi[] = $value['nama'];
			$qty_transaksi[] = $value['qty'];
		}
		// echo "<pre>";
		// print_r($transaksi_all);
		// print_r($transaksi_slice);
		// print_r($nama_transaksi);
		// print_r($qty_transaksi);

		$data = array(
			'bibits' => $bibit5,
			'pupuks' => $pupuk5,
			'nama_transaksi' => $nama_transaksi,
			'qty_transaksi' => $qty_transaksi
		);

        $this->load->view('layout/header');
		$this->load->view('home', $data);
        $this->load->view('layout/footer');
	}
}
