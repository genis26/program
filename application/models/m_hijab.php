<?php
defined('BASEPATH') or exit('No direct Script access allowed');

class m_hijab extends CI_Model
{
  function edit_data($where,$table){
    return $this->db->get_where($table,$where);
  }

  function get_data($table){
    return $this->db->get($table);
  }

  function insert_data($data,$table){
    $this->db->insert($table,$data);
  }

  function update_data($table,$data,$where){
    $this->db->update($table,$data,$where);
  }

  function delete_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function insert_detail($where)
  {
    $sql ="insert into keranjang (id_keranjang,tanggal) select transaksi.id_keranjang,transaksi.tanggal,
   from transaksi where transaksi.id_user='$where'";
    $this->db->query($sql);
  }



   public function find($where, $table){
  //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id_barang', $where)
              ->limit(1)
              ->get($table);
    if($hasil->num_rows() > 0){
      return $hasil->row();
    } else {
      return array();
    }
  } 

  public function kode_otomatis(){
    $this->db->select('right(id_transaksi,3) as kode', false);
    $this->db->order_by('id_transaksi','desc');
    $this->db->limit(1);
    $query=$this->db->get('transaksi');
    if($query->num_rows()<>0){
      $data=$query->row();
      $kode=intval($data->kode)+1;
    }else{
      $kode=1;
    }

    $kodemax=str_pad($kode,3,"0", STR_PAD_LEFT);
    $kodejadi='PJ'.$kodemax;

    return $kodejadi;
  }
  
}