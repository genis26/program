<?php
defined('BASEPATH') or exit ('NO Direct Script Access Allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		// cek login
		if($this->session->userdata('status') != "login"){
			$alert=$this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url('not_found'));
		}
	}

	public function index(){ 
	
	$ti['title'] = 'Home';
	$data['transaksi'] = $this->db->query("select * from transaksi order by id_transaksi desc limit 10")->result();
    $data['admin'] = $this->m_hijab->get_data('admin')->num_rows();
    $data['barang'] = $this->db->query("select * from barang order by id_barang desc limit 10")->result();
    if($this->session->userdata('posisi')!='admin'){
      redirect(base_url('user'));
    }else{
    $this->load->view('admin/header',$ti);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/topbar',$data);
    $this->load->view('admin/home',$data);
    $this->load->view('admin/footer');
	}
}
    public function data_user(){
    $data['title'] = 'Data User';
    $data['user'] = $this->m_hijab->get_data('user')->result();
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/topbar',$data);
    $this->load->view('admin/datauser',$data);
    $this->load->view('admin/footer');
	

}

public function data_barang(){

    $data['title'] = 'Data Barang';
    $data['barang'] = $this->m_hijab->get_data('barang')->result();
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/topbar',$data);
    $this->load->view('admin/databarang',$data);
    $this->load->view('admin/footer');
}
public function tambah_barang(){

    $data['title'] = 'Data Barang';
    $data['barang'] = $this->m_hijab->get_data('barang')->result();
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/topbar',$data);
    $this->load->view('admin/tambahbarang',$data);
    $this->load->view('admin/footer');



}
public function tambah_barang_act(){

      $date_added = date('Y-m-d');
      $nama_barang = $this->input->post('nama_barang');
      $stok = $this->input->post('stok');
      $harga = $this->input->post('harga');
      $this->form_validation->set_rules('nama_barang','Nama barang','required');
      $this->form_validation->set_rules('stok','Stok','required');
      $this->form_validation->set_rules('harga','Harga','required');
      if($this->form_validation->run() != false){
        //configurasi upload Gambar
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['file_name'] = 'gambar'.time();

        $this->load->library('upload',$config);

        if($this->upload->do_upload('gambar')){
          $image = $this->upload->data();

          $data = array(
            'id_barang' => $id_barang,
            'nama_barang' => $nama_barang,
            'stok' => $stok,
            'harga' => $harga,
            'gambar' => $image['file_name']
          );
          $this->m_hijab->insert_data($data,'barang');
          redirect(base_url().'admin/data_barang');
        }else{
         $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/tambahbarang');
        $this->load->view('admin/footer');

        }
      }
    
}
public function transaksi(){
    $ti['title'] = 'Transaksi';
    $data['transaksi'] = $this->m_hijab->get_data('transaksi')->result();
    $data['admin'] = $this->m_hijab->get_data('admin')->num_rows();
    $data['barang'] = $this->db->query("select * from barang order by id_barang desc limit 10")->result();
    $this->load->view('admin/header',$ti);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/topbar');
    $this->load->view('admin/transaksi',$data);
    $this->load->view('admin/footer');

}

public function hapus_user($id){
        $where = array('id_user' => $id);
        $this->m_hijab->delete_data($where,'user');
        redirect(base_url().'admin/data_user');
      }

public function hapus_barang($id){
        $where = array('id_barang' => $id);
        $this->m_hijab->delete_data($where,'barang');
        redirect(base_url().'admin/data_barang');
      }

public function logout(){
    $this->session->sess_destroy();
    redirect(base_url().'berada?pesan=logout');

}
}

 