<?php

class Supplier_model extends CI_model
{
    public function getAllSupplier()
    {
        return $this->db->get('supplier')->result_array();
    }

    public function tambahItemSupplier()
    {
        $data = [
            "no_supplier" => $this->input->post('no_supplier', true),
            "nama_supplier" => $this->input->post('nama_supplier', true),
            "alamat" => $this->input->post('alamat', true),
            "no_hp" => $this->input->post('no_hp', true)
        ];

        $this->db->insert('supplier', $data);
    }
}
