<?php
Class Kosong extends CI_Controller {
    
    function index(){
      $data['main_view'] = 'kosong_list';
        $this->load->view('layout', $data);
    }
}