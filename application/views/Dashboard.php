<?php

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_dashboard');
    }

   /* public function index() {
        $data['record'] = $this->model_dashboard->tampilkan_data();
        $this->load->view('dashboard_list', $data);
    }

}*/
 public function index() {
        $status_login = $this->session->userdata('logged_in');
        $username = $this->session->userdata('username');
        if ($status_login == true && $username != null){
            $data['record'] = $this->model_dashboard->rkp_kab();
            $data['rekap'] = $this->model_dashboard->count_sk();
            $data['main_view'] = 'dashboard_list';
            $this->load->view('layout_list', $data);
        }else{
            $this->session->set_flashdata('notification', 'Anda Belum Login');
            redirect(site_url('index.php/auth'));
        }
    }

public function grafik()
            {
                
            }



            
}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */