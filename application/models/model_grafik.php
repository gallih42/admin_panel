<?php

class Model_grafik extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    /*function tampilkan_data() {

        return $this->db->get('kategori_barang');
    } */

    public function graph() {
        $data = $this->db->query("SELECT * from datapenduduk");
        return $data->result();
    }

}
