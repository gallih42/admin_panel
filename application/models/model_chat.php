<?php

class Model_chat extends CI_Model {

    /*function tampilkan_data() {

        return $this->db->get('kategori_barang');
    } */

    public function chat() {
        $this->db->select('*');
        $this->db->from('operator');
        $this->db->where('id =',$this->session->userdata('id'));
        return $this->db->get();
    }
    
    public function teman() {
        $this->db->select('*');
        $this->db->from('operator');
        $this->db->where('i !=',$this->session->userdata('id'));
        return $this->db->get();
    }

}
