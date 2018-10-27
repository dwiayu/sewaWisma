<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisma extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['wisma_list'] = $this->admin_model->getDataWismaAll();
    	$this->load->view('wisma_home', $data);
	}

	public function create() {
    	$this->load->model('admin_model');
    	$this->form_validation->set_rules('nama_wisma', 'Nama Wisma', 'trim|required');
    	$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'trim|required');
    	$this->form_validation->set_rules('kuota', 'Kuota', 'trim|required');
    	$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
        

    	if ($this->form_validation->run()==FALSE) {
    		$this->load->view('input_wisma');
    	}
            else{
                
                $this->admin_model->insertWisma();
                redirect('Admin/chart/charts','refresh');
            }
    }

    public function update($id) {
    	$this->load->model('admin_model');
    	$this->form_validation->set_rules('nama_wisma', 'Nama Wisma', 'trim|required');
    	$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'trim|required');
    	$this->form_validation->set_rules('kuota', 'Kuota', 'trim|required');
    	$this->form_validation->set_rules('harga', 'Harga', 'trim|required');

    	$data['wisma']=$this->admin_model->getWisma($id);

    	if ($this->form_validation->run()==FALSE) {
    		$this->load->view('edit_wisma', $data);
    	}
            else{
                
                $this->admin_model->updateWisma($id);
                redirect('Admin/chart/charts','refresh');
            }
    	
    }

    public function delete($id){
        $this->load->model('admin_model');
        $this->admin_model->deleteWisma($id);
        redirect('Admin/chart/charts','refresh');
    }


}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
?>