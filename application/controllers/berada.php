<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berada extends CI_Controller 

	{ 
		public function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
		}

		public function index()
		{
			$data['title'] = 'Jilbab';
			$data['barang'] = $this->m_hijab->get_data('barang')->result();
			$this->load->view('template/header',$data);			
			$this->load->view('template/slider',$data);
			$this->load->view('template/footer',$data);
		}

		public function login(){

			$data['title'] = 'Login';
			$this->load->view('template/header_login',$data);
		 	$this->load->view('berada/login');
			$this->load->view('template/footer_login');
			}

		public function proses_login(){

		
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->form_validation->set_rules('email', 'Email','trim|required|valid_email');
			
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			

			if($this->form_validation->run() != false){
			$where = array('email'=>$email, 'password'=>md5($password));

			$data = $this->m_hijab->edit_data($where,'admin');
			$d = $this->m_hijab->edit_data($where,'admin')->row();
			$cek = $data->num_rows();
			
			if($cek > 0)
			{
				$session = array('id_admin' => $d->id_admin,'nama' => $d->nama,'status' =>'login', 'posisi'=>'admin');
				$this->session->set_userdata($session);
				redirect(base_url().'admin');
			}
			else{
				$dt = $this->m_hijab->edit_data($where, 'user');
				$hasil = $this->m_hijab->edit_data($where, 'user')->row();
				$proses = $dt->num_rows();

				if($proses > 0){
					$session = array('id_user' => $hasil->id_user, 'nama' => $hasil->nama, 'status' => 'login');
						$this->session->set_userdata($session);
							redirect(base_url().'user');
					}else
						{
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
								Password salah.!</div>');
								redirect('berada');
			}
		}
	}
	else{$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					email belum terdaftar.!</div>');
				redirect('berada');
			}
		
		}

		public function menu()
		{
			$data['title'] = 'Jilbab';
			$data['barang'] = $this->m_hijab->get_data('barang')->result();
			$this->load->view('template/header',$data); 	
			$this->load->view('template/menu',$data);
			$this->load->view('template/footer',$data);
		}


		public function registration(){

			$this->form_validation->set_rules('nama','Nama','required|trim');
			$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',
				['is_unique' => 'Email sudah terdaftar']);
			$this->form_validation->set_rules('password','Password','required|trim|min_length[6]|matches[password1]',
				['matches' => 'password tidak sama','min_length' => 'password kurang 6 dijit'	]);
			$this->form_validation->set_rules('password1','Password','required|trim|matches[password]');
		


			if ($this->form_validation->run() == false)
			{			
			$data['title'] = "Register";
			$this->load->view('template/header_login', $data);
			$this->load->view('berada/registration');
			$this->load->view('template/footer_login');
			
			}else{
				$data = [
				'nama' => htmlspecialchars($this->input->post('nama',true)),
				'email' => htmlspecialchars($this->input->post('email',true)),
				'password' => md5($this->input->post('password')),
				'gambar' => 'default.jpg',
				'date_created' => time()
				];
				$this->db->insert('user', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Daftar sudah terisi silahkan login.!</div>');
				redirect('berada');
			}

		}
		

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data['id_barang'] = $this->product_m->productId($id);
	
		$comp = array(
			'sidebar' => $this->load->view('layout/sidebar',$data,true),
			'contents' => $this->load->view('v_product_detail',$data,true),

			);
		$this->load->view('layout/index',$comp);
	}

	public function kontak(){
$data['title'] = 'Jilbab';
			
			$this->load->view('template/header',$data); 
			$this->load->view('template/kontak');
			


	}



	public function logout(){
    $this->session->sess_destroy();
    redirect(base_url().'berada?pesan=logout');
  }
	}