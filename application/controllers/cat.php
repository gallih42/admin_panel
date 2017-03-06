<?php

class Cat extends CI_Controller {

    public $user;

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url', 'form'));
        $this->load->library('user_agent');

        if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] === false) {
            redirect('auth/login');
        }
        $this->user = $this->db->get_where('operator', array('id' => $this->session->userdata['user_id']), 1)->row();
    }

    public function index() {
        $teman = $this->db->where('id !=', $this->user->id)->get('operator');
        $this->load->view('chat_dashboard', array(
            'teman' => $teman
        ));
    }

    public function getChats() {
        header('Content-Type: application/json');
        if ($this->input->is_ajax_request()) {
            // Find friend
            $friend = $this->db->get_where('operator', array('id' => $this->input->post('chatWith')), 1)->row();

            // Get Chats
            $chats = $this->db
                    ->select('chat.*, operator.name')
                    ->from('chat')
                    ->join('operator', 'chat.send_by = operator.id')
                    ->where('(send_by = ' . $this->user->id . ' AND send_to = ' . $friend->id . ')')
                    ->or_where('(send_to = ' . $this->user->id . ' AND send_by = ' . $friend->id . ')')
                    ->order_by('chat.time', 'desc')
                    ->limit(100)
                    ->get()
                    ->result();

            $result = array(
                'name' => $friend->name,
                'chats' => $chats
            );
            echo json_encode($result);
        }
    }

    public function sendMessage() {
        $this->db->insert('chat', array(
            'message' => htmlentities($this->input->post('message', true)),
            'send_to' => $this->input->post('chatWith'),
            'send_by' => $this->user->id
        ));
    }

}
