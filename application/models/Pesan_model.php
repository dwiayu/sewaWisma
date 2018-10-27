<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_model extends CI_Model{

  public function __construct()
  {
    parent:: __construct();
  }

  public function inputPemesanan(){
    $tanggal=$this->input->post('tanggal');
    $tglraw=explode('-',$tanggal);
    $tglfix=$tglraw[2].'-'.$tglraw[1].'-'.$tglraw[0];
    $object= array('jenis_wisatawan'=>$this->input->post('jenis_wisatawan'),);
    $object += array('note'=>$this->input->post('nama'),);
    $object += array('checkin'=>$this->input->post('checkin'),);
    $object += array('checkout'=>$this->input->post('checkout'),);
    $object += array('bukti_tf'=>$this->upload->data('file_name'));
    $this->db->insert('booking',$object);
  }
  public function getNama(){
    $session_data=$this->session->userdata("logged_in");
    $id=$session_data['id'];
    $query=$this->db->query("select * from user where id=$id");
    return $query->result_array(); 
    
  }
}
 ?>