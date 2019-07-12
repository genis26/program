<?php
defined('BASEPATH') or exit ('NO Direct Script Access Allowed');


class not_found extends CI_Controller{


public function index(){
		$data['title'] = ' 404';
		
		$this->load->view('template/header_login',$data);
		$this->load->view('berada/404');
		$this->load->view('template/footer_login');
	}


}


