<?php
Class Dashboard_2017 extends CI_Controller {
    
    function index(){
      $data['main_view'] = 'Dashboard_list_2017';
        $this->load->view('layout', $data);
    }
}