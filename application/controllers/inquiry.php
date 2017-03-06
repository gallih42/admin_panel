<?php
class inquiry extends CI_Controller {
    
public function index() {
        $data['main_view'] = 'inquiry_list';
        $this->load->view('layout',$data);
    }
} 
