<?php

class Model_dashboard_dir extends CI_Model {

    function tampilkan_data() {

        return $this->db->get('kategori_barang');
    }

    public function graph() {
        $data = $this->db->query("SELECT * from datapenduduk");
        return $data->result();
    }

}
