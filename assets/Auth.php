<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('user_model');
$this->load->helper('url');
$this->load->helper('form');
$this->load->library('form_validation');
}
// melihat halaman login
public function index(){
$this->load->view('form_login');
}

// memeriksa keberadaan akun username
public function login(){
$username = $this->input->post('username', 'true');
$password = $this->input->post('password', 'true');
$temp_account = $this->user_model->check_user_account($username, $password)->row(); 
// check account
$num_account = count($temp_account);
$this->form_validation->set_rules('username', 'Username', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');
if ($this->form_validation->run() == FALSE)
{
$this->session->set_flashdata('notification', 'Peringatan : Username dan Password
tidak cocok');
redirect(site_url('index.php/auth'));
}
else
{
if ($num_account > 0){
// kalau ada set session
$array_items = array(
'id_user' => $temp_account->user_id,
'username' => $temp_account->username,
'hak_akses' => $temp_account->peran_id,
'kab' =>$temp_account->kab,
'nama'=>$temp_account->nama,
'logged_in' => true
);
$this->session->set_userdata($array_items);
redirect(site_url('index.php/dashboard'));
}
else {
// kalau ga ada diredirect lagi ke halaman login
$this->session->set_flashdata('notification', 'Peringatan : Username dan Password
tidak cocok');
redirect(site_url('index.php/auth'));
}
}
}

public function view_success_page(){
$logged_in = $this->session->userdata('logged_in');
if (!$logged_in){
redirect(site_url('auth'));
}
$this->load->view('grafik_list');
}

// keluar dari sistem
public function logout(){
  $this->session->unset_userdata(
            array('username' => '', 'logged_in' => false, 'hak_akses' => '')
        );
$this->session->sess_destroy();
redirect(site_url('index.php/auth'));
}

} 