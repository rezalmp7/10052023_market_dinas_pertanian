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
	public function index()
	{
		$get = $this->input->get();

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
