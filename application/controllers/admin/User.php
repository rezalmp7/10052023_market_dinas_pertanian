<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$data['users'] = $this->M_admin->select_where("user", array('level' => 'u'))->result_array();

        $this->load->view('admin/layout/header');
		$this->load->view('admin/user/index', $data);
        $this->load->view('admin/layout/footer');
	}
	public function create() {
		$this->load->view('admin/layout/header');
		$this->load->view('admin/user/create');
		$this->load->view('admin/layout/footer');
	}
	public function store() {
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

		redirect(base_url('admin/user'));
	}
	public function show($id) {
		$data['user'] = $this->M_admin->select_where("user", array('id' => $id, 'level' => 'u'))->row_array();

		$this->load->view('admin/layout/header');
		$this->load->view('admin/user/show', $data);
		$this->load->view('admin/layout/footer');
	}
	public function edit($id) {
		$data['user'] = $this->M_admin->select_where("user", array('id' => $id, 'level' => 'u'))->row_array();

		$this->load->view('admin/layout/header');
		$this->load->view('admin/user/edit', $data);
		$this->load->view('admin/layout/footer');
	}
	public function update($id) {
		$user = $this->M_admin->select_where("user", array('id' => $id, 'level' => 'u'))->row_array();

		$post = $this->input->post();

		$password = $user['password'];
		if($post['password'] != null || $post['password'] != '') {
			$password = md5($post['password']);
		}

		$set = array(
			'nama' => $post['nama'],
			'username' => $post['username'],
			'password' => $password,
			'jenis_kelamin' => $post['jenis_kelamin'],
			'no_hp' => $post['no_hp'],
			'alamat' => $post['alamat'],
		);

		$this->M_admin->update_data('user', $set, array('id' => $id));

		redirect(base_url('admin/user'));
	}
	public function destroy($id) {
		$this->M_admin->delete_data('user', array('id' => $id));

		redirect(base_url('admin/user'));
	}
}
