<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login');
	}
	function login_aksi()
	{
		$username = $this->input->post("username");
		$pass = $this->input->post("password");
		if($username=="" || $pass=="")
		{
			$this->session->set_flashdata('error', "Data harus diisi");
			redirect(base_url("login"));
		}
		else
		{
			$md_pass = md5($pass);
			$where = array(
				'username' => $username,
				'password' => $md_pass,
			);
			$cek_login = $this->M_admin->select_where('user', $where)->num_rows();
			echo $cek_login;
			if ($cek_login != null) {
				$data_login = $this->M_admin->select_where('user', $where)->result_array();
				foreach($data_login as $a)
				{
					$id_user = $a['id'];
					$nama = $a['nama'];
					$username = $a['username'];
					$level = $a['level'];
				}
				if($level == "a") {
					$data_session = array(
						'status' => "login_admin",
						'nama' => $nama,
						'id' => $id_user,
						'level' => 'admin',
						'username' => $username
					);
					$this->session->set_userdata($data_session);
					
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Login Berhasil!</div>');
					redirect(base_url('admin/dashboard'));
				} else {
					$data_session = array(
						'status' => "login_user",
						'nama' => $nama,
						'id' => $id_user,
						'level' => 'user',
						'username' => $username
					);
					$this->session->set_userdata($data_session);
					
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Login Berhasil!</div>');
					redirect(base_url());
				}
			} else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password salah!</div>');
				redirect(base_url("login"));
			}
		}
	}
	function logout() 
	{
		$this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Logout Success!</div>');
		redirect(base_url('login'));
	}
}
