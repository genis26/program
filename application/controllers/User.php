<?php
defined('BASEPATH') or exit ('NO Direct Script Access Allowed');

class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		// cek login
		if($this->session->userdata('status') != "login"){
			$alert=$this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url('not_found'));
		}
	}

	public function index(){
			$data['title'] = 'Jilbab';
			$data['barang'] = $this->m_hijab->get_data('barang')->result();
		 	$this->load->view('user/header',$data);
    		$this->load->view('user/slider',$data);
    		$this->load->view('user/footer');
	}
	public function logout(){
    $this->session->sess_destroy();
    redirect(base_url().'berada?pesan=logout');
	
	}

	public function menu()
		{
			$data['title'] = 'Jilbab';
			$data['barang'] = $this->m_hijab->get_data('barang')->result();
			$this->load->view('user/header',$data); 	
			$this->load->view('user/menu',$data);
			$this->load->view('user/footer',$data);
		}
		public function kontak()
		{
			$data['title'] = 'Jilbab';
			$data['barang'] = $this->m_hijab->get_data('barang')->result();
			$this->load->view('user/header',$data);			
			$this->load->view('user/kontak',$data);
			$this->load->view('user/footer',$data);
		}
}
 