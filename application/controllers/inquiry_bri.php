<?php
class inquiry_bri extends CI_Controller {
    
public function index() {
        $data['main_view'] = 'inquiry_bri_list';
        $this->load->view('layout',$data);
    }
} 
