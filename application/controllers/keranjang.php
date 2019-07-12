<?php
defined('BASEPATH') or exit ('NO Direct Script Access Allowed');

class Keranjang extends CI_Controller{
	function __construct(){
		parent::__construct();
		// cek login
		if($this->session->userdata('status') != "login"){
			$alert=$this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url('not_found'));
		}
	}

	function index(){
		$data['keranjang'] = $this->db->query("SELECT * FROM 
		transaksi T, User u, barang B, WHERE t.id_barang=b.id_barang,t.gambar=b.gambar t.id_user=u.id_user")->result();
		$data['title'] = 'Hijab';
		$this->load->view('user/header',$data);
		$this->load->view('user/keranjang',$data);
		$this->load->view('user/footer');
	}

	public function lihat_keranjang(){
		

		$data['user'] = $this->m_hijab->edit_data(array('id_user' => $this->session->userdata('id_user')),'user')->result();
		$where = $this->session->userdata('id');
		$data['keranjang'] = $this->db->query("select*from transaksi order by id_transaksi")->result();
		$d=$this->m_hijab->edit_data(array('id_user' => $this->session->userdata('id_user')),'transaksi')->num_rows();
		$data['title'] = 'Hijab';
		$this->load->view('user/header',$data);
		$this->load->view('user/keranjang',$data);
		$this->load->view('user/footer');
		
	} 
 

	public function tambah_barang($id){
  			if($this->session->userdata('status') != "login"){
  			$alert=$this->session->set_flashdata('alert', 'Anda belum Login');
  			redirect(base_url('user'));
  		}else{
  			$d = $this->m_hijab->find($id, 'transaksi');
  			$isi = array(
  				'id_transaksi' => $this->m_hijab->kode_otomatis(),
  				'id_user'=> $this->session->userdata('id_user'),
  				'harga' => '-',
  				'nama_barang' => '-',
  				'gambar' => '-'

  				
  			);

  			
  			}
  			$this->m_hijab->insert_data($isi, 'transaksi');
  			$stok = $d->stok-1;
  			$w=array('id_barang'=>$id);
  			$data = array('stok'=>$stok);
  			$this->m_hijab->update_data('barang', $data,$w);
  			redirect(base_url().'user/menu');
  		}


  function hapus_keranjang($nomor){
		$w = array('id_barang' => $nomor);
		$data = $this->m_hijab->edit_data($w,'transaksi')->row();
		$ww = array('id_barang' => $data->id_barang);
		$data2 = array('batal' => '1');
		$this->m_hijab->update_data('barang',$data2,$ww);
		$this->m_hijab->delete_data($w,'transaksi');
		redirect(base_url().'keranjang/lihat_keranjang');
	}

  	}

