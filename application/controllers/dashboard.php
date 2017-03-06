<?php

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_dashboard');
        $this->load->library('session');
    }

     public function index() {
        $status_login = $this->session->userdata('logged_in');
        $username = $this->session->userdata('username');
        if ($status_login == true && $username != null){
            $data['status'] = $this->session->userdata('logged_in');
            $data['graph'] = $this->model_dashboard->graph();
            $data['main_view'] = 'dashboard_list';
            $this->load->view('layout_list', $data);
        }else{
            $this->session->set_flashdata('notification', 'Anda Belum Login');
            redirect(site_url('index.php/auth'));
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */