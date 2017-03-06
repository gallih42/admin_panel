<?php
class layout extends CI_Controller {
    
    function index(){
        //$data['main_view'] = 'sk_list';
        $this->load->view('layout',$data);
    }
}
