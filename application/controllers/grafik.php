<?php

class Grafik extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_grafik');
    }

    public function index() {
        $data['record'] = $this->model_grafik->graph();
        $data['main_view'] = 'grafik_list';
        $this->load->view('layout', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */