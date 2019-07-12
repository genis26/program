<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {

	public function auth($email,$pass){
		$this->db->where('email', $username);
		$this->db->where('password', md5($pass));
		$query = $this->db->get('user');
		return $query;
	}

	public function getLogin($nama,$username){
		$this->db->where('nama',$nama);
		$this->db->where('email', $username);
		$query = $this->db->get('t_user');
		return $query->result_array();
	}

	public function cekValidasi($username){
		$this->db->where('email', $username);
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 0;
		}

	}

	

}

/* End of file Login_m.php */
/* Location: ./application/models/Login_m.php */