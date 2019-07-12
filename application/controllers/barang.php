<?php
defined('BASEPATH') or exit ('NO Direct Script Access Allowed');

class Barang extends CI_Controller{
	function index()
	{
	
			$data['title'] = 'Jilbab';
		 	$this->load->view('template/header',$data);
    		
    		$this->load->view('template/menu',$data);
    		$this->load->view('template/footer');
	}
	public function detail_barang()
	{
		
		$id = $this->uri->segment(3);
		$barang = $this->db->query("select * from barang order by id_barang='$id' ")->result();
		
	
      foreach ($barang as $fields) {
    
			$data['nama_barang'] = $fields->nama_barang;
			$data['harga'] = $fields->harga;
			$data['stok'] = $fields->stok;
			$data['gambar'] = $fields->gambar;
			$data['id'] = $id;
		}
			$data['title'] = 'Jilbab';
		 	$this->load->view('template/header',$data);
    		$this->load->view('template/detail');
    		$this->load->view('template/footer');
	}
  }
