<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->view('register');
	}
	function register_aksi()
	{
		$post = $this->input->post();

		$data = array(
			'nama' => $post['nama'],
			'username' => $post['username'],
			'password' => md5($post['password']),
			'jenis_kelamin' => $post['jenis_kelamin'],
			'no_hp' => $post['no_hp'],
			'alamat' => $post['alamat'],
			'level' => 'u'
		);

		$this->M_admin->insert_data('user', $data);

		redirect(base_url('login'));
	}
}
