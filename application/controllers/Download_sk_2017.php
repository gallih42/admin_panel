<?php
Class Download_sk_2017 extends CI_Controller {
    
    function index(){
      $data['main_view'] = 'download_sk_list_2017';
        $this->load->view('layout', $data);
    }
}