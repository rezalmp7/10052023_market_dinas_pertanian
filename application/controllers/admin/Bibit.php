<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bibit extends CI_Controller {

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
		$data['bibits'] = $this->M_admin->select_all('bibit')->result_array();
        $this->load->view('admin/layout/header');
		$this->load->view('admin/bibit/index', $data);
        $this->load->view('admin/layout/footer');
	}
	public function create() {
		$this->load->view('admin/layout/header');
		$this->load->view('admin/bibit/create');
		$this->load->view('admin/layout/footer');
	}
    function upload_foto($nama_file, $nama_form){
		$config['upload_path']          = './assets/images/bibit/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['file_name']            = $nama_file;
	    $config['overwrite']			= true;
		$config['max_size']             = 1500;
 
		$this->load->library('upload', $config);
        $this->upload->initialize($config);

		if ( ! $this->upload->do_upload($nama_form)){ 
			$error = $this->upload->display_errors();
			echo $error;
			return 'false';
		}else{
			$data = $this->upload->data('file_name');
			// echo $nama_file."<br><pre>";
			// print_r($this->upload->data());
			// echo "<pre>";
			return $data;
		}
	}
	public function store() {
		$post = $this->input->post();

		if ($_FILES['gambar']['size'] != 0) {
			$nama_gambar = "bibit-".time();
			$gambar = $this->upload_foto($nama_gambar, 'gambar');
		} else {
			$gambar = null;
		}

		$hargaExplode = explode(" ", $post['harga'])[1];
		$harga = preg_replace("/[^0-9]/", "", $hargaExplode);

		$data = array(
			'produsen' => $post['produsen'],
			'gambar' => $gambar,
			'deskripsi' => $post['deskripsi'],
			'jumlah' => $post['jumlah'],
			'satuan' => $post['satuan'],
			'waktu_semai' => date('Ymd', strtotime($post['waktu_semai'])),
			'harga' => $harga,
		);

		$this->M_admin->insert_data('bibit', $data);

		redirect(base_url('admin/bibit'));
	}
	public function edit($id) {
		$data['bibit'] = $this->M_admin->select_where("bibit", array('id' => $id))->row_array();

		$this->load->view('admin/layout/header');
		$this->load->view('admin/bibit/edit', $data);
		$this->load->view('admin/layout/footer');
	}
	public function update($id) {
		$post = $this->input->post();
		
		$bibit = $this->M_admin->select_where("bibit", array('id' => $id))->row_array();

        $nama_gambar = "bibit-".time(); 
        if ($_FILES['gambar']['size'] != 0) {
			$gambar = $this->upload_foto($nama_gambar, 'gambar');
			unlink('./assets/images/bibit/'.$bibit['gambar']);
		} else {
			$gambar = $bibit['gambar'];
		}

		$hargaExplode = explode(" ", $post['harga'])[1];
		$harga = preg_replace("/[^0-9]/", "", $hargaExplode);

		$set = array(
			'gambar' => $gambar,
			'produsen' => $post['produsen'],
			'jumlah' => $post['jumlah'],
			'satuan' => $post['satuan'],
			'waktu_semai' => date("Ymd", strtotime($post['waktu_semai'])),
			'harga' => $harga,
			'deskripsi' => $post['deskripsi'] 
		);

		$this->M_admin->update_data('bibit', $set, array('id' => $id));

		redirect(base_url('admin/bibit'));
	}
	public function destroy($id) {
		$bibit = $this->M_admin->select_where('bibit', array('id' => $id))->row_array();

		unlink('./assets/images/bibit/'.$bibit['gambar']);

		$this->M_admin->delete_data('bibit', array('id' => $id));

		redirect(base_url('admin/bibit'));
	}
}
