<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$data['users'] = $this->M_admin->select_where("user", array('level' => 'a'))->result_array();

        $this->load->view('admin/layout/header');
		$this->load->view('admin/admin/index', $data);
        $this->load->view('admin/layout/footer');
	}
	public function create() {
		$this->load->view('admin/layout/header');
		$this->load->view('admin/admin/create');
		$this->load->view('admin/layout/footer');
	}
	public function store() {
		$post = $this->input->post();

		$data = array(
			'nama' => $post['nama'],
			'username' => $post['username'],
			'password' => md5($post['password']),
			'level' => 'a'
		);

		$this->M_admin->insert_data('user', $data);

		redirect(base_url('admin/admin'));
	}
	public function edit($id) {
		$data['user'] = $this->M_admin->select_where("user", array('id' => $id, 'level' => 'a'))->row_array();

		$this->load->view('admin/layout/header');
		$this->load->view('admin/admin/edit', $data);
		$this->load->view('admin/layout/footer');
	}
	public function update($id) {
		$user = $this->M_admin->select_where("user", array('id' => $id, 'level' => 'a'))->row_array();

		$post = $this->input->post();

		$password = $user['password'];
		if($post['password'] != null || $post['password'] != '') {
			$password = md5($post['password']);
		}

		$set = array(
			'nama' => $post['nama'],
			'username' => $post['username'],
			'password' => $password 
		);

		$this->M_admin->update_data('user', $set, array('id' => $id));

		redirect(base_url('admin/admin'));
	}
	public function destroy($id) {
		$this->M_admin->delete_data('user', array('id' => $id));

		redirect(base_url('admin/admin'));
	}
}
