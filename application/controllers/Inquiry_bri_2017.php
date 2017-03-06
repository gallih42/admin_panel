<?php
Class Inquiry_2017 extends CI_Controller {
    
    function index(){
      $data['main_view'] = 'inquiry_list_bri_2017';
        $this->load->view('layout_list', $data);
    }
}