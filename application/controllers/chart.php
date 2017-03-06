<?php
class chart extends CI_Controller {
    
    function index()
    {
        $data['main_view'] = 'chart_list';
        $this->load->view('layout',$data);
    }
    
}