<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasus extends CI_Controller{
    public function index(){
        $this->load->model('m_kasus');
        $this->load->view('v_dashboard');
        
    }

    public function create() {
        $data=[
            'email'     => $this->input->post('email'),
            'nama'      => $this->input->post('nama'),
            'alamat'    => $this->input->post('alamat'),
            'no_hp'     => $this->input->post('no_hp'),
            'keluhan'   => $this->input->post('keluhan'),
        ];
        $this->m_kasus->input_data($data, 'kasus');
        
        redirect('dashboard/index','refresh');
    }
}

?>