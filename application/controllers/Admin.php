 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['user_list'] = $this->admin_model->getDataUserSemua();
    	$this->load->view('login', $data);
	}
    
	 public function create() {
    	$this->load->model('admin_model');
    	$this->form_validation->set_rules('username', 'Username', 'trim|required');
    	$this->form_validation->set_rules('password', 'Password', 'trim|required');
    	$this->form_validation->set_rules('nama', 'Nama User', 'trim|required');
    	$this->form_validation->set_rules('email', 'Email', 'trim|required');
       


    	if ($this->form_validation->run()==FALSE) {
    		$this->load->view('input_user');
    	}else {
                $this->admin_model->insertUser();
                redirect('Admin/widget/widgets','refresh');
            }

    		
    		
    	}
    

    public function update($id) {
    	$this->load->model('admin_model');
    	$this->form_validation->set_rules('username', 'Username', 'trim|required');
    	$this->form_validation->set_rules('password', 'Password', 'trim|required');
    	$this->form_validation->set_rules('nama', 'Nama User', 'trim|required');
    	$this->form_validation->set_rules('email', 'Email', 'trim|required');

    	$data['user']=$this->admin_model->getUser($id);

    	if ($this->form_validation->run()==FALSE) {
    		$this->load->view('edit_user', $data);
    	}else{
                
                $this->admin_model->updateUser($id);
                redirect('Admin/widget/widgets','refresh');
            }
    	}
    

    public function delete($id) {
    	$this->load->model('admin_model');

    	// $data['user_list']=$this->admin_model->getUser($id);
    	$this->admin_model->delete($id);
        redirect('Admin/widget/widgets','refresh');
    	// $this->load->view('widgets',$data);
    }

    public function widget(){
        $this->load->model('admin_model');
        $data['user_list'] = $this->admin_model->getDataUserSemua();
        $this->load->view('widgets',$data);
    }

    public function chart(){
        $this->load->model('admin_model');
        $data['wisma_list'] = $this->admin_model->getDataWismaAll();
        $this->load->view('charts',$data);
    }

    

    public function element(){
        $this->load->view('elements');
    }

    public function home(){
        $this->load->view('index');
    }

    public function panel(){
        $this->load->view('panels');
    }

    public function login(){
        $this->load->view('login');
    }

    public function user(){
        $this->load->model('admin_model');
        $data['user_list'] = $this->admin_model->getDataUserSemua();
        $this->load->view('user_home',$data);
    }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
 ?>