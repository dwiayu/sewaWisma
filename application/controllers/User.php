<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('depan');

	}
	public function pesan(){
		$this->form_validation->set_rules('tanggal_pesan', 'tanggal_pesan', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
        $this->form_validation->set_rules('gambar', 'gambar', 'trim|required');
        
        
		
        
        if($this->form_validation->run()==FALSE){
            $this->load->view('pesan_view');
		}else{
			$config['upload_path']  = './assets/uploads/';
            $config['allowed_types']    ='gif|jpg|png';
            $config['max_sizes']    = 1000000000;
            $config['max_width']    =10240;
			$config['max_height']   =7860;
            
            $this->load->library('upload',$config);
			if(!$this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('pesan_view',$error);
            }
            else{
            $this->Pendaftaran_model->inputPesan();
            $this->load->view('sukses_pesan',$data);
            // echo "<script> alert('Pedaftaran Berhasil');
            // window.location.href='../../pendaftaran/daftar'; </script>";
        }
    }    
	}
}
