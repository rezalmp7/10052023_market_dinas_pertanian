<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

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
        $this->load->library('cart');
	}
	public function index()
	{
        // echo "<pre>";
        // print_r(count($this->cart->contents()));
        
        $keranjang_save = [];
        if($this->session->userdata("id") != null) {
            if(count($this->cart->contents()) > 0) {
                foreach ($this->cart->contents() as $key => $value) {
                    $keranjang = $this->M_admin->select_where('keranjang', array('id_produk' => $value['id'], 'id_user' => $this->session->userdata("id")))->row_array();
                    if($keranjang) {
                        $data_update = array(
                            'qty' => $keranjang['qty']+$value['qty']
                        );

                        $this->M_admin->update_data('keranjang', $data_update, array('id', $keranjang['id']));
                    } else {
                        $data = array(
                            'type' => $value['name'],
                            'id_produk' => $value['id'],
                            'id_user' => $this->session->userdata("id"),
                            'qty' => $value['qty']
                        );

                        $this->M_admin->insert_data('keranjang', $data);
                    }
                    
                    $data = array(
                        'rowid' => $value['rowid'],
                        'qty'   => 0
                    );

                    $this->cart->update($data);
                }
            }
            $keranjang_db = $this->M_admin->select_where('keranjang', array('id_user' => $this->session->userdata('id')))->result_array();

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

                $keranjang_save[] = array(
                    'id' => $value['id'],
                    'produk' => $produk,
                    'qty' => $value['qty'], 
                );
            }

        } else {
            if(count($this->cart->contents()) > 0) {
                foreach ($this->cart->contents() as $key => $value) {
                    // print_r($value);
                    if($value['name'] == 'bibit') {
                        $produk_db = $this->M_admin->select_where('bibit', array('id' => $value['id']))->row_array();
                        $produk = array(
                            'id' => $produk_db['id'],
                            'nama' => 'Bibit '.$produk_db['produsen'],
                            'harga' => $produk_db['harga']
                        );
                    } else {
                        $produk_db = $this->M_admin->select_where('pupuk', array('id' => $value['id']))->row_array();
                        $produk = array(
                            'id' => $produk_db['id'],
                            'nama' => $produk_db['nama'],
                            'harga' => $produk_db['harga']
                        );
                    }

                    $keranjang_save[] = array(
                        'id' => $value['rowid'],
                        'produk' => $produk,
                        'qty' => $value['qty'], 
                    );

                }
            }
            // print_r($keranjang_save);
        }

        $data['keranjang'] = $keranjang_save;

		$this->load->view('layout/header');
		$this->load->view('keranjang', $data);
		$this->load->view('layout/footer');
	}
    public function add() {
        $get = $this->input->get();

        if($this->session->userdata("id") != null) {
            $data = array(
                'type' => $get['type'],
                'id_produk' => $get['id'],
                'id_user' => $this->session->userdata("id"),
                'qty' => 1
            );

            $this->M_admin->insert_data('keranjang', $data);
        } else {
            $data = array(
                'id'      => $get['id'],
                'qty'     => 1,
                'price'   => 100,
                'name'    => $get['type'],
                'options' => array(),
            );

            $this->cart->insert($data);
        }
        redirect(base_url('keranjang'));
    }
    public function updateQty() {
        $get = $this->input->get();

        if($this->session->userdata("id") != null) {
            $this->M_admin->update_data('keranjang', array('qty' => $get['qty']), array('id' => $get["id"]));
        } else {
            $data = array(
                'rowid' => $get['id'],
                'qty'   => $get['qty']
            );

            $this->cart->update($data);
        }

        $keranjang = $this->M_admin->select_where('keranjang', array('id' => $get["id"]))->row_array();
    }
}
