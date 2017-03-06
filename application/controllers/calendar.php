<?php
class calendar extends CI_Controller 
{
    
    function index()
    {
        $data['main_view'] = 'calendar_list';
        $this->load->view('layout',$data);
    }
}