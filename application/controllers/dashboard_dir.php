<?php

class Dashboard_dir extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_dashboard_dir');
    }

    public function index() {
        $data['graph'] = $this->model_dashboard_dir->graph();
        $data['record'] = $this->model_dashboard_dir->tampilkan_data();
        $data['main_view'] = 'dashboard_list_dir';
        $this->load->view('layout', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */