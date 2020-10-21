<?php

class Barang_model extends CI_model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }

    public function insert($data)
    {
        $this->db->insert('barang', $data);
    }
}
