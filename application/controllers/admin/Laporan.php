<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

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
	function getIndonesianMonth($bulan) {
		switch ($bulan) {
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			default:
				return "Desember";
				break;
		}
	}
	public function index()
	{
		$get = $this->input->get();
		$bulanIni = date('m');

		$data = [];
		if(!isset($get['bulan'])) {
			$data['bulan'] = 'all';
			$data['tahun'] = 'all';
			$data['transaksi'] = $this->M_admin->select_all('transaksi')->result_array();

			foreach ($data['transaksi'] as $key => $value) {
				$user = $this->M_admin->select_where('user', array('id' => $value['id_user']))->row_array();

				$data['transaksi'][$key]['nama_user'] = $user['nama'];
			}
		} else {
			$data['bulan'] = $get['bulan'];
			$data['tahun'] = $get['tahun'];
			$tanggal = $get['tahun'].'-'.$get['bulan'];
			$data['transaksi'] = $this->db->select('*')
				->from("transaksi")
				->where('created_at BETWEEN "'. $tanggal.'-01 00:00:01'. '" and "'. $tanggal.'-31 23:59:59"')
				->get()->result_array();

			foreach ($data['transaksi'] as $key => $value) {
				$user = $this->M_admin->select_where('user', array('id' => $value['id_user']))->row_array();

				$data['transaksi'][$key]['nama_user'] = $user['nama'];
			}
		}
		$cart = [];
		for ($i=0; $i < 12; $i++) { 
			$bulanWhere = $bulanIni - $i;
			$cart['bulan'][$i] = $this->getIndonesianMonth($bulanWhere);
			$total = $this->db->select('SUM(total) as total')
				->from("transaksi")
				->where('status', 2)
				->where('created_at BETWEEN "2023-'. $bulanWhere.'-01 00:00:01'. '" and "2023-'. $bulanWhere.'-31 23:59:59"')
				->get()->row_array();
			$cart['value'][$i] = $total['total'] != null ? $total['total'] : 0;
		}
		$data['cart']['bulan'] = json_encode($cart['bulan']);
		$data['cart']['value'] = json_encode($cart['value']);
		// echo "<pre>";
		// print_r($data['cart']);
        $this->load->view('admin/layout/header');
		$this->load->view('admin/laporan', $data);
        $this->load->view('admin/layout/footer');
	}
	public function cetakExcel() {
		$post = $this->input->post();
        if($post['bulan'] == 'all') {
			$data['bulan'] = 'all';
			$data['tahun'] = 'all';
			$data['transaksi'] = $this->M_admin->select_all('transaksi')->result_array();

			foreach ($data['transaksi'] as $key => $value) {
				$user = $this->M_admin->select_where('user', array('id' => $value['id_user']))->row_array();

				$data['transaksi'][$key]['nama_user'] = $user['nama'];
			}
		} else {
			$data['bulan'] = $post['bulan'];
			$data['tahun'] = $post['tahun'];
			$tanggal = $post['tahun'].'-'.$post['bulan'];
			$data['transaksi'] = $this->db->select('*')
				->from("transaksi")
				->where('created_at BETWEEN "'. $tanggal.'-01 00:00:01'. '" and "'. $tanggal.'-31 23:59:59"')
				->get()->result_array();

			foreach ($data['transaksi'] as $key => $value) {
				$user = $this->M_admin->select_where('user', array('id' => $value['id_user']))->row_array();

				$data['transaksi'][$key]['nama_user'] = $user['nama'];
			}
		}

		$this->load->view('admin/excel', $data);
	}
}
