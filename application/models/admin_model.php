 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getDataUserSemua(){
		$query = $this->db->query("SELECT * FROM user");
		return $query->result_array();
	}

	public function getUser($id) {
    	$this->db->where('id_user', $id);
    	$query = $this->db->get('user');
    	return $query->result();
    }

	public function insertUser(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			
			'level' => 'user'
			);
		$this->db->insert('user', $data);
	}
	
	public function updateUser($id){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email')
			);
		$this->db->where('id_user',$id);
		$this->db->update('user', $data);
	}

	public function delete($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}

	public function getDataWismaAll(){
		$query = $this->db->query("SELECT * FROM wisma");
		return $query->result_array();
	}

	public function getWisma($id) {
    	$this->db->where('id_wisma', $id);
    	$query = $this->db->get('wisma');
    	return $query->result();
    }

	public function insertWisma(){
		$data = array(
			'nama_wisma' => $this->input->post('nama_wisma'),
			'fasilitas' => $this->input->post('fasilitas'),
			'kuota' => $this->input->post('kuota'),
			'harga' => $this->input->post('harga'),
			);
		$this->db->insert('wisma', $data);
	}

	public function updateWisma($id)
	{
		$data = array(
			'nama_wisma' => $this->input->post('nama_wisma'),
			'fasilitas' => $this->input->post('fasilitas'),
			'kuota' => $this->input->post('kuota'),
			'harga' => $this->input->post('harga'),
			);
		$this->db->where('id_wisma',$id);
		$this->db->update('wisma', $data);
	}

	public function deleteWisma($id){
		$this->db->where('id_wisma', $id);
		$this->db->delete('wisma');
	}

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */
 ?>