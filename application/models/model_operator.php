<?php

class model_operator extends CI_Model {

    function login($username, $password) {
        $this->db->select('*');
	$this->db->from('operator');
	$this->db->where('username', $username);
	$this->db->where('password', $password);
	return $this->db->get();
    }

}
